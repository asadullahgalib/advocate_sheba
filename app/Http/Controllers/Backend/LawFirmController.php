<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\LawFirm;
use App\Model\User;
use App\Model\District;
use Auth;
use Illuminate\Support\Str; // স্লাগ জেনারেট করার জন্য

class LawFirmController extends Controller
{
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
        // $districts = District::orderBy('name', 'asc')->get(); // স্যার বলেছেন ডিস্ট্রিক্ট বাদ, তাই এটাও বাদ
        return view('backend.law_firms.law_firms_add', compact('leaders'));
    }

    // ৩. Store Data
    public function store(Request $request)
    {
        $this->validate($request, [
            'firm_name' => 'required|string|max:255',
            'abouts'    => 'required',
        ]);

        $data = new LawFirm();
        $data->leader_id = $request->leader_id;
        $data->firm_name = $request->firm_name;
        
        $slug = rand(0000, 9999);
        $data->slug = Str::slug($request->firm_name) . $slug . date('His');
        
        $data->court_name = $request->court_name;
        $data->established = $request->established;
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
            'firm_name' => 'required|string|max:255',
            'abouts'    => 'required',
        ]);

        $data = LawFirm::find($id);
        $data->leader_id = $request->leader_id;
        $data->firm_name = $request->firm_name;
        
        // স্লাগ আগে থেকে না থাকলে জেনারেট হবে
        if (empty($data->slug)) {
            $slug = rand(0000, 9999);
            $data->slug = Str::slug($request->firm_name) . $slug . date('His');
        }
        
        $data->court_name = $request->court_name;
        $data->established = $request->established;
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
        $data->save();

        return redirect()->route('law-firms.view')->with('success', 'Data updated successfully');
    }

    // ৬. Delete Data
    public function delete(Request $request)
    {
        $data = LawFirm::find($request->id);
        if ($data) {
            $data->delete();
        }
        return redirect()->route('law-firms.view')->with('success', 'Data Deleted successfully');
    }

    // ==========================================
    // ট্যাব ভিত্তিক মেথড (Tabs) - এখানে id দিয়েই কাজ করছি 
    // (ব্যাকএন্ডে id দিয়েই কাজ করা ভালো, ফ্রন্টএন্ডে slug ব্যবহার করব)
    // ==========================================

    public function details($id)
    {
        $details = LawFirm::find($id);
        $page_title = 'details';
        return view('backend.law_firms.law_firm_details', compact('details', 'page_title'));
    }

    public function aboutDetails($id)
    {
        $details = LawFirm::find($id);
        $page_title = 'abouts';
        return view('backend.law_firms.law_firm_abouts', compact('details', 'page_title'));
    }

    public function qualificationDetails($id)
    {
        $details = LawFirm::find($id);
        $page_title = 'qualification';
        return view('backend.law_firms.law_firm_qualification', compact('details', 'page_title'));
    }

    public function trainingDetails($id)
    {
        $details = LawFirm::find($id);
        $page_title = 'training';
        return view('backend.law_firms.law_firm_training', compact('details', 'page_title'));
    }

    public function membershipDetails($id)
    {
        $details = LawFirm::find($id);
        $page_title = 'membership';
        return view('backend.law_firms.law_firm_membership', compact('details', 'page_title'));
    }

    public function socialDetails($id)
    {
        $details = LawFirm::find($id);
        $page_title = 'social';
        return view('backend.law_firms.law_firm_social', compact('details', 'page_title'));
    }

    public function chamberDetails($id)
    {
        $details = LawFirm::find($id);
        $page_title = 'chamber';
        return view('backend.law_firms.law_firm_chamber', compact('details', 'page_title'));
    }

    public function mapDetails($id)
    {
        $details = LawFirm::find($id);
        $page_title = 'map';
        return view('backend.law_firms.law_firm_map', compact('details', 'page_title'));
    }

    // ==========================================
    // ডাটা সেভ (Store) করার মেথডগুলো
    // ==========================================
    
    public function aboutsStore(Request $request, $id)
    {
        $data = LawFirm::find($id);
        $data->abouts = $request->abouts;
        $data->save();
        return redirect()->back()->with('success', 'Abouts updated successfully');
    }

    public function qualificationStore(Request $request, $id)
    {
        $data = LawFirm::find($id);
        $data->qualification = $request->qualification;
        $data->save();
        return redirect()->back()->with('success', 'Qualification updated successfully');
    }

    public function trainingStore(Request $request, $id)
    {
        $data = LawFirm::find($id);
        $data->training = $request->training;
        $data->save();
        return redirect()->back()->with('success', 'Training updated successfully');
    }

    public function membershipStore(Request $request, $id)
    {
        $data = LawFirm::find($id);
        $data->membership = $request->membership;
        $data->save();
        return redirect()->back()->with('success', 'Membership updated successfully');
    }

    public function socialStore(Request $request, $id)
    {
        $data = LawFirm::find($id);
        $data->social = $request->social;
        $data->save();
        return redirect()->back()->with('success', 'Social updated successfully');
    }

    public function chamberStore(Request $request, $id)
    {
        $data = LawFirm::find($id);
        $data->chamber = $request->chamber;
        $data->save();
        return redirect()->back()->with('success', 'Chamber updated successfully');
    }

    public function mapStore(Request $request, $id)
    {
        $data = LawFirm::find($id);
        $data->map = $request->map;
        $data->save();
        return redirect()->back()->with('success', 'Map updated successfully');
    }
}