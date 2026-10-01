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
        $allData = District::orderBy('id','desc')->get();
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

        $imageName = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('uploads/district_images/');

            // Folder না থাকলে create হবে
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            // Resize + Save
            Image::make($image)
                ->resize(200, 90)
                ->save($destinationPath.$imageName);

            // DB তে image name save
            $district->image = $imageName;
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

        if ($request->hasFile('image')) {

            /*
            |--------------------------------------------------------------------------
            | Old Image Delete
            |--------------------------------------------------------------------------
            | শুধু তখনই unlink হবে যখন database-এ পুরাতন image-এর নাম আছে
            */
            if (!empty($data->image)) {

                $oldImage = public_path('uploads/district_images/' . $data->image);

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

            $destinationPath = public_path('uploads/district_images/');

            // Resize + Save
            Image::make($image)
                ->resize(200, 90)
                ->save($destinationPath . $imageName);

            // DB তে নতুন image name save
            $district->image = $imageName;
        }

        $district->modified_by = Auth::id();
        $district->save();

        return redirect()->route('setup.district.view')->with('success', 'Successfully Updated');
    }
}
