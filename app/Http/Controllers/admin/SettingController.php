<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GeneralSetting;
use App\SEOSetting;
use App\SocialSetting;



class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

 

    public function general(){
        $id = 1;
        $general_setting = GeneralSetting::paginate($id);

        return view('admin/settings/general', [
            'general_setting' => $general_setting
        ]);
    }


    public function updateGeneral(){
        $id = 1;

        request()->validate([
            'site_title' => ['required', 'string', 'max:255'],
            'adrress_1' => ['required', 'string'],
            'address_2' => ['required', 'string'],
            'city' => ['required', 'string'],
            'state' => ['required', 'string'],
            'phone_number' => ['required', 'string'],


        ]);
        
        $general_setting = GeneralSetting::find($id);
        $general_setting->site_title = request('site_title');
        $general_setting->address_1 = request('address_1');
        $general_setting->address_2 = request('address_2');
        $general_setting->city = request('city');
        $general_setting->state = request('state');
        $general_setting->zip = request('zip');
        $general_setting->phone_number = request('phone_number');

        $general_setting->save();

        return redirect('/admin/settings/general');

    }

    public function seo(){
        $id = 1;
        $seo_setting = SeoSetting::paginate($id);

        return view('admin/settings/seo', [
            'seo_setting' => $seo_setting
        ]);
    }


    public function updateSEO(){
        $id = 1;

        request()->validate([
            'description' => ['required', 'string', 'max:255'],
            'keywords' => ['required', 'string'],


        ]);
        
        $seo_setting = SeoSetting::find($id);
        $seo_setting->description = request('description');
        $seo_setting->keywords = request('keywords');
        $seo_setting->save();

        return redirect('/admin/settings/seo');

    }


    public function social(){
        $id = 1;
        $social_setting = SocialSetting::paginate($id);

        return view('admin/settings/social', [
            'social_setting' => $social_setting
        ]);
    }


    public function updateSocial(){
        $id = 1;

        request()->validate([
            'facebook' => [ 'string'],
            'twitter' => ['string'],
            'instagram' => ['string'],
            'yelp' => ['string'],


        ]);
        
        $social_setting = SocialSetting::find($id);
        $social_setting->facebook = request('facebook');
        $social_setting->twitter = request('twitter');
        $social_setting->instagram = request('instagram');
        $social_setting->yelp = request('yelp');
        $social_setting->save();

        return redirect('/admin/settings/social');

    }
}
