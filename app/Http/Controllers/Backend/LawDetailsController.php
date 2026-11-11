<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Law;
use App\Model\LawDetail;
use Auth;

class LawDetailsController extends Controller
{
    // ১. View List
    public function view()
    {
        $data['allData'] = LawDetail::leftJoin('laws', 'law_details.law_id', '=', 'laws.id')
            ->select('law_details.*', 'laws.title_en as law_title')
            ->orderBy('law_details.serial', 'asc')
            ->orderBy('law_details.id', 'desc')
            ->get();

        return view('backend.law_details.law_details_view', $data);
    }

    // ২. Add Form
    public function add()
    {
        $data['laws'] = Law::orderBy('title_en', 'asc')->get();

        return view('backend.law_details.law_details_add', $data);
    }

    // ৩. Store Data
    public function store(Request $request)
    {
        $this->validate($request, [
            'law_id'         => 'required|exists:laws,id',
            'title_bn'       => 'nullable|string|max:255',
            'title_en'       => 'nullable|string|max:255',
            'description_en' => 'nullable',
            'serial'         => 'nullable|integer',
        ]);

        $data = new LawDetail();

        $data->law_id = $request->law_id;
        $data->title_bn = $request->title_bn;
        $data->title_en = $request->title_en;
        $data->description_en = $request->description_en;
        $data->serial = $request->serial;
        $data->created_by = Auth::user()->id;

        $data->save();

        return redirect()->route('law-details.view')
            ->with('success', 'Data Inserted successfully');
    }

    // ৪. Edit Form
    public function edit($id)
    {
        $data['editData'] = LawDetail::findOrFail($id);
        $data['laws'] = Law::orderBy('title_en', 'asc')->get();

        return view('backend.law_details.law_details_add', $data);
    }

    // ৫. Update Data
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'law_id'         => 'required|exists:laws,id',
            'title_bn'       => 'nullable|string|max:255',
            'title_en'       => 'nullable|string|max:255',
            'description_en' => 'nullable',
            'serial'         => 'nullable|integer',
        ]);

        $data = LawDetail::findOrFail($id);

        $data->law_id = $request->law_id;
        $data->title_bn = $request->title_bn;
        $data->title_en = $request->title_en;
        $data->description_en = $request->description_en;
        $data->serial = $request->serial;
        $data->updated_by = Auth::user()->id;

        $data->save();

        return redirect()->route('law-details.view')
            ->with('success', 'Data Updated successfully');
    }

    // ৬. Delete Data
    public function delete(Request $request)
    {
        $data = LawDetail::find($request->id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('law-details.view')
            ->with('success', 'Data Deleted successfully');
    }
}
