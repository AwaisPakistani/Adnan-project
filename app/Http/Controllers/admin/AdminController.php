<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\Image as Picture;
use App\Models\User;
use Session;
//use Image;

class AdminController extends Controller
{
    public function admins(){
        $admins=User::with('roles','admin_profile')->get();
        //$roles=$admins->getRoles;
        // echo "<pre>";
        // print_r($admins);
        // die;
       //dd($admins);
        
        return view('admin.admin_users.index')->with(compact('admins'));
    }

    public function add_admin(Request $request){
       
        if ($request->isMethod('post')) {
            
            //echo $request->hasFile('admin_profile'); die;
            $data=$request->all();
            if($data['password']!=$data['confirmpassword']){
                Session::flash('error_message','Passwords are not matching!');
        	return redirect()->back();
            }
            if($data['role']=='notselected'){
                Session::flash('warning_message','Please Select Role!');
        	    return redirect()->back();
            }
            $admin=User::create([
                'name'=>$data['name'],
                'email'=>$data['email'],
                'password'=>bcrypt($data['password'])

            ]);
           // Add Image
          
           
        //echo 'image'; die;

        // if($request->hasFile('admin_profile')) {
        //     $image = Image::make($request->file('admin_profile'));
            
        //     /**
        //      * Main Image Upload on Folder Code
        //      */
        //     $imageName = time().'-'.$request->file('image')->getClientOriginalName();
        //     $destinationPath = public_path('assets/images/admin/admin_profile/medium');
        //     $image->save($destinationPath.$imageName);
  
        //     /**
        //      * Generate Thumbnail Image Upload on Folder Code
        //      */
        //     $destinationPathThumbnail = public_path('assets/images/admin/admin_profile/small');
        //     $image->resize(100,100);
        //     $image->save($destinationPathThumbnail.$imageName);
  
        //     /**
        //      * Write Code for Image Upload Here,
        //      *
        //      * $upload = new Images();
        //      * $upload->file = $imageName;
        //      * $upload->save();            
        //     */
  
        //     // return back()
        //     //     ->with('success','Image Upload successful')
        //     //     ->with('imageName',$imageName);
        // }
        //    if($request->hasFile('admin_profile')){
            
        //      $image_tmp = $data['admin_profile'];
             
                 
        //          $extension = $image_tmp->getClientOriginalExtension();
        //          $fileName = rand(111,99999).'.'.$extension;
        //          $large_image_path = 'assets/images/admin/admin_profile/small'.'/'.$fileName;
        //          $medium_image_path = 'assets/images/admin/admin_profile/medium'.'/'.$fileName;  
        //          echo $small_image_path = 'assets/images/admin/admin_profile/large'.'/'.$fileName; die;
                 
        //          $image = Image::make($request->file('image'));
                 
        //          Image::make($image_tmp)->save($large_image_path);
        //          Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
        //          Image::make($image_tmp)->resize(300, 300)->save($small_image_path); 
        //  }
        $image_path = $request->file('admin_profile')->store('images/admin/admin_profile', 'public');
           $image=Picture::create([
            'url'=>$image_path,
            'imageable_type'=>'App\Models\User',
            'imageable_id'=>$admin->id
           ]);
           // End Add Image

           // assignRole
            $admin->assignRole($data['role']);
           // message
            Session::flash('success_message','Admin User has been added successfully!');
        	return redirect()->back(); 
        }
        $roles=Role::where('guard_name','web')->get();
        return view('admin.admin_users.create')->with(compact('roles'));
    }
    public function edit(Request $request,$id)
    {
        $title="Update Admin";
        $admin_user=User::with('roles')->where('id',$id)->first();
        //dd($admin_user);
        
        if ($request->isMethod('post')) {
            $admin=User::find($id);
            $data=$request->all();
            $admin->name=$data['name'];
            $admin->email=$data['email'];
            
            // Start Image uploading portion
            // $image_path = $request->file('profile_image')->store('images/admin/admin_profile', 'public');
            // $image=Picture::create([
            //  'url'=>$image_path,
            //  'imageable_type'=>'App\Models\User',
            //  'imageable_id'=>$admin->id
            // ]);
            // End Image uploading portion
            $admin->save();
            // All current roles will be removed from the user and replaced by the array given
            $admin->syncRoles($data['role']);
            //$admin->assignRole($data['role']);
            Session::flash('success_message','Admin User has been added successfully!');
        	return redirect()->back(); 
        }
        
        $roles=Role::where('guard_name','web')->get();
        return view('admin.admin_users.update')->with(compact('roles','admin_user','title'));
    }

    public function change_admin_password(Request $request,$id){
        $adminpass=User::where('id',$id)->first();
        if($request->isMethod('post')){
            $data=$request->all();
            //dd($data);
            if($data['newpassword']!=$data['retypepassword']){
                Session::flash('warning_message','Passwords are not matching!');
        	return redirect()->back();
            }
            User::where('id',$id)->update([
                'password'=>bcrypt($data['retypepassword'])
            ]);
            Session::flash('success_message','Password has been changed successfully!');
        }
        return view('admin.admin_users.change_password')->with(compact('adminpass'));
    }

    public function change_admin_profile(Request $request,$id){
        $adminprofile=User::with('admin_profile')->where('id',$id)->first();
        $picpath=$adminprofile->admin_profile->url;
       
        if($request->isMethod('post')){
          $pic=$request->all();
         
          $dpImage=Picture::where([
            'imageable_type'=>'App\Models\User',
            'imageable_id'=>$id
            ])->first();
            if($dpImage){
                // images paths
                $img_path = User::with('admin_profile')->where('id',$id)->first();
                // Delete large image from folder if exists
                $path=$img_path->admin_profile->url;
                if(file_exists('storage/'.$path)){
                    unlink('storage/'.$path);
                }

          $image_path = $request->file('profile_image')->store('images/admin/admin_profile', 'public');
           $image=Picture::where([
            'imageable_type'=>'App\Models\User',
            'imageable_id'=>$id
            ])->update([
            'url'=>$image_path,
            'imageable_type'=>'App\Models\User',
            'imageable_id'=>$adminprofile->id
           ]);

          Session::flash('success_message','Profile Picture has been changed successfully!');
            }else{
                $image_path = $request->file('profile_image')->store('images/admin/admin_profile', 'public');
                $image=Picture::create([
                 'url'=>$image_path,
                 'imageable_type'=>'App\Models\User',
                 'imageable_id'=>$adminprofile->id
                ]);
            }
          
        }
        return view('admin.admin_users.change_profile')->with(compact('adminprofile','picpath'));
    }

    public function login(Request $request){
    	if ($request->isMethod('post')) {

    	    $data=$request->all();
    		if (Auth::guard('web')->attempt(['email'=>$data['email'],'password'=>$data['password']])) {
    		      return redirect('/admin');
    		}else{
    			Session::flash('error_message','Invalid email or password.Try again');
    			return redirect()->back();
    		}
    	}
    	return view('admin.login');
    }

    public function delete($id){
        $imagepath=User::with('admin_profile')->where('id',$id)->first();
        $path=$imagepath->admin_profile->url;
        if(file_exists('storage/'.$path)){
            unlink('storage/'.$path);
        }
        $image=Image::where([
            'imageable_type'=>'App\Models\User',
            'imageable_id'=>$id
        ])->delete();

        User::where('id',$id)->delete();
        Session::flash('success_message','Admin user has been deleted successfully');
        return redirect()->back();
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('admin/login')->with('success_message','You are logged out successfully');
    }


}
