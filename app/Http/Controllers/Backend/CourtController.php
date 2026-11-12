<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Court;
use Auth;

class CourtController extends Controller
{
    // ১. View List
    public function view()
    {
        $allData = Court::all();
        return view('backend.courts.courts_view', compact('allData'));
    }

    // ২. Add Form
    public function add()
    {
        return view('backend.courts.courts_add');
    }

    // ৩. Store Data
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'             => 'required|string|max:255|unique:courts,name',
            'description_en'   => 'required',
            'meta_title'       => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keyword'     => 'required|string',
        ]);

        $data = new Court();
        $data->name = $request->name;
        
        // Auto Slug Generation
        $slug = rand(0000, 9999);
        $data->slug = Str::slug($request->name) . '-' . $slug;

        $data->icon = $request->icon;
        $data->description_en = $request->description_en;

        $data->meta_title = $request->meta_title;
        $data->meta_description = $request->meta_description;
        $data->meta_keyword = $request->meta_keyword;

        $data->status = $request->status ?? 1;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('courts.view')
            ->with('success', 'Successfully Inserted');
    }

    // ৪. Edit Form
    public function edit($id)
    {
        $editData = Court::find($id);
        return view('backend.courts.courts_add', compact('editData'));
    }

    // ৫. Update Data
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'             => 'required|string|max:255|unique:courts,name,' . $id,
            'description_en'   => 'required',
            'meta_title'       => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keyword'     => 'required|string',
        ]);

        $data = Court::find($id);

        $data->name = $request->name;

        // Slug না থাকলে জেনারেট হবে
        if (empty($data->slug)) {
            $slug = rand(0000, 9999);
            $data->slug = Str::slug($request->name) . '-' . $slug;
        }

        $data->icon = $request->icon;
        $data->description_en = $request->description_en;

        $data->meta_title = $request->meta_title;
        $data->meta_description = $request->meta_description;
        $data->meta_keyword = $request->meta_keyword;

        $data->status = $request->status ?? 1;
        $data->updated_by = Auth::user()->id;
        $data->save();

        return redirect()->route('courts.view')
            ->with('success', 'Successfully Updated');
    }

    // ৬. Delete Data
    public function delete(Request $request)
    {
        $data = Court::find($request->id);
        if ($data) {
            $data->delete();
        }
        return redirect()->route('courts.view')
            ->with('success', 'Successfully Deleted');
    }
}