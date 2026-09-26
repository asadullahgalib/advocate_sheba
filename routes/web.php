<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "All Cache Cleared!";
});

Route::get('/','Frontend\FrontenController@index');

// Courts
Route::get('/supreme-court','Frontend\FrontenController@supremeCourt')->name('supreme.court');
Route::get('/district-court','Frontend\FrontenController@districtCourt')->name('district.court');
Route::get('/tribunals-court','Frontend\FrontenController@tribunalsCourt')->name('tribunals.courts');
Route::get('/village-court','Frontend\FrontenController@villageCourt')->name('village.court');

//Legal Documents & Forms
Route::get('/legal/form','Frontend\FrontenController@legalForm')->name('legal.form');


// Legal Information
Route::get('/legal/information/rights','Frontend\FrontenController@legalInformationRights')->name('legal.information.rights');
Route::get('/legal/information/terms','Frontend\FrontenController@legalInformationTerms')->name('legal.information.terms');
Route::get('/legal/information/laws','Frontend\FrontenController@legalInformationLaws')->name('legal.information.laws');
Route::get('/legal/information/procudures','Frontend\FrontenController@legalInformationProcudures')->name('legal.information.procudures');
Route::get('/law/details','Frontend\FrontenController@lawDetails')->name('law.details');

Route::get('/advocate-list','Frontend\FrontenController@advocateList')->name('our.advocate-list');
Route::get('/find-advocate-list','Frontend\FrontenController@findAdvocateList')->name('find.our.advocate-list');
Route::get('/barrister-list','Frontend\FrontenController@barristerList')->name('our.barrister-list');
Route::get('/find-barrister-list','Frontend\FrontenController@findBarristerList')->name('find.our.barrister-list');
Route::get('/consultant-list','Frontend\FrontenController@consultantList')->name('our.consultant-list');
Route::get('/find-consultant-list','Frontend\FrontenController@findConsultantList')->name('find.our.consultant-list');
Route::get('/law-firm-list','Frontend\FrontenController@lawFirmList')->name('our.law-firm-list');
Route::get('/find-law-firm-list','Frontend\FrontenController@findLawFirmList')->name('find.our.law-firm-list');
Route::get('/law-firm-details','Frontend\FrontenController@lawFirmDetails')->name('our.law-firm-details');
Route::get('/legal-information','Frontend\FrontenController@legalInformation')->name('our.legal-information');
Route::get('/legal-information/details','Frontend\FrontenController@legalInformationDetails')->name('our.legal-information.details');
Route::get('/courts','Frontend\FrontenController@courts')->name('our.courts');
Route::get('/legal-news','Frontend\FrontenController@legalNews')->name('our.legal-news');
Route::get('/location-wise-list','Frontend\FrontenController@locationWiseList')->name('our.location-wise-list');
Route::get('/practice-area-wise-list','Frontend\FrontenController@practiceAreaWiseList')->name('our.practice-area-wise-list');
Route::get('/profile','Frontend\FrontenController@profile')->name('advocate-profile');
Route::get('/legal-article-details','Frontend\FrontenController@legalArticleDetails')->name('legal.article.details');
Route::get('/category-list','Frontend\FrontenController@categoryList')->name('our.category-list');
Route::get('/category/details/{id}','Frontend\FrontenController@categoryDetails')->name('our.category-details');
Route::post('/category/details/store','Frontend\FrontenController@categoryDetailsStore')->name('our.category-details.store');
Route::get('/department-list','Frontend\FrontenController@departmentList')->name('our.department-list');
Route::get('/facilities','Frontend\FrontenController@facilities')->name('our.promotion-list');
Route::post('/doctor-find','Frontend\FrontenController@doctorFind')->name('our.doctor-find');
Route::get('/get-search-doctor','Frontend\FrontenController@getSearchDoctor')->name('get.search.doctor');
Route::get('/nurse-list','Frontend\FrontenController@nurseList')->name('our.nurse-list');
Route::get('/package-list','Frontend\FrontenController@packageList')->name('our.package-list');
Route::get('/ambulance-list','Frontend\FrontenController@ambulanceList')->name('our.ambulance-list');
Route::get('/doctor/details/{id}','Frontend\FrontenController@doctorDetails')->name('our.doctor-details');
Route::post('/doctor/store','Frontend\FrontenController@doctorStore')->name('our.doctor-store');
Route::get('/booking/submission','Frontend\FrontenController@doctorBookingSubmission')->name('frontend.booking.submission');
Route::get('/booking/download','Frontend\FrontenController@doctorBookingDownload')->name('frontend.booking.download');
Route::get('/SP-{id}','Frontend\FrontenController@doctorProfile')->name('our.doctor-profile');
Route::get('/doctor-reg','Frontend\FrontenController@doctorRegistration')->name('our.doctor-registration');
Route::post('/doctor-reg/store','Frontend\FrontenController@doctorRegStore')->name('our.doctor-reg.store');
Route::get('/doctor-reg/submission','Frontend\FrontenController@doctorRegSubmission')->name('our.doctor-reg.submission');
Route::get('/doctor-reg/download','Frontend\FrontenController@doctorRegDownload')->name('our.doctor-reg.download');
Route::get('/department/doctor/{id}','Frontend\FrontenController@departmentWiseDoctor')->name('our.department-wise-doctor');
Route::post('/doctor-schedule-date', 'Frontend\FrontenController@doctorScheduleDate')->name('doctor-schedule-date');
Route::post('/doctor-time-slot', 'Frontend\FrontenController@doctorTimeSlot')->name('doctor-time-slot');
Route::get('/get-visit-fee', 'Frontend\FrontenController@getVisitFee')->name('get-doctor-visit-fee');
Route::get('/news/details/{id}','Frontend\FrontenController@newsDetails')->name('our.news.details');
Route::get('/get-doctor-appointment-number', 'Frontend\FrontenController@getAppointmentNumber')->name('get-doctor-appointment-number');
Route::get('/get-package-appointment-number', 'Frontend\FrontenController@getPackageNumber')->name('get-package-appointment-number');
Route::get('/get-ambulance-appointment-number', 'Frontend\FrontenController@getAmbulanceNumber')->name('get-ambulance-appointment-number');

