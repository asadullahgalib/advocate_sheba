<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Megazine;
use Auth;
use Image;

class MegazineController extends Controller
{
    public function view(){
        $data['allData'] = Megazine::orderBy('serial','asc')->orderBy('id','desc')->get();
        return view('backend.megazines.megazines_view', $data);
    }

    public function add(){
        return view('backend.megazines.megazines_add');
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
        ]);

        $data = new Megazine();
        $data->title = $request->title;
        $data->link = $request->link;
        $data->serial = $request->serial;
        $data->created_by = Auth::user()->id;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            Image::make($file)->resize(512, 512)->save(public_path('uploads/megazine_images/'.$filename));
            $data->image = $filename;
        }

        $data->save();

        return redirect()->route('megazines.view')->with('success','Data Inserted successfully');
    }

    public function edit($id){
        $data['editData'] = Megazine::find($id);
        return view('backend.megazines.megazines_add', $data);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
        ]);

        $data = Megazine::find($id);
        $data->title = $request->title;
        $data->link = $request->link;
        $data->serial = $request->serial;
        $data->updated_by = Auth::user()->id;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('uploads/megazine_images/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            Image::make($file)->resize(512, 512)->save(public_path('uploads/megazine_images/'.$filename));
            $data->image = $filename;
        }

        $data->save();

        return redirect()->route('megazines.view')->with('success','Data updated successfully');
    }

    public function delete(Request $request){
        $data = Megazine::find($request->id);

        @unlink(public_path('uploads/megazine_images/'.$data->image));
        $data->delete();

        return redirect()->route('megazines.view')->with('success','Data Deleted successfully');
    }
}