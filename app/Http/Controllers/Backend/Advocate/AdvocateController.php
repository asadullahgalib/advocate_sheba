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
use App\Model\AdvocateLaw;
use App\Model\AdvocateLocation;
use App\Model\AdvocatePracticeArea;
use App\Model\District;
use App\Model\Practice;
use App\Model\Law;
use App\Exports\EmployeeExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;
use DB;
use PDF;
use Auth;
use DateTime;
use Image;

class AdvocateController extends Controller
{
    // ১. View Advocate List
    public function view()
    {
        $data['allData'] = User::where('user_category','advocate')->orderBy('id','desc')->get();
        return view('backend.advocate.advocate_view',$data);
    }

    // ২. Add Form (id = 3 wala designation dropdown e show hobe na)
    public function add()
    {       
        $data['designations'] = Designation::whereNotIn('id', [4])->get();
        $data['departments'] = Department::all();
        return view('backend.advocate.advocate_add', $data);
    }

    // ৪. Edit Form (same form, tai ekhaneo id = 3 bad)
    public function edit($id)
    {
        $data['editData'] = User::find($id);
        $data['designations'] = Designation::whereNotIn('id', [4])->get();
        $data['departments'] = Department::all();
        return view('backend.advocate.advocate_add', $data);
    }
    
