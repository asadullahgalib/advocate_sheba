<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\LegalInformation;
use Auth;

class LegalInformationController extends Controller
{
    // ১. View List
    public function view()
    {
        $allData = LegalInformation::all();
        return view('backend.legal_information.legal_view', compact('allData'));
    }

    // ২. Add Form
    public function add()
    {
        return view('backend.legal_information.legal_add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title_en'       => 'required|string|max:255',
            'description_en' => 'required',
        ]);

        $slug = rand(0000, 9999);

        $data = new LegalInformation();
        $data->title_en = $request->title_en;
        $data->slug = Str::slug($request->title_en) . $slug . date('His');
        $data->description_en = $request->description_en;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('legal-information.view')->with('success', 'Successfully Inserted');
    }

    public function edit($id)
    {
        $editData = LegalInformation::find($id);
        return view('backend.legal_information.legal_add', compact('editData'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title_en'       => 'required|string|max:255',
            'description_en' => 'required',
        ]);

        $data = LegalInformation::find($id);
        $data->title_en = $request->title_en;

        // slug আগে থেকে থাকলে বদলাবে না (লিংক ঠিক রাখতে), ফাঁকা থাকলে শুধু তখন বানাবে
        if (empty($data->slug)) {
            $slug = rand(0000, 9999);
            $data->slug = Str::slug($request->title_en) . $slug . date('His');
        }

        $data->description_en = $request->description_en;
        $data->updated_by = Auth::user()->id;
        $data->save();

        return redirect()->route('legal-information.view')->with('success', 'Successfully Updated');
    }

    public function delete(Request $request)
    {
        $data = LegalInformation::find($request->id);
        if($data){
            $data->delete();
        }

        return redirect()->route('legal-information.view')->with('success', 'Successfully Deleted');
    }
}