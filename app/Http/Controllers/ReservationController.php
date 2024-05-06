<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservations;

class ReservationController extends Controller
{
    public function booking(){
        $reservation_data= reservations::all();
        return view("reservdisplay",compact('reservation_data'));
    }

    public function booktable(Request $request) {
        $user=auth()->user();
        $reservation_data= new reservations;
        $reservation_data->user_id=$user->id;
        $reservation_data->name= $request->name;
        $reservation_data->email= $request->email;
        $reservation_data->mo_number= $request->phone;
        $reservation_data->date= $request->date;
        $reservation_data->time= $request->time;
        $reservation_data->people_no= $request->people;
        $reservation_data->message= $request->message;
        $reservation_data->save();
        return redirect()->back();
    }

    public function userdashboard(){ 
        $user = auth()->user();
        $user_reservation = $user->reservations;
        return view("userdashboard.userdashboard",compact('user_reservation'));
    }

    public function deletereservation($id){
        $reservation_data= reservations::find($id);
        $reservation_data->delete();
        return redirect()->back();
    }
      
}