    // ৩. Store Data
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:users,email'
        ]);
        
        $user = new User();
        $user->usertype = 'admin';
        $user->user_category = 'advocate';
        $user->status = '1';
        $user->role = '2';
        $user->name = $request->name;
        $slug = rand(0000, 9999);
        $user->slug = Str::slug($request->name) . $slug . date('His');
        $user->name_bn = $request->name_bn;
        $user->email = $request->email;
        $user->short_qualification = $request->short_qualification;
        $user->enrollment_no = $request->enrollment_no;
        $user->bar_association = $request->bar_association;
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

        $imageName = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('uploads/advocates_images/');

            // Folder না থাকলে create হবে
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            // Resize + Save
            Image::make($image)
                ->resize(300, 300)
                ->save($destinationPath.$imageName);

            // DB তে image name save
            $user->image = $imageName;
        }
        
        $user->save();
        
        return redirect()->route('advocates.view')->with('success','Data inserted successfully!');
    }

        // ৫. Update Data
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $this->validate($request, [
            'email' => 'required|unique:users,email,' . $user->id
        ]);
        
        $user->name = $request->name;

        // স্লাগ জেনারেট (যদি আগে থেকে না থাকে)
        if (empty($user->slug)) {
            $slug = rand(0000, 9999);
            $user->slug = Str::slug($request->name) . $slug . date('His');
        }

        $user->name_bn = $request->name_bn;
        $user->email = $request->email;
        $user->short_qualification = $request->short_qualification;
        $user->enrollment_no = $request->enrollment_no;
        $user->bar_association = $request->bar_association;
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

        if ($request->hasFile('image')) {

            // পুরনো ছবি ডিলিট
            if (!empty($user->image)) {
                $oldImage = public_path('uploads/advocates_images/' . $user->image);
                if (file_exists($oldImage) && is_file($oldImage)) {
                    unlink($oldImage);
                }
            }

            // নতুন ছবি আপলোড
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/advocates_images/');

            Image::make($image)
                ->resize(300, 300)
                ->save($destinationPath . $imageName);

            $user->image = $imageName;
        }

        $user->save();
        
        return redirect()->route('advocates.view')->with('success','Data updated successfully!');
    }

    // ৬. Main Details / Statement
    public function details($id) 
    {
        $data['details'] = User::find($id);
        $data['designations'] = Designation::all();
        $data['departments'] = Department::all();
        $data['page_title'] = 'statement';
        return view('backend.advocate.advocate_details', $data);
    }

        // ৭. Official Details (GET)
    public function officialDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['editData'] = User::find($id); 
        $data['designations'] = Designation::all();
        $data['departments'] = Department::all();
        $data['page_title'] = 'official';
        return view('backend.advocate.official_details', $data);
    }

    // ৭.২ Official Details Store (POST)
       // ৭.২ Official Details Store (POST)
    public function officialDetailsStore(Request $request, $id) 
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->name_bn = $request->name_bn;
        $user->mobile = $request->mobile;
        $user->designation_id = $request->designation_id;
        $user->email = $request->email;
        $user->experience = $request->experience;
        $user->appointment_contact = $request->appointment_contact;
        
        // নতুন ৩টি ফিল্ড সেভ করা হচ্ছে
        $user->short_qualification = $request->short_qualification;
        $user->enrollment_no = $request->enrollment_no;
        $user->bar_association = $request->bar_association;

        if ($request->hasFile('image')) {

            /*
            |--------------------------------------------------------------------------
            | Old Image Delete
            |--------------------------------------------------------------------------
            | শুধু তখনই unlink হবে যখন database-এ পুরাতন image-এর নাম আছে
            */
            if (!empty($user->image)) {

                $oldImage = public_path('uploads/advocates_images/' . $user->image);

                if (file_exists($oldImage) && is_file($oldImage)) {
                    unlink($oldImage);
                }
            }

            /*
            |--------------------------------------------------------------------------
            | New Image Upload
            |--------------------------------------------------------------------------
            */
            $image = $request->file('image');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('uploads/advocates_images/');

            // Resize + Save
            Image::make($image)
                ->resize(300, 300)
                ->save($destinationPath . $imageName);

            // DB তে নতুন image name save
            $user->image = $imageName;
        }
        
        $user->save();
        
        return redirect()->back()->with('success', 'Official details and image updated successfully!');
    }

      // ৮. About Details
    public function aboutDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['designations'] = Designation::all();
        $data['districts'] = District::all();
        $data['practice_areas'] = Practice::all();
        $data['laws'] = Law::all();
        $data['page_title'] = 'abouts';

        // Laws এর ডাটা
        $data['law_array'] = AdvocateLaw::where('user_id', $id)
            ->pluck('law_id')
            ->toArray();

        // Practice Areas এর ডাটা
        $data['practice_array'] = AdvocatePracticeArea::where('user_id', $id)
            ->pluck('practice_id')
            ->toArray();

        // Locations (Districts) এর ডাটা
        $data['district_array'] = AdvocateLocation::where('user_id', $id)
            ->pluck('district_id')
            ->toArray();

        return view('backend.advocate.about_details', $data);
    }

     public function aboutDetailsStore(Request $request, $id) 
    {
        $data = User::find($id);
        $data->abouts = $request->abouts;
        $data->save();

        // ================= Laws =================
        $law = $request->law_id;
        if(!empty($law)){
           AdvocateLaw::where('user_id',$id)->delete();
        }

        if(!empty($law)){
            foreach ($law as $lw) {
                $mylaw = new AdvocateLaw();
                $mylaw->user_id = $id;
                $mylaw->law_id = $lw;
                $mylaw->save();
            }
        }

        // ================= Practice Areas =================
        $practice = $request->practice_id;
        if(!empty($practice)){
           AdvocatePracticeArea::where('user_id',$id)->delete();
        }

        if(!empty($practice)){
            foreach ($practice as $pr) {
                $mypractice = new AdvocatePracticeArea();
                $mypractice->user_id = $id;
                $mypractice->practice_id = $pr;
                $mypractice->save();
            }
        }

        // ================= Locations (Districts) =================
        $district = $request->district_id;
        if(!empty($district)){
           AdvocateLocation::where('user_id',$id)->delete();
        }

        if(!empty($district)){
            foreach ($district as $dis) {
                $mylocation = new AdvocateLocation();
                $mylocation->user_id = $id;
                $mylocation->district_id = $dis;
                $mylocation->save();
            }
        }

        return redirect()->back()->with('success', 'About details updated successfully');
    }

        // ৯. Qualification Details
    public function educationDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['designations'] = Designation::all();
        $data['page_title'] = 'education';
        return view('backend.advocate.education_details', $data);
    }

    public function educationDetailsStore(Request $request, $id) 
    {
        $data = User::find($id);
        $data->qualification = $request->qualification; // ডাটাবেজ কলাম qualification
        $data->save();
        return redirect()->back()->with('success', 'Qualification details updated successfully');
    }

    // ১০. Training Details
    public function trainingDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['designations'] = Designation::all();
        $data['page_title'] = 'training';
        return view('backend.advocate.training_details', $data);
    }

    public function trainingDetailsStore(Request $request, $id) 
    {
        $data = User::find($id);
        $data->training = $request->training;
        $data->save();
        return redirect()->back()->with('success', 'Training details updated successfully');
    }

        // ১১. Membership Details
    public function membershipDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['designations'] = Designation::all();
        $data['page_title'] = 'membership';
        return view('backend.advocate.membership_details', $data);
    }

    public function membershipDetailsStore(Request $request, $id) 
    {
        $data = User::find($id);
        $data->membership = $request->membership;
        $data->save();
        return redirect()->back()->with('success', 'Membership details updated successfully');
    }

    // Office Hour Details
    public function officeHourDetails($id)
    {
        $data['page_title'] = 'office-hour';
        $data['details'] = User::findOrFail($id);

        return view('backend.advocate.office_hour', $data);
    }

    // Office Hour Details Store
    public function officeHourDetailsStore(Request $request, $id)
    {
        $advocate = User::findOrFail($id);

        $advocate->office_hour = $request->office_hour;
        $advocate->save();

        return redirect()->back()->with('success', 'Office Hour Updated Successfully');
    }

    // ১২. Engagement Details
    public function engagementDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['designations'] = Designation::all();
        $data['page_title'] = 'engagement';
        return view('backend.advocate.engagement_details', $data);
    }

    public function engagementDetailsStore(Request $request, $id)
    {
        $data = User::find($id);
        $data->social = $request->social;
        $data->save();
        return redirect()->back()->with('success', 'Engagement details updated successfully!');
    }

    // ১৩. Chamber Details
    public function chamberDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['designations'] = Designation::all();
        $data['page_title'] = 'chamber';
        return view('backend.advocate.chamber_details', $data);
    }

    public function chamberDetailsStore(Request $request, $id)
    {
        $data = User::find($id);
        $data->chamber = $request->chamber;
        $data->save();
        return redirect()->back()->with('success', 'Chamber details updated successfully!');
    }

    // ১৪. Map Details
    public function mapDetails($id) 
    {
        $data['details'] = User::find($id);
        $data['designations'] = Designation::all();
        $data['page_title'] = 'map';
        return view('backend.advocate.map_details', $data);
    }

    public function mapDetailsStore(Request $request, $id)
    {
        $data = User::find($id);
        $data->map = $request->map;
        $data->save();
        return redirect()->back()->with('success', 'Map details updated successfully!');
    }

        // ১৫. Photo Gallery Details (GET)
    public function galleryDetails($id)
    {
        $data['details'] = User::find($id);
        $data['designations'] = Designation::all();
        $data['gallery_details'] = PhotoGallery::where('user_id', $id)->orderBy('id', 'asc')->get();
        $data['page_title'] = 'gallery';
        return view('backend.advocate.gallery_details', $data);
    }
 
    // ১৫.২ Photo Gallery Details Store (POST)
    public function galleryDetailsStore(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,webp'
        ]);

        $data = new \App\Model\PhotoGallery();
        $data->user_id = $id;
        $data->title = $request->caption;
        $data->created_by = Auth::user()->id;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/gallery_images'), $filename);
            
            $file = Image::make(public_path('uploads/gallery_images/').$filename);
            $file->resize(600, 400)->save(public_path('uploads/gallery_images/').$filename);
            
            $data->image = $filename;
        } else {
            $data->image = 'no_image.png';
        }
        
        $data->save();
        return redirect()->back()->with('success', 'Gallery image uploaded successfully');
    }

    // ১৫.৩ Photo Gallery Details Delete (POST)
    public function galleryDetailsDelete(Request $request)
    {
        $gallery = \App\Model\PhotoGallery::find($request->id);
        if (!empty($gallery->image) && $gallery->image != 'no_image.png' && file_exists(public_path('uploads/gallery_images/' . $gallery->image))) {
            @unlink(public_path('uploads/gallery_images/' . $gallery->image));
        }
        $gallery->delete();
        return redirect()->back()->with('success', 'Image deleted successfully!');
    }

}