<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Image;
use Session;

class CategoryController extends Controller
{
    public function view_categories()
    {
        $categories=Category::with('category_image')->get();
        //dd($categories);
        return view('admin.categories.index')->with(compact('categories'));
    }

    public function add_category(Request $request){
        $title='Add Category';
        if($request->isMethod('post')){
            $data=$request->all();
            //dd($data);
            $category=Category::create([
              'category_name'=>$data['category_name'],
              'category_status'=>$data['category_status']
            ]);
            if($category){
               
               
                $image_path = $request->file('category_image')->store('images/admin/categories', 'public');
                   if($image_path){
                     $image=Image::create([
                        'url'=>$image_path,
                        'imageable_type'=>'App\Models\Category',
                        'imageable_id'=>$category->id
                     ]);
                       Session::flash('success_message','Category has created successfully');
                       return redirect()->back();
                   }else{
                    Session::flash('error_message','Category image is not stored');
                    return redirect()->back();
                   }
              
            }
            else{
                Session::flash('error_message','Category not created.Please try again!');
                   return redirect()->back();
            }

        }
        return view('admin.categories.create')->with(compact('title'));
    }

    public function edit_category(Request $request, $id){
        $title='Update Category';
        $categories_edit=Category::with('category_image')->where('id',$id)->first();
        //dd($categories_edit->id);
        if($request->isMethod('post')){
            $data=$request->all();
            //dd($data);
            $category=Category::where('id',$id)->update([
              'category_name'=>$data['category_name'],
              'category_status'=>$data['category_status']
            ]);
            if($category){
                Session::flash('success_message','Category has updated successfully!');
                return redirect()->back();
            }
            else{
                Session::flash('error_message','Category not created.Please try again!');
                   return redirect()->back();
            }

        }
        return view('admin.categories.update')->with(compact('title','categories_edit'));    
    }
    
    public function delete_category($id){
        $imagepath=Category::with('category_image')->where('id',$id)->first();
        $path=$imagepath->category_image->url;
        if(file_exists('storage/'.$path)){
            unlink('storage/'.$path);
        }
        $image=Image::where([
            'imageable_type'=>'App\Models\Category',
            'imageable_id'=>$id
        ])->delete();
        if($image){
            Category::where('id',$id)->delete();
            Session::flash('success_message','Category has been deleted successfully!');
            return redirect()->back();
        }else{
            Session::flash('error_message','Something wrong in image delettion!!');
            return redirect()->back();
        }
    }
}
