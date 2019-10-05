<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventPurchased extends Mailable
{
    use Queueable, SerializesModels;

    private $amount;
    private $quantity;
    private $email;
    private $phone;
    private $name;
    private $kidsAmount;
    private $kids;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($amount, $quantity, $kidsAmount, $kids, $name, $email, $phone)
    {
        $this->amount = $amount;
        $this->quantity = $quantity;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->kidsAmount = $kidsAmount;
        $this->kids = $kids;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('appnaoksminfosoft@gmail.com')
                    ->subject('APPNA-OK Event Ticket Confirmation.')
                    ->view('mail.event')
                    ->with([
                        'kids' => $this->kids,
                        'kidsAmount' => $this->kidsAmount,
                        'name' => $this->name,
                        'email' =>$this->email,
                        'phone' =>$this->phone,
                        'quantity' => $this->quantity,
                        'event' => 'Eid Dinner.',
                        'date' => now('EST'),
                        'amount' => $this->amount
                   ]);
    }
}
