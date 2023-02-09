<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Siteintro;
use App\Models\Frontuser;
use App\Models\Social;
use App\Models\Contact;
use App\Models\Slider;
use App\Models\Page;
use App\Models\AdvanceSetting;
use Session;
class PageController extends Controller
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
         'contacts'=>$contacts,
         'address'=>$address,
         'email'=>$email,
         'phone'=>$phone,
         'slides'=>$slides,
         'pages'=>$pages,
         'advancesetting'=>$advancesetting,
       ]);
    }
    public function contact_page(){
        return view('front.pages.contact');
    }

    public function front_page($url){
        $page=Page::where('id',$url)->first();
        //dd($page);
        return view('front.pages.page')->with(compact('page'));
    }

    public function contact_form(Request $request){
        $contact=Contact::first();
        $contact_mail=json_decode($contact->email);
      if($request->isMethod('post')){
        $data=$request->all();
        //dd($data);
        if($data['username']=='' || $data['email']=='' || $data['phone']=='' || $data['message']==''){
            Session::flash('error_message','Please fill all fields');
            return redirect()->back();
        }
        $email=$contact_mail[0];
        //dd($email[0]);
        $message="Visitor Feedback";
        $messageData=[
            'name'=>$data['username'],
            'email'=>$data['email'],
            'phone'=>$data['phone'],
            'messages'=>$data['message']
          ];
          Mail::send('front.mails.contact_form',$messageData,function($message) use($email){
            $message->to($email)->subject('Shukaar Contact Form ');
         });
         Session::flash('success_message','Your feedback has been sent successfully');
         return redirect()->back();

      }
    }
}
