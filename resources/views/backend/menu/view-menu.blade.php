 @extends('backend.layouts.app')
@section('content')
<style type="text/css">
  .i-style{
        display: inline-block;
        padding: 10px;
        width: 2em;
        text-align: center;
        font-size: 2em;
        vertical-align: middle;
        color: #444;
  }
  .demo-icon{cursor: pointer; }
</style>
<div class="col-xl-12">
	<div class="breadcrumb-holder">
		<h1 class="main-title float-left">Menu List</h1>
		<ol class="breadcrumb float-right">
			<li class="breadcrumb-item"><a href="{{route('dashboard')}}"><strong>Home</strong></a></li>
			<li class="breadcrumb-item active">Menu</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
<div class="container fullbody">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<button id="demo-btn-addrow" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">
					<i class="ion-plus"></i> Add Menu
				</button>
			</div>
			<div class="card-body">
				<table id="datatable" class="table table-sm table-bordered">
					<thead>
						<tr>
							<th style="width:8%" class="text-center">Icon</th>
							<th class="text-center">Name</th>
							<th class="text-center">Parent</th>
							<th class="text-center">Route</th>							
							<th style="width: 18%" class="text-center">Exist Route(optional)</th>
							<th class="text-center">Order</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($menus as  $menu)
						@php 
						if($menu->parent == 0){
							$parent_name = $menu->name;        
						}else{
							$parent = App\Model\Menu::where('id',$menu->parent)->first();
							$parent_name = $parent->name;  
						}
						@endphp
						<tr>
							<td class="text-center"><i class="{{ $menu->icon }}"></i></td>
							<td>
								<span class="text-semibold">{{ $menu->name }}</span>            
								<input class="menuId" type="hidden" value="{{ $menu->id }}" />
							</td>
							<td class="text-center"><span class="{{($menu->parent==0)?'text-success':''}} text-semibold">{{ $parent_name }}</span></td>
							<td class="text-center"><span class="text-semibold">{{ $menu->route }}</span></td>
							<td class="text-center">
								@if($menu->parent!=0)
									@if($menu->add!=Null)
									<span class="badge badge-success">Add</span>
									@endif
									@if($menu->edit!=Null)
									<span class="badge badge-info">Edit</span>
									@endif
									@if($menu->delete!=Null)
									<span class="badge badge-danger">Delete</span>
									@endif
								@else
								<span class="badge badge-warning">Parent Route</span>
								@endif
							</td>
							<td class="text-center"><span class="text-semibold">{{ $menu->sort }}</span></td>
							<td class="text-center">
								<button class="editMenu btn btn-sm btn-success">
									<i class="fa fa-pencil-square-o"></i>
								</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>	
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Create Menu</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<form id="menuForm" action="{{ route('menu.store') }}" method="post" >
				{{ csrf_field()}}
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
								<label class="control-label">Menu Name</label>
								<input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Menu Name" >               
								@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group {{ $errors->has('parent') ? 'has-error' : '' }}">
								<label class="control-label">Menu Type</label>

								<select id="parent" name="parent" class="form-control">
									<option value="">Select Type</option>
									<option value="0">Parent Menu</option>
									@foreach($parentMenu as $pm)
									<option value="{{ $pm->id }}" {{ old('parent') == $pm->id ? 'selected' : '' }} > {{ $pm->name }} </option>
									@endforeach
									@if ($errors->has('parent'))
									<span class="help-block">
										<strong>{{ $errors->first('parent') }}</strong>
									</span>
									@endif
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group {{ $errors->has('parentchield') ? 'has-error' : '' }}">
								<label class="control-label">Sub Menu <small>(if exist)</small></label>

								<select id="parentchield" name="parentchield" class="form-control">
									<option value="">Select Sub Menu</option>
									<option value="0">None</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">
								<label class="control-label">URL(Route Name)</label>
								<input type="text" id="url" name="url" value="{{ old('url') }}" class="form-control" placeholder="Enter Route Name">
								@if ($errors->has('url'))
								<span class="help-block">
									<strong>{{ $errors->first('url') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
								<label class="control-label">Status</label>

								<select id="status" name="status" class="form-control">
									<option value="">Select Status</option>
									<option value="1">Active</option>
									<option value="0">Inactive</option>
								</select>
								@if ($errors->has('status'))
								<span class="help-block">
									<strong>{{ $errors->first('status') }}</strong>
								</span>
								@endif

							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group {{ $errors->has('sort') ? 'has-error' : '' }}">
								<label class="control-label">Sort Order</label>
								<input type="number" id="sort"  value="{{ old('sort') }}" name="sort" class="form-control" placeholder="Enter Sort Number">
								@if ($errors->has('sort'))
								<span class="help-block">
									<strong>{{ $errors->first('sort') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="col-sm-6" id="iconDiv">
							<div class="form-group {{ $errors->has('icon') ? 'has-error' : '' }}">
								<label class="control-label">Icon</label> 
								<input data-toggle="modal" data-target="#iconListModal" data-backdrop="static" data-keyboard="false" type="text" id="icon" name="icon" value="" class="form-control" placeholder="Enter Icon" readonly="readonly">
								@if ($errors->has('icon'))
								<span class="help-block">
									<strong>{{ $errors->first('icon') }}</strong>
								</span>
								@endif
							</div>
						</div>
					</div>
					
					<div class="row">						
						<div class="col-sm-12">
							<div id="permitted_div" class="card">
								<div class="card-body">
									<p>Exist Route</p>
									<hr>									
									<div class="form-group">
										<label class="control-label">Add Route</label> 
										<input type="text" id="add_route" name="add_route" value="" class="form-control" placeholder="Add Route">
									</div>
									<div class="form-group">
										<label class="control-label">Edit Route</label> 
										<input type="text" id="edit_route" name="edit_route" value="" class="form-control" placeholder="Edit Route">
									</div>
									<div class="form-group">
										<label class="control-label">Delete Route</label> 
										<input type="text" id="view_route" name="view_route" value="" class="form-control" placeholder="Delete Route">
									</div>
								</div>								
							</div>
						</div>						
					</div>
				</div>
				<div class="modal-footer text-right">
					<button id="submitButton" class="btn btn-success" type="submit">Store Menu</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- ICON MODEL -->
<div class="modal fade" id="iconListModal" role="dialog">
	<div class="modal-dialog modal-md">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Icon List</h4>
				<button type="button" class="close demo-icon" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="">

					<!--Panel body-->
					<div class="">
						<div class="clearfix demo-icon-list">
							<div class="row">
							@foreach($icon as $i)
								<div class="col-sm-6 col-md-6">
									<div class="demo-icon "><i class="{{$i->name}} i-style"></i><span>{{$i->name}}</span></div>
								</div>
							@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END ICON MODEL -->

<script type="text/javascript">
	$(document).ready(function() {
		$('#permitted_div').hide();
		function inputReset(){
			$("input[type=text],select,input[type=number]").val("");			
		}

		$("#demo-btn-addrow").click(function(){
			inputReset();
		});

		var err='{{count($errors->all())}}';
		if(err>0){
			$('#myModal').modal('show');
		}


		$(".editMenu").click(function(){
			var menuid = $(this).closest('tr').find('.menuId').val();        
			$.ajax({
				url: "{{ route('menu.edit') }}",
				type: "GET",
				data: {'id' : menuid},
				success: function(data){
					var actionUrl = '{{route("menu.update", "/")}}'+'/'+data.id;
					$('#id').val(data.id);
					$('#name').val(data.name);
					$('#url').val(data.route);

					$('#icon').val(data.icon);
					
					$('#sort').val(data.sort);
					$('#parent').val(data.parent_id);


					$.ajax({
				      url: "{{ route('menu.getajaxsubparent') }}",
				      type: "GET",
				      data: {'parent' : data.parent_id},
				      success: function(dataa){
				      	var html = '<option value="0">None</option>';
		    			$.each( dataa, function( key, v ) {
		    				if(v.id == data.parentchield_id){
		    					var sel = 'selected';
		    				}else{
		    					var sel = '';
		    				}
		    				html +='<option value="'+v.id+'" '+sel+'>'+v.name+'</option>';
		    			});
		    			$('#parentchield').html(html);
				      }
				    });




					// $('#parentchield').val(data.parentchield_id);
					$('#status').val(data.status).trigger("change");
					if(data.parent == '0'){
						// $('#iconDiv').html('<div class="form-group">'+
						// 	'<label class="control-label">Icon</label>'+ 
						// 	'<input data-toggle="modal" data-target="#iconListModal" data-backdrop="static" data-keyboard="false" type="text" id="icon" name="icon" value="'+data.icon+'" class="form-control" placeholder="Enter Icon" readonly="readonly">'+
						// 	'</div>');
						$('#permitted_div').hide();
					}else{
						// $('#iconDiv').html('');
						$('#permitted_div').show();
					}
					if(data.add){
						$('#add_route').val(data.add);
					}
					if(data.edit){
						$('#edit_route').val(data.edit);
					}
					if(data.delete){
						$('#delete_route').val(data.delete);
					}
					$('#submitButton').text('Update Menu');
					$('#menuForm').attr('action', actionUrl);
					$('#myModal').modal('show');
				}
			});
		});

		$("#icon").click(function(){
			$('#myModal').modal('hide');
		});

		$(".demo-icon").click(function(){
			var icon = $(this).find('span').html();  
			$('#icon').val(icon);  
			$('#iconListModal').modal('toggle');
			$('#myModal').modal('show');
		});


		// $('#iconDiv').html('');


		$(document).on('change','#parent',function(){			
			// $('#iconDiv').html('');			
			var parent = $(this).val();
			$.ajax({
		      url: "{{ route('menu.getajaxsubparent') }}",
		      type: "GET",
		      data: {'parent' : parent},
		      success: function(data){
		      	var html = '<option value="0">None</option>';
    			$.each( data, function( key, v ) {
    				html +='<option value="'+v.id+'">'+v.name+'</option>';
    			});
    			$('#parentchield').html(html);
		      	if(parent=='0'){
					// $('input:checkbox').removeAttr('checked');				
					var html = '<div class="form-group">'+
					'<label class="control-label">Icon</label>'+ 
					'<input data-toggle="modal" data-target="#iconListModal" data-backdrop="static" data-keyboard="false" type="text" id="icon" name="icon" value="" class="form-control" placeholder="Enter Icon" readonly="readonly">'+
					'</div>';
					$('#iconDiv').html(html);
						// $('#iconDiv').html('<div class="form-group">'+
						// 	'<label class="control-label">Icon</label>'+ 
						// 	'<input data-toggle="modal" data-target="#iconListModal" data-backdrop="static" data-keyboard="false" type="text" id="icon" name="icon" value="'+data.icon+'" class="form-control" placeholder="Enter Icon" readonly="readonly">'+
						// 	'</div>');
					$('#permitted_div').hide();
				}else{											
					$('#iconDiv').html('');
					$('#permitted_div').show();
				}
		      }
		    });
		});


	});
</script>

@endsection