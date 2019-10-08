<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\MembershipPurchased;
use App\Mail\EventPurchased;
use Carbon\Carbon;
use App\User;
use App\Order;
use App\Ticket;
use Illuminate\Support\Facades\Auth;
/** All Paypal Details class **/

use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Redirect;
use Notification;
/** All Paypal Details class **/
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use Illuminate\Support\Facades\Input;
use App\Mail\TicketSell;
use App\Mail\TicketPurchase;



class EventPaymentController extends HomeController
{
    private $amount, $title;
    private $_api_context;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        /** setup PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }


    public function eventConfirmation(Request $request){
        $EVENT_TITLE="new Event";
        $allPrices=array();
        foreach($request->tickets as $ticket=>$units){
            $thisTicket=Ticket::where('id',$ticket)->first()->price;
            if($units!=0){
            array_push($allPrices,$thisTicket*$units);
            }
        }
        $amount = array_sum($allPrices);
        if($amount==0){
          return back()->with('errorMessage','choose at least one ticket');
        }
        return view('payment.eventConfirm', compact('EVENT_TITLE', 'amount', 'request'));
    }

    public function eventProceed(Request $request){
      $order=Order::create([
        'item'=>$request->item,
        'amount'=>$request->amount,
        'tickets'=>json_encode($request->tickets),
        'name'=>$request->name,
        'phone'=>$request->phone,
        'email'=>$request->email
      ]);
      \Session::put('orderID',$order->id);

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $item_1 = new Item();
        $item_1->setName($request->get('item')) /** item name **/
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($request->get('amount')); /** unit price **/
        $item_list = new ItemList();
        $item_list->setItems(array($item_1));
        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($request->get('amount'));
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription($request->get('item'));
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(route('events.status')) /** Specify return URL **/
            ->setCancelUrl(route('events'));
        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
            /** dd($payment->create($this->_api_context));exit; **/
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('error','Connection timeout');
                return Redirect::route('events');
                /** echo "Exception: " . $ex->getMessage() . PHP_EOL; **/
                /** $err_data = json_decode($ex->getData(), true); **/
                /** exit; **/
            } else {
                \Session::put('error','Some error occur, sorry for inconvenient');
                return Redirect::route('events');
                /** die('Some error occur, sorry for inconvenient'); **/
            }
        }
        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());
        if(isset($redirect_url)) {
            /** redirect to paypal **/
            // $this->storeToTemp($payment->getId(), $request->get('amount'),$request->get('email'), $request->get('item'));
            //$this->received($request->get('amount'), $request->get('item'),  $payment->getId());
            return Redirect::away($redirect_url);
        }
        \Session::put('error','Unknown error occurred');
        return Redirect::route('events');
    }




    public function getEventPaymentStatus()
    {
      $order=Order::where('id',Session::get('orderID'))->firstOrFail();
      /** Get the payment ID before session clear **/
      $payment_id = Session::get('paypal_payment_id');
      $order->update([
        'paypal'=>$payment_id,
      ]);
      /** clear the session payment ID **/
      Session::forget('paypal_payment_id');
      if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
        \Session::put('error', 'Payment failed');
        return redirect(url('/events'))->with('errorMessage','Something is wrong, please try again or contact with the admin.');

      }
      $payment = Payment::get($payment_id, $this->_api_context);
      $execution = new PaymentExecution();
      $execution->setPayerId(Input::get('PayerID'));
      /**Execute the payment **/
      $result = $payment->execute($execution, $this->_api_context);
      if ($result->getState() == 'approved') {
          \Session::put('success', 'Payment success');

        //updating our order table on successfull checkout
          $order->update([
            'status'=>'payment succeeded',
          ]);
          foreach(json_decode($order->tickets) as $ticket=>$units){
            $thisTicket=Ticket::where('id',$ticket)->first();
            $thisTicket->reserves=$thisTicket->reserves-$units;
            $thisTicket->save();
          }


        $admin_email='stepholland99@gmail.com';
        Mail::to($admin_email)->send(new TicketSell($order));
        Mail::to($order->email)->send(new TicketPurchase($order));
        return redirect(url('/events'))->with('message','Your payment for ticket is successfull');
      }else{
        return redirect(url('/events'))->with('errorMessage','Something is wrong, please try again or contact with the admin.');
      }
    }



}
