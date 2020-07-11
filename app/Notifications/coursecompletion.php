<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class coursecompletion extends Notification
{
    use Queueable;
    protected $courseCode;
    protected $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($courseCode,$user)
    {
        $this->coursecode=$courseCode;
        $this->user=$user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
   public function toArray($notifiable)
    {
        return [
          
           'data'=>'Your friend '.$this->user.' completed the course '.$this->coursecode,
           
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    
}
