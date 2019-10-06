<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class TicketPurchase extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
     protected $arr;
    public function __construct(array $arr)
    {
        $this->arr = $arr;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting('Hello '.$this->arr['order']->name)
                    ->line('Your purchase of '.$this->arr['order']->item . ' is successful')
                    ->line('$249 Emerald Banquet Donor: '.$this->arr['order']->emerald .' x $249=$'.$this->arr['order']->emerald*249 )
                    ->line('$150 Turquoise Banquet Donor: '.$this->arr['order']->turquoise .' x $150=$'.$this->arr['order']->turquoise*150 )
                    ->line('$100 Banquet Ticket: '.$this->arr['order']->banquet .' x $100=$'.$this->arr['order']->banquet*100 )
                    ->line('$15 Child Care Ticket: '.$this->arr['order']->child .' x $15=$'.$this->arr['order']->child*15 )
                    ->line('Subtotal: $'.$this->arr['order']->amount )
                    // ->action('Notification Action', url('/'))
                    ->line('Thank you for using our service!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
