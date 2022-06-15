<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller {

    public function login() {
    
        if(session('id') != null) {
            return redirect("home");
        }
        else {
            $error = Session::get('error');
            Session::forget('error');
            return view('login')
            ->with('csrf_token', csrf_token())
            ->with('error', $error);
        }
     }

     public function checkLogin() {
         $user = User::where('username', request('username'))->first();
         if(!$user || !password_verify(request('password'), $user->password)) {
             Session::put('error', 'wrong');
             return redirect('login');
         }
         else {
            Session::put('id', $user->id);
             return redirect('home');
         }
     }

     public function logout() {
         Session::flush();
         return redirect('login');
     }

}
?>