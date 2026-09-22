@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3>
          @if(isset($editData))
          Edit Bank
          @else
          Add Bank
          @endif
          <a class="btn btn-success float-right btn-sm" href="{{route('setup.bank.view')}}"><i class="fa fa-list"></i> Bank List</a>
        </h3>
      </div>

      <div class="card-body">
        <form method="post" action="{{(@$editData)?route('setup.bank.update',$editData->id):route('setup.bank.store')}}" id="myForm" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Bank Name</label>
              <input type="text" name="name" value="{{@$editData->name}}" class="form-control" placeholder="Write Bank Name">
              <font color="red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
            </div>
            <div class="form-group col-md-6">
              <label>Account Name</label>
              <input type="text" name="account_name" value="{{@$editData->account_name}}" class="form-control" placeholder="Write Bank Account Name">
              <font color="red">{{($errors->has('account_name'))?($errors->first('account_name')):''}}</font>
            </div>
            <div class="form-group col-md-6">
              <label>Account No</label>
              <input type="text" name="account_no" value="{{@$editData->account_no}}" class="form-control" placeholder="Write Bank Account No">
              <font color="red">{{($errors->has('account_no'))?($errors->first('account_no')):''}}</font>
            </div>
            <div class="form-group col-md-6">
              <label>Branch</label>
              <input type="text" name="branch" value="{{@$editData->branch}}" class="form-control" placeholder="Write Bank Branch Name">
              <font color="red">{{($errors->has('branch'))?($errors->first('branch')):''}}</font>
            </div>
            <div class="form-group col-md-6">
              <button type="submit" class="btn btn-primary">{{(@$editData)?"Update":"Submit"}}</button>
            </div>
          </div>
        </form>
      </div><!-- /.card-body -->

    </div>
  </div>

<script type="text/javascript">
    $(document).ready(function () {
      $('#myForm').validate({
        rules: {
          name: {
            required: true,
          },
        },
        messages: {
          
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
  </script>
@endsection