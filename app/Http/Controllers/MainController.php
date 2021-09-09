<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ValiJobPostRequest;
use App\Job;

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

        $job = $request -> only('title','attr','detail');

        if($job['attr'] == "0"){
            $job['min_price'] = $request -> input('min_price');
            $job['max_price'] = $request -> input('max_price');
            var_dump($job);
        }

        Job::create($job);

        
        return redirect('jobs');
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
