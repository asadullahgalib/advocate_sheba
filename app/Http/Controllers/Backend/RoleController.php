<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Role;
use DB;
use Auth;

class RoleController extends Controller
{
    public function view(){
    	$data['allData'] = Role::where('mail_status','1')->get();
    	return view('backend.user.view-role',$data);
    }

    public function add(){
        return view('backend.user.add-role');
    }

    public function store(Request $request){
    	$this->validate($request,[
    		'name' => 'required|unique:roles,name'
    	]);
    	$data = new Role();
    	$data->name = $request->name;
        $data->mail_status = '1';
    	$data->save();
    	return redirect()->route('user.role')->with('success','Data Inserted successfully');
    }

    public function edit($id){
        $editData = Role::find($id);
        // dd($editData);
        return view('backend.user.add-role',compact('editData'));
    }

    public function update(Request $request,$id){
        $data = Role::find($id);
        $this->validate($request,[
    		'name' => 'required|unique:roles,name,'.$data->id
    	]);
    	$data->name = $request->name;
    	$data->save();
        return redirect()->route('user.role')->with('success','Data updated successfully');
    }

    public function delete(Request $request){
        $data = Role::find($request->id);
        $data->delete();
        return redirect()->route('user.role')->with('success','Data Deleted successfully');
    }
}
