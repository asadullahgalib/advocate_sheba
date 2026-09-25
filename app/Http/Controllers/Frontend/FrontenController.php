<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use Mail;
use DB;
use App\Model\Designation;
use App\User;
use App\Model\Department;
use App\Model\Role;
use App\Model\Contact;
use App\Model\Education;
use App\Model\Religion;
use App\Model\Time;
use App\Model\TimeAssign;
use App\Model\Day;
use App\Model\Category;
use App\Model\PaymentNumber;
use App\Model\Slider;
use App\Model\Achievement;
use App\Model\Experience;
use App\Model\Speciality;
use App\Model\ProfileTime;
use App\Model\NewsEvent;
use App\Model\PhotoGallery;
use App\Model\VideoGallery;
use App\Model\SocialMedia;
use App\Model\Chamber;
use App\Model\WorkPlace;
use App\Model\DoctorBooking;
use App\Model\SmsMessage;
use App\Model\Package;
use App\Model\Ambulance;
use App\Model\Promotion;
use App\Model\Support;
use Auth;
use DateTime;
use PDF;
use Session;

class FrontenController extends Controller
{
    public function getDoctorByDepartment(Request $request){
        $department_id = $request->department_id;
        $doctors = User::with(['designation'])->where('user_category','doctor')->where('status','1')->where('department_id',$department_id)->get();
        return response()->json($doctors);
    }

    // Court & Jurisdictions started

    public function supremeCourt(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type']      = 'court';
        return view('frontend.courts.supreme_court',$data);
    }

    public function villageCourt(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type']      = 'village_court';
        return view('frontend.courts.village_court',$data);
    }

    public function districtCourt(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type']      = 'districtcourt';
        return view('frontend.courts.district_court',$data);
    }

    public function tribunalsCourt(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type']      = 'tribunals';
        return view('frontend.courts.tribunals',$data);
    }

    // Court & Jurisdictions ends

    // Legal Information started

    public function legalInformationRights(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type']      = 'rights';
        return view('frontend.legal_information.rights',$data);
    }

    public function legalInformationTerms(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type']      = 'terms';
        return view('frontend.legal_information.terms',$data);
    }

    public function legalInformationLaws(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type']      = 'laws';
        return view('frontend.legal_information.laws',$data);
    }

    public function legalInformationProcudures(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type']      = 'procedures';
        return view('frontend.legal_information.procedures',$data);
    }

    public function lawDetails(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type']      = 'law_details';
        return view('frontend.law.law_details',$data);
    }

    // Legal Information ends

    public function index(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['sliders']        = Slider::all();
        $data['doctors']        = User::where('user_category','doctor')->where('status','1')->where('booking_status','2')->orderBy('sort','asc')->get()->take(20);
        $data['online_doctors'] = User::where('user_category','doctor')->where('status','1')->where('booking_status','1')->orderBy('sort','asc')->get()->take(20);
        $data['page_type'] = 'home';
        return view('frontend.layouts.home',$data);
    }

    public function advocateList(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type'] = 'advocate';
        return view('frontend.single_pages.advocate_list',$data);
    }

    public function findAdvocateList(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type'] = 'find_advocate';
        return view('frontend.single_pages.find_advocate_list',$data);
    }

    public function barristerList(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type'] = 'barrister';
        return view('frontend.single_pages.barrister_list',$data);
    }

    public function findBarristerList(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type'] = 'find_barrister';
        return view('frontend.single_pages.find_barrister_list',$data);
    }

    public function consultantList(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type'] = 'consultant';
        return view('frontend.single_pages.consultant_list',$data);
    }

    public function findConsultantList(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type'] = 'find_consultant';
        return view('frontend.single_pages.find_consultant_list',$data);
    }

    public function lawFirmList(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type'] = 'law_firm';
        return view('frontend.single_pages.law_firm_list',$data);
    }

    public function findLawFirmList(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type'] = 'find_consultant';
        return view('frontend.single_pages.find_law_firm_list',$data);
    }

    public function lawFirmDetails(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type'] = 'find_consultant';
        return view('frontend.single_pages.law_firm_details',$data);
    }

    public function legalInformation(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type'] = 'legal_information';
        return view('frontend.single_pages.legal_information',$data);
    }

    public function courts(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type'] = 'courts';
        return view('frontend.single_pages.courts',$data);
    }

