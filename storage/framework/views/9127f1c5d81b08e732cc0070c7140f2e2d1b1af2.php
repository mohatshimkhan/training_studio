

<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
	<section class="content-header">					
		<div class="container-fluid my-2">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Training Classes</h1>
				</div>
				<div class="col-sm-6 text-right">
					<a href="<?php echo e(route('trainingclasses.create')); ?>" class="btn btn-primary">New Training Class</a>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="container-fluid">
			
			<?php echo $__env->make('backend.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

			<div class="card">
				
				<form name="searchForm" id="searchForm" method="get" action="">
					<div class="card-header">
						<div class="card-title">
							<button type="button" class="btn btn-default btn-sm" onclick="window.location.href='<?php echo e(route("trainingclasses.index")); ?>'">Reset</button>
						</div>
						<div class="card-tools">
							<div class="input-group input-group" style="width: 250px;">
								<input type="text" name="search" id="search" class="form-control float-right" placeholder="Search" value="<?php echo e(!empty(Request::get('search')) ? Request::get('search') : ''); ?>">
								<div class="input-group-append">
								  <button type="submit" class="btn btn-default">
									<i class="fas fa-search"></i>
								  </button>
								</div>
							  </div>
						</div>
					</div>
				</form>

				<form name="listingForm" id="listingForm" method="post" action="">
				<input type="hidden" name="_method" value="DELETE">
				<div class="card-body table-responsive p-0">								
					<table class="table table-hover text-nowrap">
						<thead>
							<tr>
								<th width="60">ID</th>
								<th>Title</th>
								<th width="100">Status</th>
								<th width="100">Action</th>
							</tr>
						</thead>
						<tbody>
		
						<?php if($training_classes->isNotEmpty()): ?>

							<?php $__currentLoopData = $training_classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $training_class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($training_class->id); ?></td>
									<td><?php echo e($training_class->title); ?></td>
									
									<td>
									<?php if($training_class->is_active==1): ?>
										
										<svg class="text-success-500 h-6 w-6 text-success" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
											<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
										</svg>
									<?php else: ?>
										
										<svg class="text-danger h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
											<path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
										</svg>
										
									<?php endif; ?>
									</td>

									<td>
										<a href="<?php echo e(route('trainingclasses.edit', [$training_class->id])); ?>">
											<svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
												<path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
											</svg>
										</a>
										<a href="javascript:void(0)"  onclick="deleteRow(<?php echo e($training_class->id); ?>)" class="text-danger w-4 h-4 mr-1">
											<svg wire:loading.remove.delay="" wire:target="" class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
											<path	ath fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
										  	</svg>
										</a>
									</td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php else: ?>
							<tr>
								<td colspan="5" align="center">Records not found</td>
							</tr>
						<?php endif; ?>
						</tbody>
					</table>										
				</div>
				</form>
				
				<div class="card-footer clearfix">
					<?php echo e($training_classes->links('pagination::bootstrap-4')); ?>

				</div>
			</div>
		</div>
		<!-- /.card -->
	</section>
	<!-- /.content -->

<?php $__env->stopSection(); ?>


<?php $__env->startSection('custom_js'); ?>

<script>
function deleteRow(id){
	
	if(confirm("Are you sure to delete ?")){

		$.ajax({
			url:'<?php echo e(url("admin/trainingclasses")); ?>/'+id,
			type:'POST',
			dataType:'json',
			data: $('#listingForm').serializeArray(),
			success:function(response){
				window.location.href="<?php echo e(route('trainingclasses.index')); ?>";
			}
		})
	}
}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp\www\mp\LARAV\training_studio\resources\views/backend/training_classes/index.blade.php ENDPATH**/ ?>