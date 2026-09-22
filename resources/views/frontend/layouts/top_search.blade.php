<style type="text/css">
    .form-control-borderless {
        border: none;
    }
    .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
        border: none;
        outline: none;
        box-shadow: none;
    }
</style>
<section style="padding: 30px 0px 25px 0px;background:#129AF7;margin-bottom: 15px;border-radius: 15px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-10">
                <h2 class="mb-30 text-center find_doctor_h2" style="font-size: 22px;color: white;margin: 0px;">Find the Right Doctor in Bangladesh, Every Time</h2>
                <p class="text-center" style="color: white;font-weight: bold;margin-top: -27px;margin-bottom: 15px;font-size: 13.5px;">Discover doctors, hospitals, and trusted health information to make informed healthcare decisions.</p>

                <form class="card card-sm" method="POST" action="{{route('our.doctor-find')}}">
                    @csrf
                    <div class="card-body row no-gutters align-items-center" style="padding: 5px 15px !important;">
                        <div class="col-auto">
                            <i class="fa fa-search h4 text-body"></i>
                        </div>
                        <!--end of col-->
                        <div class="col">
                            <input class="form-control form-control-lg form-control-borderless" id="name" name="name" type="search" placeholder="Search doctors name" value="{{old('name')}}" min="3" autocomplete="off" required>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-lg btn-success" type="submit">Search</button>
                        </div>
                        <div class="col-auto mobile_display">
                            <span style="padding: 2px;border: 1px solid #80808042;border-radius: 10px;">OR</span>
                        </div>
                        <div class="col-auto mobile_display">
                            <a href# class="btn btn-lg btn-success"> <i class="fa fa-user"></i> Find Doctor <i class="fa fa-arrow-right"></i> </a>
                        </div>
                        <div class="col-auto mobile_display">
                            <a href="#" class="btn btn-lg btn-success"> <i class="fa fa-hospital-o" aria-hidden="true"></i> Find Hospital <i class="fa fa-arrow-right"></i> </a>
                        </div>


                    </div>
                </form>

                <div class="card-body row no-gutters align-items-centercard-body row no-gutters align-items-center mobile_row_class" style="padding: 18px 0px;background: white;margin-top: 15px;margin-left: 1px;margin-right: -2.5px;border-radius: 5px; display: none;">
                    <div class="col-md-12" style="text-align: center;margin-bottom: 10px;">
                        <a href# class="btn btn-lg btn-success custom_btn"> Find Doctor <i class="fa fa-arrow-right"></i> </a> &nbsp;&nbsp;

                        <a href="#" class="btn btn-lg btn-success custom_btn">  Find Hospital <i class="fa fa-arrow-right"></i> </a>
                    </div>
                    <div class="col-md-12" style="text-align: center;margin-bottom: 10px;">
                        <a href# class="btn btn-lg btn-success custom_btn">  Find Pharmacy <i class="fa fa-arrow-right"></i> </a> &nbsp;&nbsp;

                        <a href="#" class="btn btn-lg btn-success custom_btn">  Find Ambulance <i class="fa fa-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
            <!--end of col-->
            <div class="col-12 col-md-10 col-lg-8" id="doctorStatus">
            </div>
        </div>
    </div>
</section>