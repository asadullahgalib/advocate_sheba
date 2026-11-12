<?php

namespace App\Http\Controllers\Backend\Setups;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Designation;
use App\Model\Contact;
use Auth;
use PDF;

class DesignationController extends Controller
{
    public function view()
    {
        $designations = Designation::all();

        return view('backend.setups.designation.designation-view', compact('designations'));
    }

    public function add()
    {
        return view('backend.setups.designation.designation-add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:designations,name',
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'description' => 'required|string',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keyword' => 'required|string',
        ]);

        $designations = new Designation();
        $designations->name = $request->name;
        $designations->title = $request->title;
        $designations->icon = $request->icon;
        $designations->description = $request->description;
        $designations->meta_title = $request->meta_title;
        $designations->meta_description = $request->meta_description;
        $designations->meta_keyword = $request->meta_keyword;
        $designations->created_by = Auth::user()->id;
        $designations->save();

        return redirect()->route('human-resource.hrm.designation.view')
            ->with('success', 'Designation has been created successfully!');
    }

    public function edit($id)
    {
        $designations = Designation::find($id);

        return view('backend.setups.designation.designation-add', compact('designations'));
    }

    public function update(Request $request, $id)
    {
        $designations = Designation::find($id);

        $this->validate($request, [
            'name' => 'required|string|max:255|unique:designations,name,'.$designations->id,
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'description' => 'required|string',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keyword' => 'required|string',
        ]);

        $designations->name = $request->name;
        $designations->title = $request->title;
        $designations->icon = $request->icon;
        $designations->description = $request->description;
        $designations->meta_title = $request->meta_title;
        $designations->meta_description = $request->meta_description;
        $designations->meta_keyword = $request->meta_keyword;
        $designations->updated_by = Auth::user()->id;
        $designations->save();

        return redirect()->route('human-resource.hrm.designation.view')
            ->with('success', 'Designation has been updated successfully!');
    }

    public function delete(Request $request)
    {
        $designations = Designation::find($request->id);
        $designations->delete();

        return redirect()->route('human-resource.hrm.designation.view')
            ->with('success', 'Designation has been deleted successfully!');
    }

    public function pdf()
    {
        $data['allData'] = Designation::all();
        $data['school'] = Contact::first();

        $pdf = PDF::loadView('backend.setups.pdf.designation-pdf', $data);
        $pdf->SetProtection(['copy', 'print'], '', 'pass');

        return $pdf->stream('document.pdf');
    }
}