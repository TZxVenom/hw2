<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller {

    public function home() 
    {
        if(!Session::get('id'))
        {
            return redirect('login');
        }
        $user = User::find(Session::get('id'));
        return view('home')->with('username', $user->username);
    }

    public function create()
    {
        if(!Session::get('id'))
        {
            return redirect('login');
        }

     $images = [
        "1" => "http://localhost/hw2/public/images/home_1.jpg",
        "2" => "http://localhost/hw2/public/images/home_2.jpg",
        "3" =>  "http://localhost/hw2/public/images/home_3.jpg",
        "4" =>  "http://localhost/hw2/public/images/home_4.jpg",
        "9" =>  "http://localhost/hw2/public/images/home_5.jpg",
        "10" =>  "http://localhost/hw2/public/images/home_6.jpg",
        "11" =>  "http://localhost/hw2/public/images/home_7.jpg",
        "12" =>  "http://localhost/hw2/public/images/home_8.jpg",
     ];
     return ($images);
    }
}
?>