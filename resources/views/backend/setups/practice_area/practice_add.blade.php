@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>
          @if(@$editData)
          Update Practice Area
          @else
          Add Practice Area
          @endif 
          <a class="btn btn-sm btn-success float-right" href="{{route('practice-area.view')}}"><i class="fa fa-list"></i> Practice Area List</a></h5>
      </div>

      <!-- Form Start-->
        <form method="post" action="{{!empty($editData->id) ? route('practice-area.update',$editData->id) : route('practice-area.store')}}" id="myForm">
          {{csrf_field()}}
          <div class="card-body">
            <div class="show_module_more_event">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label class="control-label">Practice Area Name</label>
                  <input type="text" name="name" id="name" class="form-control form-control-sm" value="{{@$editData->name}}" placeholder="Practice Area Name">
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
              'name' : {
                  required : true,
              },
          },
          messages : {

          }
      });
    });
</script>

@endsection
