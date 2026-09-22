@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px">
    <div class="card">
      <div class="card-header">
        <h5>
            @if(@$editData)
            Update District
            @else
            Add District
            @endif 
            <a class="btn btn-sm btn-success float-right" href="{{route('setup.district.view')}}"><i class="fa fa-list"></i> District List</a></h5>
      </div>

      <!-- Form Start-->
        <form method="post" action="{{!empty($editData->id) ? route('setup.district.update',$editData->id) : route('setup.district.store')}}" id="myForm">
          {{csrf_field()}}
          <div class="card-body">
            <div class="show_module_more_event">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label class="control-label">Division Name</label>
                  <select name="division_id" class="form-control form-control-sm">
                    <option value="">Select Division</option>
                    @foreach($divisions as $d)
                    <option value="{{$d->id}}" {{(@$editData->division_id==$d->id)?"selected":""}}>{{$d->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">District Name</label>
                  <input type="text" name="name" id="name" class="form-control form-control-sm" value="{{@$editData->name}}" placeholder="District Name">
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
                'division_id' : {
                    required : true,
                },
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