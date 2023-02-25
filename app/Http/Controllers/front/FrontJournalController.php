<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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
use App\Models\ArticleType;
use App\Models\AttachmentItem;
use App\Models\FrontAuthor;
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
        $journal=Journal::with('category','Journal_volumes','Journal_issues')->where('id',$id)->first();
        return view('front.pages.journal.journal_detail',compact('journal'));
    }
    
    public function front_register(Request $request,$journal_id){
        $journal=Journal::with('category')->where('id',$journal_id)->first();
        //dd($journal);
        if($request->isMethod('post')){
            $data=$request->all();
            //dd($data);
            $frontuser=new Frontuser;
            $frontuser->first_name=$data['title_name'].' '.$data['first_name'];
            $frontuser->last_name=$data['last_name'];
            // check email existance
            $email=Frontuser::where('email',$data['email'])->count();
            if($email > 0){
                Session::flash('error_message','Email already exists!');
        	    return redirect()->back();
            }
            $frontuser->email=$data['email'];
            if($data['pwd']!=$data['cpwd']){
                Session::flash('error_message','Passwords are not matching!');
        	    return redirect()->back();
            }
            $frontuser->password=bcrypt($data['pwd']);
            if(!empty($data['user_image'])){
                $image_path = $request->file('user_image')->store('images/front/authors', 'public');
            }
            $frontuser->image=$image_path;
            $frontuser->status=0;
            $frontuser->save();

            $author=new FrontAuthor;
            $author->frontuser_id=$frontuser->id;
            $author->highest_qualification=$data['highest_qualification'];
            $author->phone=$data['phone'];
            $author->prefered_name=$data['prefered_name'];
            $author->position=$data['position'];
            $author->institution=$data['institution'];
            $author->department=$data['department'];
            $author->address=$data['address'];
            $author->country=$data['country'];
            $author->state_province=$data['state_province'];
            $author->zip=$data['zip'];
            if(!empty($data['reviewer'])){
                $author->reviewer=$data['reviewer'];
                $frontuser->assignRole('reviewer');
            }else{
                $author->reviewer='off';
                $frontuser->assignRole('author');
            }
            $author->status=1;
            $author->save();
            
            //activation
            $mail=$data['email'];
            $name=$data['first_name'].' '.$data['last_name'];
            $message="Email Verification";
            $messageData=['email'=>$data['email'],'name'=>$name,'code'=>base64_encode($data['email'])];
            Mail::send('front.mails.authorMailConfirmation',$messageData, function($message) use($mail){
                $message->to($mail)->subject('Confirm your Shukar Website registration');
            });
            return redirect()->back()->with('success_message','Please confirm your email to activate your account!');
            // end activation
        }
        return view('front.pages.journal.register',compact('journal'));
    }
    public function confirmAccount($email)
    {
        $email=base64_decode($email);
        $authorCount=Frontuser::where('email',$email)->count();
        if ($authorCount > 0) {
          $FrontAuthorDetails=Frontuser::where('email',$email)->first();
          if ($FrontAuthorDetails->status==1) {
              return redirect('/')->with('success_message','Your account is already activated. You can login now');
          }
          else{
            Frontuser::where('email',$email)->update(['status'=>1]);
               #$pass=mt_rand();
              #$name=$data['name'];
              $mail=$email;
              $name=$FrontAuthorDetails->first_name.' '.$FrontAuthorDetails->last_name;
              $message="Email Verification";
              $messageData=['email'=>$mail,'name'=>$name];
              Mail::send('front.mails.register_front',$messageData, function($message) use($mail){
                  $message->to($mail)->subject('Registraion on Shukar');
              });
              return redirect('/')->with('success_message','Your account is activated. You can login now');
          }
         } 
         else{
          abort(404);
         }
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
       //$user=Frontuser::where('id',$id)->first();
       $user=Frontuser::where('email',$data['email'])->first();
       if($user->status==0){
        Session::flash('error_message','Your account is not verified. Please check your email to verify account.');
        return redirect()->back();
       }
       if(!empty($chief)){
          // dd('entered');
           if (Auth::guard('frontuser')->attempt(['email'=>$data['email'],'password'=>$data['password']])) {
                if($user->hasRole('chiefeditor')){
                    return redirect()->route('front.chiefeditor.dashboard',$id);
                }elseif($user->hasRole('paper_editor')){
                dd('Editor'); 
               
                }elseif($user->hasRole('reviewer')){
                dd('reviewer');
                }elseif($user->hasRole('author')){
                    return redirect()->route('front.author.dashboard',$id);
                }else{
                dd('publisher');
                }
            
           }else{
                Session::flash('error_message','Invalid email or password.Try again');
                return redirect()->back();
           }

       }else{
            Session::flash('error_message','Sorry you are not assigned for this journal');
            return redirect()->back();
       }
    }
    public function frontuser_forgot_password(Request $request,$journal_id){
        $journal=Journal::where('id',$journal_id)->first();
        //dd($journal);
        if($request->isMethod('post')){
            $data=$request->all();
            dd($data);
        }
        return view('front.pages.journal.frontuser_forgot_password',compact('journal'));
    }
    public function frontuser_forgot_pwd(Request $request,$journal_id){
            $data=$request->all();
            //dd($data);
            if(!empty($data['email'])){
              $mailid=Frontuser::select('id')->where('email',$data['email'])->value('id');
              $mailcheck=Frontuser::where('email',$data['email'])->count();
              //echo Session::get('mailid'); die;
              if($mailcheck > 0){
                Session::put('mailid',$mailid);
                return redirect(route('user.enter_forgot_pwd',$journal_id));
              }else{
                Session::flash('error_message',"Entered email does not exist.Please check and try again");
                return redirect()->back();
              }
            }else{
                Session::flash('error_message',"Please enter email");
                return redirect()->back();
            }
    }
    public function enter_forgot_pwd(Request $request,$journal_id){
        $journal=Journal::where('id',$journal_id)->first();
        return view('front.pages.journal.frontuser_enter_forgotpassword',compact('journal'));
    }
    public function frontuser_forgot_pass(Request $request,$journal_id){
        $data=$request->all();
        //dd($data);
        $mailid=Session::get('mailid');
        //dd('id='.$mailid);
        if($data['password']!=$data['cpassword']){
            Session::flash('error_message','Passwords are not matching!');
            return redirect()->back();
        }else{
            Frontuser::where('id',$mailid)->update([
                'password'=>bcrypt($data['password']),
            ]);
            Session::forget('mailid');
            
            Session::flash('success_message','Your password has successfully changed');
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
        CurrentIssue::where('journal_volume_id',$id)->delete();
        JournalIssue::where('journal_volume_id',$id)->delete();
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
    // Article Types
    public function article_types($journal_id)
    {
        $id=Auth::guard('frontuser')->user()->id;
        $chief=Frontuser::where('id',$id)->first();
        $journal=Journal::where('id',$journal_id)->first();
        $article_types=ArticleType::where('journal_id',$journal_id)->get();
        return view('front.pages.journal.article_types.index',compact('chief','journal','article_types'));
    }
    public function add_article_type(Request $request,$journal_id){
        $id=Auth::guard('frontuser')->user()->id;
        $chief=Frontuser::where('id',$id)->first();
        $journal=Journal::where('id',$journal_id)->first();
        if($request->isMethod('post')){
            $data=$request->all();
            $at=new ArticleType;
            $at->name=$data['article_type'];
            $at->frontuser_id=$id;
            $at->journal_id =$journal->id;
            $at->status=1;
            $at->save();
            Session::flash('success_message','Article Type has been created');
            return redirect()->back();

        }
        return view('front.pages.journal.article_types.create',compact('chief','journal'));
    }

    public function delete_article_type($id){
        ArticleType::where('id',$id)->delete();
        Session::flash('success_message','Article Type has been deleted successfully');
        return redirect()->back();
    }
    
    public function edit_article_type(Request $request,$journal_id,$article){
        $id=Auth::guard('frontuser')->user()->id;
        $chief=Frontuser::where('id',$id)->first();
        $journal=Journal::where('id',$journal_id)->first();
        $article_type=ArticleType::where([
            'journal_id'=>$journal_id,
            'id'=>$article
        ])->first();
        if($request->isMethod('post')){
            $data=$request->all();
            $art=ArticleType::find($article);
            $art->name=$data['article_type'];
            $art->frontuser_id=$id;
            $art->journal_id =$journal->id;
            $art->status=1;
            $art->save();
            Session::flash('success_message','Article Type has been updated');
            return redirect()->back();

        }
        return view('front.pages.journal.article_types.update',compact('chief','journal','article_type'));
    }

    // attachment_items
    public function attachment_items($journal_id)
    {
        $id=Auth::guard('frontuser')->user()->id;
        $chief=Frontuser::where('id',$id)->first();
        $journal=Journal::where('id',$journal_id)->first();
        $attachment_items=AttachmentItem::where('journal_id',$journal_id)->get();
        return view('front.pages.journal.attachment_items.index',compact('chief','journal','attachment_items'));
    }
    public function add_attachment_item(Request $request,$journal_id){
        $id=Auth::guard('frontuser')->user()->id;
        $chief=Frontuser::where('id',$id)->first();
        $journal=Journal::where('id',$journal_id)->first();
        if($request->isMethod('post')){
            $data=$request->all();
            $ai=new AttachmentItem;
            $ai->name=$data['name'];
            $ai->description=$data['description'];
            $ai->frontuser_id=$id;
            $ai->journal_id =$journal->id;
            $ai->status=1;
            $ai->save();
            Session::flash('success_message','Attachment Item has been created');
            return redirect()->back();

        }
        return view('front.pages.journal.attachment_items.create',compact('chief','journal'));
    }
    public function delete_attachment_item($id){
        AttachmentItem::where('id',$id)->delete();
        Session::flash('success_message','Attachment Item has been deleted successfully');
        return redirect()->back();
    }

    public function edit_attachment_item(Request $request,$journal_id,$aitem){
        $id=Auth::guard('frontuser')->user()->id;
        $chief=Frontuser::where('id',$id)->first();
        $journal=Journal::where('id',$journal_id)->first();
        $attach_item=AttachmentItem::where([
            'journal_id'=>$journal_id,
            'id'=>$aitem
        ])->first();
        if($request->isMethod('post')){
            $data=$request->all();
            $ai=AttachmentItem::find($aitem);
            $ai->name=$data['name'];
            $ai->description=$data['description'];
            $ai->frontuser_id=$id;
            $ai->journal_id =$journal->id;
            $ai->status=1;
            $ai->save();
            Session::flash('success_message','Attachment Item has been updated');
            return redirect()->back();

        }
        return view('front.pages.journal.attachment_items.update',compact('chief','journal','attach_item'));
    }


    ///////////////////////////
    ////////Author////////////
    //////////////////////////
    public function author_dashboard($journal_id){
        $id=Auth::guard('frontuser')->user()->id;
        //dd($chief);
        $author=Frontuser::where('id',$id)->first();
        //$journal=Journal::where('assign_chiefeditor',$chief)->get();
        //dd($journal);
        $journal=Journal::where('id',$journal_id)->first();
        Session::flash('success_message','You have logged in successfully');
        return view('front.pages.journal.author.author_dashboard',compact('journal','author'));
    }

    public function paper_submit_new($journal_id){
        $id=Auth::guard('frontuser')->user()->id;
        $author=Frontuser::where('id',$id)->first();
        $journal=Journal::where('id',$journal_id)->first();
        $article_types=ArticleType::where('journal_id',$journal_id)->get();
        return view('front.pages.journal.author.paper_submit_new',compact('journal','author','article_types'));
    }



}
