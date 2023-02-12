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
use App\Models\Page;
use App\Models\AdvanceSetting;
use App\Models\Journal;
class FrontJournalController extends Controller
{
    public function __construct()
    {
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
    public function view_journal_detail($id){
        $journal=Journal::with('category')->where('id',$id)->first();
        return view('front.pages.journal.journal_detail',compact('journal'));
    }
}
