<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Philosophy;
use Auth;

class PhilosophyController extends Controller
{
    // ১. View List
    public function view()
    {
        $allData = Philosophy::orderBy('id', 'desc')->get();
        return view('backend.philosophies.philosophies_view', compact('allData'));
    }

    // ২. Add Form
    public function add()
    {
        return view('backend.philosophies.philosophies_add');
    }

    // ৩. Store Data
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'          => 'required|string|max:255',
            'description_en' => 'required',
        ]);

        $data = new Philosophy();
        $data->title = $request->title;
        $data->description_en = $request->description_en;
        $data->status = isset($request->status) ? $request->status : 1;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('philosophies.view')
            ->with('success', 'Data Inserted successfully');
    }

    // ৪. Edit Form
    public function edit($id)
    {
        $editData = Philosophy::find($id);

        return view('backend.philosophies.philosophies_add', compact('editData'));
    }

    // ৫. Update Data
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'          => 'required|string|max:255',
            'description_en' => 'required',
        ]);

        $data = Philosophy::find($id);
        $data->title = $request->title;
        $data->description_en = $request->description_en;
        $data->status = isset($request->status) ? $request->status : 1;
        $data->updated_by = Auth::user()->id;
        $data->save();

        return redirect()->route('philosophies.view')
            ->with('success', 'Data updated successfully');
    }

    // ৬. Delete Data
    public function delete(Request $request)
    {
        $data = Philosophy::find($request->id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('philosophies.view')
            ->with('success', 'Data Deleted successfully');
    }
}