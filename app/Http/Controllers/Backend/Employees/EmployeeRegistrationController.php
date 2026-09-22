<?php

namespace App\Http\Controllers\Backend\Employees;

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

class EmployeeRegistrationController extends Controller
{
    public function payrollEmployee()
    {
        $date = '2023-03-21';
        $nameOfDay = date('D', strtotime($date));
        $data['allData'] = User::whereIn('user_category',['doctor','nurse'])->orWhere('user_category','nursing')->orderBy('id','desc')->get();
        return view('backend.hrm.payroll.payroll_employee_view',$data);
    }

    public function employeeInactive($id){
        DB::table('users')
                ->where('id', $id)
                ->update(['status' => 0]);
        return redirect()->route('payroll.employee.view')->with('success','Well done! status updated');
    }

    public function employeeActive($id){
        $data = User::find($id);
        $data->status = '1';
        $data->save();
        
        $to  = $data->mobile.','.'01315225563'.','.'01317608200';
        $sms_msg = SmsMessage::first();
        $msg = $sms_msg->doctor_approve_msg;

        $url = "https://msg.elitbuzz-bd.com/smsapi";
        $data = [
            "api_key" => "C200855063e9f797848fc3.95507997",
            "type" => "text",
            "contacts" => "$to",
            "senderid" => "8809601011020",
            "msg" => "$msg",
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);

        return redirect()->route('payroll.employee.view')->with('success','Well done! status updated');
    }

    public function employeeReport(){
        $data['designations'] = Designation::all();
        $data['departments'] = Department::all();
        return view('backend.hrm.payroll.payroll_employee_report',$data);
    }

    public function employeeReportHandlebar(Request $request){
        $where=[];
        $department_id = $request->department_id;
        if($department_id !=''){
            $where[] = ['department_id',$department_id];
        }
        $designation_id = $request->designation_id;
        if($designation_id !=''){
            $where[] = ['designation_id',$designation_id];
        }

        $data = User::where($where)->where('user_category','doctor')->get();
        $html['tdsource']  = '';
        $html['thsource'] = '<th width="5%">Sl.</th>';
        $html['thsource'] .= '<th>Name</th>';
        $html['thsource'] .= '<th>Designation</th>';
        $html['thsource'] .= '<th>Department</th>';
        $html['thsource'] .= '<th>Mobile</th>';
        $html['thsource'] .= '<th>Join Date</th>';
        $html['thsource'] .= '<th>Email</th>';
        $html['tdsource'] .= '</tr>';
        foreach ($data as $key => $v) {
            $html['tdsource'] .= '<tr>';
            $html['tdsource'] .= '<td>'.($key+1).'</td>';
            $html['tdsource'] .= '<td>'.@$v->name.'</td>';
            $html['tdsource'] .= '<td>'.@$v['designation']['name'].'</td>';
            $html['tdsource'] .= '<td>'.@$v['department']['name'].'</td>';
            $html['tdsource'] .= '<td>'.@$v->mobile.'</td>';
            $html['tdsource'] .= '<td>'.date('d-m-Y',strtotime(@$v->join_date)).'</td>';
            $html['tdsource'] .= '<td>'.@$v->email.'</td>';
            $html['tdsource'] .= '</tr>';
        }
        return response()->json(@$html);
    }

    public function employeeReportPdf(Request $request)
    {
        // dd($request->all());
        $where=[];
        $department_id = $request->department_id;
        if($department_id !=''){
            $where[] = ['department_id',$department_id];
        }
        $designation_id = $request->designation_id;
        if($designation_id !=''){
            $where[] = ['designation_id',$designation_id];
        }
        if($request->button=="pdf"){
            $data['allData'] = User::where($where)->where('user_category','doctor')->get();
            $data['school'] = Contact::first();
            $data['logo'] = Logo::first();
            $pdf = PDF::loadView('backend.hrm.payroll.pdf.emp_report_pdf', $data);
            $pdf->SetProtection(['copy', 'print'], '', 'pass');
            return $pdf->stream('document.pdf');
        }elseif($request->button=="excel"){
            $pdata = User::where($where)->where('user_category','doctor')->get()->toArray();
            return Excel::download(new EmployeeExport($pdata), 'employee_list.xlsx');
        }
    }

