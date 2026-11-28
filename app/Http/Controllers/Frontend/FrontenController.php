<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
use App\Model\Term;
use App\Model\Faq;
use App\Model\Document;
use App\Model\LegalInformation;
use App\Model\legalInformationDetails;
use App\Model\Law;
use App\Model\LawFirm;
use App\Model\Megazine;
use App\Model\Add;
use App\Model\LegalProfessionalDetail;
use App\Model\Court;
use App\Model\SubCourt;
use App\Model\AdvocateLaw;
use App\Model\AdvocatePracticeArea;
use App\Model\AdvocateLocation;
use App\Model\LawFirmMember;
use App\Model\AdvocateCourt;
use\Model\SubCourtDetail;
use Auth;
use DateTime;
use PDF;
use Session;

class FrontenController extends Controller
{
    public function index(){

        $data['sliders']        = Slider::all();
        $data['logo']           = Logo::first();
        // $data['AdvocatePracticeArea'] = AdvocatePracticeArea::select('')->groupBy('practice_id')->get()->take(12);
        $data['page_type']      = 'home';

        $data['legalArticles']  = NewsEvent::with('law')
            ->orderBy('date', 'desc')
            ->take(4)
            ->get();

        // Legal Information Data (home-এ সর্বোচ্চ ৪টা কার্ড)
        $data['legalInformations'] = LegalInformation::orderBy('id', 'asc')
            ->take(4)
            ->get();

        // FAQ Data
        $data['faqs'] = Faq::orderBy('serial', 'asc')->get();

        // Trusted Platform Banner Data (Term table theke, id = 23)
        $data['trustedTerm'] = Term::find(10);

        // Video Gallery Data
        $data['videos'] = VideoGallery::orderBy('id', 'desc')
            ->take(4)
            ->get();

        $data['documents'] = Document::orderBy('id','desc')
            ->take(12)
            ->get();

        // Notice Bar (Promotion) Data
        $data['promotions'] = Promotion::where('status', 1)
            ->orderBy('serial', 'asc')
            ->orderBy('id', 'desc')
            ->get();

        // Legal Services Data (Home Page Maximum 12 Cards)
        $data['laws'] = Law::orderBy('sort', 'asc')
            ->take(10)
            ->get();

        $data['adds'] = Add::orderBy('serial', 'asc')
            ->orderBy('id', 'desc')
            ->get()
            ->groupBy('add_position_id');

        // ==========================================
        // Dynamic Advocate, Barrister
        // ==========================================
        
        // ১. Advocate (ধরে নিচ্ছি designation_id = 5)
        $data['advocates'] = User::where('user_category', 'advocate')
                         ->where('designation_id', 5)
                         ->where('status','1')
                         ->orderBy('id', 'desc')
                         ->take(10)
                         ->get();

        // ২. Barrister (ধরে নিচ্ছি designation_id = 2)
        $data['barristers'] = User::where('user_category', 'advocate')
                          ->where('designation_id', 2)
                          ->where('status','1')
                          ->orderBy('id', 'desc')
                          ->take(10)
                          ->get();

        // Law Firms Data (Home Page Maximum 10 Cards)
        $data['law_firms'] = LawFirm::with('leader')
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->take(10)
            ->get();

        return view('frontend.layouts.home', $data);
    }
       
