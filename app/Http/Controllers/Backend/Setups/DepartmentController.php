<?php

namespace App\Http\Controllers\Backend\Setups;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Department;
use App\Model\Contact;
use App\Model\Time;
use App\Model\Category;
use App\Model\Day;
use App\Model\PaymentNumber;
use App\Model\Slider;
use App\Model\SmsMessage;
use Auth;
use PDF;
use Image;

class DepartmentController extends Controller
{
    public function view()
    {
    	$data['allData'] = Department::orderBy('sort','desc')->get();
    	return view('backend.setups.department.department-view',$data);
    }

    public function add()
    {    	
    	return view('backend.setups.department.department-add');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:departments,name'
        ]);

        $data = new Department();
        $data->name = $request->name;
        $data->sort = $request->sort;
        $data->created_by = Auth::user()->id;
        $img = $request->file('image');
        if ($img) {
            $imgName = date('YmdHi').$img->getClientOriginalName();
            $img->move('public/upload/department_images/', $imgName);
            $img = Image::make(public_path('upload/department_images/').$imgName);
            $img->resize(300,200)->save(public_path('upload/department_images/').$imgName);
            $data['image'] = $imgName;
        }
        $data->save();

        return redirect()->route('human-resource.hrm.department.view')->with('success','Data inserted successfully!');
    }

    public function edit($id)
    {
    	$data['editData'] = Department::find($id);
    	return view('backend.setups.department.department-add',$data);
    }

    public function update(Request $request, $id)
    {
        $data = Department::find($id);
        $this->validate($request,[
            'name' => 'required|unique:departments,name,'.$data->id
        ]);
        
        $data->name = $request->name;
        $data->sort = $request->sort;
        $data->created_by = Auth::user()->id;
        $img = $request->file('image');
        if ($img) {
            @unlink(public_path('upload/department_images/'.$data->image));
            $imgName = date('YmdHi').$img->getClientOriginalName();
            $img->move('public/upload/department_images/', $imgName);
            $img = Image::make(public_path('upload/department_images/').$imgName);
            $img->resize(300,200)->save(public_path('upload/department_images/').$imgName);
            $data['image'] = $imgName;
        }
        $data->save();

        return redirect()->route('human-resource.hrm.department.view')->with('success','Data updated successfully!');
    }

    public function delete(Request $request)
    {
    	$data = Department::find($request->id);  	
    	$data->delete();
    	return redirect()->route('human-resource.hrm.department.view')->with('success','Data deleted successfully!');
    }

    public function pdf(){
        $data['allData'] = Department::all();
        $data['school'] = Contact::first();
        $pdf = PDF::loadView('backend.setups.pdf.department-pdf', $data);
        $pdf->SetProtection(['copy', 'print'], '', 'pass');
        return $pdf->stream('document.pdf');
    }

    // Time

    public function timeView()
    {
        $data['allData'] = Time::orderBy('id','desc')->get();
        return view('backend.setups.department.time-view',$data);
    }

    public function timeAdd()
    {       
        return view('backend.setups.department.time-add');
    }

    public function timeStore(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:times,name'
        ]);

        $data = new Time();
        $data->name = $request->name;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('human-resource.hrm.time.view')->with('success','Data inserted successfully!');
    }

    public function timeEdit($id)
    {
        $data['editData'] = Time::find($id);
        return view('backend.setups.department.time-add',$data);
    }

    public function timeUpdate(Request $request, $id)
    {
        $data = Time::find($id);
        $this->validate($request,[
            'name' => 'required|unique:times,name,'.$data->id
        ]);
        
        $data->name = $request->name;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('human-resource.hrm.time.view')->with('success','Data updated successfully!');
    }

    public function timeDelete(Request $request)
    {
        $data = Time::find($request->id);     
        $data->delete();
        return redirect()->route('human-resource.hrm.time.view')->with('success','Data deleted successfully!');
    }

    // Category

    public function categoryView()
    {
        $data['allData'] = Category::orderBy('id','desc')->get();
        return view('backend.setups.department.category-view',$data);
    }

    public function categoryAdd()
    {       
        return view('backend.setups.department.category-add');
    }

    public function categoryStore(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:categories,name'
        ]);

        $data = new Category();
        $data->name = $request->name;
        $data->amount = $request->amount;
        $data->mobile = $request->mobile;
        $data->created_by = Auth::user()->id;

        $imageName = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('uploads/category_images/');

            // Folder না থাকলে create হবে
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            // Resize + Save
            Image::make($image)
                ->resize(500, 400)
                ->save($destinationPath.$imageName);

            // DB তে image name save
            $data->image = $imageName;
        }

        $data->save();

        return redirect()->route('human-resource.hrm.category.view')->with('success','Data inserted successfully!');
    }

    public function categoryEdit($id)
    {
        $data['editData'] = Category::find($id);
        return view('backend.setups.department.category-add',$data);
    }

    public function categoryUpdate(Request $request, $id)
    {
        $data = Category::find($id);

        $this->validate($request, [
            'name' => 'required|unique:categories,name,' . $data->id
        ]);

        $data->name = $request->name;
        $data->amount = $request->amount;
        $data->mobile = $request->mobile;
        $data->created_by = Auth::user()->id;

        if ($request->hasFile('image')) {

            /*
            |--------------------------------------------------------------------------
            | Old Image Delete
            |--------------------------------------------------------------------------
            | শুধু তখনই unlink হবে যখন database-এ পুরাতন image-এর নাম আছে
            */
            if (!empty($data->image)) {

                $oldImage = public_path('uploads/category_images/' . $data->image);

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

            $destinationPath = public_path('uploads/category_images/');

            // Resize + Save
            Image::make($image)
                ->resize(500, 400)
                ->save($destinationPath . $imageName);

            // DB তে নতুন image name save
            $data->image = $imageName;
        }

        $data->save();

        return redirect()
            ->route('human-resource.hrm.category.view')
            ->with('success', 'Data updated successfully!');
    }

    public function categoryDelete(Request $request)
    {
        $data = Category::find($request->id);

        // Image Delete
        $image = public_path('uploads/category_images/'.$data->image);

        if (file_exists($image)) {
            unlink($image);
        }

        $data->delete();

        return redirect()->route('human-resource.hrm.category.view')->with('success','Data deleted successfully!');
    }

    // Day

    public function dayView()
    {
        $data['allData'] = Day::orderBy('id','desc')->get();
        return view('backend.setups.department.day-view',$data);
    }

    public function dayAdd()
    {       
        return view('backend.setups.department.day-add');
    }

    public function dayStore(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:days,name'
        ]);

        $data = new Day();
        $data->name = $request->name;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('human-resource.hrm.day.view')->with('success','Data inserted successfully!');
    }

    public function dayEdit($id)
    {
        $data['editData'] = Day::find($id);
        return view('backend.setups.department.day-add',$data);
    }

    public function dayUpdate(Request $request, $id)
    {
        $data = Day::find($id);
        $this->validate($request,[
            'name' => 'required|unique:days,name,'.$data->id
        ]);
        
        $data->name = $request->name;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('human-resource.hrm.day.view')->with('success','Data updated successfully!');
    }

    public function dayDelete(Request $request)
    {
        $data = Day::find($request->id);     
        $data->delete();
        return redirect()->route('human-resource.hrm.day.view')->with('success','Data deleted successfully!');
    }

    // Payment Number

    public function numberView()
    {
        $data['allData'] = PaymentNumber::orderBy('id','desc')->get();
        return view('backend.setups.department.number-view',$data);
    }

    public function numberAdd()
    {       
        return view('backend.setups.department.number-add');
    }

    public function numberStore(Request $request)
    {
        $data = new PaymentNumber();
        $data->bkash = $request->bkash;
        $data->nagad = $request->nagad;
        $data->rocket = $request->rocket;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('human-resource.hrm.number.view')->with('success','Data inserted successfully!');
    }

    public function numberEdit($id)
    {
        $data['editData'] = PaymentNumber::find($id);
        return view('backend.setups.department.number-add',$data);
    }

    public function numberUpdate(Request $request, $id)
    {
        $data = PaymentNumber::find($id);
        $data->bkash = $request->bkash;
        $data->nagad = $request->nagad;
        $data->rocket = $request->rocket;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('human-resource.hrm.number.view')->with('success','Data updated successfully!');
    }

    public function numberDelete(Request $request)
    {
        $data = PaymentNumber::find($request->id);     
        $data->delete();
        return redirect()->route('human-resource.hrm.number.view')->with('success','Data deleted successfully!');
    }

    // Slider

    public function sliderView()
    {
        $data['allData'] = Slider::orderBy('id','desc')->get();
        return view('backend.setups.department.slider-view',$data);
    }

    public function sliderAdd()
    {       
        return view('backend.setups.department.slider-add');
    }

    public function sliderStore(Request $request)
    {
        $data = new Slider();
        $data->created_by = Auth::user()->id;

        $imageName = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('uploads/slider_images/');

            // Folder না থাকলে create হবে
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            // Resize + Save
            Image::make($image)
                ->resize(1280, 400)
                ->save($destinationPath.$imageName);

            // DB তে image name save
            $data->image = $imageName;
        }
        
        $data->save();

        return redirect()->route('human-resource.hrm.slider.view')->with('success','Data inserted successfully!');
    }

    public function sliderEdit($id)
    {
        $data['editData'] = Slider::find($id);
        return view('backend.setups.department.slider-add',$data);
    }

    public function sliderUpdate(Request $request, $id)
    {
        $data = Slider::find($id);
        $data->updated_by = Auth::user()->id;

        if ($request->hasFile('image')) {

            /*
            |--------------------------------------------------------------------------
            | Old Image Delete
            |--------------------------------------------------------------------------
            | শুধু তখনই unlink হবে যখন database-এ পুরাতন image-এর নাম আছে
            */
            if (!empty($data->image)) {

                $oldImage = public_path('uploads/slider_images/' . $data->image);

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

            $destinationPath = public_path('uploads/slider_images/');

            // Resize + Save
            Image::make($image)
                ->resize(1280, 400)
                ->save($destinationPath . $imageName);

            // DB তে নতুন image name save
            $data->image = $imageName;
        }

        $data->save();

        return redirect()->route('human-resource.hrm.slider.view')->with('success','Data updated successfully!');
    }

    public function sliderDelete(Request $request)
    {
        $data = Slider::find($request->id);

        // Image Delete
        $image = public_path('uploads/slider_images/'.$data->image);

        if (file_exists($image)) {
            unlink($image);
        }

        $data->delete();
        
        return redirect()->route('human-resource.hrm.slider.view')->with('success','Data deleted successfully!');
    }

    // SMS Message

    public function smsView()
    {
        $data['allData'] = SmsMessage::orderBy('id','desc')->get();
        return view('backend.setups.department.sms-view',$data);
    }

    public function smsAdd()
    {       
        return view('backend.setups.department.sms-add');
    }

    public function smsStore(Request $request)
    {
        $data = new SmsMessage();
        $data->booking_msg = $request->booking_msg;
        $data->signup_msg = $request->signup_msg;
        $data->doctor_approve_msg = $request->doctor_approve_msg;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('human-resource.hrm.sms.view')->with('success','Data inserted successfully!');
    }

    public function smsEdit($id)
    {
        $data['editData'] = SmsMessage::find($id);
        return view('backend.setups.department.sms-add',$data);
    }

    public function smsUpdate(Request $request, $id)
    {
        $data = SmsMessage::find($id);
        $data->booking_msg = $request->booking_msg;
        $data->signup_msg = $request->signup_msg;
        $data->doctor_approve_msg = $request->doctor_approve_msg;
        $data->updated_by = Auth::user()->id;
        $data->save();

        return redirect()->route('human-resource.hrm.sms.view')->with('success','Data updated successfully!');
    }

    public function smsDelete(Request $request)
    {
        $data = SmsMessage::find($request->id);     
        $data->delete();
        return redirect()->route('human-resource.hrm.sms.view')->with('success','Data deleted successfully!');
    }
}
