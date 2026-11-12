<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\SubCourtDetail;
use App\Model\SubCourt;
use App\Model\Court;
use Auth;

class SubCourtDetailsController extends Controller
{
    // ১. View List
    public function view()
    {
        $data['allData'] = SubCourtDetail::leftJoin('courts', 'sub_court_details.court_id', '=', 'courts.id')
            ->leftJoin('sub_courts', 'sub_court_details.sub_court_id', '=', 'sub_courts.id')
            ->select('sub_court_details.*', 'courts.name as court_name', 'sub_courts.name as sub_court_name')
            ->orderBy('sub_court_details.id', 'desc')
            ->get();

        return view('backend.sub_court_details.sub_court_details_view', $data);
    }

    // ২. Add Form
    public function add()
    {
        $data['courts'] = Court::orderBy('name', 'asc')->get();

        return view('backend.sub_court_details.sub_court_details_add', $data);
    }

    // ২ক. AJAX — Court অনুযায়ী SubCourt list
    public function getSubCourts($court_id)
    {
        $subCourts = SubCourt::where('court_id', $court_id)
            ->orderBy('name', 'asc')
            ->get(['id', 'name']);

        return response()->json($subCourts);
    }

    // ৩. Store Data
    public function store(Request $request)
    {
        $this->validate($request, [
            'court_id'       => 'required|exists:courts,id',
            'sub_court_id'   => 'required|exists:sub_courts,id',
            'title'          => 'required|string|max:255',
            'description_en' => 'nullable',
        ]);

        $data = new SubCourtDetail();

        $data->court_id = $request->court_id;
        $data->sub_court_id = $request->sub_court_id;
        $data->title = $request->title;
        $data->description_en = $request->description_en;
        $data->created_by = Auth::user()->id;

        $data->save();

        return redirect()->route('sub-court-details.view')
            ->with('success', 'Data Inserted successfully');
    }

    // ৪. Edit Form
    public function edit($id)
    {
        $data['editData'] = SubCourtDetail::findOrFail($id);
        $data['courts'] = Court::orderBy('name', 'asc')->get();
        $data['subCourts'] = SubCourt::where('court_id', $data['editData']->court_id)
            ->orderBy('name', 'asc')
            ->get();

        return view('backend.sub_court_details.sub_court_details_add', $data);
    }

    // ৫. Update Data
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'court_id'       => 'required|exists:courts,id',
            'sub_court_id'   => 'required|exists:sub_courts,id',
            'title'          => 'required|string|max:255',
            'description_en' => 'nullable',
        ]);

        $data = SubCourtDetail::findOrFail($id);

        $data->court_id = $request->court_id;
        $data->sub_court_id = $request->sub_court_id;
        $data->title = $request->title;
        $data->description_en = $request->description_en;
        $data->updated_by = Auth::user()->id;

        $data->save();

        return redirect()->route('sub-court-details.view')
            ->with('success', 'Data Updated successfully');
    }

    // ৬. Delete Data
    public function delete(Request $request)
    {
        $data = SubCourtDetail::find($request->id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('sub-court-details.view')
            ->with('success', 'Data Deleted successfully');
    }
}