    public function advocateProfile($slug)
    {
        // Advocate Profile
        $data['advocate'] = User::where('user_category', 'advocate')
            ->where('slug', $slug)
            ->first();

        if (!$data['advocate']) {
            abort(404);
        }

        $userId = $data['advocate']->id;

        // Advocate Laws
        $data['advocate_laws'] = AdvocateLaw::where('user_id', $userId)->get();

        // Advocate Practice Areas
        $data['advocate_practice_areas'] = AdvocatePracticeArea::where('user_id', $userId)->get();

        // Advocate Locations
        $data['advocate_locations'] = AdvocateLocation::where('user_id', $userId)->get();

        // Advocate Galleries
        $data['advocate_galleries'] = PhotoGallery::where('user_id', $userId)->get();


        // Current Advocate's Multiple IDs
        $lawIds = $data['advocate_laws']
            ->pluck('law_id')
            ->unique()
            ->values()
            ->toArray();

        $practiceIds = $data['advocate_practice_areas']
            ->pluck('practice_id')
            ->unique()
            ->values()
            ->toArray();

        $districtIds = $data['advocate_locations']
            ->pluck('district_id')
            ->unique()
            ->values()
            ->toArray();


        // Same Designation Advocates
        $relatedAdvocates = User::where('user_category', 'advocate')
            ->where('designation_id', $data['advocate']->designation_id)
            ->where('status', '1')
            ->where('id', '!=', $userId)
            ->orderBy('id', 'desc')
            ->get();


        // Matching Law Count
        $lawMatches = collect();

        if (!empty($lawIds)) {

            $lawMatches = \DB::table('advocate_laws')
                ->whereIn('law_id', $lawIds)
                ->selectRaw('user_id, COUNT(DISTINCT law_id) as matched')
                ->groupBy('user_id')
                ->pluck('matched', 'user_id');
        }


        // Matching Practice Area Count
        $practiceMatches = collect();

        if (!empty($practiceIds)) {

            $practiceMatches = \DB::table('advocate_practice_areas')
                ->whereIn('practice_id', $practiceIds)
                ->selectRaw('user_id, COUNT(DISTINCT practice_id) as matched')
                ->groupBy('user_id')
                ->pluck('matched', 'user_id');
        }


        // Matching District Count
        $districtMatches = collect();

        if (!empty($districtIds)) {

            $districtMatches = \DB::table('advocate_locations')
                ->whereIn('district_id', $districtIds)
                ->selectRaw('user_id, COUNT(DISTINCT district_id) as matched')
                ->groupBy('user_id')
                ->pluck('matched', 'user_id');
        }


        // Calculate Matching Score
        $relatedAdvocates = $relatedAdvocates->map(function ($advocate) use (
            $lawMatches,
            $practiceMatches,
            $districtMatches
        ) {

            $lawCount = (int) $lawMatches->get($advocate->id, 0);

            $practiceCount = (int) $practiceMatches->get($advocate->id, 0);

            $districtCount = (int) $districtMatches->get($advocate->id, 0);


            // Total Matching Score
            $advocate->matching_score = $lawCount + $practiceCount + $districtCount;


            // Matching Categories
            $advocate->matching_categories =
                ($lawCount > 0 ? 1 : 0) +
                ($practiceCount > 0 ? 1 : 0) +
                ($districtCount > 0 ? 1 : 0);


            $advocate->matched_laws = $lawCount;

            $advocate->matched_practice_areas = $practiceCount;

            $advocate->matched_locations = $districtCount;


            return $advocate;
        });


        // Separate Matching Advocates
        $matchedAdvocates = $relatedAdvocates
            ->filter(function ($advocate) {
                return $advocate->matching_score > 0;
            })
            ->sort(function ($a, $b) {

                // First: More Matching Categories
                if ($a->matching_categories != $b->matching_categories) {
                    return $b->matching_categories <=> $a->matching_categories;
                }

                // Second: Higher Matching Score
                if ($a->matching_score != $b->matching_score) {
                    return $b->matching_score <=> $a->matching_score;
                }

                // Third: Latest Advocate
                return $b->id <=> $a->id;
            })
            ->values();


        // Separate Non-Matching Advocates
        $nonMatchedAdvocates = $relatedAdvocates
            ->filter(function ($advocate) {
                return $advocate->matching_score == 0;
            })
            ->sortByDesc('id')
            ->values();


        // First: Matching Advocates
        // Second: Same Designation Other Advocates
        // Maximum: 10 Advocates

        $data['related_advocates'] = $matchedAdvocates
            ->concat($nonMatchedAdvocates)
            ->take(10)
            ->values();


        // Legal Articles
        $data['legalArticles'] = NewsEvent::with('law')
            ->orderBy('date', 'desc')
            ->take(4)
            ->get();


        // Video Gallery Data
        $data['videos'] = VideoGallery::orderBy('id', 'desc')
            ->take(4)
            ->get();


        return view('frontend.advocate.advocate_profile', $data);
    }