    public function legalNews(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type'] = 'legal_news';
        return view('frontend.single_pages.legal_news',$data);
    }

    public function locationWiseList(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type'] = 'find_consultant';
        return view('frontend.single_pages.location-wise-advocate',$data);
    }

    public function practiceAreaWiseList(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type'] = 'find_consultant';
        return view('frontend.single_pages.practice-area-wise-advocate',$data);
    }

    public function profile(){
        $id = '1';
        $data['doctors']        = User::where('user_category','doctor')->where('status','1')->where('booking_status','2')->orderBy('sort','asc')->get()->take(20);
        $data['departments']        = Department::all();
        $data['qualifications']     = Education::where('user_id',@$data['doctor']->id)->orderBy('id','asc')->get();
        $data['experiences']        = Experience::where('user_id',@$data['doctor']->id)->orderBy('id','asc')->get();
        $data['trainings']          = Achievement::where('user_id',@$data['doctor']->id)->orderBy('id','asc')->get();
        $data['specialities']       = Speciality::where('user_id',@$data['doctor']->id)->orderBy('id','asc')->get();
        $data['profile_times']      = ProfileTime::where('user_id',@$data['doctor']->id)->orderBy('id','asc')->get();
        $data['work_places']        = WorkPlace::where('user_id',@$data['doctor']->id)->orderBy('id','asc')->get();
        $data['chambers']           = Chamber::where('user_id',@$data['doctor']->id)->orderBy('id','asc')->get();
        $data['news_events']        = NewsEvent::where('user_id',@$data['doctor']->id)->orderBy('id','desc')->get();
        $data['photo_galleries']    = PhotoGallery::where('user_id',@$data['doctor']->id)->orderBy('id','desc')->get();
        $data['video_galleries']    = VideoGallery::where('user_id',@$data['doctor']->id)->orderBy('id','desc')->get();
        $data['social_medias']      = SocialMedia::where('user_id',@$data['doctor']->id)->orderBy('id','asc')->get();
        $data['payment_number']     = PaymentNumber::first();
        $data['page_type']          = 'doctor';
        return view('frontend.advocate.advocate_profile',$data);
    }

    public function legalArticleDetails(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('department_id','57')->where('status','1')->paginate(8);
        $data['page_type'] = 'artical_details';
        return view('frontend.single_pages.article',$data);
    }

    public function categoryList(){
        $data['categories']     = Category::all();
        $data['page_type']      = 'category';
        return view('frontend.single_pages.category_list',$data);
    }

    public function categoryDetails($id){
        $data['category']     = Category::find($id);
        $data['times']        = Time::all();
        $data['payment_number'] = PaymentNumber::first();
        $data['page_type']    = 'category';
        return view('frontend.single_pages.category_details',$data);
    }

    public function departmentList(){
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['page_type']      = 'department';
        return view('frontend.single_pages.department',$data);
    }

    public function facilities(){
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['abouts']         = Support::all();
        $data['facilities']     = Promotion::orderBy('sort','asc')->get();
        $data['page_type']      = 'facilities';
        return view('frontend.single_pages.facilities',$data);
    }

    public function doctorFind(Request $request){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $name = $request->name;
        $data['doctors'] = User::where('user_category','doctor')->where('status','1')->where('name', 'LIKE', '%' . $name . '%')->orderBy('sort','asc')->paginate(8);
        $data['page_type'] = 'doctor';
        $data['count'] = $data['doctors']->count();
        if($data['count'] =='0'){
            return redirect()->back()->with(Session::flash('findNoDoctorMessage','Sorry! no one was found with this name'));
        }elseif($data['count'] >='1'){
            return view('frontend.single_pages.doctor_find_list',$data); 
        }
    }

    public function getSearchDoctor(Request $request){
        $name = $request->name;
        $doctorData = User::where('user_category','doctor')->where('status','1')->where('name', 'LIKE', '%' . $name . '%')->orderBy('sort','asc')->get();
        $html = '';
        $html .= '<div><ul>';
        if($doctorData){
            foreach ($doctorData as $v) {
                $html .= '<li style="line-height:30px">'.$v->name.'</li>';
            }
        }
        $html .= '</ul></div>';
        return response()->json($html);
    }

    public function nurseList(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','nurse')->where('status','1')->orderBy('sort','asc')->paginate(8);
        $data['page_type'] = 'nursing';
        return view('frontend.single_pages.doctor_list',$data);
    }

