@extends('backend.layouts.master')
@section('content')
<style type="text/css">
  #Iframe-Master-CC-and-Rs {
    max-width: 100%;
    max-height: 1200px; 
    overflow: hidden;
  }

  /* inner wrapper: make responsive */
  .responsive-wrapper {
    position: relative;
    height: 0;    /* gets height from padding-bottom */ 
  }

  .responsive-wrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;

    margin: 0;
    padding: 0;
    border: none;
  }

  /* padding-bottom = h/w as % -- sets aspect ratio */
  .responsive-wrapper-wxh-572x612 {
    padding-bottom: 107%;
  }

  /* general styles */
  .set-border {
    border: 5px inset #4f4f4f;
  }
  .set-box-shadow { 
    -webkit-box-shadow: 4px 4px 14px #4f4f4f;
    -moz-box-shadow: 4px 4px 14px #4f4f4f;
    box-shadow: 4px 4px 14px #4f4f4f;
  }
  .set-padding {
    padding: 40px;
  }
  .set-margin {
    margin: 30px;
  }
  .center-block-horiz {
    margin-left: auto !important;
    margin-right: auto !important;
  }
</style>

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          @if(isset($editData))
          Update Document
          @else
          Add Document
          @endif
          <a class="btn btn-success float-right btn-sm" href="{{route('documents.view')}}"><i class="fa fa-list"></i> Document List</a>
         </h3>
      </div>

      <div class="card-body">
        <form method="post" action="{{(isset($editData))?route('documents.update',$editData->id):route('documents.store')}}" id="myForm" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Title <span style="color:red;font-weight: bold;">*</span> </label>
              <input type="text" name="title" value="{{isset($editData) ? $editData->title : old('title')}}" class="form-control form-control-sm">
            </div>
            
            <div class="form-group col-md-6">
              <label>Sub Title</label>
              <input type="text" name="sub_title" value="{{isset($editData) ? $editData->sub_title : old('sub_title')}}" class="form-control form-control-sm">
            </div>

            <div class="form-group col-md-6">
              <label>Attachment <span style="color:red">(PDF)</span> </label>
              <input type="file" name="pdf_file" id="docfile" class="form-control form-control-sm" accept="application/pdf">
              <font color="red">{{($errors->has('pdf_file'))?($errors->first('pdf_file')):''}}</font>
            </div>

            <div class="form-group col-md-2" style="margin-top: 30px;">
              <button type="submit" class="btn btn-primary btn-sm">{{(isset($editData))?"Update":"Submit"}}</button>
            </div>
          </div>
        </form>
        <div class="row">
          <div class="form-group col-md-12">
            <div id="Iframe-Master-CC-and-Rs" class="set-margin set-padding set-border set-box-shadow center-block-horiz">
              <div class="responsive-wrapper responsive-wrapper-wxh-572x612" style="-webkit-overflow-scrolling: touch; overflow: auto;">
                <iframe id="showImage" src="{{(isset($editData) && $editData->pdf_file) ? asset('uploads/document_files/'.$editData->pdf_file) : asset('uploads/no_image.png')}}"> 
                </iframe>
              </div>
            </div>
          </div>
        </div>

      </div><!-- /.card-body -->
    </div>
  </div>

<!-- jQuery Validation Script -->
<script type="text/javascript">
    $(document).ready(function () {
      $('#myForm').validate({
        ignore : [],
        debug : false,
        rules: {
          title: {
            required: true,
          }
        },
        messages: {
          title: {
            required: "Please enter the title",
          }
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

<!-- Live PDF Preview JS Script -->
<script type="text/javascript">
    $(document).ready(function () {
      $('#docfile').change(function (e) { 
          var file = e.target.files[0];
          if(file){
            var reader = new FileReader();
            reader.onload = function (e) {
              $('#showImage').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
          }
      });
    });
</script>

@endsection
