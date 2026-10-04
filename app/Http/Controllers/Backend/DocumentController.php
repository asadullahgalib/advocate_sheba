<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Document;

class DocumentController extends Controller
{
    // ১. সব ডকুমেন্ট লিস্ট দেখা
    public function view(){
        $data['allData'] = Document::orderBy('id', 'desc')->get();
        // পাথ পরিবর্তন করে backend.documents.document_view করা হয়েছে
        return view('backend.documents.document_view', $data); 
    }

    // ২. নতুন ডকুমেন্ট যোগ করার ফর্ম
    public function add(){
        // পাথ পরিবর্তন করে backend.documents.document_add করা হয়েছে
        return view('backend.documents.document_add'); 
    }

    // ৩. নতুন ডকুমেন্ট ডেটাবেজে সেভ করা
    public function store(Request $request){
        $request->validate([
            'pdf_file' => 'nullable|mimes:pdf|max:10000', 
            'title' => 'required',
        ]);

        $data = new Document();
        $data->title = $request->title;
        $data->sub_title = $request->sub_title;
        $data->created_by = Auth::user()->id;

        // ================= PDF File Upload =================
        if ($request->hasFile('pdf_file')) {
            $file = $request->file('pdf_file');
            $fileName = time() . '_doc.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/document_files/');

            $file->move($destinationPath, $fileName);
            $data->pdf_file = $fileName;
        }

        $data->save();

        return redirect()->route('documents.view')->with('success', 'Document inserted successfully!');
    }

    // ৪. ডকুমেন্ট এডিট ফর্ম (একই ফর্মে ডেটা পাঠানো)
    public function edit($id){
        $data['editData'] = Document::find($id);
        return view('backend.documents.document_add', $data); 
    }

    // ৫. ডকুমেন্ট আপডেট করা
    public function update(Request $request, $id){
        $request->validate([
            'pdf_file' => 'nullable|mimes:pdf|max:10000',
            'title' => 'required',
        ]);
        
        $data = Document::find($id);
        $data->title = $request->title;
        $data->sub_title = $request->sub_title;
        $data->updated_by = Auth::user()->id;

        // ================= PDF Update & Old File Delete =================
        if ($request->hasFile('pdf_file')) {
            $oldFile = public_path('uploads/document_files/' . $data->pdf_file);
            if (file_exists($oldFile) && !empty($data->pdf_file)) {
                @unlink($oldFile);
            }

            $file = $request->file('pdf_file');
            $fileName = time() . '_doc.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/document_files/');

            $file->move($destinationPath, $fileName);
            $data->pdf_file = $fileName;
        }

        $data->save();
        return redirect()->route('documents.view')->with('success', 'Document updated successfully!');
    }

    // ৬. ডকুমেন্ট ডিলিট করা
    public function delete(Request $request){
        $data = Document::find($request->id);

        $pdfPath = public_path('uploads/document_files/' . $data->pdf_file);
        if (file_exists($pdfPath) && !empty($data->pdf_file)) {
            @unlink($pdfPath);
        }

        $data->delete();

        return redirect()->route('documents.view')->with('success', 'Document deleted successfully!');
    }
}
