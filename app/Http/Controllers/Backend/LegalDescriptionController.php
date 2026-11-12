<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\LegalProfessionalDetail;
use App\Model\Designation;
use Auth;

class LegalDescriptionController extends Controller
{
    public function view()
    {
        $data['allData'] = LegalProfessionalDetail::with('designation')->orderBy('sort', 'asc')->get();
        return view('backend.legal_professional_details.view', $data);
    }

    public function add()
    {
        $data['designations'] = Designation::where('status', 1)->orderBy('name', 'asc')->get();
        return view('backend.legal_professional_details.add', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'designation_id'   => 'required|exists:designations,id',
            'sort'             => 'required|integer|min:0',
            'title'            => 'required|string|max:255',
            'icon'             => 'required|string|max:255',
            'sub_title'        => 'required|string',
            'description_en'   => 'required|string',
            'meta_title'       => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keyword'     => 'required|string',
        ], [
            'designation_id.required'   => 'Designation select korun',
            'designation_id.exists'     => 'Selected designation valid noy',
            'sort.required'             => 'Sort dite hobe',
            'sort.integer'              => 'Sort ekta number hote hobe',
            'title.required'            => 'Title dite hobe',
            'icon.required'             => 'Icon dite hobe',
            'sub_title.required'        => 'Sub title dite hobe',
            'description_en.required'   => 'Description dite hobe',
            'meta_title.required'       => 'Meta title dite hobe',
            'meta_description.required' => 'Meta description dite hobe',
            'meta_keyword.required'     => 'Meta keyword dite hobe',
        ]);

        $data = new LegalProfessionalDetail();
        $data->designation_id = $request->designation_id;
        $data->icon = $request->icon;
        $data->title = $request->title;
        $data->sub_title = $request->sub_title;
        $data->description_en = $request->description_en;
        $data->sort = $request->sort;
        $data->meta_title = $request->meta_title;
        $data->meta_description = $request->meta_description;
        $data->meta_keyword = $request->meta_keyword;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('legal-professional-details.view')->with('success', 'Data Inserted successfully');
    }

    public function edit($id)
    {
        $data['editData'] = LegalProfessionalDetail::find($id);
        $data['designations'] = Designation::where('status', 1)->orderBy('name', 'asc')->get();
        return view('backend.legal_professional_details.add', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'designation_id'   => 'required|exists:designations,id',
            'sort'             => 'required|integer|min:0',
            'title'            => 'required|string|max:255',
            'icon'             => 'required|string|max:255',
            'sub_title'        => 'required|string',
            'description_en'   => 'required|string',
            'meta_title'       => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keyword'     => 'required|string',
        ], [
            'designation_id.required'   => 'Designation select korun',
            'designation_id.exists'     => 'Selected designation valid noy',
            'sort.required'             => 'Sort dite hobe',
            'sort.integer'              => 'Sort ekta number hote hobe',
            'title.required'            => 'Title dite hobe',
            'icon.required'             => 'Icon dite hobe',
            'sub_title.required'        => 'Sub title dite hobe',
            'description_en.required'   => 'Description dite hobe',
            'meta_title.required'       => 'Meta title dite hobe',
            'meta_description.required' => 'Meta description dite hobe',
            'meta_keyword.required'     => 'Meta keyword dite hobe',
        ]);

        $data = LegalProfessionalDetail::find($id);
        $data->designation_id = $request->designation_id;
        $data->icon = $request->icon;
        $data->title = $request->title;
        $data->sub_title = $request->sub_title;
        $data->description_en = $request->description_en;
        $data->sort = $request->sort;
        $data->meta_title = $request->meta_title;
        $data->meta_description = $request->meta_description;
        $data->meta_keyword = $request->meta_keyword;
        $data->updated_by = Auth::user()->id;
        $data->save();

        return redirect()->route('legal-professional-details.view')->with('success', 'Data updated successfully');
    }

    public function delete(Request $request)
    {
        $data = LegalProfessionalDetail::find($request->id);
        $data->delete();

        return redirect()->route('legal-professional-details.view')->with('success', 'Data Deleted successfully');
    }
}