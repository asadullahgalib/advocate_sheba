<!DOCTYPE html>
<html lang="en">

<head>
    <noscript>
        <img src="{{asset('pike/backend/images/noscript.gif')}}" width="400px" height="400px">
        <style>
            div { display:none; }
        </style>
    </noscript>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @php
        $contact = App\Model\Contact::first();
        $logo = App\Model\Logo::first();
    @endphp

    <title>{{@$contact->name}}</title>
    <meta name="description" content="Bootstrap 4 Admin Theme">
    <meta name="author" content="S&S Development">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('frontend/icon.jpg')}}" type="image/x-icon" >

    <!-- Bootstrap CSS -->
    <link href="{{asset('pike/backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="{{asset('pike/backend/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="{{asset('pike/backend/css/style.css')}}" rel="stylesheet" type="text/css" />
    <!-- sweet alert -->
    <link href="{{asset('pike/backend/css/sweetalert.css')}}" rel="stylesheet" type="text/css" />
    <!-- sweet alert -->
    <!-- color picker -->
    <link href="{{asset('pike/backend/css/colorpicker.css')}}" rel="stylesheet" type="text/css" />

    <!-- font -->
    {{-- <link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet"> --}}
    <!-- font -->
    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="{{url('backend/plugins/datatables/dataTables.bootstrap4.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('backend/plugins/datatables/responsive.bootstrap4.min.css')}}"/>

    {{-- Css for tree view --}}
    <link href="{{asset('pike/backend/plugins/jstree/style.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END CSS for this page -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link href="{{asset('pike/backend/plugins/datetimepicker/css/daterangepicker.css')}}" rel="stylesheet" />
    <link href="{{asset('pike/backend/custom/bcsaa.css')}}" rel="stylesheet" />
    <link href="{{url('backend/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{url('backend/plugins/jquery.filer/css/jquery.filer.css')}}" rel="stylesheet">
    <!-- facing error in course name inspect element box -->
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/base/jquery-ui.css"> -->
    
    {{-- Css for tree view --}}
    <link href="{{asset('pike/backend/plugins/image_crop/pixelarity.css')}}" rel="stylesheet" type="text/css"/>

    <script src="{{asset('pike/backend/js/jquery.min.js')}}"></script>

    @php
    if(Auth()->user()->usertype == 'admin'){
        $usertype = 'admin';
    }else{
        $usertype = Auth()->user()->usertype;
    }
    $dashboardColors = DB::table('dashboard_colors')->where('usertype',$usertype)->first();
    @endphp
    <style>
        .required, .error{
            color:red;
        }

        .navbarbgcode{
            background: {{(@$dashboardColors->navbarbgcode)?($dashboardColors->navbarbgcode):'#4980b5'}};
        }

        .navbartxtcode{
            color: {{(@$dashboardColors->navbartxtcode)?($dashboardColors->navbartxtcode):'#ffffff'}};
        }

        table thead{
          /*background-color: #4980B5 !important;*/
          background: {{(@$dashboardColors->tablebgcode)?($dashboardColors->tablebgcode):'#4980B5'}} !important;
      }

      table thead tr th{
          /*background-color: #4980B5 !important;*/
          color: {{(@$dashboardColors->tablebgcode)?($dashboardColors->tabletxtcode):'#000000'}} !important;
      }


      /*pre - loader*/

      #loader-wrapper {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1000;
    }
    .card-header {
        color: #fff !important;
        background-color: #0283D6 !important;
        border-bottom: 1px solid rgba(111,111,111,.13);
    }
    input[type='search']{
        width: 250px !important;
    }
    .custom_btn{
        background-color: #FF0099 !important;
    }
    #loader {
        display: block;
        position: relative;
        left: 50%;
        top: 50%;
        width: 150px;
        height: 150px;
        margin: -75px 0 0 -75px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #3498db;

        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
        z-index: 1001;
    }

    #loader:before {
        content: "";
        position: absolute;
        top: 5px;
        left: 5px;
        right: 5px;
        bottom: 5px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #e74c3c;

        -webkit-animation: spin 3s linear infinite;
        animation: spin 3s linear infinite;
    }

    #loader:after {
        content: "";
        position: absolute;
        top: 15px;
        left: 15px;
        right: 15px;
        bottom: 15px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #f9c922;

        -webkit-animation: spin 1.5s linear infinite;
        animation: spin 1.5s linear infinite;
    }

    @-webkit-keyframes spin {
        0%   {
            -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(0deg);  /* IE 9 */
            transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
        }
        100% {
            -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(360deg);  /* IE 9 */
            transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
        }
    }
    @keyframes spin {
        0%   {
            -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(0deg);  /* IE 9 */
            transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
        }
        100% {
            -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(360deg);  /* IE 9 */
            transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
        }
    }

    #loader-wrapper .loader-section {
        position: fixed;
        top: 0;
        width: 50%;
        height: 100%;
        background: #00000087;
        z-index: 1000;
    }

    #loader-wrapper .loader-section.section-left {
        left: 0;
    }
    #loader-wrapper .loader-section.section-right {
        right: 0;
    }

    /* Loaded styles */
    .loaded #loader-wrapper .loader-section.section-left {
        -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
        transform: translateX(-100%);

        -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
        transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
    }
    .loaded #loader-wrapper .loader-section.section-right {
        -webkit-transform: translateX(100%);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: translateX(100%);  /* IE 9 */
        transform: translateX(100%);  /* Firefox 16+, IE 10+, Opera */

        -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);  /* Android 2.1+, Chrome 1-25, iOS 3.2-6.1, Safari 3.2-6  */
        transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);  /* Chrome 26, Firefox 16+, iOS 7+, IE 10+, Opera, Safari 6.1+  */
    }
    .loaded #loader {
        opacity: 0;

        -webkit-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;

    }
    .loaded #loader-wrapper {
        visibility: hidden;

        -webkit-transform: translateY(-100%);
        -ms-transform: translateY(-100%);
        transform: translateY(-100%);

        -webkit-transition: all 0.3s 1s ease-out;
        transition: all 0.3s 1s ease-out;
    }

    #content {
        margin: 0 auto;
        padding-bottom: 50px;
        width: 80%;
        max-width: 978px;
    }
    /*pre-loader end*/

    /*#hideAll{
       position: fixed;
       left: 0px; 
       right: 0px; 
       top: 0px; 
       bottom: 0px; 
       background-color: white;
       z-index: 9999999999;
       }*/

       table thead tr th{
        text-align: center
    }
    @media only screen and (min-width:320px) and (max-width:720px){
        .mobile_copyright{
            display: block !important;
        }
        .desktop_copyright{
            display: none !important;
        }
        td.mobile_td_width{
            min-width: 200px !important;
        }
        .custom_mobile_content{
            margin-bottom: 60px !important;
        }
        .footer_copy_text{
            font-size: 12px !important;
            color: #000 !important;
        }
        .mobile_profile_user_img{
            width: 34px !important;
            margin-top: 0px !important;
        }
        .mobile_profile_user_name{
            font-size: 11px !important;
            font-weight: bold !important;
        }
    }
