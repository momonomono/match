<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PasswordReset;
use App\Http\Requests\ValiHashKeyRequest;
use Illuminate\Support\Facades\Session;


class TestController extends Controller
{
    public function top(){

        return view('mail.reminder');
    }

    // ハッシュキー送信
    public function post(ValiHashKeyRequest $request){

        $email = $request -> input('email');
        $hashKey = $request -> input('hashKey');
        $sendHashKey = PasswordReset::where('email',$email)->first();

        if(!is_null($sendHashKey)){

            $data = [
                'email' => $email,
                'hashKey' => $hashKey
            ];
            Session::put('data',$data);
            return redirect()->route('test.password');
        }
        
        return redirect()->route('test');
    }

    public function password(){

        $data = Session::get('data');


        return view('test.test_password',[
            'data' => $data
        ]);
    }
}
