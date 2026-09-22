<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Model\Division;
use App\Model\District;
use App\Model\Upazila;
use Auth;
use Image;

class SetupController extends Controller
{
	//Division
    public function viewDivision(){
		$allData=Division::all();
		return view('backend.setup.division-view',compact('allData'));
	}

	public function addDivision(){
		return view('backend.setup.division-add');
	}

	public function storeDivision(Request $request){
		$data = new Division;
		$data->name = $request->name;
        $data->created_by = Auth::user()->id;
        $data->save();
        return redirect()->route('setup.division.view')->with('success','Successfully Inserted');
	}

	public function editDivision($id){
		$editData = Division::find($id);
        return view('backend.setup.division-add',compact('editData'));
	}

	public function updateDivision(Request $request,$id){
		$data = Division::find($id);
		$data->name = $request->name;
        $data->modified_by = Auth::user()->id;
        $data->save();
        return redirect()->route('setup.division.view')->with('success','Successfully Updated');
	}

	//District
	public function viewDistrict(){
		$allData 	= District::all();
		return view('backend.setup.district-view',compact('allData'));
	}

	public function addDistrict(){
		$divisions = Division::all();
		return view('backend.setup.district-add',compact('divisions'));
	}

	public function storeDistrict(Request $request){
		$district = new District();
		$district->division_id = $request->division_id;
		$district->name = $request->name;
		$district->created_by = Auth::id();
		$district->save();
		return redirect()->route('setup.district.view')->with('success','Successfully Inserted');
	}

	public function editDistrict($id){
		$editData = District::find($id);
		$divisions=Division::all();
		return view('backend.setup.district-add',compact('editData','divisions'));
	}

	public function updateDistrict(Request $request,$id){
		$district = District::find($id);
		$district->division_id = $request->division_id;
		$district->name = $request->name;
		$district->modified_by = Auth::id();
		$district->save();
		return redirect()->route('setup.district.view')->with('success','Successfully Updated');
	}

	//Upazila
	public function viewUpazila(){
		$allData = Upazila::all();
		return view('backend.setup.upazilla-view',compact('allData'));
	}

	public function addUpazila(){
		$divisions = Division::all();
		return view('backend.setup.upazila-add',compact('divisions'));
	}

	public function storeUpazila(Request $request){
		$upazila = new Upazila();
		$upazila->division_id = $request->division_id;
		$upazila->district_id = $request->district_id;
		$upazila->name = $request->name;
		$upazila->created_by = Auth::id();
		$upazila->save();
		return redirect()->route('setup.upazila.view')->with('success','Successfully Inserted');
	}

	public function editUpazila($id){
		$editData = Upazila::find($id);
		$divisions = Division::all();
		return view('backend.setup.upazila-add',compact('editData','divisions'));
	}

	public function updateUpazila(Request $request,$id){
		$upazila = Upazila::find($id);
		$upazila->division_id = $request->division_id;
		$upazila->district_id = $request->district_id;
		$upazila->name = $request->name;
		$upazila->modified_by = Auth::id();
		$upazila->save();
		return redirect()->route('setup.upazila.view')->with('success','Successfully Updated');
	}
}
