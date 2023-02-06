<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Siteintro;
use App\Models\Frontuser;
use App\Models\Social;
use App\Models\Contact;
use App\Models\Slider;

class IndexController extends Controller
{
    public function __construct(){
       $site_identity=Siteintro::first();
       $site_icon=Siteintro::with('site_icon')->where('id',1)->first();
       $logo=Siteintro::with('logo')->where('id',2)->first();
       $social=Social::get();
       $contacts=Contact::where('id',1)->first();
       $address=json_decode($contacts->address);
       $email=json_decode($contacts->email);
       $phone=json_decode($contacts->phone);
       $slides=Slider::get();
       //dd($address);
       view()->share([
        'site_identity'=>$site_identity,
        'social'=>$social,
        'site_icon'=>$site_icon,
        'logo'=>$logo,
        'address'=>$address,
        'email'=>$email,
        'phone'=>$phone,
        'slides'=>$slides,
      ]);
    }
    public function index(){
        $categories=Category::with('category_image')->where('category_status','show')->get();
        return view('front.index')->with(compact('categories'));
    }
}
