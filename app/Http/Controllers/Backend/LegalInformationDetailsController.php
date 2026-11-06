<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\LegalInformation;
use App\Model\LegalInformationDetail;
use Auth;

class LegalInformationDetailsController extends Controller
{
    public function view()
    {
        $allData = LegalInformationDetail::with('legalInformation')->orderBy('serial', 'asc')->get();
        return view('backend.legal_information_details.legal_details_view', compact('allData'));
    }

    public function add()
    {
        $legalInformations = LegalInformation::all();
        return view('backend.legal_information_details.legal_details_add', compact('legalInformations'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'legal_information_id' => 'required|integer',
            'title_bn'             => 'nullable|string|max:255',
            'title_en'             => 'nullable|string|max:255',
            'description_en'       => 'nullable',
            'serial'               => 'nullable|integer',
        ]);

        $data = new LegalInformationDetail();
        $data->legal_information_id = $request->legal_information_id;
        $data->title_bn             = $request->title_bn;
        $data->title_en             = $request->title_en;
        $data->description_en       = $request->description_en;
        $data->serial               = $request->serial;
        $data->created_by           = Auth::user()->id;
        $data->save();

        return redirect()->route('legal-information-details.view')->with('success', 'Detail Successfully Inserted');
    }

    public function edit($id)
    {
        $editData = LegalInformationDetail::find($id);
        $legalInformations = LegalInformation::all();
        return view('backend.legal_information_details.legal_details_add', compact('editData', 'legalInformations'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'legal_information_id' => 'required|integer',
            'title_bn'             => 'nullable|string|max:255',
            'title_en'             => 'nullable|string|max:255',
            'description_en'       => 'nullable',
            'serial'               => 'nullable|integer',
        ]);

        $data = LegalInformationDetail::find($id);
        $data->legal_information_id = $request->legal_information_id;
        $data->title_bn             = $request->title_bn;
        $data->title_en             = $request->title_en;
        $data->description_en       = $request->description_en;
        $data->serial               = $request->serial;
        $data->updated_by           = Auth::user()->id;
        $data->save();

        return redirect()->route('legal-information-details.view')->with('success', 'Detail Successfully Updated');
    }


    public function delete(Request $request)
    {
        $data = LegalInformationDetail::find($request->id);
        if($data){
            $data->delete();
        }

        return redirect()->route('legal-information-details.view')->with('success', 'Detail Successfully Deleted');
    }
}
