<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;
use DB;

class FrontRoleController extends Controller
{
    public function add_front_role(Request $request){
        $title='Add Front Role';
        if($request->isMethod('post')){
           $data=$request->all();
            // echo "<pre>";
            // print_r($data);die;
          $role = Role::create(['guard_name'=>'frontuser','name' => $data['role']]);
          Session::flash('success_message','Role has been added successfully!');
          return redirect()->back();
       }
       return view('front.roles.create')->with(compact('title'));
    }

    public function edit_front_role(Request $request,$id){
        $title='Update Front Role';
        $front_role=Role::where(['guard_name'=>'frontuser','id'=>$id])->first();
        //dd($front_role);
        if($request->isMethod('post')){
           $data=$request->all();
            // echo "<pre>";
            // print_r($data);die;
          $role = Role::where(['guard_name'=>'frontuser','id'=>$id])->update(['name' => $data['role']]);
          Session::flash('success_message','Role has been updated successfully!');
          return redirect()->back();
       }
       return view('front.roles.update')->with(compact('title','front_role'));
    }

    public function view_front_roles(){
        //dd('roles');
        $roles=Role::where('guard_name','frontuser')->get();
        $permissions=Permission::where('guard_name','frontuser')->get();
        return view('front.roles.index')->with(compact('roles','permissions'));
    }

    public function delete_role($id){
        Role::where(['guard_name'=>'frontuser','id'=>$id])->delete();
        Session::flash('success_message','Role has been deleted successfully!');
        return redirect()->back();
    }
}
