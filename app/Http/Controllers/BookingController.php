<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Room;
use App\Models\BookedRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller {

    public function index() {
        {
            if(!Session::get('id'))
            {
                return redirect('login');
            }
        else {
            $error = Session::get('error');
            Session::forget('error');
            return view('booking')
            ->with('error', $error);
            }
        }
    }

    public function booking() {
        {
            if(!Session::get('id'))
            {
                return redirect('login');
            }
        
        if((request('camera') !== NULL && request('check-in') !== NULL) && request('check-out') !== NULL
         && request('persone') !== NULL && request('numero_camere') !=NULL) 
       {
            $bookedRoom = new BookedRoom;
            $bookedRoom->nome_camera = request('camera');
            $bookedRoom->user_id = Session::get('id');
            $bookedRoom->n_camere_prenot= request('numero_camere');
            $bookedRoom->check_in = request('check-in');
            $bookedRoom->check_out = request('check-out');
            $bookedRoom->n_persone = request('persone');

            $room = Room::where("tipo", request('camera'))->first();

            if($room->n_disponibili >= request('numero_camere')){
            $bookedRoom->prezzo_tot = ($room->prezzo_€) * ($bookedRoom->n_camere_prenot);
            $bookedRoom->save();

            $room = Room::where("tipo", request('camera'))->first();
            $room->n_disponibili -= request('numero_camere');
            $room->save();
            return view('reservations');
            }
            else {
                Session::put('error', 'wrong');
                return redirect('booking');
            }
        }
        
        }
    }
}
?>