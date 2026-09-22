@extends('backend.layouts.master')
@section('content')
<style>
  .card_body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 8px !important;
  }
  .custom_card{
    margin-top: 5px !important;
  }
  .add_copy{
    padding-top: 32px;
  }
</style>
  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          @if(isset($editData))
            Prescription Update
          @else
            Prescription Add
          @endif
          <a href="{{ route('e-prescription.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Prescription List</i></a>
        </h3>
      </div>
    </div>
  </div>

  <div class="col-md-12">
    <form>
      <div class="card custom_card">
        <div class="card-body card_body">
          <div class="form-row">
            <div class="form-group col-md-3">
              <label>Patient ID/Mobile No <span style="color:red;">*</span></label>
              <input type="text" name="mobile" class="form-control"> 
            </div>
            <div class="form-group col-md-4">
              <label>Patient Name <span style="color:red;">*</span></label>
              <input type="text" name="patient_name" class="form-control"> 
            </div>
            <div class="form-group col-md-2">
              <label>Age <span style="color:red;">*</span></label>
              <input type="text" name="patient_name" class="form-control"> 
            </div>
            <div class="form-group col-md-3">
              <label>Previous Date <span style="color:red;">*</span></label>
              <input type="text" name="previous_date" class="singledatepicker form-control" placeholder="DD-MM-YYYY" autocomplete="off"> 
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Left Side Form -->
        <div class="col-md-4">
          <!-- Chief Complients Part -->
          <div class="card custom_card">
            <div class="card-body card_body">
              <div class="form-row">
                <div class="form-group col-md-10">
                  <label>Chief Complients <span style="color:red;">*</span></label>
                  <select id="Chief_Complients" class="form-control select2">
                    @foreach($cheif_compliant as $compliant)
                    <option value="{{$compliant->name}} ,">{{$compliant->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-1 add_copy">
                  <input id="copyChiefComplients" type="button" value="Add" />
                </div>
                <div class="form-group col-md-12">
                  <textarea name="cheif_compliant" id="cheif_compliant_output" style="width: 100%;height: 100px;"></textarea>
                </div>
              </div>
            </div>
          </div>
          <!-- History Part -->
          <div class="card custom_card">
            <div class="card-body card_body">
              <div class="form-row">
                <div class="form-group col-md-12">
                <label>History <span style="color:red;">*</span></label>
                  <textarea name="history" style="width: 100%;height: 100px;"></textarea>
                </div>
              </div>
            </div>
          </div>
          <!-- Additional Information Part -->
          <div class="card custom_card">
            <div class="card-body card_body">
              <div class="form-row">
                <div class="form-group col-md-12">
                <label>Additional Information <span style="color:red;">*</span></label>
                  <textarea name="addition_information" style="width: 100%;height: 100px;"></textarea>
                </div>
              </div>
            </div>
          </div>
          <!-- Examination -->
          <div class="card custom_card">
            <div class="card-body card_body">
              <div class="form-row">
                <div class="form-group col-md-10">
                  <label>On Examination <span style="color:red;">*</span></label>
                  <select id="On_Examination" class="form-control select2">
                    @foreach($examinations as $exam)
                    <option value="{{$exam->name}} ,">{{$exam->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-1 add_copy">
                  <input id="copyExamination" type="button" value="Add" />
                </div>
                <div class="form-group col-md-12">
                  <textarea name="examination" id="examination_output" style="width: 100%;height: 100px;"></textarea>
                </div>
              </div>
            </div>
          </div>
          <!-- Diagnosis -->
          <div class="card custom_card">
            <div class="card-body card_body">
              <div class="form-row">
                <div class="form-group col-md-10">
                  <label>Diagnosis <span style="color:red;">*</span></label>
                  <select id="Diagnosis" class="form-control select2">
                    @foreach($diagnosises as $diag)
                    <option value="{{$diag->name}} ,">{{$diag->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-1 add_copy">
                  <input id="copyDiagnosis" type="button" value="Add" />
                </div>
                <div class="form-group col-md-12">
                  <textarea name="diagnosis" id="diagnosis_output" style="width: 100%;height: 100px;"></textarea>
                </div>
              </div>
            </div>
          </div>
          <!-- Investigation Advice -->
          <div class="card custom_card">
            <div class="card-body card_body">
              <div class="form-row">
                <div class="form-group col-md-10">
                  <label>Investigation Advice <span style="color:red;">*</span></label>
                  <select id="Investigation_Advice" class="form-control select2">
                    @foreach($investigation_advices as $advc)
                    <option value="{{$advc->name}} ,">{{$advc->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-1 add_copy">
                  <input id="copyInvestigation" type="button" value="Add" />
                </div>
                <div class="form-group col-md-12">
                  <textarea name="investigation_advice" id="investigation_output" style="width: 100%;height: 100px;"></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Right Side Form -->
        <div class="col-md-8">
          <!-- Pulse Part -->
          <div class="card custom_card">
            <div class="card-body card_body">
              <div class="form-row">
                <div class="form-group col-md-2">
                  <label>Pulse/min <span style="color:red;">*</span></label>
                  <input type="text" name="pulse_per_minute" class="form-control" placeholder="76">
                </div>
                <div class="form-group col-md-2">
                  <label>BP/mmHg <span style="color:red;">*</span></label>
                  <input type="text" name="bp_mmhg" class="form-control" placeholder="120/80">
                </div>
                <div class="form-group col-md-2">
                  <label>Tempareture <span style="color:red;">*</span></label>
                  <input type="text" name="tempareture" class="form-control" placeholder="104 F">
                </div>
                <div class="form-group col-md-2">
                  <label>Weight <span style="color:red;">*</span></label>
                  <input type="text" name="weight" class="form-control" placeholder="104">
                </div>
                <div class="form-group col-md-2">
                  <label>Height <span style="color:red;">*</span></label>
                  <input type="text" name="height" class="form-control" placeholder="120/80">
                </div>
                <div class="form-group col-md-2">
                  <label>Oxygen Level <span style="color:red;">*</span></label>
                  <input type="text" name="oxygen_level" class="form-control" placeholder="90%">
                </div>
              </div>
            </div>
          </div>
          <!-- Advice -->
          <div class="card custom_card">
            <div class="card-body card_body">
              <div class="form-row">
                <div class="form-group col-md-11">
                  <label>Advice <span style="color:red;">*</span></label>
                  <select id="Advice" class="form-control select2">
                    @foreach($advices as $addvc)
                    <option value="{{$addvc->name}} ,">{{$addvc->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-1 add_copy">
                  <input id="copyAdvice" type="button" value="Add" />
                </div>
                <div class="form-group col-md-12">
                  <textarea name="advice" id="advice_output" style="width: 100%;height: 100px;"></textarea>
                </div>
              </div>
            </div>
          </div>
          <!-- Medicine -->
          <div class="card custom_card">
            <div class="card-body card_body">
              <div class="form-row">
                <div class="form-group col-md-9">
                  <label>Medicine Name <span style="color:red;">*</span></label>
                  <select id="product" class="form-control select2">
                    @foreach($products as $product)
                    <option>{{@$product['medicine_category']['name']}} - {{$product->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label>Morning <span style="color:red;">*</span></label>
                  <input type="text" class="form-control form-control-sm" id="morning">
                </div>
                <div class="form-group col-md-3">
                  <label>Evening <span style="color:red;">*</span></label>
                  <input type="text" class="form-control form-control-sm" id="evening">
                </div>
                <div class="form-group col-md-3">
                  <label>Night <span style="color:red;">*</span></label>
                  <input type="text" class="form-control form-control-sm" id="night">
                </div>
                <div class="form-group col-md-3">
                  <label>Time <span style="color:red;">*</span></label>
                  <select id="time" class="form-control form-control-sm">
                    <option value="None">None</option>
                    <option value="Befor Meal">Befor Meal</option>
                    <option value="After Meal">After Meal</option>
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label>Duration <span style="color:red;">*</span></label>
                  <input type="text" class="form-control form-control-sm" id="duration">
                </div>
                <div class="form-group col-md-10">
                  <label>Remarks <span style="color:red;">*</span></label>
                  <input type="text" class="form-control form-control-sm" id="remarks">
                </div>
                <div class="form-group col-sm-2" style="padding-top:30px">
                  <i id="search" class="btn btn-primary fa fa-plus-circle addeventmore"> Add Item</i>
                </div>
              </div>
            </div>
          </div>
          <!-- Medicin Table -->
          <div class="card border-info custom_card">
            <div class="card-body">
              <table class="table-sm table-bordered" width="100%">
                <thead>
                  <tr class="text-center">
                    <th>Details In All</th>
                    <th width="5%">Action</th>
                  </tr>
                </thead>
                <tbody id="addRow" class="addRow">

                </tbody>
              </table>
            </div>
          </div>
          <!-- Follow Up -->
          <div class="card custom_card">
            <div class="card-body card_body">
              <div class="form-row">
                <div class="form-group col-md-5">
                  <label>Follow Up (After) <span style="color:red;">*</span></label>
                  <div class="input-group mb-3">
                    <input type="text" name="after" class="form-control input-group-text" style="background: #fff;text-align: left;">
                    <div class="input-group-append">
                      <select name="follow_up" class="form-control">
                        <option value="Day">Day</option>
                        <option value="Month">Month</option>
                        <option value="Year">Year</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Follow Up -->
          <div class="card custom_card">
            <div class="card-body card_body">
              <div class="form-row">
                <div class="form-group col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Save Prescription</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

<script id="document-template" type="text/x-handlebars-template">
  <tr class="delete_add_more_item text-center" id="delete_add_more_item">
    <td>
      <input type="hidden" name="product[]" value="@{{product}}">
      <input type="hidden" name="morning[]" value="@{{morning}}">
      <input type="hidden" name="evening[]" value="@{{evening}}">
      <input type="hidden" name="night[]" value="@{{night}}">
      <input type="hidden" name="time[]" value="@{{time}}">
      <input type="hidden" name="duration[]" value="@{{duration}}">
      <input type="hidden" name="remarks[]" value="@{{remarks}}">
      @{{product}} - @{{morning}} + @{{evening}} + @{{night}} - @{{time}} - @{{duration}} <br>
      @{{remarks}}
    </td>
    <td>
      <i class="btn btn-danger fa fa-close removeeventmore"> </i>
    </td>
  </tr>
</script>

<!-- extra_add_exist_item -->
<script type="text/javascript">
  $(document).ready(function () {
    $(document).on("click",".addeventmore", function () {
      var product  = $('#product').find('option:selected').text();
      var morning = $('#morning').val();
      var evening = $('#evening').val();
      var night = $('#night').val();
      var time  = $('#time').find('option:selected').text();
      var duration = $('#duration').val();
      var remarks = $('#remarks').val();

      var source = $("#document-template").html();
      var template = Handlebars.compile(source);
      var data = {product:product,morning:morning,evening:evening,night:night,time:time,duration:duration,remarks:remarks};
      var html = template(data);
      $("#addRow").append(html);
    });

    $(document).on("click", ".removeeventmore", function (event) {
      $(this).closest(".delete_add_more_item").remove();
      totalAmountPrice();      
    });

  });
</script>

<script>
  // Chief Complients
  $("#copyChiefComplients").click(function(){
    var selected = $("#Chief_Complients").val();
    $("#cheif_compliant_output").append(selected);
  });
  // On Examination
  $("#copyExamination").click(function(){
    var selected = $("#On_Examination").val();
    $("#examination_output").append(selected);
  });
  // Diagnosis
  $("#copyDiagnosis").click(function(){
    var selected = $("#Diagnosis").val();
    $("#diagnosis_output").append(selected);
  });
  // Investigation Advice
  $("#copyInvestigation").click(function(){
    var selected = $("#Investigation_Advice").val();
    $("#investigation_output").append(selected);
  });
  // Advice
  $("#copyAdvice").click(function(){
    var selected = $("#Advice").val();
    $("#advice_output").append(selected);
  });
</script>

@endsection