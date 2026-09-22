<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Image;
use App\Model\Advice;
use App\Model\ChiefComplaint;
use App\Model\Diagnosis;
use App\Model\Examination;
use App\Model\InvestigationAdvice;
use App\Model\MedicineCategory;
use App\Model\Product;


class EPrescriptionSetupController extends Controller
{
    //Prescription

    public function prescriptionView(){
        $data['allData'] = Advice::orderBy('id','desc')->get();
        return view('backend.e-prescription.prescription.prescription_view',$data);
    }

    public function prescriptionAdd(){
        $data['advices'] = Advice::all();
        $data['cheif_compliant'] = ChiefComplaint::all();
        $data['diagnosises'] = Diagnosis::all();
        $data['examinations'] = Examination::all();
        $data['investigation_advices'] = InvestigationAdvice::all();
        $data['products'] = Product::all();
        return view('backend.e-prescription.prescription.prescription_add',$data);
    }

    public function prescriptionStore(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:advice,name'
        ]);

        $data = new Advice();
        $data->name = $request->name;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('e-prescription.advice.view')->with('success','Data added successfully!');
    }

    public function prescriptionEdit($id){
        $data['editData'] = Advice::find($id);
        return view('backend.e-prescription.prescription.prescription_add',$data);
    }

    public function prescriptionUpdate(Request $request,$id){
        $data = Advice::find($id);
        $this->validate($request,[
            'name' => 'required|unique:advice,name,'.$data->id
        ]);
        $data->name = $request->name;
        $data->updated_by = Auth::user()->id;
        $data->save();

        return redirect()->route('e-prescription.advice.view')->with('success','Data updated successfully!');
    }

    public function prescriptionDelete(Request $request){
        $data = Advice::find($request->id);
        $data->delete();
        return redirect()->back();
    }

    //Advice

    public function adviceView(){
        $data['allData'] = Advice::orderBy('id','desc')->get();
        return view('backend.e-prescription.advice.advice_view',$data);
    }

    public function adviceAdd(){
        return view('backend.e-prescription.advice.advice_add');
    }

    public function adviceStore(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:advice,name'
        ]);

        $data = new Advice();
        $data->name = $request->name;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('e-prescription.advice.view')->with('success','Data added successfully!');
    }

    public function adviceEdit($id){
        $data['editData'] = Advice::find($id);
        return view('backend.e-prescription.advice.advice_add',$data);
    }

    public function adviceUpdate(Request $request,$id){
        $data = Advice::find($id);
        $this->validate($request,[
            'name' => 'required|unique:advice,name,'.$data->id
        ]);
        $data->name = $request->name;
        $data->updated_by = Auth::user()->id;
        $data->save();

        return redirect()->route('e-prescription.advice.view')->with('success','Data updated successfully!');
    }

    public function adviceDelete(Request $request){
        $data = Advice::find($request->id);
        $data->delete();
        return redirect()->back();
    }

    //Chief Complients
    
    public function chiefComplientView(){
        $data['allData'] = ChiefComplaint::orderBy('id','desc')->get();
        return view('backend.e-prescription.chief_complient.complient_view',$data);
    }

    public function chiefComplientAdd(){
        return view('backend.e-prescription.chief_complient.complient_add');
    }

    public function chiefComplientStore(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:chief_complaints,name'
        ]);

        $data = new ChiefComplaint();
        $data->name = $request->name;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('e-prescription.chief.complient.view')->with('success','Data added successfully!');
    }

    public function chiefComplientEdit($id){
        $data['editData'] = ChiefComplaint::find($id);
        return view('backend.e-prescription.chief_complient.complient_add',$data);
    }

    public function chiefComplientUpdate(Request $request,$id){
        $data = ChiefComplaint::find($id);
        $this->validate($request,[
            'name' => 'required|unique:chief_complaints,name,'.$data->id
        ]);
        $data->name = $request->name;
        $data->updated_by = Auth::user()->id;
        $data->save();

        return redirect()->route('e-prescription.chief.complient.view')->with('success','Data updated successfully!');
    }

    public function chiefComplientDelete(Request $request){
        $data = ChiefComplaint::find($request->id);
        $data->delete();
        return redirect()->back();
    }


    //Examination
    
    public function examinationView(){
        $data['allData'] = Examination::orderBy('id','desc')->get();
        return view('backend.e-prescription.examination.examination_view',$data);
    }

    public function examinationAdd(){
        return view('backend.e-prescription.examination.examination_add');
    }

    public function examinationStore(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:examinations,name'
        ]);

        $data = new Examination();
        $data->name = $request->name;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('e-prescription.examination.view')->with('success','Data added successfully!');
    }

    public function examinationEdit($id){
        $data['editData'] = Examination::find($id);
        return view('backend.e-prescription.examination.examination_add',$data);
    }

    public function examinationUpdate(Request $request,$id){
        $data = Examination::find($id);
        $this->validate($request,[
            'name' => 'required|unique:examinations,name,'.$data->id
        ]);
        $data->name = $request->name;
        $data->updated_by = Auth::user()->id;
        $data->save();

        return redirect()->route('e-prescription.examination.view')->with('success','Data updated successfully!');
    }

    public function examinationDelete(Request $request){
        $data = Examination::find($request->id);
        $data->delete();
        return redirect()->back();
    }

    //Diagnosis
    
    public function diagnosisView(){
        $data['allData'] = Diagnosis::orderBy('id','desc')->get();
        return view('backend.e-prescription.diagnosis.diagnosis_view',$data);
    }

    public function diagnosisAdd(){
        return view('backend.e-prescription.diagnosis.diagnosis_add');
    }

    public function diagnosisStore(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:diagnoses,name'
        ]);

        $data = new Diagnosis();
        $data->name = $request->name;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('e-prescription.diagnosis.view')->with('success','Data added successfully!');
    }

    public function diagnosisEdit($id){
        $data['editData'] = Diagnosis::find($id);
        return view('backend.e-prescription.diagnosis.diagnosis_add',$data);
    }

    public function diagnosisUpdate(Request $request,$id){
        $data = Diagnosis::find($id);
        $this->validate($request,[
            'name' => 'required|unique:diagnoses,name,'.$data->id
        ]);
        $data->name = $request->name;
        $data->updated_by = Auth::user()->id;
        $data->save();

        return redirect()->route('e-prescription.diagnosis.view')->with('success','Data updated successfully!');
    }

    public function diagnosisDelete(Request $request){
        $data = Diagnosis::find($request->id);
        $data->delete();
        return redirect()->back();
    }

    //Investigation Advice
    
    public function investigationAdviceView(){
        $data['allData'] = InvestigationAdvice::orderBy('id','desc')->get();
        return view('backend.e-prescription.investigatio.investigation_advice_view',$data);
    }

    public function investigationAdviceAdd(){
        return view('backend.e-prescription.investigatio.investigation_advice_add');
    }

    public function investigationAdviceStore(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:investigation_advice,name'
        ]);

        $data = new InvestigationAdvice();
        $data->name = $request->name;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('e-prescription.investigation.advice.view')->with('success','Data added successfully!');
    }

    public function investigationAdviceEdit($id){
        $data['editData'] = InvestigationAdvice::find($id);
        return view('backend.e-prescription.investigatio.investigation_advice_add',$data);
    }

    public function investigationAdviceUpdate(Request $request,$id){
        $data = InvestigationAdvice::find($id);
        $this->validate($request,[
            'name' => 'required|unique:investigation_advice,name,'.$data->id
        ]);
        $data->name = $request->name;
        $data->updated_by = Auth::user()->id;
        $data->save();

        return redirect()->route('e-prescription.investigation.advice.view')->with('success','Data updated successfully!');
    }

    public function investigationAdviceDelete(Request $request){
        $data = InvestigationAdvice::find($request->id);
        $data->delete();
        return redirect()->back();
    }

    //Medicine Category
    
    public function medicineCategoryView(){
        $data['allData'] = MedicineCategory::orderBy('id','desc')->get();
        return view('backend.e-prescription.medicine.category_view',$data);
    }

    public function medicineCategoryAdd(){
        return view('backend.e-prescription.medicine.category_add');
    }

    public function medicineCategoryStore(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:medicine_categories,name'
        ]);

        $data = new MedicineCategory();
        $data->name = $request->name;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('e-prescription.medicine.category.view')->with('success','Data added successfully!');
    }

    public function medicineCategoryEdit($id){
        $data['editData'] = MedicineCategory::find($id);
        return view('backend.e-prescription.medicine.category_add',$data);
    }

    public function medicineCategoryUpdate(Request $request,$id){
        $data = MedicineCategory::find($id);
        $this->validate($request,[
            'name' => 'required|unique:medicine_categories,name,'.$data->id
        ]);
        $data->name = $request->name;
        $data->updated_by = Auth::user()->id;
        $data->save();

        return redirect()->route('e-prescription.medicine.category.view')->with('success','Data updated successfully!');
    }

    public function medicineCategoryDelete(Request $request){
        $data = MedicineCategory::find($request->id);
        $data->delete();
        return redirect()->back();
    }

    //Medicine Product
    
    public function productView(){
        $data['allData'] = Product::orderBy('id','desc')->get();
        return view('backend.e-prescription.medicine.product_view',$data);
    }

    public function productAdd(){
        $data['categories'] = MedicineCategory::all();
        return view('backend.e-prescription.medicine.product_add',$data);
    }

    public function productStore(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:products,name'
        ]);

        $data = new Product();
        $data->medicine_category_id = $request->medicine_category_id;
        $data->name = $request->name;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('e-prescription.product.view')->with('success','Data added successfully!');
    }

    public function productEdit($id){
        $data['editData'] = Product::find($id);
        $data['categories'] = MedicineCategory::all();
        return view('backend.e-prescription.medicine.product_add',$data);
    }

    public function productUpdate(Request $request,$id){
        $data = Product::find($id);
        $this->validate($request,[
            'name' => 'required|unique:products,name,'.$data->id
        ]);
        $data->medicine_category_id = $request->medicine_category_id;
        $data->name = $request->name;
        $data->updated_by = Auth::user()->id;
        $data->save();

        return redirect()->route('e-prescription.product.view')->with('success','Data updated successfully!');
    }

    public function productDelete(Request $request){
        $data = Product::find($request->id);
        $data->delete();
        return redirect()->back();
    }
}
