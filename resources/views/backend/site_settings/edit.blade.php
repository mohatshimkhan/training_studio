@extends('backend.layouts.app')

@section('content')

<!-- Content Header (Page header) -->
	<section class="content-header">					
		<div class="container-fluid my-2">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Edit Site Settings</h1>
				</div>
				<div class="col-sm-6 text-right">
				<!--<a href="{{ route('sitesettings.index') }}" class="btn btn-primary">Back</a>-->
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</section>
	
	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="container-fluid">
			<form name="editForm" id="editForm" method="post" action="" enctype="multipart/form-data">
				
				@include('backend.message')

				<div class="card">
					<div class="card-body">								
						<div class="row">

							<input type="hidden" name="_method" value="PUT">

							<!-- Header Area -->
							<div class="card col-md-12">
								<div class="card-header">
									<h3 class="card-title">Header Section</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="col-md-12">
										<div class="mb-3">
											<label for="header_logo_title">Header Logo Title</label>
											<textarea class="textarea" name="header_logo_title" id="header_logo_title" class="form-control" placeholder="Enter...">{{ $sitesetting->header_logo_title }}</textarea><p></p>	
										</div>
									</div>	
									<div class="col-md-12">&nbsp;</div>
								</div>
							</div>
							<!-- Header Area //-->


							<!-- Main Banner Area -->
							<div class="card col-md-12">
								<div class="card-header">
									<h3 class="card-title">Main Banner Section</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									
									<div class="col-md-12">
										<div class="mb-3">
											<label for="mba_heading_tag">Heading Tag</label>
											<input type="text" name="mba_heading_tag" id="mba_heading_tag" class="form-control" placeholder="Enter..." value="{{ $sitesetting->mba_heading_tag }}"><p></p>	
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<label for="mba_heading_title">Heading Title</label>
											<textarea class="textarea" name="mba_heading_title" id="mba_heading_title" class="form-control" placeholder="Enter...">{{ $sitesetting->mba_heading_title }}</textarea><p></p>	
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<label for="mba_bg_video">Banner BG Video</label>
											<input type="text" name="mba_bg_video" id="mba_bg_video" class="form-control" placeholder="Enter..." value="{{ $sitesetting->mba_bg_video }}"><p></p>	
										</div>
									</div>

								</div>
							</div>
							
							<!-- Main Banner Area //-->

							<!-- Call To Action -->

							<div class="card col-md-12">
								<div class="card-header">
									<h3 class="card-title">Call To Action Section</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">

									<div class="col-md-12">
										<div class="mb-3">
											<label for="name">CTA Title</label>
											<textarea class="textarea" name="cta_title" id="cta_title" class="form-control" placeholder="Enter...">{{ $sitesetting->cta_title }}</textarea><p></p>	
										</div>
									</div>

									<div class="col-md-12">
										<div class="mb-3">
											<label for="name">CTA Description</label>
											<textarea name="cta_description" id="cta_description" class="form-control" placeholder="Enter...">{{ $sitesetting->cta_description }}</textarea><p></p>	
										</div>
									</div>	

								</div>
							</div>
							<!-- Call To Action //-->

							<!-- Footer Section -->
							<div class="card col-md-12">
								<div class="card-header">
									<h3 class="card-title">Footer Section</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">

									<div class="col-md-12">
										<div class="mb-3">
											<label for="name">Footer Text</label>
											<textarea name="footer_text" id="footer_text" class="form-control" placeholder="Enter...">{{ $sitesetting->footer_text }}</textarea><p></p>
										</div>
									</div>	

								</div>
							</div>
							<!-- Footer Section //-->
							
							<div class="col-md-12">&nbsp;</div>

						</div>
					</div>							
				</div>
				<div class="pb-5 pt-3">
					<button class="btn btn-primary">Update</button>
					<!--<a href="{{ route('sitesettings.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>-->
				</div>
			</form>
		</div>

		<!-- /.card -->
		
	</section>
	<!-- /.content -->

@endsection

@section('custom_js')

<script>

$("#editForm").submit(function(event){

	event.preventDefault();

    $("button[type=submit]").prop('disabled', true);

	$.ajax({
		url:'{{ route("sitesettings.update", [$sitesetting->id]) }}',
		type:'post',
		data : new FormData(this),
		dataType: 'json',
		processData: false,
        contentType: false,
		success:function(response){

			$("button[type=submit]").prop('disabled', false);

			var errors = response['errors'];

			if(response['status'] == true){

				window.location.href='{{ route("sitesettings.edit",1) }}';

			} else {

				if(errors['header_logo_title']){
					$('#header_logo_title').addClass('is-invalid')
					.siblings('p')
					.addClass('invalid-feedback')
					.html(errors['header_logo_title']);
				} else {
					$('#header_logo_title').removeClass('is-invalid')
					.siblings('p')
					.removeClass('invalid-feedback')
					.html('');
				}
			}

		}, error:function(jqXHR, exception){
			console.log("Something went wrong");
		}
	});

});

</script>



@endsection