

<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
	<section class="content-header">					
		<div class="container-fluid my-2">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Create Programe</h1>
				</div>
				<div class="col-sm-6 text-right">
					<a href="<?php echo e(route('programes.index')); ?>" class="btn btn-primary">Back</a>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</section>
	
	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="container-fluid">
			<form name="addForm" id="addForm" method="post" action="" enctype="multipart/form-data">
				<div class="card">
					<div class="card-body">								
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<label for="name">Title</label>
									<input type="text" name="title" id="title" class="form-control" placeholder="Enter..."><p></p>	
								</div>
							</div>	
							<div class="col-md-12">
								<div class="mb-3">
									<label for="name">Summary</label>
									<input type="text" name="summary" id="summary" class="form-control" placeholder="Enter..."><p></p>	
								</div>
							</div>	
							<div class="col-md-12">
								<div class="mb-3">
									<label for="name">Description</label>
									<textarea name="description" id="description" class="form-control" placeholder="Enter..."></textarea><p></p>	
								</div>
							</div>	
							<div class="col-md-12">
								<div class="mb-3">
									<label for="status">Active</label>
									<input type="checkbox" name="is_active" id="is_active" checked />
									<p></p>
								</div>
							</div>									
						</div>
					</div>							
				</div>
				<div class="pb-5 pt-3">
					<button class="btn btn-primary">Submit</button>
					<a href="<?php echo e(route('programes.index')); ?>" class="btn btn-outline-dark ml-3">Cancel</a>
				</div>
			</form>
		</div>

		<!-- /.card -->
		
	</section>
	<!-- /.content -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_js'); ?>

<script type="text/javascript">

$("#addForm").submit(function(event){

	event.preventDefault();

    $("button[type=submit]").prop('disabled', true);

	$.ajax({
		url:'<?php echo e(route("programes.store")); ?>',
		type:'post',
		data : new FormData(this),
		dataType: 'json',
		processData: false,
        contentType: false,
		success:function(response){

			$("button[type=submit]").prop('disabled', false);

			if(response['status'] == true){

				window.location.href='<?php echo e(route("programes.index")); ?>';

			} else {

				var errors = response['errors'];

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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp\www\mp\LARAV\PP\TrainingStudio\resources\views/backend/programes/create.blade.php ENDPATH**/ ?>