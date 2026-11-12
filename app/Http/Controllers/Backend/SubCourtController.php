<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\SubCourt;
use App\Model\Court;
use Auth;

class SubCourtController extends Controller
{
    // ১. View List
    public function view()
    {
        $data['allData'] = SubCourt::leftJoin('courts', 'sub_courts.court_id', '=', 'courts.id')
            ->select('sub_courts.*', 'courts.name as court_name')
            ->orderBy('sub_courts.id', 'desc')
            ->get();

        return view('backend.sub_courts.sub_courts_view', $data);
    }

    // ২. Add Form
    public function add()
    {
        $data['courts'] = Court::orderBy('name', 'asc')->get();

        return view('backend.sub_courts.sub_courts_add', $data);
    }

    // ৩. Store Data
    public function store(Request $request)
    {
        $this->validate($request, [
            'court_id'       => 'required|exists:courts,id',
            'name'           => 'required|string|max:255',
            'description_en' => 'nullable',
        ]);

        $data = new SubCourt();

        $data->court_id = $request->court_id;
        $data->name = $request->name;
        $data->description_en = $request->description_en;
        $data->created_by = Auth::user()->id;

        $data->save();

        return redirect()->route('sub-courts.view')
            ->with('success', 'Data Inserted successfully');
    }

    // ৪. Edit Form
    public function edit($id)
    {
        $data['editData'] = SubCourt::findOrFail($id);
        $data['courts'] = Court::orderBy('name', 'asc')->get();

        return view('backend.sub_courts.sub_courts_add', $data);
    }

    // ৫. Update Data
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'court_id'       => 'required|exists:courts,id',
            'name'           => 'required|string|max:255',
            'description_en' => 'nullable',
        ]);

        $data = SubCourt::findOrFail($id);

        $data->court_id = $request->court_id;
        $data->name = $request->name;
        $data->description_en = $request->description_en;
        $data->updated_by = Auth::user()->id;

        $data->save();

        return redirect()->route('sub-courts.view')
            ->with('success', 'Data Updated successfully');
    }

    // ৬. Delete Data
    public function delete(Request $request)
    {
        $data = SubCourt::find($request->id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('sub-courts.view')
            ->with('success', 'Data Deleted successfully');
    }
}