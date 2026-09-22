@extends('backend.layouts.master')
@section('content')
<style type="text/css">
	#Iframe-Master-CC-and-Rs {
		max-width: 100%;
		max-height: 1260px; 
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
	/* YouTube video aspect ratio */
	.responsive-wrapper-wxh-572x612 {
		padding-bottom: 107%;
	}

	/* general styles */
	/* ============== */
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
<div class="col-xl-12">
  <div class="breadcrumb-holder">
    <h1 class="main-title float-left">Manage Bank Deposit</h1>
    <ol class="breadcrumb float-right">
      <li class="breadcrumb-item"><a href="{{route('home')}}"><strong>Home</strong></a></li>
      <li class="breadcrumb-item active">Bank Deposit</li>
    </ol>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container fullbody">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5>Deposit Attach
			<a class="btn btn-sm btn-success float-right" href="{{route('banks.bank.deposit.view')}}"><i class="fa fa-list"></i> Deposit List</a>
		</h5>
      </div>

      <div class="card-body">
			<div class="row">
	    		<div class="col-md-12">
					<div id="Iframe-Master-CC-and-Rs" class="set-margin set-padding set-border set-box-shadow center-block-horiz">
						<div class="responsive-wrapper 
						responsive-wrapper-wxh-572x612"
						style="-webkit-overflow-scrolling: touch; overflow: auto;">
						<iframe id="showImage" src="{{@$id->file ? url('public/backend/bank_deposit/'.$id->file) : url('public/backend/images/nofile.png')}}"> 
						</iframe>
					</div>
				</div>
	    	</div>
		</div>

    </div>
  </div>
</div>

@endsection