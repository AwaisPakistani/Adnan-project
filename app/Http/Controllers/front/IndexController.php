<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Siteintro;
use App\Models\Frontuser;
use App\Models\Social;
use App\Models\Contact;
use App\Models\Slider;
use App\Models\Page;
use App\Models\AdvanceSetting;
use Session;
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
       $pages=Page::get();
       $advancesetting=AdvanceSetting::first();
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
        'pages'=>$pages,
        'advancesetting'=>$advancesetting,
      ]);
    }
    public function index(){
        $categories=Category::with('category_image')->where('category_status','show')->get();
        return view('front.index')->with(compact('categories'));
    }

    public function view_category_detail($id){
      $category=Category::with('journals')->where('id',$id)->first();
      $categories_all=Category::get();
      return view('front.pages.category_detail',compact('category','categories_all'));
    }
    public function logout(Request $request,$journal_id){
      Auth::guard('frontuser')->logout();

      $request->session()->invalidate();

      $request->session()->regenerateToken();
      Session::flash('success_message','You are logged out successfully');
      return redirect('chiefeditor-login/'.$journal_id);
    }
}
