<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\LawFirm;
use App\Model\User;
use App\Model\LawFirmGallery;
use App\Model\LawFirmMember;
use Image;
use Auth;
use Illuminate\Support\Str;

class LawFirmController extends Controller
{
    // ==========================================
    // Helper Methods
    // ==========================================

    // Slug বানানো (বাংলা নাম হলে ফাঁকা না হয়ে fallback নেবে)
    private function makeSlug($name)
    {
        $baseSlug = Str::slug($name);
        if (empty($baseSlug)) {
            $baseSlug = 'law-firm';
        }
        return $baseSlug . rand(1000, 9999) . date('His');
    }

    // ছবি আপলোড (পুরনো ছবি থাকলে unlink করবে) - নতুন ছবির নাম return করবে
    private function uploadImage($request, $oldImage = null)
    {
        $destinationPath = public_path('uploads/law_firm_images/');

        // Folder না থাকলে create হবে
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
        }

        // পুরনো ছবি ডিলিট
        if (!empty($oldImage)) {
            $oldPath = $destinationPath . $oldImage;
            if (file_exists($oldPath) && is_file($oldPath)) {
                unlink($oldPath);
            }
        }

        // নতুন ছবি Resize + Save
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        Image::make($image)
            ->resize(300, 300)
            ->save($destinationPath . $imageName);

