<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Reservation;

class StaticPagesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('pages/about');
    }
    public function reservations(){
        return view('pages/reservations');
    }
    public function saveReservation(){
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string', 'min:8'],
            'phone_number' => ['required', 'string',],
            'guest_number' => ['required', 'string',],
            'time' => ['required', 'string',],

        ]);
        
        $reservation = new Reservation();
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guest_number = request('guest_number');
        $reservation->time = request('time');

        $member->save();

        return redirect('/reservations/thank-you');
    }
    public function contact(){
        return view('pages/contact');
    }
    public function offers(){
        return view('pages/offers');
    }

    public function registerMember(){
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string', 'min:8'],
            'phone_number' => ['required', 'string',],

        ]);
        
        $member = new Member();
        $member->fname = request('fname');
        $member->lname = request('lname');
        $member->email = request('email');
        $member->phone_number = request('phone_number');
        $member->save();

        return redirect('/offers/thank-you');
    }


    public function offersThankYou(){
    return view('pages/thank-you');
    }

    public function menu(){
        return view('menu/menuindex');
    }
    public function singleMenu(){
        return view('menu/single-menu');
    }

}

