<?php

namespace App\Http\Controllers\Backend\Advocate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Designation;
use App\User;
use App\UserLog;
use App\Model\Department;
use App\Model\Role;
use App\Model\Contact;
use App\Model\Religion;
use App\Model\Logo;
use App\Model\Time;
use App\Model\Day;
use App\Model\SmsMessage;
use App\Model\Education;
use App\Model\TimeAssign;
use App\Model\Experience;
use App\Model\Achievement;
use App\Model\Speciality;
use App\Model\ProfileTime;
use App\Model\WorkPlace;
use App\Model\Chamber;
use App\Model\PhotoGallery;
use App\Model\NewsEvent;
use App\Model\VideoGallery;
use App\Model\DoctorBooking;
use App\Exports\EmployeeExport;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use PDF;
use Auth;
use DateTime;
use Image;

class AdvocateController extends Controller
{
    public function view()
    {
        $data['allData'] = User::where('user_category','advocate')->orderBy('id','desc')->get();

        return view('backend.advocate.advocate_view',$data);
    }

    public function add()
    {       
        $data['designations'] = Designation::all();
        $data['departments'] = Department::all();
        return view('backend.advocate.advocate_add',$data);
    }
    
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'email' => 'required|unique:users,email'
        ]);
        
        $user = new User();
        $user->usertype = 'admin';
        $user->user_category = 'advocate';
        $user->status = '1';
        $user->role = '2';
        $user->name = $request->name;
        $user->name_bn = $request->name_bn;
        $user->email = $request->email;
        $user->employee_type = $request->employee_type;
        $user->booking_status = $request->booking_status;
        $user->mobile = $request->mobile;
        $user->designation_id = $request->designation_id;
        $user->department_id = $request->department_id;
        $user->mbbs_fcp = $request->mbbs_fcp;
        $user->qualification = $request->qualification;
        $user->experience = $request->experience;
        $user->consultation_fee = $request->consultation_fee;
        $user->follow_up_fee = $request->follow_up_fee;
        $user->appointment_contact = $request->appointment_contact;
        $user->bkash_number = $request->bkash_number;
        $user->nagad_number = $request->nagad_number;
        $user->rocket_number = $request->rocket_number;
        $user->sort = $request->sort;
        $user->join_date = $request->join_date !== null ? date('Y-m-d', strtotime($request->join_date)) : null;
        $user->password = bcrypt(654321);

        $user->save();
        
        return redirect()->route('advocates.view')->with('success','Data inserted successfully!');
    }

    public function edit($id)
    {
        $data['editData'] = User::find($id);
        $data['designations'] = Designation::all();
        $data['departments'] = Department::all();

        return view('backend.advocate.advocate_add',$data);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $this->validate($request,[
            'email' => 'required|unique:users,email,'.$user->id
        ]);
        
        $user->name = $request->name;
        $user->name_bn = $request->name_bn;
        $user->email = $request->email;
        $user->employee_type = $request->employee_type;
        $user->booking_status = $request->booking_status;
        $user->mobile = $request->mobile;
        $user->designation_id = $request->designation_id;
        $user->department_id = $request->department_id;
        $user->mbbs_fcp = $request->mbbs_fcp;
        $user->consultation_fee = $request->consultation_fee;
        $user->follow_up_fee = $request->follow_up_fee;
        $user->qualification = $request->qualification;
        $user->experience = $request->experience;
        $user->appointment_contact = $request->appointment_contact;
        $user->bkash_number = $request->bkash_number;
        $user->nagad_number = $request->nagad_number;
        $user->rocket_number = $request->rocket_number;
        $user->sort = $request->sort;
        $user->join_date = $request->join_date !== null ? date('Y-m-d', strtotime($request->join_date)) : null;
        
        $user->save();
        
        return redirect()->route('advocates.view')->with('success','Data updated successfully!');
    }

    public function details($id) 
    {
        $data['details'] = User::find($id);
        $data['page_title'] = 'statement';
        return view('backend.advocate.advocate_details',$data);
    }

    public function officialDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['page_title'] = 'official';
        return view('backend.advocate.official_details',$data);
    }

    public function officialDetailsStore(Request $request, $id) 
    {
        $data = User::find($id);
        $data->abouts = $request->abouts;
        $data->save();

        return redirect()->back()->with('success','Data updated successfully');
    }
}
