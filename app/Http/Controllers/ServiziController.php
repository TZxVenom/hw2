<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ServiziController extends Controller {

    public function servizi() 
    {
        if(!Session::get('id'))
        {
            return redirect('login');
        }

        return view('servizi');
    }

    public function create()
    {
        if(!Session::get('id'))
        {
            return redirect('login');
        }

     $images = [
        "5" => "http://localhost/hw2/public/images/servizi_1.jpg",
        "6" => "http://localhost/hw2/public/images/servizi_2.jpg",
        "7" =>  "http://localhost/hw2/public/images/home_4.jpg",
        "8" =>  "http://localhost/hw2/public/images/servizi_3.jpg",
     ];
     return ($images);
    }

    public function search_drink ($drink) {

        if(!Session::get('id'))
        {
            return redirect('login');
        }
        $a = $drink;
        $curl = curl_init();
        $url = "https://www.thecocktaildb.com/api/json/v1/1/filter.php?a=" .$a;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        echo($result);
        curl_close($curl);
    }

    public function search_meal ($meal) {
    
        if(!Session::get('id'))
        {
            return redirect('login');
        }

        $s = $meal;
        $curl = curl_init();
        $url = "https://www.themealdb.com/api/json/v1/1/search.php?s=" .$s;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        echo($result);
        curl_close($curl);
    }

    public function insert () {

        if(!Session::get('id'))
        {
            return redirect('login');
        }

        if((request('liked_drink_name') !== NULL && request('liked_drink_src') !== NULL) 
        && request('liked_meal_name')!== NULL && request ('liked_meal_src') !=NULL) {
            $liked_drink = new Like;
            $liked_meal = new Like;
            $liked_drink->nome = request('liked_drink_name');
            $liked_drink->user_id = Session::get('id');
            $liked_drink->src = request('liked_drink_src');
            $liked_meal->nome = request('liked_meal_name');
            $liked_meal->user_id = Session::get('id');
            $liked_meal->src = request('liked_meal_src');
            $liked_drink->save();
            $liked_meal->save();

            return ["success"];
        }
    }
}


?>