@extends('backend.layouts.master')
@section('content')
<link href="{{asset('public/backend/pike/plugins/jstree/style.css')}}" rel="stylesheet" type="text/css"/>
<script src="{{asset('public/backend/pike/plugins/jstree/jstree.js')}}"></script>

<style type="text/css">
  .select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 39px;
    user-select: none;
    -webkit-user-select: none;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 28px;
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 35px;
    position: absolute;
    top: 1px;
    right: 1px;
    width: 20px;
}
</style>

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
          <h3>Menu Permission</h3>
      </div>
        <div class="card-body">
        <form id="permission" class="form-horizontal" action="" method="get">
          <input id="jsondata" type="hidden" value=""> 
          <div class="form-group row">
            <div class="col-sm-4">
              <label class="control-label">User Role<span class="required">*</span></label>
              <select id="user_role" name="user_role" class="form-control form-control-sm select2">
                <option value="">Select Role</option>
                @foreach($role as $r)
                <option {{(request()->user_role==$r->id)?'selected':''}} value="{{$r->id}}">{{$r->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-sm-4">
              <label class="control-label">Module List</label>
              <select name="menu_id[]" class="form-control form-control-sm select2" id="menu_id" multiple="multiple">
                <option value="">Select Module</option>
                @foreach($parent_menuall as $m)
                <option value="{{$m->id}}" {{(request()->menu_id)?((in_array($m->id, request()->menu_id))?("selected"):""):''}}>{{$m->name}}</option>                 
                @endforeach
              </select>
            </div>           
            <div class="col-sm-3 mt-auto">              
              <button type="submit" class="btn btn-info" style="margin-top:28px">
                <i class="ion-search"></i> Search</button>             
              </div>
            </div>       
          </form>
        </div>
      </div>
      <br>
      @if(isset($allMenu)&& !empty($allMenu))
      <div id="deleteifchangeselectoption">
        <div class="card">
          <div class="card-header">       
            <h3><i class="fa fa-folder-open-o"></i> Add Permission</h3>      
          </div>
          <div class="card-body">
            <div class="checkboxesTree">         
              <ul>
                @foreach($allMenu as $parent)
                @if($parent['child'])
                <li id="111&{{$parent['id']}}&{{$parent['route']}}&{{$parent['menu_from']}}" data-jstree='{"opened":true}'>{{$parent['name']}}
                  @foreach($parent['child'] as $parent_child)
                  @if($parent_child['child'])
                  <ul>
                    <li id="222&{{$parent_child['id']}}&{{$parent_child['route']}}&{{$parent_child['menu_from']}}" data-jstree='{"opened":true}'>{{$parent_child['name']}}
                      <ul>
                        @foreach($parent_child['child'] as $parent_child_child)
                        @if(@$parent_child_child['child'])
                          <li id="333&{{$parent_child_child['id']}}&{{$parent_child_child['route']}}&{{$parent_child_child['menu_from']}}" data-jstree='{"opened":true}'>{{$parent_child_child['name']}}
                            <ul>
                              @foreach($parent_child_child['child'] as $parent_child_child_child)
                              @if(@$parent_child_child_child['child'])
                              @else
                              <li id="444&{{$parent_child_child_child['id']}}&{{$parent_child_child_child['route']}}&{{$parent_child_child_child['menu_from']}}" data-jstree='{"opened":true}'>{{$parent_child_child_child['name']}}
                                <ul>
                                  @foreach($parent_child_child_child['menu_route'] as $parent_child_child_child_menu_route) 
                                  <li id="555&{{$parent_child_child_child_menu_route['id']}}&{{$parent_child_child_child_menu_route['route']}}&{{$parent_child_child_child_menu_route['menu_from']}}" data-jstree='{"selected":{{($parent_child_child_child_menu_route["permission"])?("true"):"false"}},"icon":"fa fa-user"}'>{{$parent_child_child_child_menu_route['name']}}</li>
                                  @endforeach
                                </ul>
                              </li>
                              @endif
                              @endforeach
                            </ul>
                          </li>
                        @else
                        <li id="666&{{$parent_child_child['id']}}&{{$parent_child_child['route']}}&{{$parent_child_child['menu_from']}}" data-jstree='{"opened":true}'>{{$parent_child_child['name']}}
                          <ul>
                            @foreach($parent_child_child['menu_route'] as $parent_child_child_menu_route) 
                            <li id="777&{{$parent_child_child_menu_route['id']}}&{{$parent_child_child_menu_route['route']}}&{{$parent_child_child_menu_route['menu_from']}}" data-jstree='{"selected":{{($parent_child_child_menu_route["permission"])?("true"):"false"}},"icon":"fa fa-user"}'>{{$parent_child_child_menu_route['name']}}</li>
                            @endforeach
                          </ul>
                        </li>
                        @endif
                        @endforeach
                      </ul>
                    </li>
                  </ul>
                  @else
                  <ul>
                    <li id="888&{{$parent_child['id']}}&{{$parent_child['route']}}&{{$parent_child['menu_from']}}" data-jstree='{"opened":true}'>{{$parent_child['name']}}
                      <ul>
                        @foreach($parent_child['menu_route'] as $parent_child_menu_route) 
                        <li id="999&{{$parent_child_menu_route['id']}}&{{$parent_child_menu_route['route']}}&{{$parent_child_menu_route['menu_from']}}" data-jstree='{"selected":{{($parent_child_menu_route["permission"])?("true"):"false"}},"type":"file"}'>{{$parent_child_menu_route['name']}}</li>
                        @endforeach
                      </ul>
                    </li>
                  </ul>
                  @endif
                  @endforeach
                </li>
                @else
                <li id="1010&{{$parent['id']}}&{{$parent['route']}}&{{$parent['menu_from']}}" data-jstree='{"opened":true}'>{{$parent['name']}}
                  <ul>
                    @foreach($parent['menu_route'] as $parent_menu_route) 
                    <li id="1212&{{$parent_menu_route['id']}}&{{$parent_menu_route['route']}}&{{$parent_menu_route['menu_from']}}" data-jstree='{"selected":{{($parent_menu_route["permission"])?("true"):"false"}},"icon":"fa fa-user"}'>{{$parent_menu_route['name']}}</li>
                    @endforeach
                  </ul>
                </li>
                @endif
                @endforeach
              </ul> 
            </div>
          </div>       
        </div>
        <div class="card">
          <div class="card-body">
            <button id="add" class="btn btn-info btn-sm"><i class="ion-upload"></i> Add Menu Permission</button>
          </div>      
        </div> 
      </div>
      @endif 
      </div>
    </div>
  </div>
<!--End page content-->
<!--Bootstrap Modal-->
</div>

<style>
    .preload{
      position:fixed;
      top: 0;
      left:0;
      height:100vh;
      width: 100vw;
      display:flex;
      justify-content:center;
      align-items: center;
      background:rgba(35, 35, 35, 0.8);
    }
  </style>
  <div class="preload">
    <img src="{{url('public/pike/backend/images/loading/loading.gif')}}" class="" alt="Error">
  </div>

  <script type="text/javascript">
    $(function(){
      $('.preload').hide();
      $('#permission').validate({
        errorClass:'text-danger',
        validClass:'text-success',
        rules:{
          user_role:{
            required: true
          }        
        },
        messages:{
          user_role:{
            required: "Please select a role."
          }        
        } 
      });
    });
  </script>

  <script type="text/javascript">
    $(function() {
      var menu='';
      $('.checkboxesTree').on('changed.jstree', function(e, data) {
        var i, j, r = [];
        nodesOnSelectedPath = [...data.selected.reduce(function (acc, nodeId) {
          var node = data.instance.get_node(nodeId);
          return new Set([...acc, ...node.parents, node.id]);
        }, new Set)];
        menu = nodesOnSelectedPath.join(',');
        $('#jsondata').val(menu); 
        console.log(menu);
      });
    });
  </script>
  <script type="text/javascript">
    $(function(){
      $('#add').on('click',function(){
        $('.preload').show();
        var url="{{route('user.permission.store')}}";
        var role_id="{{request()->user_role}}";
        var menu_id=$('#menu_id').val();
        var jsondata=$('#jsondata').val();        
        if(menu_id){
          $.ajax({
            'url':url,
            'type':'post',
            'data':{_token:"{{csrf_token()}}",jsondata:jsondata,role_id:role_id,menu_id:menu_id},
            success:function(response){
              if(response.status=='success'){
                $('.preload').hide();
                window.location.href="{{route('user.permission')}}";
              }
            }
          });
        }else{
          $('.preload').hide();   
          $.notify("Permission doesn't select","error");
        }     
      });
    });
  </script>
  <script type="text/javascript">
    $(document).on('change','#user_role,#menu_id',function(){
      $('#deleteifchangeselectoption').remove();
    });
  </script>


<script type="text/javascript">
    $(document).ready(function() {
        $('.checkboxesTree').jstree({
            'core' : {
                'themes' : {
                    'responsive': false
                }
            },

            'types' : {
                'default' : {
                    'icon' : 'fa fa-file-text-o'
                },
                'file' : {
                    'icon' : 'fa fa-file-text'
                }
            },

            'plugins' : ['types', 'checkbox']
        });
    });
</script>
@endsection