<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ApplyClass extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$telephone,$course,$msg)
    {
        $this->name=$name;
        $this->email=$email;
        $this->telephone=$telephone;
        $this->course=$course;
        $this->msg=$msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('applyToEmail')->with([
            'name' => $this->name,
            'email' => $this->email,
            'telephone'=> $this->telephone,
            'course'=> $this->course,
            'msg' =>$this->msg,
        ])->subject('Apply Now');
    }
}
