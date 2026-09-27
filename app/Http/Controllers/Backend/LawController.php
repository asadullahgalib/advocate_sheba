<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Law;
use Auth;

class LawController extends Controller
{
    // ১. View List
    public function view()
    {
        $allData = Law::all();
        return view('backend.laws.laws_view', compact('allData'));
    }

    public function add()
    {
        return view('backend.laws.laws_add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title_en'       => 'required|string|max:255',
            'description_en' => 'required',
        ]);

        $data = new Law();
        $data->title_en = $request->title_en;
        $data->description_en = $request->description_en;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('laws.view')->with('success', 'Successfully Inserted');
    }

    public function edit($id)
    {
        $editData = Law::find($id);
        return view('backend.laws.laws_add', compact('editData'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title_en'       => 'required|string|max:255',
            'description_en' => 'required',
        ]);

        $data = Law::find($id);
        $data->title_en = $request->title_en;
        $data->description_en = $request->description_en;
        $data->updated_by = Auth::user()->id;
        $data->save();

        return redirect()->route('laws.view')->with('success', 'Successfully Updated');
    }

    public function delete(Request $request)
    {
        $data = Law::find($request->id);
        if($data){
            $data->delete();
        }

        return redirect()->route('laws.view')->with('success', 'Successfully Deleted');
    }
}
