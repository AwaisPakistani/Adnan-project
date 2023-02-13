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
use App\Models\Journal;
use Session;

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

    public function chiefeditor_login(Request $request,$id){
        $journal=Journal::with('category')->where('id',$id)->first();
        if ($request->isMethod('post')) {
            dd($id);
    	}
        return view('front.pages.journal.chiefeditor_login',compact('journal'));
    }

    public function chiefeditor_login_form(Request $request,$id){
       $data=$request->all();
       $journal=Journal::where('id',$id)->first();
       $chief=$journal->assign_chiefeditor;
       $frontchief=Frontuser::where('id',$chief)->first();
       //dd($frontchief->last_name);
       if(!empty($chief)){
          // dd('entered');
           if (Auth::guard('frontuser')->attempt(['email'=>$data['email'],'password'=>$data['password']])) {

            return redirect()->route('front.chiefeditor.dashboard',$id);
           }else{
                Session::flash('error_message','Invalid email or password.Try again');
                return redirect()->back();
           }

       }else{
            Session::flash('error_message','Sorry you are not assigned for this journal');
            return redirect()->back();
       }
    }
    public function chiefeditor_dashboard($journal_id){
        $id=Auth::guard('frontuser')->user()->id;
        //dd($chief);
        $chief=Frontuser::where('id',$id)->first();
        //$journal=Journal::where('assign_chiefeditor',$chief)->get();
        //dd($journal);
        $journal=Journal::where('id',$journal_id)->first();
        Session::flash('success_message','You have logged in successfully');
        return view('front.pages.journal.chiefeditor.chiefeditor_dashboard',compact('journal','chief'));
    }
}
