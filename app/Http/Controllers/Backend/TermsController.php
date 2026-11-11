<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Term;
use Auth;

class TermsController extends Controller
{
    // 1. View all terms
    public function view()
    {
        $allData = Term::all();
        return view('backend.doctor.terms_view', compact('allData'));
    }

    // 2. Show Add Form
    public function add()
    {
        return view('backend.doctor.terms_add');
    }

    // 3. Store Data
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'description_en' => 'nullable|string',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keyword' => 'required|string',
        ]);

        $data = new Term();
        $data->name = $request->name;
        $data->description_en = $request->description_en;
        $data->meta_title = $request->meta_title;
        $data->meta_description = $request->meta_description;
        $data->meta_keyword = $request->meta_keyword;
        $data->created_by = Auth::user()->id ?? null;
        $data->save();

        return redirect()->route('terms.view')
            ->with('success', 'Terms inserted successfully!');
    }

    // 4. Show Edit Form
    public function edit($id)
    {
        $editData = Term::findOrFail($id);
        return view('backend.doctor.terms_add', compact('editData'));
    }

    // 5. Update Data
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'description_en' => 'nullable|string',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keyword' => 'required|string',
        ]);

        $data = Term::findOrFail($id);
        $data->name = $request->name;
        $data->description_en = $request->description_en;
        $data->meta_title = $request->meta_title;
        $data->meta_description = $request->meta_description;
        $data->meta_keyword = $request->meta_keyword;
        $data->updated_by = Auth::user()->id ?? null;
        $data->save();

        return redirect()->route('terms.view')
            ->with('success', 'Terms updated successfully!');
    }

    // 6. Delete Data
    public function delete(Request $request)
    {
        $data = Term::findOrFail($request->id);
        $data->delete();

        return redirect()->route('terms.view')
            ->with('success', 'Terms deleted successfully!');
    }
}
