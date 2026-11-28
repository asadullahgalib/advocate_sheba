<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Model\Practice;
use Image;
use Auth;

class PracticeAreaController extends Controller
{
    // ==========================================
    // Helper Methods
    // ==========================================

    // ছবি আপলোড (পুরনো ছবি থাকলে unlink করবে) - নতুন ছবির নাম return করবে
    private function uploadImage($request, $oldImage = null)
    {
        $destinationPath = public_path('uploads/practice_images/');

        // Folder না থাকলে create হবে
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
        }

        // পুরনো ছবি ডিলিট
        if (!empty($oldImage)) {
            $oldPath = $destinationPath . $oldImage;
            if (file_exists($oldPath) && is_file($oldPath)) {
                unlink($oldPath);
            }
        }

        // নতুন ছবি Resize + Save
        $image = $request->file('image');
        $imageName = time() . rand(100, 999) . '.' . $image->getClientOriginalExtension();

        Image::make($image)
            ->resize(500, 500)
            ->save($destinationPath . $imageName);

        return $imageName;
    }

    // ==========================================
    // CRUD
    // ==========================================

    // ১. View List (নতুন ডেটা সবার উপরে)
    public function view()
    {
        $allData = Practice::orderBy('id', 'desc')->get();
        return view('backend.setups.practice_area.practice_view', compact('allData'));
    }

    // ২. Add Form
    public function add()
    {
        return view('backend.setups.practice_area.practice_add');
    }

    // ৩. Store Data
    public function store(Request $request)
    {
        $request->merge(['name' => trim($request->name)]);

        $this->validate($request, [
            'name'        => 'required|string|max:255|unique:practices,name',
            'image'       => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'description' => 'required|string',
        ], [
            'name.required'        => 'Practice Area এর নাম দিতে হবে',
            'name.unique'          => 'এই নামটি আগে থেকেই আছে',
            'image.required'       => 'ছবি দিতে হবে',
            'description.required' => 'Description দিতে হবে',
        ]);

        $data = new Practice();
        $data->name = $request->name;
        $data->description = $request->description;
        $data->created_by = Auth::user()->id;
        $data->image = $this->uploadImage($request);
        $data->save();

        return redirect()->route('practice-area.view')->with('success', 'Practice Area Successfully Inserted');
    }

    // ৪. Edit Form
    public function edit($id)
    {
        $editData = Practice::findOrFail($id);
        return view('backend.setups.practice_area.practice_add', compact('editData'));
    }

    // ৫. Update Data
    public function update(Request $request, $id)
    {
        $request->merge(['name' => trim($request->name)]);

        $data = Practice::findOrFail($id);

        // আগের ছবি থাকলে নতুন ছবি optional, না থাকলে required
        $imageRule = !empty($data->image) ? 'nullable' : 'required';

        $this->validate($request, [
            'name'        => 'required|string|max:255|unique:practices,name,' . $id,
            'image'       => $imageRule . '|image|mimes:jpeg,png,jpg,webp|max:2048',
            'description' => 'required|string',
        ], [
            'name.required'        => 'Practice Area এর নাম দিতে হবে',
            'name.unique'          => 'এই নামটি আগে থেকেই আছে',
            'image.required'       => 'ছবি দিতে হবে',
            'description.required' => 'Description দিতে হবে',
        ]);

        $data->name = $request->name;
        $data->description = $request->description;
        $data->modified_by = Auth::user()->id;

        if ($request->hasFile('image')) {
            $data->image = $this->uploadImage($request, $data->image);
        }

        $data->save();

        return redirect()->route('practice-area.view')->with('success', 'Practice Area Successfully Updated');
    }

    // ৬. Delete Data
    public function delete(Request $request, $id = null)
    {
        $id = $id ? $id : $request->id;
        $data = Practice::find($id);

        if ($data) {
            try {
                $image = $data->image;
                $data->delete();

                // ডিলিট সফল হলে তবেই ছবি মুছবে
                if (!empty($image)) {
                    $imagePath = public_path('uploads/practice_images/' . $image);
                    if (file_exists($imagePath) && is_file($imagePath)) {
                        unlink($imagePath);
                    }
                }
            } catch (QueryException $e) {
                return redirect()->route('practice-area.view')
                    ->with('error', 'এই Practice Area টি অন্য জায়গায় (যেমন Advocate) ব্যবহার হচ্ছে, তাই ডিলিট করা যাবে না।');
            }
        }

        return redirect()->route('practice-area.view')->with('success', 'Practice Area Successfully Deleted');
    }
}