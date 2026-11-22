<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\LocationMeta;
use Auth;

class LocationMetaController extends Controller
{
    public function view()
    {
        $allData = LocationMeta::orderBy('id', 'desc')->get();
        return view('backend.location_meta.location_meta_view', compact('allData'));
    }

    public function add()
    {
        return view('backend.location_meta.location_meta_add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'meta_title'       => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keyword'     => 'required|string',
            'status'           => 'required',
        ]);

        $data = new LocationMeta();
        $data->meta_title       = $request->meta_title;
        $data->meta_description = $request->meta_description;
        $data->meta_keyword     = $request->meta_keyword;
        $data->status           = $request->status;
        $data->save();

        return redirect()->route('location-meta.view')
            ->with('success', 'Data Inserted successfully');
    }

    public function edit($id)
    {
        $editData = LocationMeta::find($id);
        return view('backend.location_meta.location_meta_add', compact('editData'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'meta_title'       => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keyword'     => 'required|string',
            'status'           => 'required',
        ]);

        $data = LocationMeta::find($id);
        $data->meta_title       = $request->meta_title;
        $data->meta_description = $request->meta_description;
        $data->meta_keyword     = $request->meta_keyword;
        $data->status           = $request->status;
        $data->save();

        return redirect()->route('location-meta.view')
            ->with('success', 'Data updated successfully');
    }

    public function delete(Request $request)
    {
        $data = LocationMeta::find($request->id);
        if ($data) {
            $data->delete();
        }
        return redirect()->route('location-meta.view')
            ->with('success', 'Data Deleted successfully');
    }
}