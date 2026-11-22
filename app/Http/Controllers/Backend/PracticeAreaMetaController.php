<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\PracticeAreaMeta;
use Auth;

class PracticeAreaMetaController extends Controller
{
    public function view()
    {
        $allData = PracticeAreaMeta::orderBy('id', 'desc')->get();
        return view('backend.practice_area_meta.practice_area_meta_view', compact('allData'));
    }

    public function add()
    {
        return view('backend.practice_area_meta.practice_area_meta_add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'meta_title'       => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keyword'     => 'required|string',
            'status'           => 'required',
        ]);

        $data = new PracticeAreaMeta();
        $data->meta_title       = $request->meta_title;
        $data->meta_description = $request->meta_description;
        $data->meta_keyword     = $request->meta_keyword;
        $data->status           = $request->status;
        $data->save();

        return redirect()->route('practice-area-meta.view')
            ->with('success', 'Data Inserted successfully');
    }

    public function edit($id)
    {
        $editData = PracticeAreaMeta::find($id);
        return view('backend.practice_area_meta.practice_area_meta_add', compact('editData'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'meta_title'       => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keyword'     => 'required|string',
            'status'           => 'required',
        ]);

        $data = PracticeAreaMeta::find($id);
        $data->meta_title       = $request->meta_title;
        $data->meta_description = $request->meta_description;
        $data->meta_keyword     = $request->meta_keyword;
        $data->status           = $request->status;
        $data->save();

        return redirect()->route('practice-area-meta.view')
            ->with('success', 'Data updated successfully');
    }

    public function delete(Request $request)
    {
        $data = PracticeAreaMeta::find($request->id);
        if ($data) {
            $data->delete();
        }
        return redirect()->route('practice-area-meta.view')
            ->with('success', 'Data Deleted successfully');
    }
}