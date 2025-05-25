

<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
	<section class="content-header">					
		<div class="container-fluid my-2">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Site Settings</h1>
				</div>
				<div class="col-sm-6 text-right">
					<a href="<?php echo e(route('sitesettings.create')); ?>" class="btn btn-primary">New Setting</a>
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
							<button type="button" class="btn btn-default btn-sm" onclick="window.location.href='<?php echo e(route("sitesettings.index")); ?>'">Reset</button>
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
								<th width="100">Action</th>
							</tr>
						</thead>
						<tbody>
		
						<?php if($siteSettings->isNotEmpty()): ?>

							<?php $__currentLoopData = $siteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siteSetting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($siteSetting->id); ?></td>
									<td><?php echo e($siteSetting->header_logo_title); ?></td>
									
									<td>
										<a href="<?php echo e(route('sitesettings.edit', [$siteSetting->id])); ?>">
											<svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
												<path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
											</svg>
										</a>
										<a href="javascript:void(0)"  onclick="deleteRow(<?php echo e($siteSetting->id); ?>)" class="text-danger w-4 h-4 mr-1">
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
			url:'<?php echo e(url("admin/sitesettings")); ?>/'+id,
			type:'POST',
			dataType:'json',
			data: $('#listingForm').serializeArray(),
			success:function(response){
				window.location.href="<?php echo e(route('sitesettings.index')); ?>";
			}
		})
	}
}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp\www\mp\LARAV\training_studio\resources\views/backend/site_settings/index.blade.php ENDPATH**/ ?>