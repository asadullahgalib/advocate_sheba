<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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

    // ২. Add Form
    public function add()
    {
        return view('backend.laws.laws_add');
    }

    // ৩. Store Data
    public function store(Request $request)
    {
        $this->validate($request, [
            'title_en'       => 'required|string|max:255',
            'description_en' => 'required',
        ]);

        $slug = rand(0000, 9999);

        $data = new Law();
        $data->title_en = $request->title_en;
        $data->slug = Str::slug($request->title_en) . $slug . date('His');
        $data->description_en = $request->description_en;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('laws.view')
            ->with('success', 'Successfully Inserted');
    }

    // ৪. Edit Form
    public function edit($id)
    {
        $editData = Law::find($id);

        return view('backend.laws.laws_add', compact('editData'));
    }

    // ৫. Update Data
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title_en'       => 'required|string|max:255',
            'description_en' => 'required',
        ]);

        $data = Law::find($id);

        $data->title_en = $request->title_en;

        // Slug আগে থেকে থাকলে পরিবর্তন হবে না
        if (empty($data->slug)) {
            $slug = rand(0000, 9999);
            $data->slug = Str::slug($request->title_en) . $slug . date('His');
        }

        $data->description_en = $request->description_en;
        $data->updated_by = Auth::user()->id;
        $data->save();

        return redirect()->route('laws.view')
            ->with('success', 'Successfully Updated');
    }

    // ৬. Delete Data
    public function delete(Request $request)
    {
        $data = Law::find($request->id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('laws.view')
            ->with('success', 'Successfully Deleted');
    }
}
