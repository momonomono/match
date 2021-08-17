<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValiHashKeyRequest;
use App\Http\Requests\ValiReminderRequest;
use App\Http\Requests\ValiResetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\ReminderMail;
use App\User;
use App\PasswordReset;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class ReminderController extends Controller
{
    // パスワード再設定用メール送信ページを表示
    public function top(){

        return view('reminder');
    }

    // パスワード再設定用メール送信処理
    public function post(ValiReminderRequest $request){

        $email = $request -> input('email');
        $user = User::with('userDetails')->where('email',$email)->first();

        // 入力されたメールからアカウントあるのか判断
        if(!is_null($user)){

            // ハッシュキーの削除
            $this->deleteHashKey($email);

            // ランダムでハッシュキーを作成
            $hashKey = Str::random(40);


            // password_resetsカラムにDB保存
            PasswordReset::create([
                'email' => $user->email,
                'token' => $hashKey,
                'created_at' => Carbon::now()
            ]);

            // メールに表示する用の変数を作成
            $content = [
                'name' => $user -> userDetails -> name,
                'email' => $user -> email,
                'hashKey' => $hashKey
            ];

            // メール送信
            Mail::to($email)->send(new ReminderMail($content));
        }

        return redirect('/reminder/hashKey');
    }








    // ハッシュキー入力
    public function hashkey(){

        return view('password_reset');
    }

    // ハッシュキー送信
    public function postHashKey(ValiHashKeyRequest $request){

        $email = $request -> input('email');
        $hashKey = $request -> input('token');
        $sendHashKey = PasswordReset::where('email',$email)->first();

        if(!is_null($sendHashKey)){

            $data = [
                'email' => $email,
                'hashKey' => $hashKey
            ];

            Session::put('data',$data);
            return redirect()->route('reminder.change');
        }
        
        return redirect()->route('test');
    }








    // パスワード変更画面
    public function change(){

        $data = Session::get('data');

        if(is_null($data)){

            return redirect()->route('login');
        }

        return view('password_change');
    }

    // パスワード再設定
    public function postChange(ValiResetPassword $request){
        
        $password = $request ->input('password');
        $email = Session::get('data.email');

        User::where('email',$email)->update([
            'password' => Hash::make($password),
            'updated_at' => Carbon::now()
        ]);

        Session::forget('data');

        return redirect()->route('login');
    }






    public function searchPasswordResets($email){

        return PasswordReset::where('email',$email)->first();
    }

    public function deleteHashKey($email){

        PasswordReset::where('email',$email)->delete();
    }
}