    public function packageList(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['packages']       = Package::all();
        $data['page_type']      = 'package';
        return view('frontend.single_pages.package_list',$data);
    }

    public function ambulanceList(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['packages']       = Ambulance::all();
        $data['page_type']      = 'package';
        return view('frontend.single_pages.ambulance_list',$data);
    }

    public function doctorDetails($id){
        $data['doctor']         = User::where('user_category','doctor')->where('status','1')->where('id',$id)->first();
        $data['times'] = TimeAssign::where('doctor_id',@$data['doctor']->id)->get();
        $data['payment_number'] = PaymentNumber::first();
        $data['page_type'] = 'doctor';
        return view('frontend.single_pages.doctor_details',$data);
    }

    public function doctorStore(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'date'=>'required',
            'time_id'=>'required',
            'name'=>'required|max:120',
            'mobile'=>'required|max:15|min:11',
            'gender'=>'required',
            'fee_type'=>'required',
            'payment_method'=>'required',
        ]);
        $find_doctor = User::where('id',$request->doctor_id)->first();
        $code = rand(0000,9999);
        $data = new DoctorBooking();
        $data->code = $code.date('His');
        $data->doctor_id = strip_tags($request->doctor_id);
        $data->date = strip_tags(date('Y-m-d',strtotime($request->date)));
        $data->time_id = strip_tags($request->time_id);
        $data->name = strip_tags($request->name);
        $data->mobile = strip_tags($request->mobile);
        $data->email = strip_tags($request->email);
        $data->gender = strip_tags($request->gender);
        $data->fee_type = strip_tags($request->fee_type);
        $data->payment_method = strip_tags($request->payment_method);
        $data->bkash_number = strip_tags($request->bkash_number);
        $data->bkash_transaction_id = strip_tags($request->bkash_transaction_id);
        $data->rocket_number = strip_tags($request->rocket_number);
        $data->rocket_transaction_id = strip_tags($request->rocket_transaction_id);
        $data->nagad_number = strip_tags($request->nagad_number);
        $data->nagad_transaction_id = strip_tags($request->nagad_transaction_id);
        if($request->fee_type=='Consultation-Fee'){
            $fee = $find_doctor->consultation_fee;
        }elseif ($request->fee_type=='Follow-Up-Fee') {
            $fee = $find_doctor->follow_up_fee;
        }
        $data->amount = $fee;
        $data->status = '0';
        $data->booking_type = 'doctor';
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/patient_files'), $filename);
            $data['image']= $filename;
        }
        $data->save();

        Session::put('code',$data->code);

        Session::flash('bookingMessage','Congratulations! Your booking is successfully completed');

        $to  = $data->mobile.','.'01315225563'.','.'01317608200';
        $sms_msg = SmsMessage::first();
        $msg = $sms_msg->booking_msg;

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
        // return $response;
        return redirect()->route('frontend.booking.submission')->with($response);
    }

    public function categoryDetailsStore(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'name'=>'required|max:120',
            'mobile'=>'required|max:120'
        ]);
        $find_fee = Category::where('id',$request->category_id)->first();
        $code = rand(0000,9999);
        $data = new DoctorBooking();
        $data->code = $code.date('His');
        $data->category_id = strip_tags($request->category_id);
        $data->date = date('Y-m-d');
        $data->name = strip_tags($request->name);
        $data->mobile = strip_tags($request->mobile);
        $data->description = strip_tags($request->description);
        $data->status = '0';
        $data->booking_type = 'category';
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/patient_files'), $filename);
            $data['image']= $filename;
        }
        $data->save();

        Session::put('code',$data->code);

        Session::flash('categoryBookingMessage','Your is prescription successfully uploaded');

        $to  = $data->mobile.','.'01315225563'.','.'01317608200';
        $msg = "Your prescription is successfully uploaded,Best Regards:Shastho Plus";

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
        // return $response;
        return redirect()->back()->with($response);
    }

    public function doctorBookingSubmission(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['sliders']        = Slider::all();
        return view('frontend.single_pages.booking_submission',$data);
    }

    public function doctorBookingDownload(Request $request){
        $data['value']          = DoctorBooking::where('code',Session::get('code'))->first();
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['sliders']        = Slider::all();
        $data['contact']        = Contact::first();
        $data['logo']           = Logo::first();
        $data['word'] = $this->numberToWord(@$data['value']->amount);
        $pdf = PDF::loadView('frontend.single_pages.pdf.booking_pdf', $data);
        $pdf->SetProtection(['copy', 'print'], '', 'pass');
        return $pdf->stream('document.pdf');
    }

    public function doctorProfile($id){
        $data['doctor']             = User::where('status','1')->where('id',$id)->first();
        $data['departments']        = Department::all();
        $data['qualifications']     = Education::where('user_id',@$data['doctor']->id)->orderBy('id','asc')->get();
        $data['experiences']        = Experience::where('user_id',@$data['doctor']->id)->orderBy('id','asc')->get();
        $data['trainings']          = Achievement::where('user_id',@$data['doctor']->id)->orderBy('id','asc')->get();
        $data['specialities']       = Speciality::where('user_id',@$data['doctor']->id)->orderBy('id','asc')->get();
        $data['profile_times']      = ProfileTime::where('user_id',@$data['doctor']->id)->orderBy('id','asc')->get();
        $data['work_places']        = WorkPlace::where('user_id',@$data['doctor']->id)->orderBy('id','asc')->get();
        $data['chambers']           = Chamber::where('user_id',@$data['doctor']->id)->orderBy('id','asc')->get();
        $data['news_events']        = NewsEvent::where('user_id',@$data['doctor']->id)->orderBy('id','desc')->get();
        $data['photo_galleries']    = PhotoGallery::where('user_id',@$data['doctor']->id)->orderBy('id','desc')->get();
        $data['video_galleries']    = VideoGallery::where('user_id',@$data['doctor']->id)->orderBy('id','desc')->get();
        $data['social_medias']      = SocialMedia::where('user_id',@$data['doctor']->id)->orderBy('id','asc')->get();
        $data['payment_number']     = PaymentNumber::first();
        $data['page_type']          = 'doctor';
        return view('frontend.single_pages.doctor_profile',$data);
    }

    public function newsDetails($id){
        $data['news']               = NewsEvent::find($id);
        $data['news_events']        = NewsEvent::where('user_id',@$data['news']->user_id)->orderBy('id','desc')->get()->take(5);
        return view('frontend.single_pages.news_details',$data);
    }

    public function getAppointmentNumber(Request $request){
        $doctor_id = $request->id;
        $doctor = User::where('id',$doctor_id)->first();
        // dd($doctor);
        return response()->json($doctor);
    }

    public function getPackageNumber(Request $request){
        $id = $request->id;
        $package = Package::where('id',$id)->first();
        return response()->json($package);
    }

    public function getAmbulanceNumber(Request $request){
        $id = $request->id;
        $package = Ambulance::where('id',$id)->first();
        return response()->json($package);
    }

    public function departmentWiseDoctor($id){
        $data['department']    = Department::find($id);
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']         = User::where('user_category','doctor')->where('status','1')->where('department_id',@$data['department']->id)->orderBy('sort','asc')->get();
        $data['page_type'] = 'doctor';
        $data['department_title'] = @$data['department']->name;
        return view('frontend.single_pages.department_wise_doctor_list',$data);
    }

    public function doctorRegistration(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['doctors']        = User::where('user_category','doctor')->where('status','1')->orderBy('sort','asc')->get();
        $data['contact']        = Contact::first();
        $data['page_type']      = 'doctor-registration';
        return view('frontend.single_pages.doctor_registration',$data);
    }

    public function doctorRegStore(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'name'=>'required|max:100',
            'qualification'=>'required|max:200',
            'department_id'=>'required',
            'mobile'=>'required|max:100',
            'work_place'=>'required|max:120'
            // 'email' => 'required|max:100|unique:users,email',
            // 'experience'=>'required|max:120',
            // 'password'=>'required|max:100'
        ]);
        $code = rand(0000,9999);
        $data = new User();
        $data->code = $code.date('His');
        $data->name = strip_tags($request->name);
        $data->qualification = strip_tags($request->qualification);
        $data->department_id = strip_tags($request->department_id);
        $data->mobile = strip_tags($request->mobile);
        $data->mbbs_fcp = strip_tags($request->mbbs_fcp);
        $data->work_place = strip_tags($request->work_place);
        $data->join_date = null;
        $data->password = bcrypt(654321);
        // $data->email = strip_tags($request->email);
        // $data->experience = strip_tags($request->experience);
        // $data->password = bcrypt($request->password);
        if($request->department_id=='53'){
            $data->user_category = 'nurse';
            $data->role = '4';
        }else{
            $data->user_category = 'doctor';
            $data->role = '2';
        }
        
        $data->usertype = 'admin';
        $data->status = '0';
        $data->save();

        Session::put('code',$data->code);

        Session::flash('signupMessage','Congratulations! Your registration is successfully completed');

        $to  = $data->mobile.','.'01315225563'.','.'01317608200';
        $sms_msg = SmsMessage::first();
        $msg = $sms_msg->signup_msg;

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
        // return $response;
        return redirect()->route('our.doctor-reg.submission')->with($response);
    }

    public function doctorRegSubmission(){
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['sliders']        = Slider::all();
        return view('frontend.single_pages.doctor_reg_submission',$data);
    }

    public function doctorRegDownload(Request $request){
        $data['value']          = User::where('code',Session::get('code'))->first();
        $data['categories']     = Category::all();
        $data['departments']    = Department::orderBy('sort','asc')->get();
        $data['sliders']        = Slider::all();
        $data['contact']        = Contact::first();
        $data['logo']           = Logo::first();
        $pdf = PDF::loadView('frontend.single_pages.pdf.doctor_reg_pdf', $data);
        $pdf->SetProtection(['copy', 'print'], '', 'pass');
        return $pdf->stream('registration-copy.pdf');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'msg'=>'required'
        ]);
        $contact = new Communicate();
        $contact->name = strip_tags($request->name);
        $contact->email = strip_tags($request->email);
        $contact->subject = strip_tags($request->subject);
        $contact->msg = strip_tags($request->msg);
        $contact->save();

        // $check_email = Communicate::first();
        // $check_email = 'asadullahkpi@gmail.com';
        // $backend_email = $check_email->email;

        // $data = [
        //     'name'=>$request->name,
        //     'email'=>$request->email,
        //     'subject'=>$request->subject,
        //     'msg'=>$request->msg
        // ];
        // Mail::send('frontend.email.contact_page', $data, function ($message) use ($data,$backend_email){
        //     $message->from($data['email'],$data['name']);
        //     $message->to($backend_email);
        //     $message->subject($data['subject']);
        // });

        Session::flash('contactMessage','Your message is successfully sent!');

        return redirect()->back();
    }


    public function doctorScheduleDate(request $request){
        $scheduleWeekdays = TimeAssign::with("day", "time")->where("doctor_id", $request->doctor_id)->get();
        $weekdays = [];
        $schedule_ids = [];
        foreach ($scheduleWeekdays as $scheduleWeekday) {
            $weekdays[] = $scheduleWeekday['day_id'];
            $schedule_ids[] = $scheduleWeekday['id'];
        };

        // Weekday Manually Set for bootstrap
        $weekdaySet = Day::all();

        $holidays = [];
        foreach ($weekdaySet as $weekday) {
            if (!in_array($weekday->id, $weekdays)) {
                $holidays[]  = $weekday->value;
            }
        }

        return $holidays;

    }

    public function doctorTimeSlot(request $request){
        $dateObj = DateTime::createFromFormat('d-m-Y', $request->appoint_date);
        $bookingsCheck = $dateObj->format('Y-m-d');
        $dateWithDoctorBooking =  DoctorBooking::where('date', $bookingsCheck)->pluck("time_id");
        $getDay = Day::where("name", $dateObj->format('D'))->first()->id;
        $time_ids = TimeAssign::where(["day_id" => $getDay, "doctor_id" => $request->doctor_id])->pluck('time_id');
        $doctorTimeSlot = Time::whereIn('id', $time_ids)->whereNotIn('id', $dateWithDoctorBooking)->get();
        return $doctorTimeSlot;
    }

    public function getVisitFee(Request $request){
        $fee_type = $request->fee_type;
        $doctor_id = $request->doctor_id;
        $doctor = User::where('id',$doctor_id)->first();
        if($fee_type=='Consultation-Fee'){
            $fee = $doctor->consultation_fee;
        }elseif($fee_type=='Follow-Up-Fee'){
            $fee = $doctor->follow_up_fee;
        }
        return response()->json($fee);
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
