<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Reservation;
use App\FoodCategory;
use App\FoodItem;

/* use App\GeneralSetting;
use App\SocialSetting; */


class StaticPagesController extends Controller
{
    public function home(){
        $categories = FoodCategory::all();

        
        return view('home', [
            "categories" => $categories,

        ]);
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
        $categories = FoodCategory::paginate(10);

        return view('menu/menuindex', [
            'categories' => $categories
        ]);
    }
    public function singleMenu($slug){
        $foodCategory = FoodCategory::where('title', '=', $slug);
        $foodItems = FoodItem::where('category_id', '=', $foodCategory->id)->get();

        return view('menu/single-menu', [
            "foodItem" => ucfirst($slug),
            "foodItems" => $foodItems,
        ]);
    }

}