</style>
</head>

<body class="adminbody">
    <div style="display: none" id="hideAll">&nbsp;</div>
    <script type="text/javascript">
        document.getElementById("hideAll").style.display = "block";
    </script> 
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <div id="main">

        <!-- top bar navigation -->
        <div class="headerbar">
            <!-- LOGO -->
            <div class="headerbar-left navbarbgcode" style="padding-top:10px;font-size: 20px;color: #fff;">
                <!-- <img src="{{asset('frontend/dashboard.png')}}" style="width: 35px;"> -->
                
            </div>

            <nav class="navbar-custom navbarbgcode">

                <ul class="list-inline float-right mb-0">
                    <li class="list-inline-item">
                        <a class="navbartxtcode" href="#">
                     </a>
                 </li>

                 <li class="list-inline-item dropdown notif">
                    <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        {{auth()->user()->name}}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown" style="transform: translate3d(-240px, 5px, 0px);">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="border-top: 2px solid #bbbcbd;">
                                {{ csrf_field() }}
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item notify-item" style="display: block;width: 100%;clear: both;font-weight: 400;color: #212529;text-align: inherit;white-space: nowrap;background-color: darkgrey;border: 0;text-align: center;">
                                    <i class="fa fa-power-off"></i>  <span>Logout</span>
                                </a>
                            </form>
                        </div>
                    </li>
                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left">
                            <i class="fa fa-fw fa-bars navbartxtcode"></i>
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
        @include('backend.layouts.navbar')
        <div class="content-page">
            @include('backend.layouts.notification')
            <div class="content">
                @yield('content')
            </div>
        </div>
        <footer class="footer">
            <div class="text-center desktop_copyright">
                <strong class="footer_copy_text"> Developed by &copy; {{@$contact->name}} </strong>
            </div>
            <div class="text-center mobile_copyright" style="display: none;">
                <strong class="footer_copy_text"> Developed by &copy; {{@$contact->name}} </strong>
            </div>
        </footer>
        <div class="modal fade custom-modal" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="customModal" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">You are about to delete</h5>
            </div>
            <div class="modal-body">
                <p>Do you want to proceed?</p>
            </div>
            <div class="modal-footer">
                <a id="yes_button" href="" class="btn btn-danger" style="padding:6px 35px">Yes</a>
                <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
