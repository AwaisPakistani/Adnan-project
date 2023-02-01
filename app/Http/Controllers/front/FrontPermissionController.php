<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;
use DB;

class FrontPermissionController extends Controller
{
    public function add_front_permission(Request $request){
        $title='Add Front Permission';
        if($request->isMethod('post')){
           $data=$request->all();
            // echo "<pre>";
            // print_r($data);die;
          $permission = Permission::create(['guard_name'=>'frontuser','name' => $data['permission']]);
          Session::flash('success_message','Permission has been added successfully!');
          return redirect()->back();
       }
       return view('front.permissions.create')->with(compact('title'));
    }

    public function edit_front_permission(Request $request,$id){
        $title='Update Front Permission';
        $front_permission=Permission::where(['guard_name'=>'frontuser','id'=>$id])->first();
        //dd($front_role);
        if($request->isMethod('post')){
           $data=$request->all();
            // echo "<pre>";
            // print_r($data);die;
          $permission = Permission::where(['guard_name'=>'frontuser','id'=>$id])->update(['name' => $data['permission']]);
          Session::flash('success_message','Permission has been updated successfully!');
          return redirect()->back();
       }
       return view('front.permissions.update')->with(compact('title','front_permission'));
    }

    public function view_front_permissions(){
        //dd('roles');
        $permissions=Permission::where('guard_name','frontuser')->get();
       // $permissions=Permission::where('guard_name','frontuser')->get();
        return view('front.permissions.index')->with(compact('permissions'));
    }

    public function delete_permission($id){
        Permission::where(['guard_name'=>'frontuser','id'=>$id])->delete();
        Session::flash('success_message','Permission has been deleted successfully!');
        return redirect()->back();
    }
}
