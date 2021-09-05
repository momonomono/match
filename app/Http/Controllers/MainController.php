<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ValiJobPostRequest;

class MainController extends Controller
{
    public function mypage(){

        return view('mypage');
    }

    public function jobs(){

        return view('jobs');
    }


    // 案件投稿
    public function jobPost(){

        return view('job_post');
    }

    public function postJobPost(ValiJobPostRequest $request){

        
        return view('job_post');
    }

    

    public function messagePublic(){

        return view('message_public');
    }

    public function messagePrivate(){

        return view('message_private');
    }

    // ログアウト
    public function logout(){
        
        Auth::logout();
        return redirect('/login');
    }
}
