@extends('backend.layouts.app')

@section('content')

<!-- Content Header (Page header) -->
	<section class="content-header">					
		<div class="container-fluid my-2">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Edit Training Class</h1>
				</div>
				<div class="col-sm-6 text-right">
					<a href="{{ route('trainingclasses.index') }}" class="btn btn-primary">Back</a>
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
				<div class="card">
					<div class="card-body">								
						<div class="row">

							<input type="hidden" name="_method" value="PUT">
							
							<div class="col-md-12">
								<div class="mb-6">
									<label for="name">Title</label>
									<input type="text" name="title" id="title" class="form-control" placeholder="Enter..." value="{{ $trainingclass->title }}">
									<p></p>
								</div>
								<div class="mb-6"></div>
							</div>

							<div class="col-md-12">
								<div class="mb-6">
									<label for="name">Summary</label>
									<input type="text" name="summary" id="summary" class="form-control" placeholder="Enter..." value="{{ $trainingclass->summary }}">
									<p></p>
								</div>
								<div class="mb-6"></div>
							</div>

							<div class="col-md-12">
								<div class="mb-6">
									<label for="name">Description</label>
									<textarea name="description" id="description" class="form-control" placeholder="Enter...">{{ $trainingclass->description }}</textarea>
									<p></p>
								</div>
								<div class="mb-6"></div>
							</div>
							
							<div class="col-md-12">&nbsp;</div>

							<div class="col-md-12">
								<div class="mb-6">
									<label for="name">Featured Image</label>
									<input type="file" name="featured_image" id="featured_image" class="form-control">
									<p></p>
								</div>
								<div class="mb-6"></div>
							</div>	

							@if(!empty($trainingclass->featured_image))
							
							<div class="col-md-12">&nbsp;</div>

							<div class="col-md-12">
								<input type="hidden" name="old_featured_image" id="old_featured_image" value="{{ $trainingclass->featured_image }}">
								<div class="mb-6"><img src="{{ asset('uploads/training_classes/'.$trainingclass->featured_image) }}" class="img-thumbnail"></div>
							</div>	
							
							@endif
							
							<div class="col-md-12">&nbsp;</div>

							<div class="col-md-12">
								<div class="mb-6">
									<label for="status">Active</label>
									<input type="checkbox" name="is_active" id="is_active" {{ ($trainingclass->is_active=='1') ? 'checked' : '' }}  />
									<p></p>
								</div>
							</div>	

							<div class="col-md-12">&nbsp;</div>

						</div>
					</div>							
				</div>
				<div class="pb-5 pt-3">
					<button class="btn btn-primary">Update</button>
					<a href="{{ route('trainingclasses.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
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
		url:'{{ route("trainingclasses.update", [$trainingclass->id]) }}',
		type:'post',
		data : new FormData(this),
		dataType: 'json',
		processData: false,
        contentType: false,
		success:function(response){

			$("button[type=submit]").prop('disabled', false);

			var errors = response['errors'];

			if(response['status'] == true){

				window.location.href='{{ route("trainingclasses.index") }}';

			} else {

				if(errors['title']){
					$('#title').addClass('is-invalid')
					.siblings('p')
					.addClass('invalid-feedback')
					.html(errors['title']);
				} else {
					$('#title').removeClass('is-invalid')
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