<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siteintro;
use App\Models\Image;
use App\Models\Social;
use Session;

class SiteinfoController extends Controller
{
    public function site_identity(Request $request){
        $site_identity=Siteintro::where('id',1)->first();
        $title='Site Identity';
        //dd($site_identity);
        if($request->isMethod('post')){
            $data=$request->all();
            //dd($data);
            $site=Siteintro::where('id',1)->update([
                'site_name'=>$data['site_name'],
                'description'=>$data['description']
            ]);
            Session::flash('success_message','Site Identity has been updated successfully');
            return redirect()->back();
        }
       return view('admin.site.site_identity')->with(compact('site_identity','title'));
    }

    public function site_identity_siteicon(Request $request,$id=null){
       // dd($id);
        $iconint=Siteintro::with('site_icon')->where('id',$id)->first();
        if(!empty($iconint->site_icon)){
            $picpath=$iconint->site_icon->url;
        }
        if ($request->isMethod('post')) {
            //echo $request->hasFile('admin_profile'); die;
            $data=$request->all();
            //dd($data);
            $icon=Siteintro::first();
            //dd($icon->id);
           // Add Image
           //dd($id);
            $iconImage=Image::where([
            'imageable_type'=>'App\Models\Siteintro',
            'imageable_id'=>1
            ])->first();
            
            //dd($iconImage);
            if($iconImage){
                
                $img_path = 'storage/images/admin/site_icon/';
                // Delete large image from folder if exists
                if (file_exists($img_path.$iconImage->url)) {
                    //dd('ghgjgh');
                    unlink($img_path.$iconImage->url);
                }
                
                //$ext=$request->site_icon_image->extension();
                $image_name=$data['site_icon_image'];
               
                //dd($image_name);
                $image_path = $request->file('site_icon_image')->store('images/admin/site_icon', 'public');
                //dd($image_path);
                //dd($icon->id);
                $image=Image::where([
                 'imageable_type'=>'App\Models\Siteintro',
                 'imageable_id'=>1
                 ])->update([
                 'url'=>$image_path,
                 'imageable_type'=>'App\Models\Siteintro',
                 'imageable_id'=>$icon->id
                 ]);
               if($image){

                   Session::flash('success_message','Profile Picture has been changed successfully!');
                   return redirect()->back();
               }else{
                   dd('something wrong');
               }
            }
            else
            {
                //$image_name=$request->site_icon_image->extension();
                $image_name=$data['site_icon_image'];
                //dd($image_name);
                
                $image_path = $request->file('site_icon_image')->store('images/admin/site_icon', 'public');;
                 $image=Image::create([
                     'url'=>$image_path,
                     'imageable_type'=>'App\Models\Siteintro',
                     'imageable_id'=>$icon->id
                 ]);
                // End Add Image
                 Session::flash('success_message','Site Icon has been added successfully!');
                 return redirect()->back(); 
            }
           
        }
        return view('admin.site.site_icon')->with(compact('picpath'));
    }
    // site_identity_logo
    public function site_identity_logo(Request $request,$id=null){
        
            // dd($id);
             $logoint=Siteintro::with('logo')->where('id',2)->first();
             if(!empty($logoint->logo)){
                 $picpath=$logoint->logo->url;
             }else{
                 $picpath='';
             }
             if ($request->isMethod('post')) {
                 //echo $request->hasFile('admin_profile'); die;
                 $data=$request->all();
                 //dd($data);
                 $logo=Siteintro::where('id',2)->first();
                 //dd($icon->id);
                // Add Image
                //dd($id);
                 $logoImage=Image::where([
                 'imageable_type'=>'App\Models\Siteintro',
                 'imageable_id'=>2
                 ])->first();
                 
                 //dd($iconImage);
                 if($logoImage){
                     
                     $img_path = 'storage/images/admin/logo/';
                     // Delete large image from folder if exists
                     if (file_exists($img_path.$iconImage->url)) {
                         //dd('ghgjgh');
                         unlink($img_path.$iconImage->url);
                     }
                     
                     //$ext=$request->site_icon_image->extension();
                     $image_name=$data['logo_image'];
                    
                     //dd($image_name);
                     $image_path = $request->file('logo_image')->store('images/admin/logo', 'public');
                     //dd($image_path);
                     //dd($icon->id);
                     $image=Image::where([
                      'imageable_type'=>'App\Models\Siteintro',
                      'imageable_id'=>2
                      ])->update([
                      'url'=>$image_path,
                      'imageable_type'=>'App\Models\Siteintro',
                      'imageable_id'=>$logo->id
                      ]);
                    if($image){
     
                        Session::flash('success_message','Logo has been changed successfully!');
                        return redirect()->back();
                    }else{
                        dd('something wrong!contact with developer');
                    }
                 }
                 else
                 {
                     //$image_name=$request->site_icon_image->extension();
                     $image_name=$data['logo_image'];
                     //dd($image_name);
                     
                     $image_path = $request->file('logo_image')->store('images/admin/logo', 'public');;
                      $image=Image::create([
                          'url'=>$image_path,
                          'imageable_type'=>'App\Models\Siteintro',
                          'imageable_id'=>$logo->id
                      ]);
                     // End Add Image
                      Session::flash('success_message','Site Icon has been added successfully!');
                      return redirect()->back(); 
                 }
                
             }
             return view('admin.site.logo')->with(compact('picpath'));
         
    }

    // social advertisement
    public function social_advertisement(Request $request,$id=null){
        $select_social=Social::where('id',$id)->first();
        $description="Add Social Media Platform to advertise your website into social media to your friends, family and colleagues";
        if ($id=='') {
            $title='Add Social';
            if($request->isMethod('post')){
                $data=$request->all();
                //dd($data);
                $social=Social::create([
                   'social_class'=>$data['social_class'],
                   'social_url'=>$data['social_url']
                ]);
                Session::flash('success_message','Social platform has been created successfully');
                return redirect()->back();
    
            }
        } else {
            $title='Update Social';
            if($request->isMethod('post')){
                $data=$request->all();
                //dd($data);
                $social=Social::where('id',$id)->update([
                   'social_class'=>$data['social_class'],
                   'social_url'=>$data['social_url']
                ]);
                Session::flash('success_message','Social platform has been created successfully');
                return redirect()->back();
    
            }
            
        }
        return view('admin.site.social')->with(compact('title','description','select_social'));
    }
    public function view_social(){
        $social=Social::get();
        return view('admin.site.social_view')->with(compact('social'));
    }

    public function delete_social($id){
        Social::where('id',$id)->delete();
        Session::flash('success_message','Social platform has been deleted successfully');
        return redirect()->back();
    }
}
