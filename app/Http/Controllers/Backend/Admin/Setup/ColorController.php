<?php

namespace App\Http\Controllers\Backend\Admin\Setup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Setup\DashboardColor;
use Session;
use Auth;

class ColorController extends Controller
{
    public function index(){
        $allData = DashboardColor::where('status','1')->get();
        return view('backend.admin.setup.dashboard-color-view', compact('allData'));
    }

    public function add(){
        return view('backend.admin.setup.dashboard-color-add');
    }

    public function store(Request $request){
        $role = New DashboardColor();
        $role->usertype = $request->usertype;
        $role->navbarbgcode = $request->navbarbgcode;
        $role->navbartxtcode = $request->navbartxtcode;
        $role->childnavbarbgcode = $request->childnavbarbgcode;
        $role->childnavbartxtcode = $request->childnavbartxtcode;
        $role->tablebgcode = $request->tablebgcode;
        $role->tabletxtcode = $request->tabletxtcode;
        $role->created_by = Auth::user()->id;
        $role->save();
        return redirect()->route('setup.color.view')->with('success', 'Data successully inserted');
    }

    public function edit($id){
        $editData = DashboardColor::find($id);
        return view('backend.admin.setup.dashboard-color-add', compact('editData'));
    }

    public function update(Request $request, $id){
    	$role = DashboardColor::find($id);
        $role->usertype = $request->usertype;
        $role->navbarbgcode = $request->navbarbgcode;
        $role->navbartxtcode = $request->navbartxtcode;
        $role->childnavbarbgcode = $request->childnavbarbgcode;
        $role->childnavbartxtcode = $request->childnavbartxtcode;
        $role->tablebgcode = $request->tablebgcode;
        $role->tabletxtcode = $request->tabletxtcode;
        $role->created_by = Auth::user()->id;
        $role->save();
        return redirect()->route('setup.color.view')->with('success', 'Data successully updated');
    }

    public function delete($id){
    	dd('success');
    }
}
