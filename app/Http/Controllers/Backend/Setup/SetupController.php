<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\District;
use Auth;
use Image;

class SetupController extends Controller
{
    // ১. View District List
    public function viewDistrict()
    {
        $allData = District::all();
        return view('backend.setup.district-view', compact('allData'));
    }

    // ২. Add District Form
    public function addDistrict()
    {
        return view('backend.setup.district-add');
    }

    // ৩. Store District Data
    public function storeDistrict(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:districts,name',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $district = new District();
        $district->name = $request->name;
        // $district->division_id = 1; 

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/district_images'), $filename);
            $img = Image::make(public_path('uploads/district_images/' . $filename));
            $img->resize(200, 90)->save(public_path('uploads/district_images/' . $filename));
            
            $district->image = $filename;
        }

        $district->created_by = Auth::id();
        $district->save();

        return redirect()->route('setup.district.view')->with('success', 'Successfully Inserted');
    }

    // ৪. Edit District Form
    public function editDistrict($id)
    {
        $editData = District::find($id);
        return view('backend.setup.district-add', compact('editData'));
    }

    // ৫. Update District Data
    public function updateDistrict(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:districts,name,' . $id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $district = District::find($id);
        $district->name = $request->name;
        // $district->division_id = 1; 
        
        if ($request->file('image')) {
            $file = $request->file('image');
            if (!empty($district->image) && file_exists(public_path('uploads/district_images/' . $district->image))) {
                @unlink(public_path('uploads/district_images/' . $district->image));
            }
            
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/district_images'), $filename);
            $img = Image::make(public_path('uploads/district_images/' . $filename));
            $img->resize(200, 90)->save(public_path('uploads/district_images/' . $filename));
            
            $district->image = $filename;
        }

        $district->modified_by = Auth::id();
        $district->save();

        return redirect()->route('setup.district.view')->with('success', 'Successfully Updated');
    }
}
