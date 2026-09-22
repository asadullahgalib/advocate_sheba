<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Contact;
use App\Model\Communicate;
use App\Model\NewsEvent;
use App\Model\PhotoGallery;
use App\Model\VideoGallery;
use App\Model\SocialMedia;
use App\Model\Package;
use App\Model\Ambulance;
use App\Model\Promotion;
use App\Model\Support;
use App\User;
use Image;

class ContactController extends Controller
{
    public function view(){
        $data['countContact'] = Contact::count();
    	$data['allData'] = Contact::all();
    	return view('backend.contact.view-contact',$data);
    }

    public function add(){
    	return view('backend.contact.add-contact');
    }

    public function store(Request $request){
    	$data = new Contact();
    	$data->address = $request->address;
        $data->name = $request->name;
    	$data->mobile_no = $request->mobile_no;
    	$data->email = $request->email;
    	if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/logo_images'), $filename);
            $file = Image::make(public_path('upload/logo_images/').$filename);
            $file->resize(240,240)->save(public_path('upload/logo_images/').$filename);
            $data['image']= $filename;
        }
    	$data->created_by = Auth::user()->id;
    	$data->save();
    	return redirect()->route('site-setting.contents.contact.view')->with('success','Data Inserted successfully');
    }

    public function edit($id){
        $editData = Contact::find($id);
        return view('backend.contact.edit-contact',compact('editData'));
    }

    public function update(Request $request,$id){
        // dd($request->all());
        $data = Contact::find($id);
        $data->name = $request->name;
        $data->mobile_no = $request->mobile_no;
        $data->facebook = $request->facebook;
    	$data->youtube = $request->youtube;
        $data->twitter = $request->twitter;
        $data->instagram = $request->instagram;
        $data->linkedin = $request->linkedin;

        if ($request->hasFile('image')) {

            /*
            |--------------------------------------------------------------------------
            | Old Image Delete
            |--------------------------------------------------------------------------
            | শুধু তখনই unlink হবে যখন database-এ পুরাতন image-এর নাম আছে
            */
            if (!empty($data->image)) {

                $oldImage = public_path('uploads/profile_images/' . $data->image);

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

            $destinationPath = public_path('uploads/profile_images/');

            // Resize + Save
            Image::make($image)
                ->resize(1920, 320)
                ->save($destinationPath . $imageName);

            // DB তে নতুন image name save
            $data->image = $imageName;
        }

        $data->updated_by = Auth::user()->id;
    	$data->save();

        return redirect()->route('site-setting.contents.contact.view')->with('success','Data updated successfully');
    }

    public function delete(Request $request){
        $contact = Contact::find($request->id);
        $contact->delete();
        return redirect()->route('site-setting.contents.contact.view')->with('success','Data Deleted successfully');
    }

    public function viewCommunicate(){
        $allData = Communicate::orderBy('id','desc')->get();
        return view('backend.contact.view-communicate',compact('allData'));
    }

    public function deleteCommunicate(Request $request){
        $communicate = Communicate::find($request->id);
        $communicate->delete();
        return redirect()->route('site-setting.communicate.view')->with('success','Data deleted successfully');
    }

    // Social Media

    public function socialView(){
        if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer'){
            $data['allData'] = SocialMedia::orderBy('id','desc')->get();
        }if(@Auth::user()->user_category=='doctor' || @Auth::user()->user_category=='nurse'){
            $data['allData'] = SocialMedia::where('user_id',@Auth::user()->id)->orderBy('id','desc')->get();
        }
        return view('backend.doctor.social_view',$data);
    }

    public function socialAdd(){
        $data['employees'] = User::whereIn('user_category',['doctor','nurse'])->where('status','1')->get();
        return view('backend.doctor.social_add',$data);
    }

    public function socialStore(Request $request){
        $data = new SocialMedia();
        $data->name = $request->name;
        $data->icon = $request->icon;
        $data->link = $request->link;
        if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer'){
            $user_id = $request->user_id;
        }if(@Auth::user()->user_category=='doctor' || @Auth::user()->user_category=='nurse'){
            $user_id = Auth::user()->id;
        }
        $data->user_id = $user_id;
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/social_images'), $filename);
            $file = Image::make(public_path('upload/social_images/').$filename);
            $file->resize(300,300)->save(public_path('upload/social_images/').$filename);
            $data['image']= $filename;
        }
        $data->created_by = Auth::user()->id;
        $data->save();
        return redirect()->route('doctor-profile.social.view')->with('success','Data Inserted successfully');
    }

    public function socialEdit($id){
        if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer'){
            $data['editData'] = SocialMedia::where('id',$id)->first();
        }if(@Auth::user()->user_category=='doctor' || @Auth::user()->user_category=='nurse'){
            $user_id = Auth::user()->id;
            $data['editData'] = SocialMedia::where('user_id',@Auth::user()->id)->where('id',$id)->first();
        }
        $data['employees'] = User::whereIn('user_category',['doctor','nurse'])->where('status','1')->get();
        return view('backend.doctor.social_add',$data);
    }

    public function socialUpdate(Request $request,$id){
        $data = SocialMedia::find($id);
        $data->name = $request->name;
        $data->icon = $request->icon;
        $data->link = $request->link;
        if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer'){
            $user_id = $request->user_id;
        }if(@Auth::user()->user_category=='doctor' || @Auth::user()->user_category=='nurse'){
            $user_id = Auth::user()->id;
        }
        $data->user_id = $user_id;
        if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/social_images/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/social_images'), $filename);
            $file = Image::make(public_path('upload/social_images/').$filename);
            $file->resize(300,300)->save(public_path('upload/social_images/').$filename);
            $data['image']= $filename;
        }
        $data->updated_by = Auth::user()->id;
        $data->save();
        return redirect()->route('doctor-profile.social.view')->with('success','Data updated successfully');
    }

    public function socialDelete(Request $request){
        $data = SocialMedia::find($request->id);
        if (file_exists('public/upload/social_images/' . $data->image) AND ! empty($data->image)) {
            unlink('public/upload/social_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('doctor-profile.social.view')->with('success','Data Deleted successfully');
    }

    // Video Gallery

    public function videoView(){
        if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer'){
            $data['allData'] = VideoGallery::orderBy('id','desc')->get();
        }if(@Auth::user()->user_category=='doctor' || @Auth::user()->user_category=='nurse'){
            $data['allData'] = VideoGallery::where('user_id',@Auth::user()->id)->orderBy('id','desc')->get();
        }
        return view('backend.doctor.video_view',$data);
    }

    public function videoAdd(){
        $data['employees'] = User::whereIn('user_category',['doctor','nurse'])->where('status','1')->get();
        return view('backend.doctor.video_add',$data);
    }

    public function videoStore(Request $request){
        $data = new VideoGallery();
        $data->link = $request->link;
        if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer'){
            $user_id = $request->user_id;
        }if(@Auth::user()->user_category=='doctor' || @Auth::user()->user_category=='nurse'){
            $user_id = Auth::user()->id;
        }
        $data->user_id = $user_id;
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/video_images'), $filename);
            $file = Image::make(public_path('upload/video_images/').$filename);
            $file->resize(300,200)->save(public_path('upload/video_images/').$filename);
            $data['image']= $filename;
        }
        $data->created_by = Auth::user()->id;
        $data->save();
        return redirect()->route('doctor-profile.video.view')->with('success','Data Inserted successfully');
    }

    public function videoEdit($id){
        if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer'){
            $data['editData'] = VideoGallery::where('id',$id)->first();
        }if(@Auth::user()->user_category=='doctor' || @Auth::user()->user_category=='nurse'){
            $user_id = Auth::user()->id;
            $data['editData'] = VideoGallery::where('user_id',@Auth::user()->id)->where('id',$id)->first();
        }
        $data['employees'] = User::whereIn('user_category',['doctor','nurse'])->where('status','1')->get();
        return view('backend.doctor.video_add',$data);
    }

    public function videoUpdate(Request $request,$id){
        $data = VideoGallery::find($id);
        $data->link = $request->link;
        if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer'){
            $user_id = $request->user_id;
        }if(@Auth::user()->user_category=='doctor' || @Auth::user()->user_category=='nurse'){
            $user_id = Auth::user()->id;
        }
        $data->user_id = $user_id;
        if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/video_images/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/video_images'), $filename);
            $file = Image::make(public_path('upload/video_images/').$filename);
            $file->resize(300,200)->save(public_path('upload/video_images/').$filename);
            $data['image']= $filename;
        }
        $data->updated_by = Auth::user()->id;
        $data->save();
        return redirect()->route('doctor-profile.video.view')->with('success','Data updated successfully');
    }

    public function videoDelete(Request $request){
        $data = VideoGallery::find($request->id);
        if (file_exists('public/upload/video_images/' . $data->image) AND ! empty($data->image)) {
            unlink('public/upload/video_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('doctor-profile.video.view')->with('success','Data Deleted successfully');
    }

    // Photo Gallery

    public function photoView(){
        if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer'){
            $data['allData'] = PhotoGallery::orderBy('id','desc')->get();
        }if(@Auth::user()->user_category=='doctor' || @Auth::user()->user_category=='nurse'){
            $data['allData'] = PhotoGallery::where('user_id',@Auth::user()->id)->orderBy('id','desc')->get();
        }
        return view('backend.doctor.photo_view',$data);
    }

    public function photoAdd(){
        $data['employees'] = User::whereIn('user_category',['doctor','nurse'])->where('status','1')->get();
        return view('backend.doctor.photo_add',$data);
    }

    public function photoStore(Request $request){
        $data = new PhotoGallery();
        if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer'){
            $user_id = $request->user_id;
        }if(@Auth::user()->user_category=='doctor' || @Auth::user()->user_category=='nurse'){
            $user_id = Auth::user()->id;
        }
        $data->user_id = $user_id;
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/photo_images'), $filename);
            $file = Image::make(public_path('upload/photo_images/').$filename);
            $file->resize(700,500)->save(public_path('upload/photo_images/').$filename);
            $data['image']= $filename;
        }
        $data->created_by = Auth::user()->id;
        $data->save();
        return redirect()->route('doctor-profile.photo.view')->with('success','Data Inserted successfully');
    }

    public function photoEdit($id){
        if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer'){
            $data['editData'] = PhotoGallery::where('id',$id)->first();
        }if(@Auth::user()->user_category=='doctor' || @Auth::user()->user_category=='nurse'){
            $user_id = Auth::user()->id;
            $data['editData'] = PhotoGallery::where('user_id',@Auth::user()->id)->where('id',$id)->first();
        }
        $data['employees'] = User::whereIn('user_category',['doctor','nurse'])->where('status','1')->get();
        return view('backend.doctor.photo_add',$data);
    }

    public function photoUpdate(Request $request,$id){
        $data = PhotoGallery::find($id);
        if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer'){
            $user_id = $request->user_id;
        }if(@Auth::user()->user_category=='doctor' || @Auth::user()->user_category=='nurse'){
            $user_id = Auth::user()->id;
        }
        $data->user_id = $user_id;
        if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/photo_images/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/photo_images'), $filename);
            $file = Image::make(public_path('upload/photo_images/').$filename);
            $file->resize(700,500)->save(public_path('upload/photo_images/').$filename);
            $data['image']= $filename;
        }
        $data->updated_by = Auth::user()->id;
        $data->save();
        return redirect()->route('doctor-profile.photo.view')->with('success','Data updated successfully');
    }

    public function photoDelete(Request $request){
        $data = PhotoGallery::find($request->id);
        if (file_exists('public/upload/photo_images/' . $data->image) AND ! empty($data->image)) {
            unlink('public/upload/photo_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('doctor-profile.photo.view')->with('success','Data Deleted successfully');
    }

    // News & Events

    public function newsView(){
        if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer'){
            $data['allData'] = NewsEvent::orderBy('id','desc')->get();
        }if(@Auth::user()->user_category=='doctor' || @Auth::user()->user_category=='nurse'){
            $data['allData'] = NewsEvent::where('user_id',@Auth::user()->id)->orderBy('id','desc')->get();
        }
        return view('backend.doctor.news_view',$data);
    }

    public function newsAdd(){
        $data['employees'] = User::whereIn('user_category',['doctor','nurse'])->where('status','1')->get();
        return view('backend.doctor.news_add',$data);
    }

    public function newsStore(Request $request){
        $data = new NewsEvent();
        $data->title = $request->title;
        $data->date = date('Y-m-d',strtotime($request->date));
        $data->editor1 = $request->editor1;
        if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer'){
            $user_id = $request->user_id;
        }if(@Auth::user()->user_category=='doctor' || @Auth::user()->user_category=='nurse'){
            $user_id = Auth::user()->id;
        }
        $data->user_id = $user_id;
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/news_images'), $filename);
            $file = Image::make(public_path('upload/news_images/').$filename);
            $file->resize(700,500)->save(public_path('upload/news_images/').$filename);
            $data['image']= $filename;
        }
        $data->created_by = Auth::user()->id;
        $data->save();
        return redirect()->route('doctor-profile.news.view')->with('success','Data Inserted successfully');
    }

    public function newsEdit($id){
        if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer'){
            $data['editData'] = NewsEvent::where('id',$id)->first();
        }if(@Auth::user()->user_category=='doctor' || @Auth::user()->user_category=='nurse'){
            $user_id = Auth::user()->id;
            $data['editData'] = NewsEvent::where('user_id',@Auth::user()->id)->where('id',$id)->first();
        }
        $data['employees'] = User::whereIn('user_category',['doctor','nurse'])->where('status','1')->get();
        return view('backend.doctor.news_add',$data);
    }

    public function newsUpdate(Request $request,$id){
        $data = NewsEvent::find($id);
        $data->title = $request->title;
        $data->date = date('Y-m-d',strtotime($request->date));
        $data->editor1 = $request->editor1;
        if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer'){
            $user_id = $request->user_id;
        }if(@Auth::user()->user_category=='doctor' || @Auth::user()->user_category=='nurse'){
            $user_id = Auth::user()->id;
        }
        $data->user_id = $user_id;
        if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/news_images/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/news_images'), $filename);
            $file = Image::make(public_path('upload/news_images/').$filename);
            $file->resize(700,500)->save(public_path('upload/news_images/').$filename);
            $data['image']= $filename;
        }
        $data->updated_by = Auth::user()->id;
        $data->save();
        return redirect()->route('doctor-profile.news.view')->with('success','Data updated successfully');
    }

    public function newsDelete(Request $request){
        $data = NewsEvent::find($request->id);
        if (file_exists('public/upload/news_images/' . $data->image) AND ! empty($data->image)) {
            unlink('public/upload/news_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('doctor-profile.news.view')->with('success','Data Deleted successfully');
    }

    // Package

    public function packageView(){
        $data['allData'] = Package::orderBy('id','desc')->get();
        return view('backend.setups.department.package_view',$data);
    }

    public function packageAdd(){
        return view('backend.setups.department.package_add');
    }

    public function packageStore(Request $request){
        $data = new Package();
        $data->title = $request->title;
        $data->mobile = $request->mobile;
        $data->editor1 = $request->editor1;
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/package_images'), $filename);
            $file = Image::make(public_path('upload/package_images/').$filename);
            $file->resize(500,400)->save(public_path('upload/package_images/').$filename);
            $data['image']= $filename;
        }
        $data->created_by = Auth::user()->id;
        $data->save();
        return redirect()->route('human-resource.hrm.package.view')->with('success','Data Inserted successfully');
    }

    public function packageEdit($id){
        $data['editData'] = Package::find($id);
        return view('backend.setups.department.package_add',$data);
    }

    public function packageUpdate(Request $request,$id){
        $data = Package::find($id);
        $data->title = $request->title;
        $data->mobile = $request->mobile;
        $data->editor1 = $request->editor1;
        if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/package_images/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/package_images'), $filename);
            $file = Image::make(public_path('upload/package_images/').$filename);
            $file->resize(500,400)->save(public_path('upload/package_images/').$filename);
            $data['image']= $filename;
        }
        $data->updated_by = Auth::user()->id;
        $data->save();
        return redirect()->route('human-resource.hrm.package.view')->with('success','Data updated successfully');
    }

    public function packageDelete(Request $request){
        $data = Package::find($request->id);
        if (file_exists('public/upload/package_images/' . $data->image) AND ! empty($data->image)) {
            unlink('public/upload/package_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('human-resource.hrm.package.view')->with('success','Data Deleted successfully');
    }

    // Ambulance

    public function ambulanceView(){
        $data['allData'] = Ambulance::orderBy('id','desc')->get();
        return view('backend.setups.department.ambulance_view',$data);
    }

    public function ambulanceAdd(){
        return view('backend.setups.department.ambulance_add');
    }

    public function ambulanceStore(Request $request){
        $data = new Ambulance();
        $data->title = $request->title;
        $data->mobile = $request->mobile;
        $data->editor1 = $request->editor1;
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/ambulance_images'), $filename);
            $file = Image::make(public_path('upload/ambulance_images/').$filename);
            $file->resize(500,400)->save(public_path('upload/ambulance_images/').$filename);
            $data['image']= $filename;
        }
        $data->created_by = Auth::user()->id;
        $data->save();
        return redirect()->route('human-resource.hrm.ambulance.view')->with('success','Data Inserted successfully');
    }

    public function ambulanceEdit($id){
        $data['editData'] = Ambulance::find($id);
        return view('backend.setups.department.ambulance_add',$data);
    }

    public function ambulanceUpdate(Request $request,$id){
        $data = Ambulance::find($id);
        $data->title = $request->title;
        $data->mobile = $request->mobile;
        $data->editor1 = $request->editor1;
        if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/ambulance_images/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/ambulance_images'), $filename);
            $file = Image::make(public_path('upload/ambulance_images/').$filename);
            $file->resize(500,400)->save(public_path('upload/ambulance_images/').$filename);
            $data['image']= $filename;
        }
        $data->updated_by = Auth::user()->id;
        $data->save();
        return redirect()->route('human-resource.hrm.ambulance.view')->with('success','Data updated successfully');
    }

    public function ambulanceDelete(Request $request){
        $data = Ambulance::find($request->id);
        if (file_exists('public/upload/ambulance_images/' . $data->image) AND ! empty($data->image)) {
            unlink('public/upload/ambulance_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('human-resource.hrm.ambulance.view')->with('success','Data Deleted successfully');
    }

    // Promotion

    public function promotionView(){
        $data['allData'] = Promotion::orderBy('id','desc')->get();
        return view('backend.setups.department.promotion_view',$data);
    }

    public function promotionAdd(){
        return view('backend.setups.department.promotion_add');
    }

    public function promotionStore(Request $request){
        $data = new Promotion();
        $data->title = $request->title;
        $data->sort = $request->sort;
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/promotion_images'), $filename);
            $file = Image::make(public_path('upload/promotion_images/').$filename);
            $file->resize(500,500)->save(public_path('upload/promotion_images/').$filename);
            $data['image']= $filename;
        }
        $data->created_by = Auth::user()->id;
        $data->save();
        return redirect()->route('human-resource.hrm.promotion.view')->with('success','Data Inserted successfully');
    }

    public function promotionEdit($id){
        $data['editData'] = Promotion::find($id);
        return view('backend.setups.department.promotion_add',$data);
    }

    public function promotionUpdate(Request $request,$id){
        $data = Promotion::find($id);
        $data->title = $request->title;
        $data->sort = $request->sort;
        if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/promotion_images/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/promotion_images'), $filename);
            $file = Image::make(public_path('upload/promotion_images/').$filename);
            $file->resize(500,500)->save(public_path('upload/promotion_images/').$filename);
            $data['image']= $filename;
        }
        $data->updated_by = Auth::user()->id;
        $data->save();
        return redirect()->route('human-resource.hrm.promotion.view')->with('success','Data updated successfully');
    }

    public function promotionDelete(Request $request){
        $data = Promotion::find($request->id);
        if (file_exists('public/upload/promotion_images/' . $data->image) AND ! empty($data->image)) {
            unlink('public/upload/promotion_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('human-resource.hrm.promotion.view')->with('success','Data Deleted successfully');
    }

    // About Us

    public function aboutView(){
        $data['allData'] = Support::orderBy('id','desc')->get();
        return view('backend.setups.department.about_view',$data);
    }

    public function aboutAdd(){
        return view('backend.setups.department.about_add');
    }

    public function aboutStore(Request $request){
        $data = new Support();
        $data->title = $request->title;
        $data->description = $request->description;
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/about_images'), $filename);
            $file = Image::make(public_path('upload/about_images/').$filename);
            $file->resize(100,100)->save(public_path('upload/about_images/').$filename);
            $data['image']= $filename;
        }
        $data->created_by = Auth::user()->id;
        $data->save();
        return redirect()->route('human-resource.hrm.about.view')->with('success','Data Inserted successfully');
    }

    public function aboutEdit($id){
        $data['editData'] = Support::find($id);
        return view('backend.setups.department.about_add',$data);
    }

    public function aboutUpdate(Request $request,$id){
        $data = Support::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/about_images/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/about_images'), $filename);
            $file = Image::make(public_path('upload/about_images/').$filename);
            $file->resize(100,100)->save(public_path('upload/about_images/').$filename);
            $data['image']= $filename;
        }
        $data->updated_by = Auth::user()->id;
        $data->save();
        return redirect()->route('human-resource.hrm.about.view')->with('success','Data updated successfully');
    }

    public function aboutDelete(Request $request){
        $data = Support::find($request->id);
        if (file_exists('public/upload/about_images/' . $data->image) AND ! empty($data->image)) {
            unlink('public/upload/about_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('human-resource.hrm.about.view')->with('success','Data Deleted successfully');
    }
}