    public function payrollEmployeeAdd()
    {       
        $data['designations'] = Designation::all();
        $data['departments'] = Department::all();
        return view('backend.hrm.payroll.payroll_employee_add',$data);
    }
    public function payrollEmployeeStore(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'email' => 'required|unique:users,email'
        ]);
        $user = new User();
        $user->usertype = 'admin';
        $user->user_category = 'doctor';
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
        $img = $request->file('ecard');
        if ($img) {
            $imgName = date('YmdHi').$img->getClientOriginalName();
            $img->move('public/upload/employee_ecard/', $imgName);
            $img = Image::make(public_path('upload/employee_ecard/').$imgName);
            $img->resize(1004,1299)->save(public_path('upload/employee_ecard/').$imgName);
            $user['ecard'] = $imgName;
        }
        if($request->department_id=='53'){
            $user->user_category = 'nurse';
            $user->role = '4';
        }
        $user->save();
        return redirect()->route('payroll.employee.view')->with('success','Data inserted successfully!');
    }

    public function payrollEmployeeEditPassword($id)
    {
        $data['editData'] = User::find($id);
        $data['designations'] = Designation::all();
        $data['departments'] = Department::all();
        return view('backend.hrm.payroll.payroll_employee_password',$data);
    }

    public function payrollEmployeeUpdatePassword(Request $request, $id)
    {
        $user = User::find($id);
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('payroll.employee.view')->with('success','Password updated successfully!');
    }

    public function payrollEmployeeEdit($id)
    {
        $data['editData'] = User::find($id);
        $data['designations'] = Designation::all();
        $data['departments'] = Department::all();
        return view('backend.hrm.payroll.payroll_employee_add',$data);
    }

    public function payrollEmployeeUpdate(Request $request, $id)
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
        $img = $request->file('ecard');
        if ($img) {
            @unlink(public_path('upload/employee_ecard/'.$user->ecard));
            $imgName = date('YmdHi').$img->getClientOriginalName();
            $img->move('public/upload/employee_ecard/', $imgName);
            $img = Image::make(public_path('upload/employee_ecard/').$imgName);
            $img->resize(1004,1299)->save(public_path('upload/employee_ecard/').$imgName);
            $user['ecard'] = $imgName;
        }
        if($request->department_id=='53'){
            $user->user_category = 'nurse';
            $user->role = '4';
        }
        $user->save();
        return redirect()->route('payroll.employee.view')->with('success','Data updated successfully!');
    }

    public function payrollEmployeeDestroy(Request $request){
        // dd('ok');
        $user = User::find($request->id);
        if (file_exists('public/upload/employee_images/'.$user->image) AND ! empty($user->image)) {
            unlink('public/upload/employee_images/'.$user->image);
        }
        if (file_exists('public/upload/employee_ecard/'.$user->ecard) AND ! empty($user->ecard)) {
            unlink('public/upload/employee_ecard/'.$user->ecard);
        }
        Education::where('user_id',$user->id)->delete();
        TimeAssign::where('doctor_id',$user->id)->delete();
        Experience::where('user_id',$user->id)->delete();
        Achievement::where('user_id',$user->id)->delete();
        Speciality::where('user_id',$user->id)->delete();
        ProfileTime::where('user_id',$user->id)->delete();
        WorkPlace::where('user_id',$user->id)->delete();
        Chamber::where('user_id',$user->id)->delete();
        $photoImage = PhotoGallery::where('user_id',$user->id)->get()->toArray();
        if(!empty($photoImage)){
            foreach ($photoImage as $value) {
                if(!empty($value)){
                    unlink('public/upload/photo_images/'.$value['image']);
                }
            }
        }
        PhotoGallery::where('user_id',$user->id)->delete();
        $newsImage = NewsEvent::where('user_id',$user->id)->get()->toArray();
        if(!empty($newsImage)){
            foreach ($newsImage as $value) {
                if(!empty($value)){
                    unlink('public/upload/news_images/'.$value['image']);
                }
            }
        }
        NewsEvent::where('user_id',$user->id)->delete();
        $videoImage = VideoGallery::where('user_id',$user->id)->get()->toArray();
        if(!empty($videoImage)){
            foreach ($videoImage as $value) {
                if(!empty($value)){
                    unlink('public/upload/video_images/'.$value['image']);
                }
            }
        }
        VideoGallery::where('user_id',$user->id)->delete();
        $user->delete();
        return redirect()->route('payroll.employee.view')->with('success','Data deleted successfully!');
    }

    public function payrollEmployeeDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['educations'] = Education::where('user_id',$id)->orderBy('id','asc')->get();
        $data['assign_times'] = TimeAssign::with(['time'])->where('doctor_id',$id)->orderBy('doctor_id','asc')->orderBy('id','asc')->get();
        $data['experiences'] = Experience::where('user_id',$id)->orderBy('id','asc')->get();
        $data['trainings'] = Achievement::where('user_id',$id)->orderBy('id','asc')->get();
        $data['specialities'] = Speciality::where('user_id',$id)->orderBy('id','asc')->get();
        $data['profile_times'] = ProfileTime::where('user_id',$id)->orderBy('id','asc')->get();
        $data['work_places'] = WorkPlace::where('user_id',$id)->orderBy('id','asc')->get();
        $data['chambers'] = Chamber::where('user_id',$id)->orderBy('id','asc')->get();
        // dd($data['assign_times']->toArray());
        $data['page_title'] = 'statement';
        return view('backend.hrm.payroll.payroll_employee_details',$data);
    }

    public function payrollofficialDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['educations'] = Education::where('user_id',$id)->orderBy('id','asc')->get();
        $data['departments']=Department::all();
        $data['designations'] = Designation::all();
        $data['religions'] = Religion::all();
        $data['roles'] = Role::all();
        $data['page_title'] = 'official';
        return view('backend.hrm.payroll.payroll_official_details',$data);
    }

    public function payrollpersonalDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['educations'] = Education::where('user_id',$id)->orderBy('id','asc')->get();
        $data['departments']=Department::all();
        $data['designations'] = Designation::all();
        $data['religions'] = Religion::all();
        $data['roles'] = Role::all();
        $data['page_title'] = 'personal';
        return view('backend.hrm.payroll.payroll_personal_details',$data);
    }

    public function payrolleducationDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['educations'] = Education::where('user_id',$id)->orderBy('id','asc')->get();
        $data['page_title'] = 'education';
        return view('backend.hrm.payroll.payroll_education_details',$data);
    }

    public function payrollExperienceDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['experiences'] = Experience::where('user_id',$id)->orderBy('id','asc')->get();
        $data['page_title'] = 'experience';
        return view('backend.hrm.payroll.payroll_experience_details',$data);
    }

    public function payrollAchievementDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['trainings'] = Achievement::where('user_id',$id)->orderBy('id','asc')->get();
        $data['page_title'] = 'training';
        return view('backend.hrm.payroll.payroll_training_details',$data);
    }

    public function payrollSpecialityDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['specialities'] = Speciality::where('user_id',$id)->orderBy('id','asc')->get();
        $data['page_title'] = 'speciality';
        return view('backend.hrm.payroll.payroll_speciality_details',$data);
    }

    public function payrollDayTimeDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['profile_times'] = ProfileTime::where('user_id',$id)->orderBy('id','asc')->get();
        $data['page_title'] = 'daytime';
        return view('backend.hrm.payroll.payroll_daytime_details',$data);
    }

    public function payrollWorkPlaceDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['work_places'] = WorkPlace::where('user_id',$id)->orderBy('id','asc')->get();
        $data['page_title'] = 'workplace';
        return view('backend.hrm.payroll.payroll_work_place_details',$data);
    }

    public function payrollChamberDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['chambers'] = Chamber::where('user_id',$id)->orderBy('id','asc')->get();
        $data['page_title'] = 'chamber';
        return view('backend.hrm.payroll.payroll_chamber_details',$data);
    }

    public function payrollTimeSetupDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['times'] = Time::get();
        $data['days'] = Day::get();
        $data['assign_times'] = TimeAssign::with(['time'])->where('doctor_id',$id)->orderBy('doctor_id','asc')->orderBy('id','asc')->get();
        // dd($data['assign_times']->toArray());
        $data['page_title'] = 'time_assign';
        return view('backend.hrm.payroll.payroll_time_details',$data);
    }

    public function payrollEmployeePrint($id) 
    {
        $data['value'] = User::find($id);
        $data['contact'] = Contact::first();
        $data['logo'] = Logo::first();
        $pdf = PDF::loadView('frontend.single_pages.pdf.doctor_reg_pdf', $data);
        $pdf->SetProtection(['copy', 'print'], '', 'pass');
        return $pdf->stream('document.pdf');
    }

    public function payrollcontactDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['educations'] = Education::where('user_id',$id)->orderBy('id','asc')->get();
        $data['page_title'] = 'contact';
        return view('backend.hrm.payroll.payroll_contact_details',$data);
    }

    public function payrollupdateOfficialInfo(Request $request){
        $employee = User::where('id',$request->employee_id)->first();
        $this->validate($request,[
            'email' => 'required|unique:users,email,'.$employee->id
        ]);
        $employee->name = $request->name;
        $employee->name_bn = $request->name_bn;
        $employee->email = $request->email;
        $employee->mobile = $request->mobile;
        $employee->designation_id = $request->designation_id;
        $employee->department_id = $request->department_id;
        $employee->mbbs_fcp = $request->mbbs_fcp;
        $employee->consultation_fee = $request->consultation_fee;
        $employee->follow_up_fee = $request->follow_up_fee;
        $employee->qualification = $request->qualification;
        $employee->experience = $request->experience;
        $employee->appointment_contact = $request->appointment_contact;
        $employee->join_date = $request->join_date !== null ? date('Y-m-d', strtotime($request->join_date)) : null;
        if($request->department_id=='53'){
            $employee->user_category = 'nurse';
            $employee->role = '4';
        }
        $employee->save();
        return redirect()->back()->with('success','Employee Official Information updated successfully');
    }

    public function payrollupdatePersonalInfo(Request $request){
        $employee = User::where('id',$request->employee_id)->first();
        $employee->fname = $request->fname;
        $employee->mname = $request->mname;
        $employee->dob = $request->dob !== null ? date('Y-m-d', strtotime($request->dob)) : null;
        $employee->gender = $request->gender;
        $employee->religion_id = $request->religion_id;
        $employee->nationality = $request->nationality;
        $employee->nid_no = $request->nid_no;
        $employee->blood_group = $request->blood_group;
        $employee->marital_status = $request->marital_status;
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/employee_images/' .$employee->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/employee_images'),$filename);
            $file = Image::make(public_path('upload/employee_images/').$filename);
            $file->resize(1080,1080)->save(public_path('upload/employee_images/').$filename);
            $employee['image'] = $filename;
        }
        $employee->save();
        return redirect()->back()->with('success','Personal Information has been updated successfully');
    }

    public function payrollupdateEducationalInfo(Request $request){
        $user_id = $request->employee_id;
        $employee_education = Education::where('user_id',$user_id)->delete();
        $qualification = $request->qualification;
        if (!empty($qualification)) {
            foreach ($qualification as $key => $value) {
                $education                  = new Education;
                $education->user_id         = $user_id;
                $education->qualification   = $value;
                $education->institute_name  = $request->institute_name[$key];
                $education->save();
            }
        }   
        return redirect()->back()->with('success','Qualification Information has been updated successfully');
    }

    public function payrollupdateExperiencesInfo(Request $request){
        $user_id = $request->employee_id;
        $employee_education = Experience::where('user_id',$user_id)->delete();
        $experience = $request->experience;
        if (!empty($experience)) {
            foreach ($experience as $key => $value) {
                $education                  = new Experience;
                $education->user_id         = $user_id;
                $education->experience      = $value;
                $education->save();
            }
        }   
        return redirect()->back()->with('success','Experience Information has been updated successfully');
    }

    public function payrollupdateTrainingInfo(Request $request){
        $user_id = $request->employee_id;
        $employee_education = Achievement::where('user_id',$user_id)->delete();
        $training = $request->training;
        if (!empty($training)) {
            foreach ($training as $key => $value) {
                $education                  = new Achievement;
                $education->user_id         = $user_id;
                $education->training        = $value;
                $education->achievement     = $request->achievement[$key];
                $education->save();
            }
        }   
        return redirect()->back()->with('success','Achievement Information has been updated successfully');
    }

    public function payrollupdateSpecialityInfo(Request $request){
        $user_id = $request->employee_id;
        $employee_education = Speciality::where('user_id',$user_id)->delete();
        $speciality = $request->speciality;
        if (!empty($speciality)) {
            foreach ($speciality as $key => $value) {
                $education                  = new Speciality;
                $education->user_id         = $user_id;
                $education->speciality      = $value;
                $education->save();
            }
        }   
        return redirect()->back()->with('success','Speciality Information has been updated successfully');
    }

    public function payrollupdateDayTimesInfo(Request $request){
        $user_id = $request->employee_id;
        $employee_education = ProfileTime::where('user_id',$user_id)->delete();
        $time = $request->time;
        if (!empty($time)) {
            foreach ($time as $key => $value) {
                $education                  = new ProfileTime;
                $education->user_id         = $user_id;
                $education->time            = $value;
                $education->save();
            }
        }   
        return redirect()->back()->with('success','Day Time Information has been updated successfully');
    }

    public function payrollupdateWorkplaceInfo(Request $request){
        $user_id = $request->employee_id;
        $employee_education = WorkPlace::where('user_id',$user_id)->delete();
        $workplace = $request->workplace;
        if (!empty($workplace)) {
            foreach ($workplace as $key => $value) {
                $education                  = new WorkPlace;
                $education->user_id         = $user_id;
                $education->workplace       = $value;
                // $education->details         = $request->details[$key];
                $education->save();
            }
        }   
        return redirect()->back()->with('success','Work Place Information has been updated successfully');
    }

    public function payrollupdateChamberInfo(Request $request){
        $user_id = $request->employee_id;
        $employee_education = Chamber::where('user_id',$user_id)->delete();
        $chamber_name = $request->chamber_name;
        if (!empty($chamber_name)) {
            foreach ($chamber_name as $key => $value) {
                $education                  = new Chamber;
                $education->user_id         = $user_id;
                $education->chamber_name    = $value;
                // $education->chamber_details = $request->chamber_details[$key];
                $education->save();
            }
        }   
        return redirect()->back()->with('success','Chamber Information has been updated successfully');
    }

    public function payrollupdateEducationalTimeAssign(Request $request){
        $user_id = $request->doctor_id;
        $employee_time_assign = TimeAssign::where('doctor_id',$user_id)->delete();
        $time_id = $request->time_id;
        if (!empty($time_id)) {
            foreach ($time_id as $key => $value) {
                $education                  = new TimeAssign;
                $education->doctor_id       = $user_id;
                $education->day_id          = $request->day_id[$key];
                $education->time_id         = $request->time_id[$key];
                $education->save();
            }
        }   
        return redirect()->back()->with('success','Time Assign has been updated successfully');
    }

    public function payrollupdateContactInfo(Request $request){
        $employee                               = User::where('id',$request->employee_id)->first();
        $employee->present_address              = $request->present_address;
        $employee->permanent_address            = $request->permanent_address;
        $employee->emergency_contact_name       = $request->emergency_contact_name;
        $employee->relation_with                = $request->relation_with;
        $employee->emergency_contact_no         = $request->emergency_contact_no;
        // dd($employee->toArray());
        $employee->update();
        return redirect()->back()->with('success','Contact Information has been updated successfully');
    }
    
    public function pdf($id) 
    {
        $data['user'] = User::find($id);
        $data['school'] = Contact::first();
        $data['educations'] = Education::where('user_id',$id)->orderBy('id','asc')->get();
        $pdf = PDF::loadView('backend.employees.registration.pdf.employee-details', $data);
        $pdf->SetProtection(['copy', 'print'], '', 'pass');
        return $pdf->stream('document.pdf');
    }

    // Doctor Booking

    public function bookingView()
    {
        $data['allData'] = DoctorBooking::orderBy('id','desc')->orderBy('date','desc')->get();
        return view('backend.hrm.booking.booking_view',$data);
    }

    public function bookingPdf(Request $request,$id){
        $data['value'] = DoctorBooking::find($id);
        $data['word'] = $this->numberToWord(@$data['value']->amount);
        $data['contact']        = Contact::first();
        $data['logo']           = Logo::first();
        if($data['value']->booking_type=='category'){
            return view('backend.doctor.booking.pdf.attachment',$data);
        }elseif($data['value']->booking_type=='doctor'){
            $pdf = PDF::loadView('frontend.single_pages.pdf.booking_pdf', $data);
            $pdf->SetProtection(['copy', 'print'], '', 'pass');
            return $pdf->stream('invoice.pdf');
        }
    }

    public function bookingDelete(Request $request){
        $data = DoctorBooking::where('id',$request->id)->first();
        $data->delete();
        return redirect()->back();
    }

    public function bookingApproval($id){
        $data['value'] = DoctorBooking::find($id);
        return view('backend.hrm.booking.booking_approval',$data);
    }

    public function bookingApprovalStore(Request $request, $id){
        $data = DoctorBooking::find($id);
        $data->status = $request->status;
        $data->save();
        return redirect()->route('payroll.booking.view')->with('success','Status updated successfully');
    }

    public function bookingReport()
    {
        $data['doctors'] = DoctorBooking::select('doctor_id')->groupBy('doctor_id')->get();
        return view('backend.hrm.booking.booking_report',$data);
    }

    public function bookingReportHandlebar(Request $request){
        $doctor_id = $request->doctor_id;
        if($doctor_id !=''){
            $where[] = ['doctor_id',$doctor_id];
        }
        $where[] = ['status','1'];
        $start_date = date('Y-m-d',strtotime($request->start_date));
        $end_date = date('Y-m-d',strtotime($request->end_date));
        $allPurchases = DoctorBooking::whereBetween('date',[$start_date, $end_date])->where($where)->get();

        $html['tdsource']  = '';
        $total_sum = 0;
        $html['tdsource'] .= '<tr>';
        $html['tdsource'] .= '<td colspan="7" class="text-center" style="font-weight:bold">'.'BOOKING REPORT '.date('d-m-Y',strtotime($start_date)).'-'.date('d-m-Y',strtotime($end_date)).'</td>';
        $html['tdsource'] .= '</tr>';

        $html['tdsource'] .= '<tr>';
        $html['tdsource'] .= '<td style="font-weight:bold">'.'SL'.'</td>';
        $html['tdsource'] .= '<td style="font-weight:bold">'.'Date'.'</td>';
        $html['tdsource'] .= '<td style="font-weight:bold">'.'Time'.'</td>';
        $html['tdsource'] .= '<td style="font-weight:bold">'.'Doctor Info'.'</td>';
        $html['tdsource'] .= '<td style="font-weight:bold">'.'Patient Info'.'</td>';
        $html['tdsource'] .= '<td style="font-weight:bold">'.'Payment Type'.'</td>';
        $html['tdsource'] .= '<td style="font-weight:bold">'.'Amount'.'</td>';
        $html['tdsource'] .= '</tr>';

        foreach ($allPurchases as $key => $v) {
            $html['tdsource'] .= '<tr>';
            $html['tdsource'] .= '<td>'.($key+1).'</td>';
            $html['tdsource'] .= '<td>'.date('d-m-Y',strtotime(@$v->date)).'</td>';
            $html['tdsource'] .= '<td>'.@$v['time']['name'].'</td>';
            $html['tdsource'] .= '<td>'.@$v['doctor']['name'].' - ' .@$v['doctor']['department']['name'].'</td>';
            $html['tdsource'] .= '<td>'.@$v->name.' - ' .@$v->mobile.'</td>';
            $html['tdsource'] .= '<td>'.@$v->fee_type.'</td>';
            $html['tdsource'] .= '<td>'.@$v->amount.'</td>';
            $html['tdsource'] .= '</tr>';
            $total_sum += @$v->amount;
        }
        $html['tdsource'] .= '<tr>';
        $html['tdsource'] .= '<td colspan="6" class="text-right" style="font-weight:bold">'.'Grand Total'.'</td>';
        $html['tdsource'] .= '<td style="font-weight:bold">'.@$total_sum.' TK'.'</td>';
        $html['tdsource'] .= '</tr>';
        return response()->json(@$html);
    }

    public function bookingReportPdf(Request $request)
    {
        $doctor_id = $request->doctor_id;
        if($doctor_id !=''){
            $where[] = ['doctor_id',$doctor_id];
        }
        $where[] = ['status','1'];
        $start_date = date('Y-m-d',strtotime($request->start_date));
        $end_date = date('Y-m-d',strtotime($request->end_date));
        $data['allData'] = DoctorBooking::whereBetween('date',[$start_date, $end_date])->where($where)->get();
        $data['start_date'] = date('Y-m-d',strtotime($request->start_date));
        $data['end_date'] = date('Y-m-d',strtotime($request->end_date));
        $data['school'] = Contact::first();
        $pdf = PDF::loadView('backend.hrm.booking.pdf.booking_report_pdf', $data);
        $pdf->SetProtection(['copy', 'print'], '', 'pass');
        return $pdf->stream('document.pdf');
    }

    public function numberToWord($num = '')
    {
        $num    = ( string ) ( ( int ) $num );
        
        if( ( int ) ( $num ) && ctype_digit( $num ) )
        {
            $words  = array( );
             
            $num    = str_replace( array( ',' , ' ' ) , '' , trim( $num ) );
             
            $list1  = array('','one','two','three','four','five','six','seven',
                'eight','nine','ten','eleven','twelve','thirteen','fourteen',
                'fifteen','sixteen','seventeen','eighteen','nineteen');
             
            $list2  = array('','ten','twenty','thirty','forty','fifty','sixty',
                'seventy','eighty','ninety','hundred');
             
            $list3  = array('','thousand','million','billion','trillion',
                'quadrillion','quintillion','sextillion','septillion',
                'octillion','nonillion','decillion','undecillion',
                'duodecillion','tredecillion','quattuordecillion',
                'quindecillion','sexdecillion','septendecillion',
                'octodecillion','novemdecillion','vigintillion');
             
            $num_length = strlen( $num );
            $levels = ( int ) ( ( $num_length + 2 ) / 3 );
            $max_length = $levels * 3;
            $num    = substr( '00'.$num , -$max_length );
            $num_levels = str_split( $num , 3 );
             
            foreach( $num_levels as $num_part )
            {
                $levels--;
                $hundreds   = ( int ) ( $num_part / 100 );
                $hundreds   = ( $hundreds ? ' ' . $list1[$hundreds] . ' Hundred' . ( $hundreds == 1 ? '' : 's' ) . ' ' : '' );
                $tens       = ( int ) ( $num_part % 100 );
                $singles    = '';
                 
                if( $tens < 20 ) { $tens = ( $tens ? ' ' . $list1[$tens] . ' ' : '' ); } else { $tens = ( int ) ( $tens / 10 ); $tens = ' ' . $list2[$tens] . ' '; $singles = ( int ) ( $num_part % 10 ); $singles = ' ' . $list1[$singles] . ' '; } $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_part ) ) ? ' ' . $list3[$levels] . ' ' : '' ); } $commas = count( $words ); if( $commas > 1 )
            {
                $commas = $commas - 1;
            }
             
            $words  = implode( ', ' , $words );
             
            $words  = trim( str_replace( ' ,' , ',' , ucwords( $words ) )  , ', ' );
            if( $commas )
            {
                $words  = str_replace( ',' , ' and' , $words );
            }
             
            return $words;
        }
        else if( ! ( ( int ) $num ) )
        {
            return 'Zero';
        }
        return '';
    }
}