    //Term Show
    public function term()
    {
        $route = request()->route()->getName();

        $ids = [
            'for.advocate'     => 1,
            'how.it.works'     => 2,
            'user.guide'       => 3,
            'privacy.policy'   => 5,
            'disclaimer'       => 6,
            'terms.of.use'     => 7,
            'editorial.policy' => 8,
            'about'            => 9,
        ];

        $id = $ids[$route] ?? abort(404);
        $term = Term::findOrFail($id);

        return view('frontend.term.term', compact('term'));
    }

    public function contact(){
        $data['contactInfo'] = Contact::first();
        return view('frontend.contact.contact',$data);
    }

    //Registration
    public function registration(){
        // As Featured In (Megazine) Data
        $data['megazines']      = Megazine::orderBy('serial', 'asc')
            ->orderBy('id', 'desc')
            ->get();

        $data['page_type']      = 'registration';
        return view('frontend.registration.user_registration',$data);
    }

    public function joinAdvocate(){
        $data['page_type']      = 'joinAdvocate';
        return view('frontend.registration.user_registration',$data);
    }

    public function joinBarrister(){
        $data['page_type']      = 'joinBarrister';
        return view('frontend.registration.user_registration',$data);
    }

    public function joinConsultant(){
        $data['page_type']      = 'joinConsultant';
        return view('frontend.registration.user_registration',$data);
    }

    public function joinLawFirm(){
        $data['page_type']      = 'joinLawFirm';
        return view('frontend.registration.user_registration',$data);
    }

    //Registration
    public function advocateJoin(){
        $data['page_type']      = 'advocate-join';
        return view('frontend.registration.advocate_join',$data);
    }

    public function courtDetails($slug){
        // Court Name এবং Overview এর জন্য (slug বা id দুটোই সাপোর্ট করবে)
        $data['court'] = Court::where('slug', $slug)->orWhere('id', $slug)->firstOrFail();

        // Court এর অধীনে থাকা Sub Courts (Tabs এর জন্য)
        $data['subCourts'] = SubCourt::where('court_id', $data['court']->id)
                                ->where('status', 1)
                                ->get();

        $data['page_type']      = 'court';

        return view('frontend.courts.court_details', $data);
    }

    public function courtsList(){
        $data['page_type']      = 'courts';

        return view('frontend.courts.courts_list', $data);
    }

    public function legalFormList()
    {
        $data['page_type'] = 'legal_form';
        $data['documents'] = Document::orderBy('id', 'desc')
            ->get();

        return view('frontend.document_forms.legal_form_list', $data);
    }

    public function legalForm($slug)
    {
        $data['page_type'] = 'legal_form';
        $data['document'] = Document::where('slug', $slug)->firstOrFail();

        $data['pdfUrl'] = !empty($data['document']->pdf_file)
            ? asset('uploads/document_files/' . $data['document']->pdf_file)
            : null;

        return view('frontend.document_forms.legal_form', $data);
    }

    public function legalInformation()
    {
        $data['page_type']          = 'legal_information';
        $data['legalInformations']  = LegalInformation::orderBy('id', 'asc')->get();

        $data['laws'] =Law::orderBy('id', 'asc')->get()->take(10);

        $data['legalArticles'] = NewsEvent::with('law')
            ->orderBy('date', 'desc')
            ->take(4)
            ->get();

        $data['videos'] = VideoGallery::orderBy('id', 'desc')
            ->take(4)
            ->get();

        return view('frontend.single_pages.legal_information', $data);
    }

