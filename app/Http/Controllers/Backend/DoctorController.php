<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Designation;
use App\User;
use App\Model\Department;
use App\Model\Role;
use App\Model\Contact;
use App\Model\Education;
use App\Model\Religion;
use App\Model\Logo;
use App\Model\Time;
use App\Model\TimeAssign;
use App\Model\Day;
use App\Model\Experience;
use App\Model\Achievement;
use App\Model\Speciality;
use App\Model\ProfileTime;
use App\Model\WorkPlace;
use App\Model\Chamber;
use App\Model\DoctorBooking;
use App\Exports\EmployeeExport;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use PDF;
use Auth;
use DateTime;
use Image;

class DoctorController extends Controller
{
    public function payrollEmployeeDetails() 
    {
        $data['details'] = User::where('id',@Auth::user()->id)->first();
        $data['educations'] = Education::where('user_id',@Auth::user()->id)->orderBy('id','asc')->get();
        $data['assign_times'] = TimeAssign::with(['time'])->where('doctor_id',@Auth::user()->id)->orderBy('doctor_id','asc')->orderBy('id','asc')->get();
        $data['experiences'] = Experience::where('user_id',@Auth::user()->id)->orderBy('id','asc')->get();
        $data['trainings'] = Achievement::where('user_id',@Auth::user()->id)->orderBy('id','asc')->get();
        $data['specialities'] = Speciality::where('user_id',@Auth::user()->id)->orderBy('id','asc')->get();
        $data['profile_times'] = ProfileTime::where('user_id',@Auth::user()->id)->orderBy('id','asc')->get();
        $data['work_places'] = WorkPlace::where('user_id',@Auth::user()->id)->orderBy('id','asc')->get();
        $data['chambers'] = Chamber::where('user_id',@Auth::user()->id)->orderBy('id','asc')->get();
        // dd($data['assign_times']->toArray());
        $data['page_title'] = 'statement';
        return view('backend.doctor.profile.doctor_details',$data);
    }

    public function payrollofficialDetails() 
    {
        $data['details'] = User::where('id',@Auth::user()->id)->first();
        $data['educations'] = Education::where('user_id',@Auth::user()->id)->orderBy('id','asc')->get();
        $data['departments']=Department::all();
        $data['designations'] = Designation::all();
        $data['religions'] = Religion::all();
        $data['roles'] = Role::all();
        $data['page_title'] = 'official';
        return view('backend.doctor.profile.doctor_official_details',$data);
    }

    public function payrollpersonalDetails() 
    {
        $data['details'] = User::where('id',@Auth::user()->id)->first();
        $data['educations'] = Education::where('user_id',@Auth::user()->id)->orderBy('id','asc')->get();
        $data['departments']=Department::all();
        $data['designations'] = Designation::all();
        $data['religions'] = Religion::all();
        $data['roles'] = Role::all();
        $data['page_title'] = 'personal';
        return view('backend.doctor.profile.doctor_personal_details',$data);
    }

    public function payrolleducationDetails() 
    {
        $data['details'] = User::where('id',@Auth::user()->id)->first();
        $data['educations'] = Education::where('user_id',@Auth::user()->id)->orderBy('id','asc')->get();
        $data['page_title'] = 'education';
        return view('backend.doctor.profile.doctor_education_details',$data);
    }

    public function payrollExperienceDetails() 
    {
        $data['details'] = User::where('id',@Auth::user()->id)->first();
        $data['experiences'] = Experience::where('user_id',@Auth::user()->id)->orderBy('id','asc')->get();
        $data['page_title'] = 'experience';
        return view('backend.doctor.profile.doctor_experience_details',$data);
    }

    public function payrollAchievementDetails() 
    {
        $data['details'] = User::where('id',@Auth::user()->id)->first();
        $data['trainings'] = Achievement::where('user_id',@Auth::user()->id)->orderBy('id','asc')->get();
        $data['page_title'] = 'training';
        return view('backend.doctor.profile.doctor_training_details',$data);
    }

    public function payrollSpecialityDetails() 
    {
        $data['details'] = User::where('id',@Auth::user()->id)->first();
        $data['specialities'] = Speciality::where('user_id',@Auth::user()->id)->orderBy('id','asc')->get();
        $data['page_title'] = 'speciality';
        return view('backend.doctor.profile.doctor_speciality_details',$data);
    }

    public function payrollDayTimeDetails() 
    {
        $data['details'] = User::where('id',@Auth::user()->id)->first();
        $data['profile_times'] = ProfileTime::where('user_id',@Auth::user()->id)->orderBy('id','asc')->get();
        $data['page_title'] = 'daytime';
        return view('backend.doctor.profile.doctor_daytime_details',$data);
    }

    public function payrollWorkPlaceDetails() 
    {
        $data['details'] = User::where('id',@Auth::user()->id)->first();
        $data['work_places'] = WorkPlace::where('user_id',@Auth::user()->id)->orderBy('id','asc')->get();
        $data['page_title'] = 'workplace';
        return view('backend.doctor.profile.doctor_work_place_details',$data);
    }

    public function payrollChamberDetails() 
    {
        $data['details'] = User::where('id',@Auth::user()->id)->first();
        $data['chambers'] = Chamber::where('user_id',@Auth::user()->id)->orderBy('id','asc')->get();
        $data['page_title'] = 'chamber';
        return view('backend.doctor.profile.doctor_chamber_details',$data);
    }

