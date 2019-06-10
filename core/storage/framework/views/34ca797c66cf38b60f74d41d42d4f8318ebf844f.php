<?php include('core/resources/views/header.php')?>

<div class="row">
	<div class="col-md-12">
		<h3 align="center">User Data</h3>
		<table class="table table-bordered">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				
			</tr>
			<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($row['id']); ?></td>
				<td><?php echo e($row['name']); ?></td>
				<td><?php echo e($row['email']); ?></td>
				<td>
					<form action="<?php echo e(route('destroy',$user->id)); ?>" method="POST">
					<a class="btn btn-info" href="<?php echo e(route('show',$user->id)); ?>">Show</a>
					<a class="btn btn-primary" href="<?php echo e(route('user.edit',$user->id)); ?>">Edit</a>
					<?php echo csrf_field(); ?>
					<?php echo method_field('DELETE'); ?>
					<button type="submit" class="btn btn-danger">Delete</button>
					</form>
					</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
	</div>
	
</div><?php /**PATH D:\TTTT\VNPT-Internship-2.git\trunk\core\resources\views/dsnv.blade.php ENDPATH**/ ?>