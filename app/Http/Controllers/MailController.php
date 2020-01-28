<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Mail\SendMail;

class MailController extends Controller
{
    public function index(){
        return view('mail');
    }

    public function send(){
        Mail::send(new SendMail());
    }
}
