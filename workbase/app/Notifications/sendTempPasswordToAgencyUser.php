<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class sendTempPasswordToAgencyUser extends Notification
{
    use Queueable;
    private $userName;
    private $password;

    /**
     * Create a new notification instance.
     *
     * @param $userName
     * @param $password
     * @internal param $passWord
     */
    public function __construct($userName,$password)
    {
        $this->userName = $userName;
        $this->password = $password;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Welcome!')
            ->line('Your account has been successfully created')
            ->line('UserName:' . ' ' . $this->userName)
            ->line('Password:' . ' ' . $this->password)
            ->line('Please Contact Your Administrator to get Access to this application before login. ')
            ->line('you can login with the username which we have send you')
            ->action('Login', url('/'))
            ->line('Thank you!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