    // ====== slug দিয়ে dynamic details পেজ ======
    public function legalInformationDetails($slug)
        {
            $data['page_type']      = 'legal_information_details';
            $data['legalInfo']      = LegalInformation::with('details')->where('slug', $slug)->firstOrFail();

            return view('frontend.legal_information.details', $data);
        }

    // ====== পুরনো ৪টা লিংক নতুন dynamic পেজে পাঠায় ======
    public function legalInformationRights(){
        return $this->redirectLegalInformation('Rights');
    }

    public function legalInformationTerms(){
        return $this->redirectLegalInformation('Terms');
    }

    public function legalInformationLaws(){
        return $this->redirectLegalInformation('Laws');
    }

    public function legalInformationProcudures(){
        return $this->redirectLegalInformation('Procedures');
    }

    // title-এ শব্দটা থাকলে সেই Legal Information-এর পেজে পাঠায়
    private function redirectLegalInformation($keyword){
        $info = LegalInformation::where('title_en', 'like', '%' . $keyword . '%')->first();

        if (!$info) {
            abort(404);
        }

        return redirect()->route('legal.information.details', $info->slug);
    }
    
    public function lawDetails($slug)
    {

        $data['law'] = Law::with(['lawDetails' => function ($query) {
            $query->orderBy('serial', 'asc');
        }])
        ->where('slug', $slug)
        ->firstOrFail();

        $data['page_type'] = 'law_details';

        return view('frontend.law.law_details', $data);
    }

    public function lawList()
    {
        $data['laws'] = Law::orderBy('sort', 'asc')->get();
        $data['page_type'] = 'law_list';

        return view('frontend.law.law_list', $data);
    }

    public function advocateList(){
        $data = $this->professionalPageData(5, 'advocate');
        return view('frontend.single_pages.professional_info', $data);
    }

    // Barristers = designation id 2
    public function barristerList(){
        $data = $this->professionalPageData(2, 'barrister');
        return view('frontend.single_pages.professional_info', $data);
    }

    // Law Firms / Chambers = designation id 4
    public function lawFirmList(){
        $data = $this->professionalPageData(4, 'law_firm');
        return view('frontend.single_pages.professional_info', $data);
    }

    // চারটা পেজের common ডাটা এখানে আনা হয়
    private function professionalPageData($designationId, $pageType){
        $data['page_type']   = $pageType;
        $data['designation'] = Designation::where('id', $designationId)->first();
        $data['designation_details'] = LegalProfessionalDetail::where('designation_id', $designationId)->orderBy('sort','asc')->get();
        return $data;
    }

    public function findAdvocateList(){

        $data['advocates'] = User::with('designation')
        ->where('user_category', 'advocate')
        ->where('status', 1)
        ->where('designation_id', 5)
        ->orderBy('id', 'desc')
        ->paginate(12);
        
        // নতুন যোগ করা হলো: Legal Articles এবং Videos ডাটা
        $data['legalArticles'] = NewsEvent::with('law')
            ->orderBy('date', 'desc')
            ->take(4)
            ->get();

        $data['videos'] = VideoGallery::orderBy('id', 'desc')
            ->take(4)
            ->get();

        $data['page_type'] = 'find_advocate';
        
        return view('frontend.single_pages.find_advocate_list',$data);
    }

    public function findBarristerList(){

        $data['advocates'] = User::with('designation')
        ->where('user_category', 'advocate')
        ->where('status', 1)
        ->where('designation_id', 2)
        ->orderBy('id', 'desc')
        ->paginate(12);

        // নতুন যোগ করা হলো: Legal Articles এবং Videos ডাটা
        $data['legalArticles'] = NewsEvent::with('law')
            ->orderBy('date', 'desc')
            ->take(4)
            ->get();

        $data['videos'] = VideoGallery::orderBy('id', 'desc')
            ->take(4)
            ->get();

        $data['page_type'] = 'find_barrister';
        return view('frontend.single_pages.find_barrister_list',$data);
    }

