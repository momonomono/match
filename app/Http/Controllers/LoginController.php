<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValiLoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // ログイン画面
    public function login(){

        return view('login');
    }

    public function postLogin(ValiLoginRequest $request){

        $credentials = $request -> only('email','password');
        $remember = $request -> only('remember_token');

        if(Auth::attempt($credentials,$remember)){
            
            return redirect('/mypage');
        }
        
        return redirect('login')->with('showMessage',true);
    }
}
