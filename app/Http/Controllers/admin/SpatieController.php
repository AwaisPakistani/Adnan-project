<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;
use DB;

class SpatieController extends Controller
{
    // roles
    public function roles(){
        $roles=Role::where('guard_name','web')->get();
        $permissions=Permission::where('guard_name','web')->get();
        return view('admin.roles.index')->with(compact('roles','permissions'));
    }
    public function add_edit_role(Request $request,$id=null){
        
        if($id==''){
             $title='Add Role';
             $show_role='';
             if($request->isMethod('post')){
                $data=$request->all();
                // echo "<pre>";
                // print_r($data);die;
               $role = Role::create(['guard_name'=>'web','name' => $data['role']]);
               Session::flash('success_message','Role has been added successfully!');
               return redirect()->back();
            }
            return view('admin.roles.create')->with(compact('title','show_role'));
        }else{
             $title='Edit Role';
             $show_role=Role::where(['id'=>$id,'guard_name'=>'web'])->first();
             if($request->isMethod('post')){
               $data=$request->all();
               // echo "<pre>";
               // print_r($data);die;
               //dd($data);
               $role = Role::where(['id'=>$id,'guard_name'=>'web'])->update(['name' => $data['role']]);
               Session::flash('success_message','Role has been updated successfully!');
               return redirect()->back();
            }
            return view('admin.roles.create')->with(compact('title','show_role'));
        }
        
        

        //die;
        // $permission = Permission::create(['name' => 'edit articles']);
    }

    public function delete_role($id){
        Role::where('guard_name','web')->where('id',$id)->delete();
        Session::flash('success_message','Role has been deleted successfully!');
        return redirect()->back();
    }

    public function update_roles_permission(Request $request){
        if ($request->ajax()) {
            $data=$request->all();
            $role_id=$data['role_id'];
            $role=Role::where('id',$role_id)->first();
            $permission=$data['permission_name'];
            // echo "<pre>"; echo $role; die();
            if ($data['status']=='on') {
                $status='off';
            }else{
                $status='on';
            }
            #echo $status; die();
            if($role->hasPermissionTo($permission)){
                $role->revokePermissionTo($permission);
              }
              else{
                //echo 'yes';die;
                  $role->givePermissionTo($permission);
                  echo 'permission added';
              }
            
         }
    }

    // permissions
    public function permissions(){
        $permissions=Permission::where('guard_name','web')->get();
        return view('admin.permissions.index')->with(compact('permissions'));
    }

    public function add_edit_permission(Request $request,$id=null){
        if($id==''){
           $title='Add Permission';
           $show_permission='';
            if($request->isMethod('post')){
                $data=$request->all();
                // echo "<pre>";
                // print_r($data);die;
                $permission = Permission::create(['guard_name'=>'web','name' => $data['permission']]);
                Session::flash('success_message','Permission has been added successfully!');
                return redirect()->back();
           }
           return view('admin.permissions.add-edit-permission')->with(compact('title','show_permission'));
        }else{
            $title='Edit Permission';
            $show_permission=Permission::where(['id'=>$id,'guard_name'=>'web'])->first();
            //dd($show_permission);
            if($request->isMethod('post')){
               $data=$request->all();
               // echo "<pre>";
               // print_r($data);die;
               //dd($data);
               $permission = Permission::where(['id'=>$id,'guard_name'=>'web'])->update(['name' => $data['permission']]);
               Session::flash('success_message','Permission has been updated successfully!');
               return redirect()->back();
            }
            return view('admin.permissions.add-edit-permission')->with(compact('title','show_permission'));
        }
       
        
    }

    public function delete_permission($id){
        Permission::where(['id'=>$id,'guard_name'=>'web'])->delete();
        Session::flash('success_message','Permission has been deleted successfully!');
        return redirect()->back();               
    }
}
