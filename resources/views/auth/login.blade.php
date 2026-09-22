<!DOCTYPE html>
<html>  
    <head>
         @php
            $contact = App\Model\Contact::first();
            $logo = App\Model\Logo::first();
         @endphp
         <title>{{@$contact->name}}</title>
        <meta charset="utf-8">    
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <!-- Tell the browser to be responsive to screen width -->    
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->    
        <link rel="stylesheet" href="{{asset('frontend/login/bootstrap/css/bootstrap.min.css')}}">    
        <!-- Font Awesome -->    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">    
        <!-- Ionicons -->    
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">    
        <!-- Theme style -->    
        <link rel="stylesheet" href="{{asset('frontend/login/dist/css/AdminLTE.min.css')}}">
        <!-- iCheck -->    
        <link rel="stylesheet" href="{{asset('frontend/login/plugins/iCheck/square/blue.css')}}">   
        <style>
            input[type="text"],input[type="password"],input[type="submit"]{
                height: 45px;
                font-size: 20px;
                font-weight: bold;
                vertical-align: middle;
            } 
            .login-box-body{
                border-radius: 10px;
                box-shadow: 1px 1px 8px;  
            }
            @media only screen and (min-width:320px) and (max-width:768px){
                .school_name{
                    font-size: 15px !important;
                }
                .login_name{
                    font-size: 19px !important;
                }
            }
        </style>                                                                                    
    </head>  
    <body class="hold-transition login-page">    
        <div class="login-box">            
            <div class="login-box-body">      
                <div class="login-logo" style="margin-bottom: 5px;">
                  <a href="{{url('')}}">
                     <img src="{{asset('uploads/dashboard_logo_images/'.@$logo->image2)}}" alt="Logo" style="width:180px">
                  </a>                    
                </div><!-- /.login-logo -->
                <!-- <h4 class="login-box-msg school_name" style="font-weight: bold;padding: 0px 0px 10px 0px;color: #000;">{{@$contact->name}}</h4>  -->
                <h4 class="login-box-msg login_name" style="font-weight:bold;font-size: 25px;">User Login</h4>
                     @if($errors->any())
                       <div class="alert alert-danger alert-dismissible">
                         <button type="button" class="close" data-dismiss="alert">&times;</button>
                         @foreach($errors->all() as $error)
                         <strong>{{$error}}</strong><br/>
                         @endforeach
                       </div>
                     @endif
                     @if(Session::get('message'))
                       <div class="alert alert-danger alert-dismissible">
                         <button type="button" class="close" data-dismiss="alert">&times;</button>
                         <strong>{{Session::get('message')}}</strong>
                       </div>
                     @endif
                    <!--Error_message-->

                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group has-feedback">
                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email Address" value="{{ old('email') }}">
                        </div>

                        <div class="form-group has-feedback">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Your Password">
                        </div>

                        <!-- <div class="form-group has-feedback">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            @if(Cookie::get('remember_me') == 'true') checked @endif> 
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div> -->

                        <div class="row">
                            <div style="text-align: center;">
                                <div class="col-xs-12 text-center">
                                    <input type="submit" class="btn btn-primary btn-block btn-flat" value="Log In" style="background-color:#53B4F2;">
                                </div>
                            </div>
                        </div>
                    </form>
            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->    <!-- jQuery 2.1.4 -->
        <script src="{{asset('frontend/login/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>    <!-- Bootstrap 3.3.5 -->
        <script src="{{asset('frontend/login/bootstrap/js/bootstrap.min.js')}}"></script>    <!-- iCheck -->
        <script src="{{asset('frontend/login/plugins/iCheck/icheck.min.js')}}"></script>
        
    </body>
</html>