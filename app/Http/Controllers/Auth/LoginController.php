<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\UserLog;
use Session;

class LoginController extends Controller
{
    public function login(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $request->email;
        $password = $request->password;
        $validData = User::where('email',$email)->first();
        $password_check = password_verify($password, @$validData->password);
        if($password_check == false){
            return redirect()->back()->with('message','Email or Password does not match!');
        }
        if($validData->status == '0'){
            return redirect()->back()->with('message','Sorry! you are not approved yet.please wait or contact us');
        }
        if($validData->status == '2'){
            return redirect()->back()->with('message','Sorry! your email is not verified yet');
        }
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            $log                    = new UserLog;
            $log->user_id           = auth()->user()->id;
            $log->access_in_time    = date('Y-m-d H:i:s');
            $log->save();
            return redirect()->route('login');
        }
    }

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username(){
        return username;
    }
}
