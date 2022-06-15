<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\BookedRoom;
use App\Models\Like;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ReservationsController extends Controller {

    public function index() {
        {
            if(!Session::get('id'))
            {
                return redirect('login');
            }
            return view('reservations');
        }
    }

    public function get_reservations () {

        if(!Session::get('id'))
        {
            return redirect('login');
        }

        $room = BookedRoom::select('name','surname',"email","nome_camera","n_camere_prenot","check_in","check_out","n_persone","prezzo_tot")
        ->join('users','booked_rooms.user_id', '=', 'users.id')
        ->where('user_id', Session::get('id'))
        ->get();

        if($room != NULL)
        return($room);
    }

    public function get_likes () {

        if(!Session::get('id'))
        {
            return redirect('login');
        }
        $like = User::select('nome','src')
        ->join('likes', 'likes.user_id', '=', 'users.id' )
        ->where('user_id', Session::get('id'))
        ->get();
        return($like);
    }

    public function delete_likes () {

        if(!Session::get('id'))
        {
            return redirect('login');
        }
        $like = Like::where('user_id', Session::get('id'))
        ->delete();
        return ($like);
    }

    public function delete_reservations () {

        if(!Session::get('id'))
        {
            return redirect('login');
        }
    
        $n_prenot = BookedRoom::select("n_camere_prenot")
        ->where('user_id', Session::get('id'))
        ->first();

        $add = Room::join('booked_rooms', 'booked_rooms.nome_camera','=','rooms.tipo')->first();
        $add->n_disponibili += $n_prenot->n_camere_prenot;
        $add->save();

        $delete = BookedRoom::where('user_id', Session::get('id'))
        ->delete();

        return ($add);
    }
}

?>