<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use Auth;
use App\UserLog;
use Session;
use App\Model\DoctorBooking;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer'){
            $data['today_appointment']      = DoctorBooking::where('date',date('Y-m-d'))->where('status','1')->count();
            $data['upcoming_appointment']   = DoctorBooking::where('date','>',date('Y-m-d'))->where('status','1')->count();
            $data['pending_appointment']    = DoctorBooking::where('status','0')->count();
            $data['complete_appointment']   = DoctorBooking::where('status','1')->count();
            $data['cancel_appointment']     = DoctorBooking::where('status','2')->count();
            $data['doctor_bookings']        = DoctorBooking::orderBy('date','desc')->orderBy('id','desc')->get();
        }
        if(@Auth::user()->user_category=='doctor' || @Auth::user()->user_category=='nurse'){
            $data['today_appointment']      = DoctorBooking::where('doctor_id',@Auth::user()->id)->where('date',date('Y-m-d'))->where('status','1')->count();
            $data['upcoming_appointment']   = DoctorBooking::where('doctor_id',@Auth::user()->id)->where('date','>',date('Y-m-d'))->where('status','1')->count();
            $data['pending_appointment']    = DoctorBooking::where('doctor_id',@Auth::user()->id)->where('status','0')->count();
            $data['complete_appointment']   = DoctorBooking::where('doctor_id',@Auth::user()->id)->where('status','1')->count();
            $data['cancel_appointment']     = DoctorBooking::where('doctor_id',@Auth::user()->id)->where('status','2')->count();
            $data['doctor_bookings']        = DoctorBooking::where('doctor_id',@Auth::user()->id)->orderBy('date','desc')->orderBy('id','desc')->get();
        }
        $data['details'] = User::where('id',@Auth::user()->id)->first();
        return view('backend.layouts.home',$data);
    }
}
