<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Frontuser;

class JournalController extends Controller
{
    public function add_journal(Request $request){
        $title="Add Journal";
        $categories=Category::get();
        $chiefeditor=Frontuser::with('roles')->get();

        //dd($chiefeditor);
        return view('front.journal.create')->with(compact('title','categories','chiefeditor'));
    }
    public function view_journals(){

        dd('view journals');
    }
}