        return $imageName;
    }

    // ১. View List
    public function view()
    {
        $allData = LawFirm::with(['leader'])->orderBy('id', 'desc')->get();
        return view('backend.law_firms.law_firms_view', compact('allData'));
    }

    // ২. Add Form
    public function add()
    {
        $leaders = User::where('user_category', 'advocate')->get(); 
        return view('backend.law_firms.law_firms_add', compact('leaders'));
    }

    // ৩. Store Data
    public function store(Request $request)
    {
        $this->validate($request, [
            'firm_name'       => 'required|string|max:255',
            'abouts'          => 'required',
            'enrollment_no'   => 'required',
            'bar_association' => 'required',
            'team_size'       => 'required|numeric|min:0',
            'image'           => 'nullable|image|mimes:jpeg,png,jpg,webp',
        ]);

        $data = new LawFirm();
        $data->leader_id = $request->leader_id;
        $data->firm_name = $request->firm_name;
        $data->slug = $this->makeSlug($request->firm_name);
        $data->court_name = $request->court_name;
        $data->established = $request->established;
        $data->enrollment_no = $request->enrollment_no;
        $data->bar_association = $request->bar_association;
        $data->team_size = $request->team_size;
        $data->abouts = $request->abouts;
        $data->membership = $request->membership;
        $data->practice = $request->practice;
        $data->training = $request->training;
        $data->qualification = $request->qualification;
        $data->chamber = $request->chamber;
        $data->office_hour = $request->office_hour;
        $data->map = $request->map;
        $data->social = $request->social;
        $data->status = isset($request->status) ? $request->status : 1;
        $data->created_by = Auth::user()->id;

        if ($request->hasFile('image')) {
            $data->image = $this->uploadImage($request);
        }

        $data->save();

        return redirect()->route('law-firms.view')->with('success', 'Data Inserted successfully');
    }

    // ৪. Edit Form
    public function edit($id)
    {
        $editData = LawFirm::find($id);
        $leaders = User::where('user_category', 'advocate')->get();
        return view('backend.law_firms.law_firms_add', compact('editData', 'leaders'));
    }

    // ৫. Update Data
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'firm_name'       => 'required|string|max:255',
            'abouts'          => 'required',
            'enrollment_no'   => 'required',
            'bar_association' => 'required',
            'team_size'       => 'required|numeric|min:0',
            'image'           => 'nullable|image|mimes:jpeg,png,jpg,webp',
        ]);

        $data = LawFirm::find($id);
        $data->leader_id = $request->leader_id;
        $data->firm_name = $request->firm_name;
        
        if (empty($data->slug)) {
            $data->slug = $this->makeSlug($request->firm_name);
        }
        
        $data->court_name = $request->court_name;
        $data->established = $request->established;
        $data->enrollment_no = $request->enrollment_no;
        $data->bar_association = $request->bar_association;
        $data->team_size = $request->team_size;
        $data->abouts = $request->abouts;
        $data->membership = $request->membership;
        $data->practice = $request->practice;
        $data->training = $request->training;
        $data->qualification = $request->qualification;
        $data->chamber = $request->chamber;
        $data->office_hour = $request->office_hour;
        $data->map = $request->map;
        $data->social = $request->social;
        $data->status = isset($request->status) ? $request->status : 1;
        $data->updated_by = Auth::user()->id;

        if ($request->hasFile('image')) {
            $data->image = $this->uploadImage($request, $data->image);
        }

        $data->save();

        return redirect()->route('law-firms.view')->with('success', 'Data updated successfully');
    }

    // ৬. Delete Data
    public function delete(Request $request)
    {
        $data = LawFirm::find($request->id);
        if ($data) {
            // ছবি থাকলে ফোল্ডার থেকেও মুছে ফেলা
            if (!empty($data->image)) {
                $imagePath = public_path('uploads/law_firm_images/' . $data->image);
                if (file_exists($imagePath) && is_file($imagePath)) {
                    unlink($imagePath);
                }
            }
            $data->delete();
        }
        return redirect()->route('law-firms.view')->with('success', 'Data Deleted successfully');
    }

    // ==========================================
    // ট্যাব ভিত্তিক মেথড (Tabs)
    // ==========================================

    // Details Tab
    public function details($id)
    {
        $details = LawFirm::find($id);
        $page_title = 'details';
        return view('backend.law_firms.law_firm_details', compact('details', 'page_title'));
    }

    // Official Tab (GET)
    public function officialDetails($id)
    {
        $details = LawFirm::with('leader')->findOrFail($id);
        $leaders = User::where('user_category', 'advocate')->get();
        $page_title = 'official';
        return view('backend.law_firms.official_details', compact('details', 'leaders', 'page_title'));
    }

    // Official Tab Store (POST)
    public function officialDetailsStore(Request $request, $id)
    {
        $this->validate($request, [
            'leader_id'       => 'required',
            'firm_name'       => 'required|string|max:255',
            'enrollment_no'   => 'required',
            'bar_association' => 'required',
            'team_size'       => 'required|numeric|min:0',
            'image'           => 'nullable|image|mimes:jpeg,png,jpg,webp',
        ]);

        $data = LawFirm::findOrFail($id);
        $data->leader_id = $request->leader_id;
        $data->firm_name = $request->firm_name;

        if (empty($data->slug)) {
            $data->slug = $this->makeSlug($request->firm_name);
        }

        $data->court_name = $request->court_name;
        $data->established = $request->established;
        $data->enrollment_no = $request->enrollment_no;
        $data->bar_association = $request->bar_association;
        $data->team_size = $request->team_size;
        $data->updated_by = Auth::user()->id;

        if ($request->hasFile('image')) {
            $data->image = $this->uploadImage($request, $data->image);
        }

        $data->save();

        return redirect()->back()->with('success', 'Official details updated successfully!');
    }

    // Abouts Tab (মেম্বার সহ)
    public function aboutDetails($id)
    {
        $details = LawFirm::find($id);
        $page_title = 'abouts';

        // যারা অন্য কোনো ফার্মে আছে, তাদের বাদ দিতে হবে
        $taken_advocates = LawFirmMember::where('law_firm_id', '!=', $id)->pluck('user_id')->toArray();
        
        // শুধু ফ্রি অ্যাডভোকেটরা (যারা কোনো ফার্মে নেই)
        $available_advocates = User::where('user_category', 'advocate')
                                   ->whereNotIn('id', $taken_advocates)
                                   ->get();
                                   
        // এই ফার্মের বর্তমান মেম্বারদের আইডি
        $current_member_ids = LawFirmMember::where('law_firm_id', $id)->pluck('user_id')->toArray();
        
        // এই ফার্মের বর্তমান মেম্বার
        $members = LawFirmMember::with('user')->where('law_firm_id', $id)->get();

        return view('backend.law_firms.law_firm_abouts', compact('details', 'page_title', 'available_advocates', 'members', 'current_member_ids'));
    }

    // Abouts Store (একদম Advocate-এর মতো)
    public function aboutsStore(Request $request, $id)
    {
        $data = LawFirm::find($id);
        $data->abouts = $request->abouts;
        $data->save();

        // অ্যাডভোকেট লিস্ট
        $advocates = $request->user_id;

        // আগের মেম্বার ডিলিট
        if(!empty($advocates)){
           LawFirmMember::where('law_firm_id', $id)->delete();
        }

        // নতুন মেম্বার অ্যাড
        if(!empty($advocates)){
            foreach ($advocates as $adv) {
                $member = new LawFirmMember();
                $member->law_firm_id = $id;
                $member->user_id = $adv;
                $member->save();
            }
        }

        return redirect()->back()->with('success', 'Abouts and Members updated successfully');
    }

    // ==========================================
    // অন্যান্য ট্যাবের মেথড (Qualification, Training, etc)
    // ==========================================
    public function qualificationDetails($id)
    {
        $details = LawFirm::find($id);
        $page_title = 'qualification';
        return view('backend.law_firms.law_firm_qualification', compact('details', 'page_title'));
    }

    public function qualificationStore(Request $request, $id)
    {
        $data = LawFirm::find($id);
        $data->qualification = $request->qualification;
        $data->save();
        return redirect()->back()->with('success', 'Qualification updated successfully');
    }

    public function trainingDetails($id)
    {
        $details = LawFirm::find($id);
        $page_title = 'training';
        return view('backend.law_firms.law_firm_training', compact('details', 'page_title'));
    }

    public function trainingStore(Request $request, $id)
    {
        $data = LawFirm::find($id);
        $data->training = $request->training;
        $data->save();
        return redirect()->back()->with('success', 'Training updated successfully');
    }

    public function membershipDetails($id)
    {
        $details = LawFirm::find($id);
        $page_title = 'membership';
        return view('backend.law_firms.law_firm_membership', compact('details', 'page_title'));
    }

    public function membershipStore(Request $request, $id)
    {
        $data = LawFirm::find($id);
        $data->membership = $request->membership;
        $data->save();
        return redirect()->back()->with('success', 'Membership updated successfully');
    }

    public function socialDetails($id)
    {
        $details = LawFirm::find($id);
        $page_title = 'social';
        return view('backend.law_firms.law_firm_social', compact('details', 'page_title'));
    }

    public function socialStore(Request $request, $id)
    {
        $data = LawFirm::find($id);
        $data->social = $request->social;
        $data->save();
        return redirect()->back()->with('success', 'Social updated successfully');
    }

    public function chamberDetails($id)
    {
        $details = LawFirm::find($id);
        $page_title = 'chamber';
        return view('backend.law_firms.law_firm_chamber', compact('details', 'page_title'));
    }

    public function chamberStore(Request $request, $id)
    {
        $data = LawFirm::find($id);
        $data->chamber = $request->chamber;
        $data->save();
        return redirect()->back()->with('success', 'Chamber updated successfully');
    }

    public function mapDetails($id)
    {
        $details = LawFirm::find($id);
        $page_title = 'map';
        return view('backend.law_firms.law_firm_map', compact('details', 'page_title'));
    }

    public function mapStore(Request $request, $id)
    {
        $data = LawFirm::find($id);
        $data->map = $request->map;
        $data->save();
        return redirect()->back()->with('success', 'Map updated successfully');
    }

    // ==========================================
    // Photo Gallery
    // ==========================================
    public function galleryDetails($id)
    {
        $details = LawFirm::find($id);
        $gallery_details = LawFirmGallery::where('law_firm_id', $id)->orderBy('id', 'desc')->get();
        $page_title = 'gallery';
        return view('backend.law_firms.law_firm_gallery', compact('details', 'gallery_details', 'page_title'));
    }

    public function galleryDetailsStore(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,webp'
        ]);

        $data = new LawFirmGallery();
        $data->law_firm_id = $id;
        $data->title = $request->caption;
        $data->created_by = Auth::user()->id;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/law_firm_gallery_images'), $filename);
            
            $file = Image::make(public_path('uploads/law_firm_gallery_images/').$filename);
            $file->resize(600, 400)->save(public_path('uploads/law_firm_gallery_images/').$filename);
            
            $data->image = $filename;
        } else {
            $data->image = 'no_image.png';
        }
        
        $data->save();
        return redirect()->back()->with('success', 'Gallery image uploaded successfully');
    }

    public function galleryDetailsDelete(Request $request)
    {
        $gallery = LawFirmGallery::find($request->id);
        if (!empty($gallery->image) && $gallery->image != 'no_image.png' && file_exists(public_path('uploads/law_firm_gallery_images/' . $gallery->image))) {
            @unlink(public_path('uploads/law_firm_gallery_images/' . $gallery->image));
        }
        $gallery->delete();
        return redirect()->back()->with('success', 'Image deleted successfully!');
    }

    // Office Hour Details
    public function officeHourDetails($id)
    {
        $data['page_title'] = 'office-hour';
        $data['details'] = LawFirm::findOrFail($id);

        return view('backend.law_firms.office_hour', $data);
    }

    // Office Hour Store
    public function officeHourStore(Request $request, $id)
    {
        $lawFirm = LawFirm::findOrFail($id);

        $lawFirm->office_hour = $request->office_hour;
        $lawFirm->updated_by = Auth::user()->id;
        $lawFirm->save();

        return redirect()->back()->with('success', 'Official details updated successfully');
    }
}