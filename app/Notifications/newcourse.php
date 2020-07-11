<?php

namespace App\Notifications;


use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;




class newcourse extends Notification
{
    use Queueable;
    protected $courseName;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($courseName)
    {
        $this->coursename=$courseName;
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
    public function toDatabase($notifiable)
    {
        return [
          
           'data'=>'course '.$this->coursename.' is added',
           
        ];
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
            //'Course_code'=>$this->course->course_code,
            //'Course_name'=>$this->course->course_name
        ];
    }
}
