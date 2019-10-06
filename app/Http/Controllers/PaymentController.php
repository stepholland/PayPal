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
use App\Notifications\TicketSell;
use App\Notifications\TicketPurchase;
use Illuminate\Notifications\Notifiable;

class PaymentController extends HomeController
{use Notifiable;
    const EMAIL1 = 'snayak04.96@gmail.com';
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
    private function amountAfterFees($amount){
        $amount += .30;
        return $amount / (1 - .029);
    }

    public function eventConfirmation(Request $request){
        $EMERALD_PRICE = 249;
        $TURQUOISE_PRICE = 150;
        $BANQUET_PRICE = 100;
        $CHILD_PRICE = 15;
        $EVENT_TITLE = "Annual CME Event";
        $emerald=$request->get('emerald');
        $turquoise=$request->get('turquoise');
        $banquet=$request->get('banquet');
        $child=$request->get('child');
        $total = $EMERALD_PRICE*$emerald + $TURQUOISE_PRICE*$turquoise + $BANQUET_PRICE*$banquet + $CHILD_PRICE*$child;
        $amount = $total;
        return view('payment.eventConfirm', compact('EVENT_TITLE', 'amount', 'request'));
    }

    public function paymentConfirmation(Request $request){
        if(!auth()->user()->membership){
            $amount = $request->input('amount');
            if($amount==26.06){
                $title = 'Annual';
            }
            else if($amount==257.78){
                $title = 'Lifetime';
            }
            return view('payment.confirm',  compact('title', 'amount'));
        }
    }

    public function proceed(Request $request){
      $order=Order::create([
        'item'=>$request->item,
        'amount'=>$request->amount,
        'emerald'=>$request->emerald,
        'turquoise'=>$request->turquoise,
        'banquet'=>$request->banquet,
        'child'=>$request->child,
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
        $redirect_urls->setReturnUrl(route('status')) /** Specify return URL **/
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


    public function storeToTemp($id, $amount,$email, $title){
        DB::table('temp')->insertGetId ([
            'amount'=>$amount,
            'title'=>$title,
            'email'=>$email,
            'payID'=>$id
        ]);
    }

    public function eventProcess(Request $req){

    }

    // public function getPaymentStatus()
    // {
    //     /** Get the payment ID before session clear **/
    //     $payment_id = Session::get('paypal_payment_id');
    //     /** clear the session payment ID **/
    //     Session::forget('paypal_payment_id');
    //     if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
    //         \Session::put('error','Payment failed');
    //         return redirect()->route('payment')->with('error', 'Payment failed!');
    //     }
    //     $payment = Payment::get($payment_id, $this->_api_context);
    //     /** PaymentExecution object includes information necessary **/
    //     /** to execute a PayPal account payment. **/
    //     /** The payer_id is added to the request query parameters **/
    //     /** when the user is redirected from paypal back to your site **/
    //     $execution = new PaymentExecution();
    //     $execution->setPayerId(Input::get('PayerID'));
    //     /**Execute the payment **/
    //     $result = $payment->execute($execution, $this->_api_context);
    //     /** dd($result);exit; /** DEBUG RESULT, remove it later **/
    //     if ($result->getState() == 'approved') {
    //         $this->received();
    //         /** it's all right **/
    //         /** Here Write your database logic like that insert record or value in database if you want **/
    //         \Session::put('success','Payment success');
    //         return  Redirect::route('home');
    //     }
    //     DB::table('temp')->where('email', auth()->user()->email)->delete();
    //    // $this->notReceived(Input::get('PayerID'));
    //     \Session::put('error','Payment failed');
    //     return Redirect::route('home');
    // }

    public function getPaymentStatus()
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

        //sending notification to admin and user
        $arr=['order'=>$order];
        Notification::route('mail', 'appnaok2018@gmail.com')
            ->notify(new TicketSell($arr));
        Notification::route('mail', 'appnaok2018@gmail.com')
            ->notify(new TicketPurchase($arr));

        return redirect(url('/events'))->with('message','Your payment for ticket is successfull');
      }else{
        return redirect(url('/events'))->with('errorMessage','Something is wrong, please try again or contact with the admin.');
      }
    }


    public function notReceived($payID){
        $user = User::where('transaction', $payID)->firstOrFail();
        $user->transaction = NULL;
        $user->membership = NULL;
        $user->membershipend = NULL;
        $uesr->save();
    }

    public function received(){
        try{
            //retrieve value from temp table
            $customer = DB::table('temp')->where('email', auth()->user()->email)->get();
            $user = User::where('email', auth()->user()->email)->firstOrFail(); //get user


            if(strcmp('Annual', $customer[0]->title)==0){
                $now = Carbon::now();
                $user->membershipend = $now->addYear();
            }
            $user->membership = $customer[0]->title;
            $user->save();
            DB::table('temp')->where('email', auth()->user()->email)->delete();
            $sendEmail = new MembershipPurchased($user);// create mail.
            Mail::to($user->email)
            ->bcc(self::EMAIL1)
            ->send($sendEmail);
            Mail::to(self::EMAIL1)
            ->send($sendEmail);
        }
        catch(Exception $e){

        }
    }

}
