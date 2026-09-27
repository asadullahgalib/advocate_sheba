<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Practice;
use Auth;

class PracticeAreaController extends Controller
{
    public function view()
    {
        $allData = Practice::all();
        return view('backend.setups.practice_area.practice_view', compact('allData'));
    }

    public function add()
    {
        return view('backend.setups.practice_area.practice_add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:practices,name',
        ]);

        $data = new Practice();
        $data->name = $request->name;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('practice-area.view')->with('success', 'Successfully Inserted');
    }

    public function edit($id)
    {
        $editData = Practice::find($id);
        return view('backend.setups.practice_area.practice_add', compact('editData'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:practices,name,' . $id,
        ]);

        $data = Practice::find($id);
        $data->name = $request->name;
        $data->modified_by = Auth::user()->id;
        $data->save();

        return redirect()->route('practice-area.view')->with('success', 'Successfully Updated');
    }

    public function delete($id)
    {
        $data = Practice::find($id);
        $data->delete();

        return redirect()->route('practice-area.view')->with('success', 'Successfully Deleted');
    }
}