Auth::routes();
//customer-dashboard
Route::group(['middleware'=>['auth','customer']],function(){
	Route::get('/dashboard','Frontend\DashboardController@dashboard')->name('dashboard');
});

Route::group(['middleware'=>['auth','admin']],function(){
	Route::group(['middleware'=>['permission']],function(){
		//admin-dashboard
		Route::get('/home', 'HomeController@index')->name('home');

		Route::prefix('user')->group(function(){
			//User
			Route::get('/','Backend\UserController@view')->name('user');
			Route::get('/add','Backend\UserController@add')->name('user.add');
			Route::post('/store','Backend\UserController@store')->name('user.store');
			Route::get('/edit/{id}','Backend\UserController@edit')->name('user.edit');
			Route::post('/update/{id}','Backend\UserController@update')->name('user.update');
			Route::post('/delete','Backend\UserController@delete')->name('user.delete');
			//UserLog
			Route::get('/userlog/view','Backend\UserController@UserLog')->name('user.userlog');
			//Role
			Route::get('/role/view','Backend\RoleController@view')->name('user.role');
			Route::get('/role/add','Backend\RoleController@add')->name('user.role.add');
			Route::post('/role/store','Backend\RoleController@store')->name('user.role.store');
			Route::get('/role/edit/{id}','Backend\RoleController@edit')->name('user.role.edit');
			Route::post('/role/update/{id}','Backend\RoleController@update')->name('user.role.update');
			Route::post('/role/delete','Backend\RoleController@delete')->name('user.role.delete');

			Route::get('/permission','Backend\Menu\MenuPermissionController@index')->name('user.permission');
			Route::post('/permission/store','Backend\Menu\MenuPermissionController@storePermission')->name('user.permission.store');
		});

		Route::prefix('profiles')->group(function(){
			Route::get('/view','Backend\ProfileController@view')->name('profiles.view');
			Route::get('/edit','Backend\ProfileController@edit')->name('profiles.edit');
			Route::post('/store','Backend\ProfileController@update')->name('profiles.update');
			Route::get('/passowrd/view','Backend\ProfileController@passwordView')->name('profiles.passowrd.view');
			Route::post('/passowrd/update','Backend\ProfileController@passwordUpdate')->name('profiles.passowrd.update');
		});

		Route::prefix('address')->group(function(){
			//Division
			Route::get('/division/view','Backend\Setup\SetupController@viewDivision')->name('setup.division.view');
			Route::get('/division/add','Backend\Setup\SetupController@addDivision')->name('setup.division.add');
			Route::post('/division/store','Backend\Setup\SetupController@storeDivision')->name('setup.division.store');
			Route::get('/division/edit/{id}','Backend\Setup\SetupController@editDivision')->name('setup.division.edit');
			Route::post('/division/update/{id}','Backend\Setup\SetupController@updateDivision')->name('setup.division.update');
			//District
			Route::get('/district/view','Backend\Setup\SetupController@viewDistrict')->name('setup.district.view');
			Route::get('/district/add','Backend\Setup\SetupController@addDistrict')->name('setup.district.add');
			Route::post('/district/store','Backend\Setup\SetupController@storeDistrict')->name('setup.district.store');
			Route::get('/district/edit/{id}','Backend\Setup\SetupController@editDistrict')->name('setup.district.edit');
			Route::post('/district/update/{id}','Backend\Setup\SetupController@updateDistrict')->name('setup.district.update');
			Route::get('/district/delete/{id}','Backend\Setup\SetupController@deleteDistrict')->name('setup.district.delete');
			//Upazila
			Route::get('/upazila/view','Backend\Setup\SetupController@viewUpazila')->name('setup.upazila.view');
			Route::get('/upazila/add','Backend\Setup\SetupController@addUpazila')->name('setup.upazila.add');
			Route::post('/upazila/store','Backend\Setup\SetupController@storeUpazila')->name('setup.upazila.store');
			Route::get('/upazila/edit/{id}','Backend\Setup\SetupController@editUpazila')->name('setup.upazila.edit');
			Route::post('/upazila/update/{id}','Backend\Setup\SetupController@updateUpazila')->name('setup.upazila.update');
		});

		// Practice Area
		Route::prefix('practice-area')->group(function(){
			Route::get('/view','Backend\PracticeAreaController@view')->name('practice-area.view');
			Route::get('/add','Backend\PracticeAreaController@add')->name('practice-area.add');
			Route::post('/store','Backend\PracticeAreaController@store')->name('practice-area.store');
			Route::get('/edit/{id}','Backend\PracticeAreaController@edit')->name('practice-area.edit');
			Route::post('/update/{id}','Backend\PracticeAreaController@update')->name('practice-area.update');
			Route::post('/delete','Backend\PracticeAreaController@delete')->name('practice-area.delete');
		});

		// Practice Area
		Route::prefix('practice-area')->group(function(){
			Route::get('/view','Backend\PracticeAreaController@view')->name('practice-area.view');
			Route::get('/add','Backend\PracticeAreaController@add')->name('practice-area.add');
			Route::post('/store','Backend\PracticeAreaController@store')->name('practice-area.store');
			Route::get('/edit/{id}','Backend\PracticeAreaController@edit')->name('practice-area.edit');
			Route::post('/update/{id}','Backend\PracticeAreaController@update')->name('practice-area.update');
			Route::post('/delete','Backend\PracticeAreaController@delete')->name('practice-area.delete');
		});

		// Legal Information
		Route::prefix('legal-information')->group(function(){
			Route::get('/view','Backend\LegalInformationController@view')->name('legal-information.view');
			Route::get('/add','Backend\LegalInformationController@add')->name('legal-information.add');
			Route::post('/store','Backend\LegalInformationController@store')->name('legal-information.store');
			Route::get('/edit/{id}','Backend\LegalInformationController@edit')->name('legal-information.edit');
			Route::post('/update/{id}','Backend\LegalInformationController@update')->name('legal-information.update');
			Route::post('/delete','Backend\LegalInformationController@delete')->name('legal-information.delete');
		});

		// Law
		Route::prefix('laws')->group(function(){
			Route::get('/view','Backend\LawController@view')->name('laws.view');
			Route::get('/add','Backend\LawController@add')->name('laws.add');
			Route::post('/store','Backend\LawController@store')->name('laws.store');
			Route::get('/edit/{id}','Backend\LawController@edit')->name('laws.edit');
			Route::post('/update/{id}','Backend\LawController@update')->name('laws.update');
			Route::post('/delete','Backend\LawController@delete')->name('laws.delete');
		});

		Route::prefix('setups')->group(function(){
			//Logo
			Route::get('/logo/view','Backend\LogoController@view')->name('site-setting.contents.logo.view');
			Route::get('/logo/add','Backend\LogoController@add')->name('site-setting.contents.logo.add');
			Route::post('/logo/store','Backend\LogoController@store')->name('site-setting.contents.logo.store');
			Route::get('/logo/edit/{id}','Backend\LogoController@edit')->name('site-setting.contents.logo.edit');
			Route::post('/logo/update/{id}','Backend\LogoController@update')->name('site-setting.contents.logo.update');
			Route::post('/logo/delete','Backend\LogoController@delete')->name('site-setting.contents.logo.delete');
			//Contact Us
			Route::get('/contact/view','Backend\ContactController@view')->name('site-setting.contents.contact.view');
			Route::get('/contact/add','Backend\ContactController@add')->name('site-setting.contents.contact.add');
			Route::post('/contact/store','Backend\ContactController@store')->name('site-setting.contents.contact.store');
			Route::get('/contact/edit/{id}','Backend\ContactController@edit')->name('site-setting.contents.contact.edit');
			Route::post('/contact/update/{id}','Backend\ContactController@update')->name('site-setting.contents.contact.update');
			Route::post('/contact/delete','Backend\ContactController@delete')->name('site-setting.contents.contact.delete');
			//Designation
			Route::get('/designation/view','Backend\Setups\DesignationController@view')->name('human-resource.hrm.designation.view');
			Route::get('/designation/add','Backend\Setups\DesignationController@add')->name('human-resource.hrm.designation.add');
			Route::post('/designation/store','Backend\Setups\DesignationController@store')->name('human-resource.hrm.designation.store');
			Route::get('/designation/edit/{id}','Backend\Setups\DesignationController@edit')->name('human-resource.hrm.designation.edit');
			Route::post('/designation/update/{id}','Backend\Setups\DesignationController@update')->name('human-resource.hrm.designation.update');
			Route::post('/designation/delete','Backend\Setups\DesignationController@delete')->name('human-resource.hrm.designation.delete');
			Route::get('/designation/pdf','Backend\Setups\DesignationController@pdf')->name('human-resource.hrm.designation.pdf');
			//Department
			Route::get('/department/view','Backend\Setups\DepartmentController@view')->name('human-resource.hrm.department.view');
			Route::get('/department/add','Backend\Setups\DepartmentController@add')->name('human-resource.hrm.department.add');
			Route::post('/department/store','Backend\Setups\DepartmentController@store')->name('human-resource.hrm.department.store');
			Route::get('/department/edit/{id}','Backend\Setups\DepartmentController@edit')->name('human-resource.hrm.department.edit');
			Route::post('/department/update/{id}','Backend\Setups\DepartmentController@update')->name('human-resource.hrm.department.update');
			Route::post('/department/delete','Backend\Setups\DepartmentController@delete')->name('human-resource.hrm.department.delete');
			Route::get('/department/pdf','Backend\Setups\DepartmentController@pdf')->name('human-resource.hrm.department.pdf');
			//Department
			Route::get('/time/view','Backend\Setups\DepartmentController@timeView')->name('human-resource.hrm.time.view');
			Route::get('/time/add','Backend\Setups\DepartmentController@timeAdd')->name('human-resource.hrm.time.add');
			Route::post('/time/store','Backend\Setups\DepartmentController@timeStore')->name('human-resource.hrm.time.store');
			Route::get('/time/edit/{id}','Backend\Setups\DepartmentController@timeEdit')->name('human-resource.hrm.time.edit');
			Route::post('/time/update/{id}','Backend\Setups\DepartmentController@timeUpdate')->name('human-resource.hrm.time.update');
			Route::post('/time/delete','Backend\Setups\DepartmentController@timeDelete')->name('human-resource.hrm.time.delete');
			//Category
			Route::get('/category/view','Backend\Setups\DepartmentController@categoryView')->name('human-resource.hrm.category.view');
			Route::get('/category/add','Backend\Setups\DepartmentController@categoryAdd')->name('human-resource.hrm.category.add');
			Route::post('/category/store','Backend\Setups\DepartmentController@categoryStore')->name('human-resource.hrm.category.store');
			Route::get('/category/edit/{id}','Backend\Setups\DepartmentController@categoryEdit')->name('human-resource.hrm.category.edit');
			Route::post('/category/update/{id}','Backend\Setups\DepartmentController@categoryUpdate')->name('human-resource.hrm.category.update');
			Route::post('/category/delete','Backend\Setups\DepartmentController@categoryDelete')->name('human-resource.hrm.category.delete');
			//Day
			Route::get('/day/view','Backend\Setups\DepartmentController@dayView')->name('human-resource.hrm.day.view');
			Route::get('/day/add','Backend\Setups\DepartmentController@dayAdd')->name('human-resource.hrm.day.add');
			Route::post('/day/store','Backend\Setups\DepartmentController@dayStore')->name('human-resource.hrm.day.store');
			Route::get('/day/edit/{id}','Backend\Setups\DepartmentController@dayEdit')->name('human-resource.hrm.day.edit');
			Route::post('/day/update/{id}','Backend\Setups\DepartmentController@dayUpdate')->name('human-resource.hrm.day.update');
			Route::post('/day/delete','Backend\Setups\DepartmentController@dayDelete')->name('human-resource.hrm.day.delete');
			//Payment Number
			Route::get('/number/view','Backend\Setups\DepartmentController@numberView')->name('human-resource.hrm.number.view');
			Route::get('/number/add','Backend\Setups\DepartmentController@numberAdd')->name('human-resource.hrm.number.add');
			Route::post('/number/store','Backend\Setups\DepartmentController@numberStore')->name('human-resource.hrm.number.store');
			Route::get('/number/edit/{id}','Backend\Setups\DepartmentController@numberEdit')->name('human-resource.hrm.number.edit');
			Route::post('/number/update/{id}','Backend\Setups\DepartmentController@numberUpdate')->name('human-resource.hrm.number.update');
			Route::post('/number/delete','Backend\Setups\DepartmentController@numberDelete')->name('human-resource.hrm.number.delete');
			//Slider
			Route::get('/slider/view','Backend\Setups\DepartmentController@sliderView')->name('human-resource.hrm.slider.view');
			Route::get('/slider/add','Backend\Setups\DepartmentController@sliderAdd')->name('human-resource.hrm.slider.add');
			Route::post('/slider/store','Backend\Setups\DepartmentController@sliderStore')->name('human-resource.hrm.slider.store');
			Route::get('/slider/edit/{id}','Backend\Setups\DepartmentController@sliderEdit')->name('human-resource.hrm.slider.edit');
			Route::post('/slider/update/{id}','Backend\Setups\DepartmentController@sliderUpdate')->name('human-resource.hrm.slider.update');
			Route::post('/slider/delete','Backend\Setups\DepartmentController@sliderDelete')->name('human-resource.hrm.slider.delete');
			//SMS
			Route::get('/sms/view','Backend\Setups\DepartmentController@smsView')->name('human-resource.hrm.sms.view');
			Route::get('/sms/add','Backend\Setups\DepartmentController@smsAdd')->name('human-resource.hrm.sms.add');
			Route::post('/sms/store','Backend\Setups\DepartmentController@smsStore')->name('human-resource.hrm.sms.store');
			Route::get('/sms/edit/{id}','Backend\Setups\DepartmentController@smsEdit')->name('human-resource.hrm.sms.edit');
			Route::post('/sms/update/{id}','Backend\Setups\DepartmentController@smsUpdate')->name('human-resource.hrm.sms.update');
			Route::post('/sms/delete','Backend\Setups\DepartmentController@smsDelete')->name('human-resource.hrm.sms.delete');
			// News & Events
			Route::get('/package/view','Backend\ContactController@packageView')->name('human-resource.hrm.package.view');
			Route::get('/package/add','Backend\ContactController@packageAdd')->name('human-resource.hrm.package.add');
			Route::post('/package/store','Backend\ContactController@packageStore')->name('human-resource.hrm.package.store');
			Route::get('/package/edit/{id}','Backend\ContactController@packageEdit')->name('human-resource.hrm.package.edit');
			Route::post('/package/update/{id}','Backend\ContactController@packageUpdate')->name('human-resource.hrm.package.update');
			Route::post('/package/delete','Backend\ContactController@packageDelete')->name('human-resource.hrm.package.delete');
			// Ambulance
			Route::get('/ambulance/view','Backend\ContactController@ambulanceView')->name('human-resource.hrm.ambulance.view');
			Route::get('/ambulance/add','Backend\ContactController@ambulanceAdd')->name('human-resource.hrm.ambulance.add');
			Route::post('/ambulance/store','Backend\ContactController@ambulanceStore')->name('human-resource.hrm.ambulance.store');
			Route::get('/ambulance/edit/{id}','Backend\ContactController@ambulanceEdit')->name('human-resource.hrm.ambulance.edit');
			Route::post('/ambulance/update/{id}','Backend\ContactController@ambulanceUpdate')->name('human-resource.hrm.ambulance.update');
			Route::post('/ambulance/delete','Backend\ContactController@ambulanceDelete')->name('human-resource.hrm.ambulance.delete');
			// Promotion
			Route::get('/promotion/view','Backend\ContactController@promotionView')->name('human-resource.hrm.promotion.view');
			Route::get('/promotion/add','Backend\ContactController@promotionAdd')->name('human-resource.hrm.promotion.add');
			Route::post('/promotion/store','Backend\ContactController@promotionStore')->name('human-resource.hrm.promotion.store');
			Route::get('/promotion/edit/{id}','Backend\ContactController@promotionEdit')->name('human-resource.hrm.promotion.edit');
			Route::post('/promotion/update/{id}','Backend\ContactController@promotionUpdate')->name('human-resource.hrm.promotion.update');
			Route::post('/promotion/delete','Backend\ContactController@promotionDelete')->name('human-resource.hrm.promotion.delete');
			// Support
			Route::get('/about/view','Backend\ContactController@aboutView')->name('human-resource.hrm.about.view');
			Route::get('/about/add','Backend\ContactController@aboutAdd')->name('human-resource.hrm.about.add');
			Route::post('/about/store','Backend\ContactController@aboutStore')->name('human-resource.hrm.about.store');
			Route::get('/about/edit/{id}','Backend\ContactController@aboutEdit')->name('human-resource.hrm.about.edit');
			Route::post('/about/update/{id}','Backend\ContactController@aboutUpdate')->name('human-resource.hrm.about.update');
			Route::post('/about/delete','Backend\ContactController@aboutDelete')->name('human-resource.hrm.about.delete');
		});

		Route::prefix('doctors')->group(function(){
			//Doctor Add
			Route::get('/view', 'Backend\Employees\EmployeeRegistrationController@payrollEmployee')->name('payroll.employee.view');
	        Route::get('/add','Backend\Employees\EmployeeRegistrationController@payrollEmployeeAdd')->name('payroll.employee.view.add');
			Route::post('/store','Backend\Employees\EmployeeRegistrationController@payrollEmployeeStore')->name('payroll.employee.view.store');
			Route::get('/edit/{id}','Backend\Employees\EmployeeRegistrationController@payrollEmployeeEdit')->name('payroll.employee.view.edit');
			Route::get('/passowrd/{id}','Backend\Employees\EmployeeRegistrationController@payrollEmployeeEditPassword')->name('payroll.employee.view.edit.passowrd');
			Route::post('/passowrd/{id}','Backend\Employees\EmployeeRegistrationController@payrollEmployeeUpdatePassword')->name('payroll.employee.view.update.passowrd');
			Route::post('/update/{id}','Backend\Employees\EmployeeRegistrationController@payrollEmployeeUpdate')->name('payroll.employee.view.update');
	        Route::post('/delete', 'Backend\Employees\EmployeeRegistrationController@payrollEmployeeDestroy')->name('payroll.employee.view.destroy');
			Route::get('/details/{id}','Backend\Employees\EmployeeRegistrationController@payrollEmployeeDetails')->name('payroll.employee.view.details');
			Route::get('/official/details/{id}','Backend\Employees\EmployeeRegistrationController@payrollofficialDetails')->name('payroll.employee.official.details');
			Route::get('/personal/details/{id}','Backend\Employees\EmployeeRegistrationController@payrollpersonalDetails')->name('payroll.employee.personal.details');
			Route::get('/education/details/{id}','Backend\Employees\EmployeeRegistrationController@payrolleducationDetails')->name('payroll.employee.education.details');
			Route::get('/experience/details/{id}','Backend\Employees\EmployeeRegistrationController@payrollExperienceDetails')->name('payroll.employee.experience.details');
			Route::get('/achievement/details/{id}','Backend\Employees\EmployeeRegistrationController@payrollAchievementDetails')->name('payroll.employee.achievement.details');
			Route::get('/speciality/details/{id}','Backend\Employees\EmployeeRegistrationController@payrollSpecialityDetails')->name('payroll.employee.speciality.details');
			Route::get('/daytime/details/{id}','Backend\Employees\EmployeeRegistrationController@payrollDayTimeDetails')->name('payroll.employee.daytime.details');
			Route::get('/workplace/details/{id}','Backend\Employees\EmployeeRegistrationController@payrollWorkPlaceDetails')->name('payroll.employee.workplace.details');
			Route::get('/chamber/details/{id}','Backend\Employees\EmployeeRegistrationController@payrollChamberDetails')->name('payroll.employee.chamber.details');
			Route::get('/time/details/{id}','Backend\Employees\EmployeeRegistrationController@payrollTimeSetupDetails')->name('payroll.employee.time.assign.details');
			Route::get('/contact/details/{id}','Backend\Employees\EmployeeRegistrationController@payrollcontactDetails')->name('payroll.employee.contact.details');
			Route::post('/details/official','Backend\Employees\EmployeeRegistrationController@payrollupdateOfficialInfo')->name('payroll.employee.details.official');
			Route::post('/details/personal','Backend\Employees\EmployeeRegistrationController@payrollupdatePersonalInfo')->name('payroll.employee.details.personal');
			Route::post('/details/educational','Backend\Employees\EmployeeRegistrationController@payrollupdateEducationalInfo')->name('payroll.employee.details.educational');
			Route::post('/details/experiences','Backend\Employees\EmployeeRegistrationController@payrollupdateExperiencesInfo')->name('payroll.employee.details.experiences');
			Route::post('/details/training','Backend\Employees\EmployeeRegistrationController@payrollupdateTrainingInfo')->name('payroll.employee.details.training');
			Route::post('/details/speciality','Backend\Employees\EmployeeRegistrationController@payrollupdateSpecialityInfo')->name('payroll.employee.details.specialities');
			Route::post('/details/daytimes','Backend\Employees\EmployeeRegistrationController@payrollupdateDayTimesInfo')->name('payroll.employee.details.daytimes');
			Route::post('/details/workplace','Backend\Employees\EmployeeRegistrationController@payrollupdateWorkplaceInfo')->name('payroll.employee.details.workplace');
			Route::post('/details/chamber','Backend\Employees\EmployeeRegistrationController@payrollupdateChamberInfo')->name('payroll.employee.details.chamber');
			Route::post('/details/time','Backend\Employees\EmployeeRegistrationController@payrollupdateEducationalTimeAssign')->name('payroll.employee.details.time.assign');
			Route::post('/details/contact','Backend\Employees\EmployeeRegistrationController@payrollupdateContactInfo')->name('payroll.employee.details.contact');
			Route::post('/employee-delete','Backend\Employees\EmployeeRegistrationController@payrollemployeeDelete')->name('payroll.employee.registration.delete');
			Route::get('/print/{id}','Backend\Employees\EmployeeRegistrationController@payrollEmployeePrint')->name('payroll.employee.view.print');
			Route::get('/employee-inactive/{id}', 'Backend\Employees\EmployeeRegistrationController@employeeInactive')->name('payroll.employee.inactive');
	        Route::get('/employee-active/{id}', 'Backend\Employees\EmployeeRegistrationController@employeeActive')->name('payroll.employee.active');
	        Route::get('/report', 'Backend\Employees\EmployeeRegistrationController@employeeReport')->name('payroll.employee.report');
	        Route::get('/report/handlebar', 'Backend\Employees\EmployeeRegistrationController@employeeReportHandlebar')->name('payroll.employee.report.handlebar');
	        Route::post('/employee/report/pdf', 'Backend\Employees\EmployeeRegistrationController@employeeReportPdf')->name('payroll.employee.report.pdf');
	        //Doctor Booking
	        Route::get('/booking/view', 'Backend\Employees\EmployeeRegistrationController@bookingView')->name('payroll.booking.view');
	        Route::get('/booking/pdf/{id}', 'Backend\Employees\EmployeeRegistrationController@bookingPdf')->name('payroll.booking.pdf');
	        Route::post('/booking/delete', 'Backend\Employees\EmployeeRegistrationController@bookingDelete')->name('payroll.booking.delete');
	        Route::get('/booking/approval/{id}', 'Backend\Employees\EmployeeRegistrationController@bookingApproval')->name('payroll.booking.approval');
	        Route::post('/booking/approval-store/{id}', 'Backend\Employees\EmployeeRegistrationController@bookingApprovalStore')->name('payroll.booking.approval-store');
	        Route::get('/booking/report', 'Backend\Employees\EmployeeRegistrationController@bookingReport')->name('payroll.booking.report');
	        Route::get('/booking/report/handlebar', 'Backend\Employees\EmployeeRegistrationController@bookingReportHandlebar')->name('payroll.booking.report.handlebar');
	        Route::post('/booking/report/pdf', 'Backend\Employees\EmployeeRegistrationController@bookingReportPdf')->name('payroll.booking.report.pdf');
		});
		
		Route::prefix('doctor-profile')->group(function(){
			// Doctor Profile
			Route::get('/details','Backend\DoctorController@payrollEmployeeDetails')->name('doctor-profile.view.details');
			Route::get('/official/details','Backend\DoctorController@payrollofficialDetails')->name('doctor-profile.official.details');
			Route::get('/personal/details','Backend\DoctorController@payrollpersonalDetails')->name('doctor-profile.personal.details');
			Route::get('/education/details','Backend\DoctorController@payrolleducationDetails')->name('doctor-profile.education.details');
			Route::get('/experience/details','Backend\DoctorController@payrollExperienceDetails')->name('doctor-profile.experience.details');
			Route::get('/achievement/details','Backend\DoctorController@payrollAchievementDetails')->name('doctor-profile.achievement.details');
			Route::get('/speciality/details','Backend\DoctorController@payrollSpecialityDetails')->name('doctor-profile.speciality.details');
			Route::get('/daytime/details','Backend\DoctorController@payrollDayTimeDetails')->name('doctor-profile.daytime.details');
			Route::get('/workplace/details','Backend\DoctorController@payrollWorkPlaceDetails')->name('doctor-profile.workplace.details');
			Route::get('/chamber/details','Backend\DoctorController@payrollChamberDetails')->name('doctor-profile.chamber.details');
			Route::get('/time/details','Backend\DoctorController@payrollTimeSetupDetails')->name('doctor-profile.time.assign.details');
			Route::get('/contact/details','Backend\DoctorController@payrollcontactDetails')->name('doctor-profile.contact.details');
			Route::post('/details/official','Backend\DoctorController@payrollupdateOfficialInfo')->name('doctor-profile.details.official');
			Route::post('/details/personal','Backend\DoctorController@payrollupdatePersonalInfo')->name('doctor-profile.details.personal');
			Route::post('/details/educational','Backend\DoctorController@payrollupdateEducationalInfo')->name('doctor-profile.details.educational');
			Route::post('/details/experiences','Backend\DoctorController@payrollupdateExperiencesInfo')->name('doctor-profile.details.experiences');
			Route::post('/details/training','Backend\DoctorController@payrollupdateTrainingInfo')->name('doctor-profile.details.training');
			Route::post('/details/speciality','Backend\DoctorController@payrollupdateSpecialityInfo')->name('doctor-profile.details.specialities');
			Route::post('/details/daytimes','Backend\DoctorController@payrollupdateDayTimesInfo')->name('doctor-profile.details.daytimes');
			Route::post('/details/workplace','Backend\DoctorController@payrollupdateWorkplaceInfo')->name('doctor-profile.details.workplace');
			Route::post('/details/chamber','Backend\DoctorController@payrollupdateChamberInfo')->name('doctor-profile.details.chamber');
			Route::post('/details/time','Backend\DoctorController@payrollupdateEducationalTimeAssign')->name('doctor-profile.details.time.assign');
			Route::post('/details/contact','Backend\DoctorController@payrollupdateContactInfo')->name('doctor-profile.details.contact');
			// Social Media
			Route::get('/social/view','Backend\ContactController@socialView')->name('doctor-profile.social.view');
			Route::get('/social/add','Backend\ContactController@socialAdd')->name('doctor-profile.social.add');
			Route::post('/social/store','Backend\ContactController@socialStore')->name('doctor-profile.social.store');
			Route::get('/social/edit/{id}','Backend\ContactController@socialEdit')->name('doctor-profile.social.edit');
			Route::post('/social/update/{id}','Backend\ContactController@socialUpdate')->name('doctor-profile.social.update');
			Route::post('/social/delete','Backend\ContactController@socialDelete')->name('doctor-profile.social.delete');
			//Doctor Booking
	        Route::get('/booking/view', 'Backend\DoctorController@bookingView')->name('doctor-profile.booking.view');
	        Route::get('/booking/pdf/{code}', 'Backend\DoctorController@bookingPdf')->name('doctor-profile.booking.pdf');
	        Route::get('/booking/report', 'Backend\DoctorController@bookingReport')->name('doctor-profile.booking.report');
	        Route::get('/booking/report/handlebar', 'Backend\DoctorController@bookingReportHandlebar')->name('doctor-profile.booking.report.handlebar');
	        Route::post('/booking/report/pdf', 'Backend\DoctorController@bookingReportPdf')->name('doctor-profile.booking.report.pdf');
			// News & Events
			Route::get('/news/view','Backend\ContactController@newsView')->name('doctor-profile.news.view');
			Route::get('/news/add','Backend\ContactController@newsAdd')->name('doctor-profile.news.add');
			Route::post('/news/store','Backend\ContactController@newsStore')->name('doctor-profile.news.store');
			Route::get('/news/edit/{id}','Backend\ContactController@newsEdit')->name('doctor-profile.news.edit');
			Route::post('/news/update/{id}','Backend\ContactController@newsUpdate')->name('doctor-profile.news.update');
			Route::post('/news/delete','Backend\ContactController@newsDelete')->name('doctor-profile.news.delete');
			// Photo Gallery
			Route::get('/photo/view','Backend\ContactController@photoView')->name('doctor-profile.photo.view');
			Route::get('/photo/add','Backend\ContactController@photoAdd')->name('doctor-profile.photo.add');
			Route::post('/photo/store','Backend\ContactController@photoStore')->name('doctor-profile.photo.store');
			Route::get('/photo/edit/{id}','Backend\ContactController@photoEdit')->name('doctor-profile.photo.edit');
			Route::post('/photo/update/{id}','Backend\ContactController@photoUpdate')->name('doctor-profile.photo.update');
			Route::post('/photo/delete','Backend\ContactController@photoDelete')->name('doctor-profile.photo.delete');
			// Video Gallery
			Route::get('/video/view','Backend\ContactController@videoView')->name('doctor-profile.video.view');
			Route::get('/video/add','Backend\ContactController@videoAdd')->name('doctor-profile.video.add');
			Route::post('/video/store','Backend\ContactController@videoStore')->name('doctor-profile.video.store');
			Route::get('/video/edit/{id}','Backend\ContactController@videoEdit')->name('doctor-profile.video.edit');
			Route::post('/video/update/{id}','Backend\ContactController@videoUpdate')->name('doctor-profile.video.update');
			Route::post('/video/delete','Backend\ContactController@videoDelete')->name('doctor-profile.video.delete');
		});

		Route::prefix('e-prescription')->group(function(){
			Route::prefix('chief')->group(function(){
				//Chief Complient
				Route::get('/complient/view','Backend\EPrescriptionSetupController@chiefComplientView')->name('e-prescription.chief.complient.view');
				Route::get('/complient/add','Backend\EPrescriptionSetupController@chiefComplientAdd')->name('e-prescription.chief.complient.add');
				Route::post('/complient/store','Backend\EPrescriptionSetupController@chiefComplientStore')->name('e-prescription.chief.complient.store');
				Route::get('/complient/edit/{id}','Backend\EPrescriptionSetupController@chiefComplientEdit')->name('e-prescription.chief.complient.edit');
				Route::post('/complient/update/{id}','Backend\EPrescriptionSetupController@chiefComplientUpdate')->name('e-prescription.chief.complient.update');
				Route::post('/complient/delete','Backend\EPrescriptionSetupController@chiefComplientDelete')->name('e-prescription.chief.complient.delete');
			});
			Route::prefix('examination')->group(function(){
				//Examination
				Route::get('/view','Backend\EPrescriptionSetupController@examinationView')->name('e-prescription.examination.view');
				Route::get('/add','Backend\EPrescriptionSetupController@examinationAdd')->name('e-prescription.examination.add');
				Route::post('/store','Backend\EPrescriptionSetupController@examinationStore')->name('e-prescription.examination.store');
				Route::get('/edit/{id}','Backend\EPrescriptionSetupController@examinationEdit')->name('e-prescription.examination.edit');
				Route::post('/update/{id}','Backend\EPrescriptionSetupController@examinationUpdate')->name('e-prescription.examination.update');
				Route::post('/delete','Backend\EPrescriptionSetupController@examinationDelete')->name('e-prescription.examination.delete');
			});
			Route::prefix('diagnosis')->group(function(){
				//Diagnosis
				Route::get('/view','Backend\EPrescriptionSetupController@diagnosisView')->name('e-prescription.diagnosis.view');
				Route::get('/add','Backend\EPrescriptionSetupController@diagnosisAdd')->name('e-prescription.diagnosis.add');
				Route::post('/store','Backend\EPrescriptionSetupController@diagnosisStore')->name('e-prescription.diagnosis.store');
				Route::get('/edit/{id}','Backend\EPrescriptionSetupController@diagnosisEdit')->name('e-prescription.diagnosis.edit');
				Route::post('/update/{id}','Backend\EPrescriptionSetupController@diagnosisUpdate')->name('e-prescription.diagnosis.update');
				Route::post('/delete','Backend\EPrescriptionSetupController@diagnosisDelete')->name('e-prescription.diagnosis.delete');
			});
			Route::prefix('investigation')->group(function(){
				//Investigation Advice
				Route::get('/advice/view','Backend\EPrescriptionSetupController@investigationAdviceView')->name('e-prescription.investigation.advice.view');
				Route::get('/advice/add','Backend\EPrescriptionSetupController@investigationAdviceAdd')->name('e-prescription.investigation.advice.add');
				Route::post('/advice/store','Backend\EPrescriptionSetupController@investigationAdviceStore')->name('e-prescription.investigation.advice.store');
				Route::get('/advice/edit/{id}','Backend\EPrescriptionSetupController@investigationAdviceEdit')->name('e-prescription.investigation.advice.edit');
				Route::post('/advice/update/{id}','Backend\EPrescriptionSetupController@investigationAdviceUpdate')->name('e-prescription.investigation.advice.update');
				Route::post('/advice/delete','Backend\EPrescriptionSetupController@investigationAdviceDelete')->name('e-prescription.investigation.advice.delete');
			});
			Route::prefix('advice')->group(function(){
				//Advice
				Route::get('/view','Backend\EPrescriptionSetupController@adviceView')->name('e-prescription.advice.view');
				Route::get('/add','Backend\EPrescriptionSetupController@adviceAdd')->name('e-prescription.advice.add');
				Route::post('/store','Backend\EPrescriptionSetupController@adviceStore')->name('e-prescription.advice.store');
				Route::get('/edit/{id}','Backend\EPrescriptionSetupController@adviceEdit')->name('e-prescription.advice.edit');
				Route::post('/update/{id}','Backend\EPrescriptionSetupController@adviceUpdate')->name('e-prescription.advice.update');
				Route::post('/delete','Backend\EPrescriptionSetupController@adviceDelete')->name('e-prescription.advice.delete');

			});
			Route::prefix('medicine')->group(function(){
				//Medicine Category
				Route::get('/category/view','Backend\EPrescriptionSetupController@medicineCategoryView')->name('e-prescription.medicine.category.view');
				Route::get('/category/add','Backend\EPrescriptionSetupController@medicineCategoryAdd')->name('e-prescription.medicine.category.add');
				Route::post('/category/store','Backend\EPrescriptionSetupController@medicineCategoryStore')->name('e-prescription.medicine.category.store');
				Route::get('/category/edit/{id}','Backend\EPrescriptionSetupController@medicineCategoryEdit')->name('e-prescription.medicine.category.edit');
				Route::post('/category/update/{id}','Backend\EPrescriptionSetupController@medicineCategoryUpdate')->name('e-prescription.medicine.category.update');
				Route::post('/category/delete','Backend\EPrescriptionSetupController@medicineCategoryDelete')->name('e-prescription.medicine.category.delete');
				//Product
				Route::get('/product/view','Backend\EPrescriptionSetupController@productView')->name('e-prescription.product.view');
				Route::get('/product/add','Backend\EPrescriptionSetupController@productAdd')->name('e-prescription.product.add');
				Route::post('/product/store','Backend\EPrescriptionSetupController@productStore')->name('e-prescription.product.store');
				Route::get('/product/edit/{id}','Backend\EPrescriptionSetupController@productEdit')->name('e-prescription.product.edit');
				Route::post('/product/update/{id}','Backend\EPrescriptionSetupController@productUpdate')->name('e-prescription.product.update');
				Route::post('/product/delete','Backend\EPrescriptionSetupController@productDelete')->name('e-prescription.product.delete');
			});
			Route::prefix('prescription')->group(function(){
				//Prescription
				Route::get('/view','Backend\EPrescriptionSetupController@prescriptionView')->name('e-prescription.view');
				Route::get('/add','Backend\EPrescriptionSetupController@prescriptionAdd')->name('e-prescription.add');
				Route::post('/store','Backend\EPrescriptionSetupController@prescriptionStore')->name('e-prescription.store');
				Route::get('/edit/{id}','Backend\EPrescriptionSetupController@prescriptionEdit')->name('e-prescription.edit');
				Route::post('/update/{id}','Backend\EPrescriptionSetupController@prescriptionUpdate')->name('e-prescription.update');
				Route::post('/delete','Backend\EPrescriptionSetupController@prescriptionDelete')->name('e-prescription.delete');

			});
		});

		Route::get('get-category','Backend\DefaultController@getCategory')->name('get-category');
		Route::get('/get-district-master','Backend\DefaultController@getDistrictMaster')->name('default.get-district-master');
		
	});
});


