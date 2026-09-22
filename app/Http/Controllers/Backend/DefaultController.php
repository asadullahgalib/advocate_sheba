<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\District;
use App\Model\Division;
use App\Model\Union;
use App\Model\Upazila;
use Auth;
use DB;
use App\Model\Category;

class DefaultController extends Controller
{
	public function getCategory(Request $request){
        $supplier_id = $request->supplier_id;
        $allCategory = Product::select('category_id')->with(['category'])->where('supplier_id',$supplier_id)->groupBy('category_id')->get();
        // dd($allCategory);
        return response()->json($allCategory);
    }

    public function getDistrictMaster(Request $request){
        $division_id = $request->division_id;
        $allDistrict = District::where('division_id',$division_id)->get();
        // $allCityCorporation = CityCorporation::where('division_id',$division_id)->get();
        return response()->json($allDistrict);
    }

}
