<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Logo;
use App\Model\Gallery;
use Image;

class LogoController extends Controller
{
    public function view(){
        $data['countLogo'] = Logo::count();
    	$data['allData'] = Logo::all();
    	return view('backend.logo.view-logo',$data);
    }

    public function add(){
    	return view('backend.logo.add-logo');
    }

    public function store(Request $request){
    	$data = new Logo();
    	$data->created_by = Auth::user()->id;
    	if ($request->file('image')){
		    $file = $request->file('image');
		    $filename =date('YmdHi').$file->getClientOriginalName();
		    $file->move(public_path('upload/logo_images'), $filename);
            $file = Image::make(public_path('upload/logo_images/').$filename);
            $file->resize(300,75)->save(public_path('upload/logo_images/').$filename);
		    $data['image']= $filename;
		}
    	$data->save();
    	return redirect()->route('site-setting.contents.logo.view')->with('success','Data Inserted successfully');
    }

    public function edit($id){
        $editData = Logo::find($id);
        return view('backend.logo.edit-logo',compact('editData'));
    }

    public function update(Request $request,$id){
        $data = Logo::find($id);
        $data->updated_by = Auth::user()->id;

        if ($request->hasFile('image')) {

            /*
            |--------------------------------------------------------------------------
            | Old Image Delete
            |--------------------------------------------------------------------------
            | শুধু তখনই unlink হবে যখন database-এ পুরাতন image-এর নাম আছে
            */
            if (!empty($data->image)) {

                $oldImage = public_path('uploads/logo_images/' . $data->image);

                if (file_exists($oldImage) && is_file($oldImage)) {
                    unlink($oldImage);
                }
            }

            /*
            |--------------------------------------------------------------------------
            | New Image Upload
            |--------------------------------------------------------------------------
            */
            $image = $request->file('image');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('uploads/logo_images/');

            // Resize + Save
            Image::make($image)
                ->resize(220, 75)
                ->save($destinationPath . $imageName);

            // DB তে নতুন image name save
            $data->image = $imageName;
        }

        if ($request->hasFile('image2')) {

            /*
            |--------------------------------------------------------------------------
            | Old Image2 Delete
            |--------------------------------------------------------------------------
            | শুধু তখনই unlink হবে যখন database-এ পুরাতন image2-এর নাম আছে
            */
            if (!empty($data->image2)) {

                $oldImage2 = public_path('uploads/dashboard_logo_images/' . $data->image2);

                if (file_exists($oldImage2) && is_file($oldImage2)) {
                    unlink($oldImage2);
                }
            }

            /*
            |--------------------------------------------------------------------------
            | New Image Upload
            |--------------------------------------------------------------------------
            */
            $image2 = $request->file('image2');

            $imageName2 = time() . '.' . $image2->getClientOriginalExtension();

            $destinationPath = public_path('uploads/dashboard_logo_images/');

            // Resize + Save
            Image::make($image2)
                ->resize(300, 300)
                ->save($destinationPath . $imageName2);

            // DB তে নতুন image2 name save
            $data->image2 = $imageName2;
        }

    	$data->save();

        return redirect()->route('site-setting.contents.logo.view')->with('success','Data updated successfully');
    }

    public function delete(Request $request){
        $logo = Logo::find($request->id);
        if (file_exists('public/upload/logo_images/' . $logo->image) AND ! empty($logo->image)) {
            unlink('public/upload/logo_images/' . $logo->image);
        }
        $logo->delete();
        return redirect()->route('site-setting.contents.logo.view')->with('success','Data Deleted successfully');
    }

    //Gallery

    public function galleryView(){
        $data['allData'] = Gallery::orderBy('id','desc')->get();
        return view('backend.logo.view-gallery',$data);
    }

    public function galleryAdd(){
        return view('backend.logo.add-gallery');
    }

    public function galleryStore(Request $request){
        $data = new Gallery();
        $data->created_by = Auth::user()->id;
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/logo_images'), $filename);
            $file = Image::make(public_path('upload/logo_images/').$filename);
            $file->resize(340,277)->save(public_path('upload/logo_images/').$filename);
            $data['image']= $filename;
        }
        $data->save();
        return redirect()->route('site-setting.gallery.view')->with('success','Data Inserted successfully');
    }

    public function galleryEdit($id){
        $editData = Gallery::find($id);
        return view('backend.logo.edit-gallery',compact('editData'));
    }

    public function galleryUpdate(Request $request,$id){
        $data = Gallery::find($id);
        $data->updated_by = Auth::user()->id;
        if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/logo_images/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/logo_images'), $filename);
            $file = Image::make(public_path('upload/logo_images/').$filename);
            $file->resize(340,277)->save(public_path('upload/logo_images/').$filename);
            $data['image']= $filename;
        }
        $data->save();
        return redirect()->route('site-setting.gallery.view')->with('success','Data updated successfully');
    }

    public function galleryDelete(Request $request){
        $logo = Gallery::find($request->id);
        if (file_exists('public/upload/logo_images/' . $logo->image) AND ! empty($logo->image)) {
            unlink('public/upload/logo_images/' . $logo->image);
        }
        $logo->delete();
        return redirect()->route('site-setting.gallery.view')->with('success','Data Deleted successfully');
    }
}
