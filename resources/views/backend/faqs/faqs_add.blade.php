@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>
          @if(@$editData)
          Update FAQ
          @else
          Add FAQ
          @endif 
          <a class="btn btn-sm btn-success float-right" href="{{route('faqs.view')}}"><i class="fa fa-list"></i> FAQ List</a></h5>
      </div>

      <!-- Form Start-->
        <form method="post" action="{{!empty($editData->id) ? route('faqs.update',$editData->id) : route('faqs.store')}}" id="myForm">
          {{csrf_field()}}
          <div class="card-body">
            <div class="show_module_more_event">
              <div class="form-row">
                
                <div class="form-group col-md-2">
                  <label class="control-label">Serial No</label>
                  <input type="number" name="serial" id="serial" class="form-control form-control-sm" value="{{@$editData->serial}}" placeholder="Enter serial">
                </div>

                <div class="form-group col-md-10">
                  <label class="control-label">Question</label>
                  <input type="text" name="question" id="question" class="form-control form-control-sm" value="{{@$editData->question}}" placeholder="Enter Question">
                </div>

                <div class="form-group col-md-12">
                  <label class="control-label">Answer</label>
                  <textarea name="answer" id="answer" class="form-control form-control-sm" rows="5" placeholder="Enter Answer">{{@$editData->answer}}</textarea>
                </div>

              </div>
            </div>
              
            <button type="submit" class="btn btn-success btn-sm">{{(@$editData) ? 'Update' : 'Submit'}}</button>
          </div>
        </form>
        <!--Form End-->

    </div>
  </div>

<script>
    $(document).ready(function(){
      $('#myForm').validate({
        errorClass:'text-danger',
          validClass:'text-success',
          rules : {
              'question' : {
                  required : true,
              },
              'answer' : {
                  required : true,
              },
          },
          messages : {

          }
      });
    });
</script>

@endsection
