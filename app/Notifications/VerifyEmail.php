<?php



namespace App\Notifications;



use App\User;

use Illuminate\Bus\Queueable;

use Illuminate\Notifications\Notification;

use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Notifications\Messages\MailMessage;


use Notifiable;

class VerifyEmail extends Notification implements ShouldQueue

{

    use Queueable;



    public $User;

    /**

     * Create a new notification instance.

     *

     * @return void

     */

    public function __construct(User $user)

    {

        $this->User = $user;

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

                    ->subject('APPNA - OK verification')

                    ->line('Please verify your account email to continue.')

                    ->action('Verify Account', route('verify', $this->User->token))

                    ->line('Thank you for registering with APPNA - OK!');

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

