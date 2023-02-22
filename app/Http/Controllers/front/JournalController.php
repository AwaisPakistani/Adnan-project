<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Frontuser;
use App\Models\Journal;
use App\Models\JournalVolume;
use App\Models\JournalIssue;
use App\Models\CurrentIssue;
use Session;

class JournalController extends Controller
{
    // admin journal functions
    public function add_journal(Request $request){
        $title="Add Journal";
        $categories=Category::get();
        $chiefeditor=Frontuser::with('roles')->get();
        if($request->isMethod('post')){
            $data=$request->all();
            if($request->hasFile('more_info')){
                $ext=$request->file('more_info')->getClientOriginalExtension();
                if($ext!='pdf'){
                    Session::flash('error_message','More Info should have PDF file');
                    return redirect()->back();
                }
            }
            if($request->hasFile('author_guidelines')){
                $ext_ag=$request->file('author_guidelines')->getClientOriginalExtension();
                if($ext_ag!='pdf'){
                    Session::flash('error_message','Author guidelines should have PDF file');
                    return redirect()->back();
                }
            }
            // check for chiefeditor existance in journal
            $checkjournalchief=Journal::where('assign_chiefeditor',$data['assign_chiefeditor'])->count();
            if($checkjournalchief > 0){
                Session::flash('error_message','This chiefeditor has already assigned for another journal.So please choose other chiefeditor for this Journal!');
                return redirect()->back();
            }
            // save Journal
       
            $journal=new Journal;
            $journal->journal_name=$data['journal_name'];
            $journal->issn=$data['issn'];
            $journal->journal_slug='';
            $journal->scope_and_aim=$data['scope_and_aim'];
            $journal->category_id=$data['category_id'];
            $journal->assign_chiefeditor=$data['assign_chiefeditor'];
            // more info
            $moreinfo_path = $request->file('more_info')->store('pdf/journal_moreinfo', 'public');
            $journal->more_info=$moreinfo_path;
            // end more info
            $journal->information=$data['information'];
            $journal->Indexing_or_abstracting=$data['indexing'];
            // Author guideline
            $authorGuideline_path = $request->file('more_info')->store('pdf/author_guidelines', 'public');
            $journal->author_guideline=$authorGuideline_path;
            // End Author guidelines
            $journal->days_review=$data['days_review'];
            $journal->days_decision=$data['days_decision'];
            $journal->days_submission=$data['days_submission'];
            $journal->days_accept=$data['days_accept'];
            $journal->meta_title=$data['meta_title'];
            $journal->meta_description=$data['meta_description'];
            $journal->meta_keywords=$data['meta_keywords'];
            $journal->status='pending';
            $journal->save();
            Session::flash('success_message','Journal has been added successfully');
            return redirect()->back();

        }

        //dd($chiefeditor);
        return view('front.journal.create')->with(compact('title','categories','chiefeditor'));
    }
    public function view_journals(){
        $journals=Journal::with('category')->get();
        return view('front.journal.index')->with(compact('journals'));
    }

    public function edit_journal(Request $request,$id){
        $title="Update Journal";
        $journal=Journal::with('category')->where('id',$id)->first();
        $categories=Category::get();
        $chiefeditor=Frontuser::with('roles')->get();
        if($request->isMethod('post')){
            $data=$request->all();

            if($request->hasFile('more_info')){
                $ext=$request->file('more_info')->getClientOriginalExtension();
                if($ext!='pdf'){
                    Session::flash('error_message','More Info should have PDF file');
                    return redirect()->back();
                }
            }
            if($request->hasFile('author_guidelines')){
                $ext_ag=$request->file('author_guidelines')->getClientOriginalExtension();
                if($ext_ag!='pdf'){
                    Session::flash('error_message','Author guidelines should have PDF file');
                    return redirect()->back();
                }
            }
       
            $journal_new=Journal::find($id);
            $journal_new->journal_name=$data['journal_name'];
            $journal_new->issn=$data['issn'];
            $journal_new->journal_slug='';
            $journal_new->scope_and_aim=$data['scope_and_aim'];
            $journal_new->category_id=$data['category_id'];
            $journal_new->assign_chiefeditor=$data['assign_chiefeditor'];
            // more info
            if($request->hasFile('more_info')){
                $moreinfo_path = $request->file('more_info')->store('pdf/journal_moreinfo', 'public');
            }else{
                $moreinfo_path=$journal->more_info;
            }
            
            $journal_new->more_info=$moreinfo_path;
            // end more info
            $journal_new->information=$data['information'];
            $journal_new->Indexing_or_abstracting=$data['indexing'];
            // Author guideline
            if($request->hasFile('author_guidelines')){
                $authorGuideline_path = $request->file('author_guidelines')->store('pdf/author_guidelines', 'public');
            }else{
                $authorGuideline_path=$journal->author_guideline;
            }
            
            $journal_new->author_guideline=$authorGuideline_path;
            // End Author guidelines
            $journal_new->days_review=$data['days_review'];
            $journal_new->days_decision=$data['days_decision'];
            $journal_new->days_submission=$data['days_submission'];
            $journal_new->days_accept=$data['days_accept'];
            $journal_new->meta_title=$data['meta_title'];
            $journal_new->meta_description=$data['meta_description'];
            $journal_new->meta_keywords=$data['meta_keywords'];
            $journal_new->status='pending';
            $journal_new->save();
            Session::flash('success_message','Journal has been updated successfully');
            return redirect()->back();

        }

        //dd($chiefeditor);
        return view('front.journal.update')->with(compact('title','categories','chiefeditor','journal'));
    }
    public function delete_journal($id){
        CurrentIssue::where('journal_id',$id)->delete();
        JournalIssue::where('journal_id',$id)->delete();
        JournalVolume::where('journal_id',$id)->delete();
        $journal=Journal::where('id',$id)->first();
        // delete more info
        $moreinfo=$journal->more_info;
        if(file_exists('storage/'.$moreinfo)){
            unlink('storage/'.$moreinfo);
        }
        // delete author guidelines
        $author_guide=$journal->author_guideline;
        if(file_exists('storage/'.$author_guide)){
            unlink('storage/'.$author_guide);
        }
        $journal->delete();
        Session::flash('success_message','Journal has deleted successfully');
        return redirect()->back();
    }

    public function delete_journal_moreinfo($id){
        $infopath=Journal::where('id',$id)->first();
        $path=$infopath->more_info;
        if(file_exists('storage/'.$path)){
            unlink('storage/'.$path);
        }
       
       
            Journal::where('id',$id)->update(['more_info'=>'']);
            Session::flash('success_message','More Info document has been deleted successfully!');
            return redirect()->back();
    }
    public function delete_journal_author_guideline($id){
        $guidepath=Journal::where('id',$id)->first();
        $path=$guidepath->author_guideline;
        if(file_exists('storage/'.$path)){
            unlink('storage/'.$path);
        }
       
       
            Journal::where('id',$id)->update(['author_guideline'=>'']);
            Session::flash('success_message','Author guideline document has been deleted successfully!');
            return redirect()->back();
    }

  
}
