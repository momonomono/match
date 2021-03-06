<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValiSignupRequest;
use App\User;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{

    // ユーザー登録画面
    public function signup(){
        
        return view('signup');
    }

    public function postSignup(ValiSignupRequest $request){
        $email = $request -> input('email');
        $checkExistEmail = User::where('email',$email)->get();
        
        if(!is_null($checkExistEmail)){

            return redirect('signup')->with('showMessage',true);
        }

        User::create([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect("/mypage");
    }
}
