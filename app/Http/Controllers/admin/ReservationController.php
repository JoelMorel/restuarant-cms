<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $reservation = Reservation::paginate(10);

        return view('admin/reservations/all', [
            'reservation' => $reservation
        ]);
    }

    public function create(){
       
        return view('admin/reservations/create'
        );
    }

    public function store(){
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'guest_number' => ['required', 'Integer'],
            'time' => ['required']
        ]);
        
        $reservation = new Reservation();
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guest_number = request('guest_number');
        $reservation->time = request('time');

        $reservation->save();

        return redirect('/admin/reservations');
    }

    public function edit($id){
        
        $reservation =Foodreservation::find($id);

        return view('admin/reservations/edit', [
            'reservation' => $reservation,
            
        ]);
    }

    public function update($id){
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'guest_number' => ['required', 'Integer'],
            'time' => ['required']
        ]);
        
        $reservation = new Reservation();
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guest_number = request('guest_number');
        $reservation->time = request('time');

        $reservation->save();

        return redirect('/admin/reservations');

    }

    public function delete($id){
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect('/admin/reservations');
    }
}
