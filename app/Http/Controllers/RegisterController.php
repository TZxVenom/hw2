<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller {

    function register () {
        $request = request();
        if ($this->countErrors($request) === 0)  {
            $newUser = User::create ([
                'name' => $request['name'],
                'surname' => $request['surname'],
                'username' => $request['username'],
                'password' => password_hash($request['password'], PASSWORD_BCRYPT),
                'email' => $request['email'],
            ]);
        if($newUser){
            Session::put('user_id', $newUser-> id);
            return redirect('login'); 
        }
    }
    else {
        return redirect('register')->withInput(); 
    }
}

    private function countErrors($data) {
        $error = array();
        
        if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $data['username'])) {
            $error[] = "Username non valido";
        } else {
            $username = User::where('username', $data['username'])->first();
            if ($username !== null) {
                $error[] = "Username già utilizzato";
            }
        }

        if (strlen($data["password"]) < 8) {
            $error[] = "Caratteri password insufficienti";
        } 
     
        if (strcmp($data["password"], $data["password_confirm"]) != 0) {
            $error[] = "Le password non coincidono";
        }
        
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $error[] = "Email non valida";
        } else {
            $email = User::where('email', $data['email'])->first();
            if ($email !== null) {
                $error[] = "Email già utilizzata";
            }
        }

        return count($error);
    }

    public function checkUsername($username) {
        $exist = User::where('username', $username)->exists();
        return ['exists' => $exist];
    }

    public function checkEmail($email) {
        $exist = User::where('email', $email)->exists();
        return ['exists' => $exist];
    }

    public function index() {
        return view('register');
    } 

}
?>