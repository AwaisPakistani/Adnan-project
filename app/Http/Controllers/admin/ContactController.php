<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Session;

class ContactController extends Controller
{
    public function add_edit_contacts(Request $request, $id=null){
        //echo 'entered';
        
        $title="Contacts";
        if($id==''){
            if($request->isMethod('post')){
                $data=$request->all();

                //dd($data);
                $findcontacts='';
                $map='';
                $addresses='';
                $emails='';
                $phones='';
                $contact=new Contact; 
                $contact->map=$data['map'];
                $contact->address=json_encode($data['address']);
                $contact->email=json_encode($data['email']);
                $contact->phone=json_encode($data['phone']);
                $contact->save();
                Session::flash('success_message','Contacts has been created successfully!');
                return redirect()->back();
    
            }
        }else{
                $findcontacts=Contact::where('id',1)->first();
                $map=$findcontacts->map;
                $addresses=json_decode($findcontacts->address);
                $emails=json_decode($findcontacts->email);
                $phones=json_decode($findcontacts->phone);
                if($request->isMethod('post')){
                    $data=$request->all();
                    //dd($data);
                    $contact=Contact::find(1);
                    $contact->map=$data['map'];
                    $contact->address=json_encode($data['address']);
                    $contact->email=json_encode($data['email']);
                    $contact->phone=json_encode($data['phone']);
                    $contact->save();
                    Session::flash('success_message','Contacts has been updated successfully!');
                    return redirect()->back();
                }
                //dd($emails);

        }
        return view('admin.contacts.add_edit_contacts')->with(compact('title','map','findcontacts','addresses','emails','phones'));
    }
}
