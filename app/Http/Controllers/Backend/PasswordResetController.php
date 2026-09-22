<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
use Cookie;
use Session;
use App\Model\Shipping;
use App\Model\Payment;
use App\Model\Order;
use App\Model\OrderDetail;
use App\Model\Division;
use App\Model\District;
use App\Model\Upazila;
use App\Model\Union;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Contact;
use App\Model\About;
use App\Model\Communicate;
use App\Model\Product;
use App\Model\ProductSubImage;
use App\Model\ProductColor;
use App\Model\ProductSize;
use App\Model\Size;
use App\Model\Color;
use App\Model\Category;
use Cart;

class PasswordResetController extends Controller
{
    public function resetPassword()
    {
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['shope_categories'] = Category::all();
        return view('frontend.reset_password.reset-email',$data);
    }

    public function checkEmail(Request $request)
    {
        $check_email = User::where('email',$request->email)->first();

        Session::put('email',$request->email);
        if($check_email)
        {
            $code = rand(000000,999999);
            $minutes = 10;
            $value = Cookie::queue('name', $code, $minutes);
            $data['name'] = $check_email['name'];
            $data['shope_categories'] = Category::all();
            $data['logo'] = Logo::first();
            $data['contact'] = Contact::first();
            return view('frontend.reset_password.reset-code')->with($data);
        }
        else
        {
            session()->flash('message', 'Email does not match! Please try again.');
            return redirect()->back();
        }
    }

    public function checkName(Request $request)
    {
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['shope_categories'] = Category::all();
        $data['code'] = $request->cookie('name');
        $email = Session::get('email');
        $data['user_email'] = $email;
        $user_id = User::where('email',$email)->first();
        $data['name'] = $user_id['name'];
        Mail::send('frontend.emails.reset-password-page', $data, function ($message) use ($data){
            $message->from('support@onestop.com.bd','Onestop Bd');
            $message->to($data['user_email']);
            $message->subject('Password reset code.');
        });
        return view('frontend.reset_password.check-code',$data);

    }

    public function submitCode(Request $request)
    {
        $email = Session::get('email');
        $cookie_code = $request->cookie('name');
        // $cookie_code = '12';
        if($cookie_code == $request->code)
        {
            // dd('test');
            return redirect()->route('new.password');
        } 
        else
        {
            session()->flash('message', 'Verification Code does not match! Please Try again.');
            return redirect()->back();
        }
    }

    public function newPassword()
    {
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['shope_categories'] = Category::all();
        return view('frontend.reset_password.new-password',$data);
    }

    public function newPasswordStore(Request $request)
    {
        $request->validate([
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password'
        ]);
        $email = Session::get('email');
        $user = User::where('email',$email)->first();
        if($request->new_password == $request->confirm_password)
        {
            $password = bcrypt($request->new_password);
            $user->password = $password;
            $user->update();
            return redirect()->route('customer.login')->with('success','Your password Successfully Updated.');  
        }
        else
        {
            session()->flash('message', 'Password and Confirm password does not match.');
            return redirect()->back();
        }
    }
}