    public function findLawFirmList(){

        // Legal Articles এবং Videos ডাটা
        $data['legalArticles'] = NewsEvent::with('law')
            ->orderBy('date', 'desc')
            ->take(4)
            ->get();

        $data['videos'] = VideoGallery::orderBy('id', 'desc')
            ->take(4)
            ->get();

        $data['law_firms'] = LawFirm::with('leader')
        ->where('status', 1)
        ->orderBy('id', 'desc')
        ->paginate(12);

        $data['page_type'] = 'find_law_firm';

        return view('frontend.single_pages.find_law_firm_list',$data);
    }

public function lawFirmDetails($slug = null){

    // slug ছাড়া পুরোনো লিংকে এলে list পেজে পাঠিয়ে দেবে
    if (empty($slug)) {
        return redirect()->route('find.our.law-firm-list');
    }

    // ================= Law Firm Profile =================
    $lawFirm = LawFirm::with('leader')
        ->where('slug', $slug)
        ->where('status', 1)
        ->first();

    $data['law_firm_members'] = LawFirmMember::with(['user'])->where('law_firm_id',$lawFirm->id)->where('user_id','!=',$lawFirm->leader_id)->get();

    if (!$lawFirm) {
        abort(404);
    }

    $data['law_firm'] = $lawFirm;

    $leaderId = $lawFirm->leader_id;

    // ================= লিডারের Laws =================
    $data['leader_laws'] = !empty($leaderId)
        ? \App\Model\AdvocateLaw::with('law')->where('user_id', $leaderId)->get()
        : collect();

    // ================= লিডারের Practice Areas =================
    $data['leader_practice_areas'] = !empty($leaderId)
        ? \App\Model\AdvocatePracticeArea::with('practice')->where('user_id', $leaderId)->get()
        : collect();

    // ================= লিডারের Locations =================
    $data['leader_locations'] = !empty($leaderId)
        ? \App\Model\AdvocateLocation::with('district')->where('user_id', $leaderId)->get()
        : collect();

    // ================= জেলা (প্রোফাইল কার্ডে একবারই দেখাবে) =================
    $firmDistrict = null;

    // ১. ফার্মের নিজের জেলা থাকলে সেটা
    if (!empty($lawFirm->district_id)) {
        $firmDistrict = \App\Model\District::find($lawFirm->district_id);
    }

    // ২. না থাকলে লিডারের প্রথম জেলা
    if (!$firmDistrict && $data['leader_locations']->isNotEmpty()) {
        $firmDistrict = optional($data['leader_locations']->first())->district;
    }

    $data['firm_district_name'] = optional($firmDistrict)->name;

    // ================= Photo Gallery =================
    $data['firm_galleries'] = \App\Model\LawFirmGallery::where('law_firm_id', $lawFirm->id)
        ->orderBy('id', 'desc')
        ->get();

    // ================= বর্তমান লিডারের Multiple IDs =================
    $lawIds = $data['leader_laws']
        ->pluck('law_id')
        ->unique()
        ->values()
        ->toArray();

    $practiceIds = $data['leader_practice_areas']
        ->pluck('practice_id')
        ->unique()
        ->values()
        ->toArray();

    $districtIds = $data['leader_locations']
        ->pluck('district_id')
        ->unique()
        ->values()
        ->toArray();

    // ================= অন্যান্য Law Firm (নিজেকে বাদ দিয়ে) =================
    $relatedFirms = LawFirm::with('leader')
        ->where('status', 1)
        ->where('id', '!=', $lawFirm->id)
        ->orderBy('id', 'desc')
        ->get();

    // ================= Matching Law Count =================
    $lawMatches = collect();

    if (!empty($lawIds)) {

        $lawMatches = \DB::table('advocate_laws')
            ->whereIn('law_id', $lawIds)
            ->selectRaw('user_id, COUNT(DISTINCT law_id) as matched')
            ->groupBy('user_id')
            ->pluck('matched', 'user_id');
    }

    // ================= Matching Practice Area Count =================
    $practiceMatches = collect();

    if (!empty($practiceIds)) {

        $practiceMatches = \DB::table('advocate_practice_areas')
            ->whereIn('practice_id', $practiceIds)
            ->selectRaw('user_id, COUNT(DISTINCT practice_id) as matched')
            ->groupBy('user_id')
            ->pluck('matched', 'user_id');
    }

    // ================= Matching District Count =================
    $districtMatches = collect();

    if (!empty($districtIds)) {

        $districtMatches = \DB::table('advocate_locations')
            ->whereIn('district_id', $districtIds)
            ->selectRaw('user_id, COUNT(DISTINCT district_id) as matched')
            ->groupBy('user_id')
            ->pluck('matched', 'user_id');
    }

    // ================= Matching Score হিসাব (প্রতিটা ফার্মের লিডার দিয়ে) =================
    $relatedFirms = $relatedFirms->map(function ($firm) use (
        $lawMatches,
        $practiceMatches,
        $districtMatches
    ) {

        $lawCount = (int) $lawMatches->get($firm->leader_id, 0);

        $practiceCount = (int) $practiceMatches->get($firm->leader_id, 0);

        $districtCount = (int) $districtMatches->get($firm->leader_id, 0);

        // মোট Matching Score
        $firm->matching_score = $lawCount + $practiceCount + $districtCount;

        // কয়টা বিভাগে মিলেছে
        $firm->matching_categories =
            ($lawCount > 0 ? 1 : 0) +
            ($practiceCount > 0 ? 1 : 0) +
            ($districtCount > 0 ? 1 : 0);

        $firm->matched_laws = $lawCount;

        $firm->matched_practice_areas = $practiceCount;

        $firm->matched_locations = $districtCount;

        return $firm;
    });

    // ================= কারও সাথে মিল আছে কিনা =================
    $matchedFirms = $relatedFirms->filter(function ($firm) {
        return $firm->matching_score > 0;
    });

    // মিল থাকলে মিলগুলো, না থাকলে সব ফার্ম
    if ($matchedFirms->isNotEmpty()) {

        $data['related_law_firms'] = $matchedFirms
            ->sort(function ($a, $b) {

                // প্রথমে: বেশি বিভাগে মিল
                if ($a->matching_categories != $b->matching_categories) {
                    return $b->matching_categories <=> $a->matching_categories;
                }

                // তারপর: বেশি Score
                if ($a->matching_score != $b->matching_score) {
                    return $b->matching_score <=> $a->matching_score;
                }

                // সবশেষে: নতুন ফার্ম আগে
                return $b->id <=> $a->id;
            })
            ->take(10)
            ->values();

    } else {

        // Fallback: সব ফার্ম
        $data['related_law_firms'] = $relatedFirms
            ->take(10)
            ->values();
    }

    // ================= Legal Articles ও Video =================
    $data['legalArticles'] = NewsEvent::with('law')
        ->orderBy('date', 'desc')
        ->take(4)
        ->get();

    $data['videos'] = VideoGallery::orderBy('id', 'desc')
        ->take(4)
        ->get();

    $data['page_type'] = 'find_consultant';

    return view('frontend.law_firm.law_firm_profile', $data);
}

