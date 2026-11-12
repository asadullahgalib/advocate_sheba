<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\LegalProfessionalDetail;
use App\Model\Designation;
use Auth;

class LegalDescriptionController extends Controller
{
    // ১. Legal Professional Detail View List
    public function view()
    {
        $data['allData'] = LegalProfessionalDetail::with('designation')->orderBy('sort', 'asc')->get();

        return view('backend.legal_professional_details.view', $data);
    }

    // ২. Legal Professional Detail Add Form
    public function add()
    {
        $data['designations'] = Designation::where('status', 1)->orderBy('name', 'asc')->get();

        return view('backend.legal_professional_details.add', $data);
    }

    // ৩. Legal Professional Detail Store
    public function store(Request $request)
    {
        $this->validate($request, [
            'designation_id' => 'required|exists:designations,id',
            'sort' => 'required|integer',
            'title' => 'required',
            'icon' => 'required',
            'sub_title' => 'required',
            'description_en' => 'required',
            // 'meta_title' => 'required|string|max:255',
            // 'meta_description' => 'required|string',
            // 'meta_keyword' => 'required|string',
        ]);

        $data = new LegalProfessionalDetail();
        $data->designation_id = $request->designation_id;
        $data->sort = $request->sort;
        $data->title = $request->title;
        $data->icon = $request->icon;
        $data->sub_title = $request->sub_title;
        $data->description_en = $request->description_en;
        // $data->meta_title = $request->meta_title;
        // $data->meta_description = $request->meta_description;
        // $data->meta_keyword = $request->meta_keyword;
        $data->created_by = Auth::user()->id ?? null;
        $data->save();

        return redirect()->route('legal-professional-details.view')
            ->with('success', 'Data Inserted successfully');
    }

    // ৪. Legal Professional Detail Edit
    public function edit($id)
    {
        $data['editData'] = LegalProfessionalDetail::findOrFail($id);
        $data['designations'] = Designation::where('status', 1)->orderBy('name', 'asc')->get();

        return view('backend.legal_professional_details.add', $data);
    }

    // ৫. Legal Professional Detail Update
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'designation_id' => 'required|exists:designations,id',
            'sort' => 'required|integer',
            'title' => 'required',
            'icon' => 'required',
            'sub_title' => 'required',
            'description_en' => 'required',
            // 'meta_title' => 'required|string|max:255',
            // 'meta_description' => 'required|string',
            // 'meta_keyword' => 'required|string',
        ]);

        $data = LegalProfessionalDetail::findOrFail($id);
        $data->designation_id = $request->designation_id;
        $data->sort = $request->sort;
        $data->title = $request->title;
        $data->icon = $request->icon;
        $data->sub_title = $request->sub_title;
        $data->description_en = $request->description_en;
        // $data->meta_title = $request->meta_title;
        // $data->meta_description = $request->meta_description;
        // $data->meta_keyword = $request->meta_keyword;
        $data->updated_by = Auth::user()->id ?? null;
        $data->save();

        return redirect()->route('legal-professional-details.view')
            ->with('success', 'Data Updated successfully');
    }

    // ৬. Legal Professional Detail Delete
    public function delete(Request $request)
    {
        $data = LegalProfessionalDetail::findOrFail($request->id);
        $data->delete();

        return redirect()->route('legal-professional-details.view')
            ->with('success', 'Data Deleted successfully');
    }
}