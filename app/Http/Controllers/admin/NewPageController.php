<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Session;

class NewPageController extends Controller
{
    public function add_page(Request $request){ 
       $title='Add Page';
       if($request->isMethod('post')){
        $data=$request->all();
        //dd($data);
        $page=new Page;
        $page->page_name=$data['page_title'];
        $page->meta_keywords=$data['meta_keywords'];
        $page->meta_description=$data['meta_description'];
        $page->content=$data['content'];
        $page->save();
        Session::flash('success_message','Page has been created successfully');
        return redirect()->back();
       }
       return view('admin.pages.create')->with(compact('title'));
    }
    public function edit_page(Request $request,$id){
        $title='Update Page';
        $page_edit=Page::where('id',$id)->first();
        //dd($page_edit);
        if($request->isMethod('post')){
         $data=$request->all();
         //dd($data);
         $page=Page::find($id);
         $page->page_name=$data['page_title'];
         $page->meta_keywords=$data['meta_keywords'];
         $page->meta_description=$data['meta_description'];
         $page->content=$data['content'];
         $page->save();
         Session::flash('success_message','Page has been updated successfully');
         return redirect()->back();
        }
        return view('admin.pages.update')->with(compact('title','page_edit'));
    }
    public function view_pages(){
        $pages=Page::get();
        return view('admin.pages.index')->with(compact('pages'));
    }
    public function delete_page($id){
        Page::where('id',$id)->delete();
        Session::flash('success_message','Page has been deleted successfully');
        return redirect()->back();
    }
}