    public function legalNews(){
        $data['page_type'] = 'legal_news';
        return view('frontend.single_pages.legal_news',$data);
    }

    public function courts(){
        $data['page_type'] = 'courts';
        return view('frontend.single_pages.courts',$data);
    }

    public function legalArticleList()
    {

        $data['page_type'] = 'legal_article';
        $data['articles'] = NewsEvent::with('law')
            ->orderBy('date', 'desc')->get();

        return view('frontend.single_pages.legal_article_list', $data);
    }

    public function legalArticleDetails($slug)
    {
        $data['page_type'] = 'legal_article';

        $data['article'] = NewsEvent::with('law')
            ->where('slug', $slug)
            ->firstOrFail();

        // আগে একই আইনের (law) article, কম পড়লে সর্বশেষগুলো দিয়ে পূরণ
        $related = NewsEvent::with('law')
            ->where('id', '!=', $data['article']->id)
            ->where('law_id', $data['article']->law_id)
            ->orderBy('date', 'desc')
            ->take(4)
            ->get();

        if ($related->count() < 4) {
            $excludeIds = $related->pluck('id')->push($data['article']->id)->all();

            $more = NewsEvent::with('law')
                ->whereNotIn('id', $excludeIds)
                ->orderBy('date', 'desc')
                ->take(4 - $related->count())
                ->get();

            $related = $related->concat($more);
        }

        $data['relatedArticles'] = $related;

        $data['videos'] = VideoGallery::orderBy('id', 'desc')
            ->take(4)
            ->get();

        return view('frontend.single_pages.legal_article_details', $data);
    }

