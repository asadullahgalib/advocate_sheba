<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Add;
use App\Model\AddPosition;
use Auth;
use Image;

class AddsController extends Controller
{
    public function view(){
        $data['allData'] = Add::orderBy('serial','asc')->orderBy('id','desc')->get();
        return view('backend.adds.adds_view', $data);
    }

    public function add(){
        $data['positions'] = AddPosition::orderBy('id','asc')->get();
        return view('backend.adds.adds_add', $data);
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
        ]);

        $data = new Add();
        $data->add_position_id = $request->add_position_id;
        $data->title = $request->title;
        $data->link = $request->link;
        $data->serial = $request->serial;
        $data->created_by = Auth::user()->id;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            Image::make($file)->resize(1000, 300)->save(public_path('uploads/adds_images/'.$filename));
            $data->image = $filename;
        }

        $data->save();

        return redirect()->route('adds.view')->with('success','Data Inserted successfully');
    }

    public function edit($id){
        $data['editData'] = Add::find($id);
        $data['positions'] = AddPosition::orderBy('id','asc')->get();
        return view('backend.adds.adds_add', $data);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
        ]);

        $data = Add::find($id);
        $data->add_position_id = $request->add_position_id;
        $data->title = $request->title;
        $data->link = $request->link;
        $data->serial = $request->serial;
        $data->updated_by = Auth::user()->id;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('uploads/adds_images/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            Image::make($file)->resize(1000, 300)->save(public_path('uploads/adds_images/'.$filename));
            $data->image = $filename;
        }

        $data->save();

        return redirect()->route('adds.view')->with('success','Data updated successfully');
    }

    public function delete(Request $request){
        $data = Add::find($request->id);

        @unlink(public_path('uploads/adds_images/'.$data->image));
        $data->delete();

        return redirect()->route('adds.view')->with('success','Data Deleted successfully');
    }
}