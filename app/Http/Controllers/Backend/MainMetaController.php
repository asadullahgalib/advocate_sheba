<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\MainMeta;
use Auth;

class MainMetaController extends Controller
{
    // View list
    public function view()
    {
        $allData = MainMeta::orderBy('id', 'desc')->get();
        return view('backend.main_meta.main_meta_view', compact('allData'));
    }

    // Add form
    public function add()
    {
        return view('backend.main_meta.main_meta_add');
    }

    // Store
    public function store(Request $request)
    {
        $this->validate($request, [
            'meta_title'       => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keyword'     => 'required|string',
            'status'           => 'required',
        ]);

        $data = new MainMeta();
        $data->meta_title       = $request->meta_title;
        $data->meta_description = $request->meta_description;
        $data->meta_keyword     = $request->meta_keyword;
        $data->status           = $request->status;
        $data->save();

        return redirect()->route('main-meta.view')
            ->with('success', 'Data Inserted successfully');
    }

    // Edit form
    public function edit($id)
    {
        $editData = MainMeta::find($id);
        return view('backend.main_meta.main_meta_add', compact('editData'));
    }

    // Update
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'meta_title'       => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keyword'     => 'required|string',
            'status'           => 'required',
        ]);

        $data = MainMeta::find($id);
        $data->meta_title       = $request->meta_title;
        $data->meta_description = $request->meta_description;
        $data->meta_keyword     = $request->meta_keyword;
        $data->status           = $request->status;
        $data->save();

        return redirect()->route('main-meta.view')
            ->with('success', 'Data updated successfully');
    }

    // Delete
    public function delete(Request $request)
    {
        $data = MainMeta::find($request->id);
        if ($data) {
            $data->delete();
        }
        return redirect()->route('main-meta.view')
            ->with('success', 'Data Deleted successfully');
    }
}