</div>

<script src="{{asset('pike/backend/js/modernizr.min.js')}}"></script>
<script src="{{asset('pike/backend/js/popper.min.js')}}"></script>
<script src="{{asset('pike/backend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('pike/backend/js/fastclick.js')}}"></script>
<script src="{{asset('pike/backend/js/detect.js')}}"></script>

<script src="{{asset('pike/backend/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('pike/backend/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('pike/backend/js/pikeadmin.js')}}"></script>
<script src="{{asset('pike/backend/js/colorpicker.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="{{asset('pike/backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('pike/backend/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('pike/backend/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="https://cdn.rawgit.com/ashl1/datatables-rowsgroup/v1.0.0/dataTables.rowsGroup.js"></script>
<script src="{{asset('pike/backend/plugins/datetimepicker/js/moment.min.js')}}"></script>
<script src="{{asset('pike/backend/plugins/datetimepicker/js/daterangepicker.js')}}"></script>
<script src="{{asset('pike/backend/plugins/jquery.filer/js/tstjquery.filer.min.js')}}"></script>

{{-- image crp --}}
<script src="{{asset('pike/backend/plugins/image_crop/pixelarity-face.js')}}"></script>
<script src="{{asset('pike/backend/plugins/image_crop/script-face.js')}}"></script>

<script src="{{ asset('pike/backend/js/validate.min.js') }}"></script>
<script src="{{ asset('pike/backend/js/additional-methods.js') }}"></script>

<!-- sweet alert -->
<script src="{{ asset('pike/backend/js/sweetalert.js') }}"></script>
<!-- sweet alert -->
{{-- Js for tree view --}}
<script src="{{asset('pike/backend/plugins/jstree/jstree.min.js')}}"></script>
<!--Notify JS [ RECOMMENDED ]-->
<script src="{{ asset('pike/backend/js/notify.js') }}"></script>
<!-- custom -->
<script src="{{asset('pike/backend/custom/js.js')}}"></script>
<!-- END Java Script for this page -->

<!-- typeahead js -->
<script src="{{asset('pike/backend/js/bootstrap3-typeahead.min.js')}}"></script>

<script src="{{asset('pike/backend/custom/bcsaa.js')}}"></script>

<!-- tooltip problem if jquery-ui on --> 
<!-- <script src="{{asset('pike/backend/plugins/jquery-ui/jquery-ui.js')}}"></script> -->
<!-- Handle bar -->
<script src="{{asset('pike/backend/js/handlebars-v4.0.12.js')}}"></script>
<!-- map -->
<!-- <script src="{{asset('common')}}/plugins/gmapsjs/gmaps.js"></script> -->
<!-- tooltip -->



<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

<!-- start Java Script for this page -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.select2').select2();

        $('button[type="reset"]').bind("click", function() {
            $("input[type=text], textarea").val("");
            $('.select2').val(null).trigger('change');
        });

        $('.numeric_only').keypress(function(e) {
            if(isNaN(this.value+""+String.fromCharCode(e.charCode))) return false;
        }).on("cut copy paste",function(e){
            e.preventDefault();
        });

        // $(".numeric_only").keypress(function (e) {
        //     if (String.fromCharCode(e.keyCode).match(/[^0-9//.]/g)) return false;
        // });
    });
</script>
<!-- END Java Script for dropdown select2 -->

<script>
    $(document).on('click','.delete',function(e){
        e.preventDefault();
        var href=$(this).attr('href');
        $('#yes_button').attr('href',href);
        $('#deleteModal').modal('show');
    });

</script>

<!-- Start Java Script for Date time Picker -->
<script type="text/javascript">
    $(function() {
        $('.singledatepicker').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            autoUpdateInput: false,
            // drops: "up",
            autoApply:true,
            locale: {
                format: 'DD-MM-YYYY',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                firstDay: 0
            },
            minDate: '01/01/1930',
        },
        function(start) {
            this.element.val(start.format('DD-MM-YYYY'));
            this.element.parent().parent().removeClass('has-error');
        },
        function(chosen_date) {
            this.element.val(chosen_date.format('DD-MM-YYYY'));
        });
        
        $('.singledatepicker').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('DD-MM-YYYY'));
        });
    });