    public function locationWiseList(){
        $data['page_type'] = 'find_consultant';
        return view('frontend.single_pages.location-wise-advocate',$data);
    }

    public function practiceAreaWiseList(){
        $data['page_type'] = 'find_consultant';
        return view('frontend.single_pages.practice-area-wise-advocate',$data);
    }

        public function practiceAreaList(){
        $data['page_type'] = 'practice_area';
        return view('frontend.single_pages.practice_area_list', $data);
    }

    public function advocateGroupList($type)
    {
        // type অনুযায়ী designation_id ও শিরোনাম (হোমের index() এর সাথে মিল রাখা হয়েছে)
        $types = [
            'advocates'   => [
                'designation_id' => 5,
                'title'          => 'Legal Advocates',
                'subtitle'       => 'Explore Our Legal Advocates',
            ],
            'barristers'  => [
                'designation_id' => 2,
                'title'          => 'Verified Legal Barristers',
                'subtitle'       => 'Explore Our Legal Barristers',
            ],
            'consultants' => [
                'designation_id' => 3,
                'title'          => 'Legal Consultants',
                'subtitle'       => 'Explore Our Legal Consultants',
            ],
        ];

        if (!isset($types[$type])) {
            abort(404);
        }

        $data['advocates'] = User::with('designation')
            ->where('user_category', 'advocate')
            ->where('status', 1)
            ->where('designation_id', $types[$type]['designation_id'])
            ->orderBy('id', 'desc')
            ->paginate(12);

        $data['list_title']    = $types[$type]['title'];
        $data['list_subtitle'] = $types[$type]['subtitle'];
        $data['page_type']     = 'advocate_list';

        return view('frontend.advocate.advocate_list', $data);
    }
// VIDEO GALLERY - LIST PAGE

    public function videoList()
    {
        $data['page_type'] = 'video';

        $data['videos'] = VideoGallery::orderBy('id', 'desc')
            ->get();

        return view('frontend.single_pages.video_list', $data);
    }

    public function videoDetails($slug)
    {

        // Selected Video Data
        $data['video'] = VideoGallery::where('slug', $slug)->firstOrFail();

        // সম্পর্কিত ভিডিও (সাইডবার)
        $data['relatedVideos'] = VideoGallery::where('id', '!=', $data['video']->id)
            ->orderBy('id', 'desc')
            ->take(4)
            ->get();

        // নিচের Legal Articles section
        $data['legalArticles'] = NewsEvent::with('law')
            ->orderBy('date', 'desc')
            ->take(4)
            ->get();

        $data['page_type'] = 'video_details';

        return view('frontend.single_pages.video_details', $data);
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
}
