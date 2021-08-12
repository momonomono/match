<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReminderMail;

class ReminderController extends Controller
{
    public function top(){

        return view('reminder');
    }

    public function post(Request $request){

        $email = $request -> input('email');
        Mail::to($email)->send(new ReminderMail());

        return view('reminder');
    }
}
