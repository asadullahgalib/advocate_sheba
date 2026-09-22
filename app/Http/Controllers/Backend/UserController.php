<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\UserLog;
use App\Model\Role;
use Auth;

class UserController extends Controller
{
    public function view(){
    	$data['allData'] = User::where('user_category','admin')->get();
    	return view('backend.user.view-user',$data);
    }

    public function add(){
        $data['roles'] = Role::where('mail_status','1')->get();
    	return view('backend.user.add-user',$data);
    }

    public function store(Request $request){
    	$this->validate($request,[
    		'email'=>'required|unique:users,email'
    	]);
    	$data = new User();
    	$data->usertype = 'admin';
        $data->user_category = 'admin';
        $data->role = $request->role;
    	$data->name = $request->name;
    	$data->email = $request->email;
        $data->status = $request->status;
    	$data->password = bcrypt($request->password);
    	$data->save();
    	return redirect()->route('user')->with('success','Data Inserted successfully');
    }

    public function edit($id){
        $data['editData'] = User::find($id);
        $data['roles'] = Role::where('mail_status','1')->get();
        return view('backend.user.edit-user',$data);
    }

    public function update(Request $request,$id){
        $data = User::find($id);
        $this->validate($request,[
            'email'=>'required|unique:users,email,'.$data->id
        ]);
        $data->role = $request->role;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->status = $request->status;
        $data->save();
        return redirect()->route('user')->with('success','Data updated successfully');
    }

    public function delete(Request $request){
        $user = User::find($request->id);
        if (file_exists('public/upload/user_images/' . $user->image) AND ! empty($user->image)) {
            unlink('public/upload/user_images/' . $user->image);
        }
        $user->delete();
        return redirect()->route('user')->with('success','Data Deleted successfully');
    }

    public function UserLog(){
        $data['allData'] = UserLog::orderBy('id','desc')->get();
        return view('backend.user.view-user-log',$data);
    }
}
