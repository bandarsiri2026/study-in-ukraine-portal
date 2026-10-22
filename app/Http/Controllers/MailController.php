<?php

namespace App\Http\Controllers;
use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function send_form(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $telephone = $request->telephone;
        $course = $request->course;
        $msg = $request->msg;
        Mail::to('admin@example.com')->send(new MailClass($name, $email, $telephone,$course, $msg));
        session()->flash('success' , 'Спасибо вам письмо отправлено');
        return redirect()->back();

    }
}
