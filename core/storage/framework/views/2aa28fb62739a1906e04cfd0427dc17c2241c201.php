<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="content-header">
      <h1>
        Thông tin lĩnh vực
        <small>Danh sách lĩnh vực</small>
      </h1>

</section>
<br>
	<div>
	<div class="col-lg-7">
	<?php if(session('thongbao')): ?>
		<div class="alert alert-success">
			<?php echo e(session('thongbao')); ?>

		</div>
	<?php endif; ?>

	<?php if(session('thongbao2')): ?>
		<div class="alert alert-danger">
			<?php echo e(session('thongbao2')); ?>

		</div>
	<?php endif; ?>

	</div>

	<div style="padding-left: 3%"> 

		<form action="<?php echo e(route('us_getSearch4')); ?>" method="POST" class="sidebar-form">
	        <div class="input-group">
	        	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
	          	<input style="width: 226px;margin-left: 820px;" type="text" name="search" class="form-control" placeholder="Nhập tên chức vụ..." value="<?php if(isset($id_hocvien)): ?><?php echo e($id_hocvien->ma_hv); ?><?php elseif(isset($id_lop)): ?><?php echo e($ma_lop); ?><?php endif; ?>">
	          	<span class="input-group-btn">
	                <button type="submit" name="btn_submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
	                </button>
	              </span>
	        </div>
      	</form>
	
			
				<tbody>
					<?php if(isset($id_linhvuc)): ?>	
					<table class="table table-hover table-striped">
						<THEAD>
							<tr align="center">
								<th>ID</th>
								<th>TÊN LĨNH VỰC</th>
								<th>NGÀY TẠO</th>
								<th>CẬP NHẬT MỚI NHẤT</th>
							</tr>
						</THEAD>
						
							<td><?php echo e($id_linhvuc->id_lv); ?></td>										
							<td><?php echo e($id_linhvuc->tenlv); ?></td>
							<td><?php echo e($id_linhvuc->created_at); ?></td>
							<td><?php echo e($id_linhvuc->updated_at); ?></td>
							<td><i><a href="sualv/<?php echo e($id_linhvuc->id_lv); ?>">edit</a></i></td>
							<td><i><a href="xoalv/<?php echo e($id_linhvuc->id_lv); ?>">delete</a></i></td>

					</table>
						<?php else: ?>
						<table class="table table-hover table-striped">
							<THEAD>
								<tr align="center">
									<th>ID</th>
									<th>TÊN LĨNH VỰC</th>
									<th>NGÀY TẠO</th>
									<th>CẬP NHẬT MỚI NHẤT</th>
								</tr>
							</THEAD>
							<?php $__currentLoopData = $linhvuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr align="left">
									<td><?php echo e($u->id_lv); ?></td>
									<td><?php echo e($u->tenlv); ?></td>						
									<td><?php echo e($u->created_at); ?></td>
									<td><?php echo e($u->updated_at); ?></td>
									<td><i><a href="sualv/<?php echo e($u->id_lv); ?>">edit</a></i></td>
									<td><i><a href="xoalv/<?php echo e($u->id_lv); ?>">delete</a></i></td>

								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</table>
							<center><?php echo $linhvuc->links(); ?></center>
						<?php endif; ?>
				</tbody>
				
			

	</div>
     
          
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\TTTT\VNPT-Internship-2.git\trunk\core\resources\views/admin/linhvuc/danhsach.blade.php ENDPATH**/ ?>