</script>
<!-- End Java Script for Data time Picker -->

<!-- Start Java Script for Data table -->
<script type="text/javascript">
    $(document).ready(function() {

        // Checkbox
        $('.checkboxesTree').jstree({
            'core' : {
              'themes' : {
                'responsive': false
            }
        },

        'types' : {
            'default' : {
                'icon' : 'fa fa-file-text-o'
            },
            'file' : {
                'icon' : 'fa fa-file-text'
            }
        },

        'plugins' : ['types', 'checkbox']
    });


        $('#example1').DataTable({
          pageLength:25,
          ordering: false,
      });

        $('#status').on('change', function(){
            $('#chkvalue').val(this.checked ? 1 : 0);
        });

    });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#image').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showImage').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });
  });
</script>

<script type="text/javascript">
    $(function(){
        $('input[name=status]').change(function(){
            var value = $( 'input[name=status]:checked' ).val();
        });
    })
</script>

<!-- preloader -->
<script type="text/javascript">
    $(document).ready(function() {

        setTimeout(function(){
            $('#loader-wrapper').show();
            $('body').addClass('loaded');
        }, 300);

    });
</script>
<!-- preloader end -->
<script type="text/javascript">

  $(document).ready(function(){
    $.validator.addMethod(
      "regex",
      function(value, element, regexp) {
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    },
    "Please type in Bangla"
    );
});
</script>

<script>  
  $(document).ready(function () {
    $(document).on('click', '#delete', function () {
      var actionTo = $(this).attr('href');
      var token = $(this).attr('data-token');
      var id = $(this).attr('data-id');
      swal({
        title: "Are you sure?",
        type: "success",
        showCancelButton: true,
        confirmButtonClass: 'btn-success',
        confirmButtonText: 'Yes',
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function (isConfirm) {
        if (isConfirm) {
          $.ajax({
            url:actionTo,
            type: 'post',
            data: {id:id, _token:token},
            success: function (data) {
              swal({
                title: "Deleted!",
                type: "success"
              },
              function (isConfirm) {
                if (isConfirm) {
                  location.reload();
                }
              });
            }
          });
        } else {
          swal("Cancelled", "", "error");
        }
      });
      return false;
    });
  });
</script>

<script>  
  $(document).ready(function () {
    $(document).on('click', '#approve', function () {
      var actionTo = $(this).attr('href');
      var token = $(this).attr('data-token');
      var id = $(this).attr('data-id');
      swal({
        title: "Are you sure?",
        type: "success",
        showCancelButton: true,
        confirmButtonClass: 'btn-primary',
        confirmButtonText: 'Yes',
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function (isConfirm) {
        if (isConfirm) {
          $.ajax({
            url:actionTo,
            type: 'post',
            data: {id:id, _token:token},
            success: function (data) {
              swal({
                title: "Approved!",
                type: "success"
              },
              function (isConfirm) {
                if (isConfirm) {
                  location.reload();
                }
              });
            }
          });
        } else {
          swal("Cancelled", "", "error");
        }
      });
      return false;
    });
  });
</script>

<!-- END Java Script for Data table -->

@yield('page_script')
<script type="text/javascript">
    window.onload = function() 
    { document.getElementById("hideAll").style.display = "none"; }
</script>

</body>
</html>