    public function payrollTimeSetupDetails() 
    {
        $data['details'] = User::where('id',@Auth::user()->id)->first();
        $data['times'] = Time::get();
        $data['days'] = Day::get();
        $data['assign_times'] = TimeAssign::with(['time'])->where('doctor_id',@Auth::user()->id)->orderBy('doctor_id','asc')->orderBy('id','asc')->get();
        // dd($data['assign_times']->toArray());
        $data['page_title'] = 'time_assign';
        return view('backend.doctor.profile.doctor_time_details',$data);
    }

    public function payrollEmployeePrint() 
    {
        $data['details'] = User::where('id',@Auth::user()->id)->first();
        $data['educations'] = Education::where('user_id',@Auth::user()->id)->orderBy('id','asc')->get();
        $data['school'] = Contact::first();
        $data['logo'] = Logo::first();
        $pdf = PDF::loadView('backend.hrm.payroll.pdf.employee_print', $data);
        $pdf->SetProtection(['copy', 'print'], '', 'pass');
        return $pdf->stream('document.pdf');
    }

    public function payrollcontactDetails() 
    {
        $data['details'] = User::where('id',@Auth::user()->id)->first();
        $data['educations'] = Education::where('user_id',@Auth::user()->id)->orderBy('id','asc')->get();
        $data['page_title'] = 'contact';
        return view('backend.doctor.profile.doctor_contact_details',$data);
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

    // Doctor Booking

    public function bookingView()
    {
        $data['allData'] = DoctorBooking::where('doctor_id',@Auth::user()->id)->orderBy('id','desc')->orderBy('date','desc')->get();
        return view('backend.doctor.booking.booking_view',$data);
    }

    public function bookingPdf(Request $request,$code){
        $data['value'] = DoctorBooking::where('code',$code)->first();
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

    public function bookingReport()
    {
        $data['doctors'] = DoctorBooking::select('doctor_id')->groupBy('doctor_id')->get();
        return view('backend.doctor.booking.booking_report',$data);
    }

    public function bookingReportHandlebar(Request $request){
        $doctor_id = $request->doctor_id;
        if($doctor_id !=''){
            $where[] = ['doctor_id',$doctor_id];
        }
        $start_date = date('Y-m-d',strtotime($request->start_date));
        $end_date = date('Y-m-d',strtotime($request->end_date));
        $allPurchases = DoctorBooking::whereBetween('date',[$start_date, $end_date])->where($where)->get();

        $html['tdsource']  = '';
        $total_sum = 0;
        $html['tdsource'] .= '<tr>';
        $html['tdsource'] .= '<td colspan="6" class="text-center" style="font-weight:bold">'.'BOOKING REPORT '.date('d-m-Y',strtotime($start_date)).'-'.date('d-m-Y',strtotime($end_date)).'</td>';
        $html['tdsource'] .= '</tr>';

        $html['tdsource'] .= '<tr>';
        $html['tdsource'] .= '<td style="font-weight:bold">'.'SL'.'</td>';
        $html['tdsource'] .= '<td style="font-weight:bold">'.'Date'.'</td>';
        $html['tdsource'] .= '<td style="font-weight:bold">'.'Time'.'</td>';
        $html['tdsource'] .= '<td style="font-weight:bold">'.'Patient Info'.'</td>';
        $html['tdsource'] .= '<td style="font-weight:bold">'.'Payment Type'.'</td>';
        $html['tdsource'] .= '<td style="font-weight:bold">'.'Amount'.'</td>';
        $html['tdsource'] .= '</tr>';

        foreach ($allPurchases as $key => $v) {
            $html['tdsource'] .= '<tr>';
            $html['tdsource'] .= '<td>'.($key+1).'</td>';
            $html['tdsource'] .= '<td>'.date('d-m-Y',strtotime(@$v->date)).'</td>';
            $html['tdsource'] .= '<td>'.@$v['time']['name'].'</td>';
            $html['tdsource'] .= '<td>'.@$v->name.' - ' .@$v->mobile.'</td>';
            $html['tdsource'] .= '<td>'.@$v->fee_type.'</td>';
            $html['tdsource'] .= '<td>'.@$v->amount.'</td>';
            $html['tdsource'] .= '</tr>';
            $total_sum += @$v->amount;
        }
        $html['tdsource'] .= '<tr>';
        $html['tdsource'] .= '<td colspan="5" class="text-right" style="font-weight:bold">'.'Grand Total'.'</td>';
        $html['tdsource'] .= '<td style="font-weight:bold">'.@$total_sum.' TK'.'</td>';
        $html['tdsource'] .= '</tr>';
        return response()->json(@$html);
    }

    public function bookingReportPdf(Request $request)
    {
        $where[] = ['doctor_id',@Auth::user()->id];

        $start_date = date('Y-m-d',strtotime($request->start_date));
        $end_date = date('Y-m-d',strtotime($request->end_date));
        $data['allData'] = DoctorBooking::whereBetween('date',[$start_date, $end_date])->where($where)->get();
        $data['start_date'] = date('Y-m-d',strtotime($request->start_date));
        $data['end_date'] = date('Y-m-d',strtotime($request->end_date));
        $data['school'] = Contact::first();
        $pdf = PDF::loadView('backend.doctor.pdf.booking_report_pdf', $data);
        $pdf->SetProtection(['copy', 'print'], '', 'pass');
        return $pdf->stream('document.pdf');
    }
}
