<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Faq;
use Auth;

class FaqController extends Controller
{
    // ১. FAQ View List
    public function view()
    {
        $data['allData'] = Faq::orderBy('serial', 'asc')->get();

        return view('backend.faqs.faqs_view', $data);
    }

    // ২. FAQ Add Form
    public function add()
    {
        return view('backend.faqs.faqs_add');
    }

    // ৩. FAQ Store
    public function store(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required',
            // 'meta_title' => 'required|string|max:255',
            // 'meta_description' => 'required|string',
            // 'meta_keyword' => 'required|string',
        ]);

        $data = new Faq();
        $data->serial = $request->serial;
        $data->question = $request->question;
        $data->answer = $request->answer;
        // $data->meta_title = $request->meta_title;
        // $data->meta_description = $request->meta_description;
        // $data->meta_keyword = $request->meta_keyword;
        $data->created_by = Auth::user()->id ?? null;
        $data->save();

        return redirect()->route('faqs.view')
            ->with('success', 'Data Inserted successfully');
    }

    // ৪. FAQ Edit
    public function edit($id)
    {
        $data['editData'] = Faq::findOrFail($id);

        return view('backend.faqs.faqs_add', $data);
    }

    // ৫. FAQ Update
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required',
            // 'meta_title' => 'required|string|max:255',
            // 'meta_description' => 'required|string',
            // 'meta_keyword' => 'required|string',
        ]);

        $data = Faq::findOrFail($id);
        $data->serial = $request->serial;
        $data->question = $request->question;
        $data->answer = $request->answer;
        // $data->meta_title = $request->meta_title;
        // $data->meta_description = $request->meta_description;
        // $data->meta_keyword = $request->meta_keyword;
        $data->updated_by = Auth::user()->id ?? null;
        $data->save();

        return redirect()->route('faqs.view')
            ->with('success', 'Data Updated successfully');
    }

    // ৬. FAQ Delete
    public function delete(Request $request)
    {
        $data = Faq::findOrFail($request->id);
        $data->delete();

        return redirect()->route('faqs.view')
            ->with('success', 'FAQ deleted successfully!');
    }
}
