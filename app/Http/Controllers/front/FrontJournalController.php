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
use App\Models\JournalVolume;
use App\Models\JournalIssue;
use App\Models\CurrentIssue;
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
    
    public function front_register(Request $request,$journal_id){
        $journal=Journal::with('category')->where('id',$journal_id)->first();
        //dd($journal);
        return view('front.pages.journal.register',compact('journal'));
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
    // Journal Volumes
    public function add_journal_volume(Request $request,$journal_id){
        $id=Auth::guard('frontuser')->user()->id;
        $chief=Frontuser::where('id',$id)->first();
        $journal=Journal::where('id',$journal_id)->first();
        if($request->isMethod('post')){
            $data=$request->all();
            //dd($data);
            $journal_volume=new JournalVolume;
            $journal_volume->journal_volume_name=$data['volume_name'];
            $journal_volume->journal_id =$journal_id;
            $journal_volume->journal_volume_status=$data['volume_status'];
            $journal_volume->save();
            Session::flash('success_message','Journal volume has been created');
            return redirect()->back();
        }
        return view('front.pages.journal.journal_volume.create',compact('chief','journal'));
    }

    public function journal_volume($journal_id){
        $id=Auth::guard('frontuser')->user()->id;
        $chief=Frontuser::where('id',$id)->first();
        $journal=Journal::where('id',$journal_id)->first();
        $journal_volumes=JournalVolume::where('journal_id',$journal_id)->get();
        return view('front.pages.journal.journal_volume.index',compact('chief','journal','journal_volumes'));
    }
    public function journal_volume_delete($id){
        JournalVolume::where('id',$id)->delete();
        Session::flash('success_message','Journal volume has been deleted successfully');
        return redirect()->back();
    }
    public function edit_journal_volume(Request $request, $journal_id,$volume_id){
        $id=Auth::guard('frontuser')->user()->id;
        $chief=Frontuser::where('id',$id)->first();
        $journal=Journal::where('id',$journal_id)->first();
        $volume=JournalVolume::where('id',$volume_id)->first();
        if($request->isMethod('post')){
            $data=$request->all();
            //dd($data);
            $journal_volume=JournalVolume::find($volume_id);
            $journal_volume->journal_volume_name=$data['volume_name'];
            $journal_volume->journal_id =$journal_id;
            $journal_volume->journal_volume_status=$data['volume_status'];
            $journal_volume->save();
            Session::flash('success_message','Journal volume has been updated');
            return redirect()->back();
        }
        return view('front.pages.journal.journal_volume.update',compact('chief','journal','volume'));
    }
    // Journal Issues

    public function journal_issues($journal_id){
        $id=Auth::guard('frontuser')->user()->id;
        $chief=Frontuser::where('id',$id)->first();
        $journal=Journal::where('id',$journal_id)->first();
        $journal_issues=JournalIssue::with('journal_volume')->where('journal_id',$journal_id)->get();
        return view('front.pages.journal.journal_issues.index',compact('chief','journal','journal_issues'));
    }
    public function add_journal_issue(Request $request,$journal_id){
        $id=Auth::guard('frontuser')->user()->id;
        $chief=Frontuser::where('id',$id)->first();
        $journal=Journal::where('id',$journal_id)->first();
        $volumes=JournalVolume::where('journal_id',$journal_id)->get();
        if($request->isMethod('post')){
            $data=$request->all();
            //dd($data);
            $journal_issue=new JournalIssue;
            $journal_issue->journal_issue_name=$data['issue_name'];
            $journal_issue->journal_volume_id =$data['issue_volume'];
            $journal_issue->journal_id =$journal_id;
            $journal_issue->journal_issue_status=$data['issue_status'];
            $journal_issue->year=$data['year'];
            $journal_issue->save();
            Session::flash('success_message','Journal Issue has been created');
            return redirect()->back();
        }
        return view('front.pages.journal.journal_issues.create',compact('chief','journal','volumes'));
    }
    public function journal_volume_issue_delete($id){
        JournalIssue::where('id',$id)->delete();
        Session::flash('success_message','Journal Issue has been deleted successfully');
        return redirect()->back();
    }
    public function edit_journal_issue(Request $request, $journal_id,$issue_id){
        $id=Auth::guard('frontuser')->user()->id;
        $chief=Frontuser::where('id',$id)->first();
        $journal=Journal::where('id',$journal_id)->first();
        $issue=JournalIssue::with('journal_volume')->where('id',$issue_id)->first();
        //dd($issue);
        $volumes=JournalVolume::where('journal_id',$journal_id)->get();
        if($request->isMethod('post')){
            $data=$request->all();
            //dd($data);
            $journal_issue=JournalIssue::find($issue_id);
            $journal_issue->journal_issue_name=$data['issue_name'];
            $journal_issue->journal_volume_id =$data['issue_volume'];
            $journal_issue->journal_id =$journal_id;
            $journal_issue->journal_issue_status=$data['issue_status'];
            $journal_issue->year=$data['year'];
            $journal_issue->save();
            Session::flash('success_message','Journal Issue has been updated');
            return redirect(route('front.journal_issues',$journal_id));
        }
        return view('front.pages.journal.journal_issues.update',compact('chief','journal','volumes','issue'));
    }
    // Current Issues
    public function current_issues($journal_id){
        $id=Auth::guard('frontuser')->user()->id;
        $chief=Frontuser::where('id',$id)->first();
        $journal=Journal::where('id',$journal_id)->first();
        $journal_volumes=JournalVolume::with('journal_volume_issues')->where('journal_id',$journal_id)->get();
        $journal_issues=JournalIssue::with('journal_volume')->where('journal_id',$journal_id)->get();
        $current_issues=CurrentIssue::with('journal_volume','journal_issue')->where('journal_id',$journal_id)->get();
        

        return view('front.pages.journal.current_issues.index',compact('chief','journal','journal_volumes','journal_issues','current_issues'));
    }
    public function add_journal_current_issue(Request $request,$journal_id){
        $id=Auth::guard('frontuser')->user()->id;
        $chief=Frontuser::where('id',$id)->first();
        $journal=Journal::where('id',$journal_id)->first();
        $volumes=JournalVolume::where('journal_id',$journal_id)->get();
        if($request->isMethod('post')){
            $data=$request->all();
            $count=CurrentIssue::where(['journal_id'=>$data['journal'],'journal_volume_id'=>$data['volume']])->count();
            //dd($data);
            if($count > 0){
                $ciid=CurrentIssue::where(['journal_id'=>$data['journal'],'journal_volume_id'=>$data['volume']])->first();
                $current_issue=CurrentIssue::find($ciid->id);
                $current_issue->frontuser_id=$id;
                $current_issue->journal_id =$data['journal'];
                $current_issue->journal_volume_id =$data['volume'];
                $current_issue->issue_id=$data['issue'];
                $current_issue->save();
                Session::flash('success_message','Current Issue has been updated');
                return redirect()->back();
            }else{

                $current_issue=new CurrentIssue;
                $current_issue->frontuser_id=$id;
                $current_issue->journal_id =$data['journal'];
                $current_issue->journal_volume_id =$data['volume'];
                $current_issue->issue_id=$data['issue'];
                $current_issue->save();
                Session::flash('success_message','Current Issue has been created');
                return redirect()->back();
            }
        }
        return view('front.pages.journal.current_issues.create',compact('chief','journal','volumes'));
    }
    
    public function current_volume_issues(Request $request){
         if($request->ajax()){
            $data=$request->all();
            $issues=JournalVolume::with('journal_volume_issues')->where(['journal_id'=>$data['journal'],'id'=>$data['volume']])->first();
            $view=view('front.pages.journal.current_issues.select_issues',compact('issues'))->render();
            
            return response()->json([
                'data'=>$view
            ]);
         }
    }

}
