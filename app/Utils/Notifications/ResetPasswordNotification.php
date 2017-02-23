<?php

namespace Agilin\Utils\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordNotification extends Notification
{
    /**
     * The password reset token.
     *
     * @var string
     */
    public $token;

    /**
     * Create a notification instance.
     *
     * @param  string  $token
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new CustomMailMessage)
            ->greeting('Hola')
            ->subject('Cambio de password')
            ->line('Estas recibiendo este email, porque hemos recibido una solicitud de cambio de password para tu cuenta.')
            ->action('Reinicia tu password', env('APP_FRONT').'/password/reset/'.$this->token)
            ->line('Si no has realizado esta solicitud, por favor haga caso omiso de este mensaje.');
    }
}
