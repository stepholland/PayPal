<?php



namespace App\Mail;



use App\User;

use Illuminate\Bus\Queueable;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

use Illuminate\Contracts\Queue\ShouldQueue;



class MembershipPurchased extends Mailable

{

    use Queueable, SerializesModels;



    public $user;

    private $amount;

    /**

     * Create a new message instance.

     *

     * @return void

     */

    public function __construct(User $user)

    {

        $this->user = $user;
    }



    /**

     * Build the message.

     *

     * @return $this

     */

    public function build()

    {
        if ($this->user->membership === 'Annual') 
            $this->amount = 26.06;
        else   
            $this->amount = 257.78;

        return $this->from('appnaoksminfosoft@gmail.com')

                    ->subject('APPNA-OK Membership Confirmation.')

                    ->view('mail.email')

                    ->with([

                        'name' => $this->user->fname . ' ' . $this->user->lname,

                        'email' =>$this->user->email,

                        'memtype' =>$this->user->membership,

                        'date' => now('EST'),

                        'amount' => $this->amount

                   ])

                   ;

                   

    }

}

