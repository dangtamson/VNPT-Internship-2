<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="content-header">
      <h1>
        Tiêu chí đánh giá
        <small>Danh sách ẩn</small>
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
	</div>
		<form action="<?php echo e(route('us_getSearch5')); ?>" method="POST" class="sidebar-form">
	        <div class="input-group">
	        	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
	          	<input style="width: 226px;margin-left: 820px;" type="text" name="search" class="form-control" placeholder="Nhập username..." value="<?php if(isset($id_hocvien)): ?><?php echo e($id_hocvien->ma_hv); ?><?php elseif(isset($id_lop)): ?><?php echo e($ma_lop); ?><?php endif; ?>">
	          	<span class="input-group-btn">
	                <button type="submit" name="btn_submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
	                </button>
	              </span>
	        </div>
      	</form>
	
			
				<tbody>
					
						<?php if(isset($id_user)): ?>
						<table class="table table-hover table-striped">
							<THEAD>
								<tr align="center">
									<th>ID</th>
									<th>NỘI DUNG</th>
									<th>TRẠNG THÁI</th>
									<th>LĨNH VỰC</th>
									<th>NGÀY TẠO</th>

								</tr>
							</THEAD>
							<td><?php echo e($id_user->id_ch); ?></td>
									<td><?php echo e($id_user->noidungch); ?></td>
									<td><?php if($id_user->trangthai == 0): ?>
									<?php echo e('Ẩn'); ?>

								<?php elseif($id_user->trangthai == 1): ?>
									<?php echo e('Hiện'); ?>

								<?php endif; ?></td>
									<td>
										<?php $__currentLoopData = $linhvuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<?php if($id_user->id_lv == $lv->id_lv): ?>
												<?php echo e($lv->tenlv); ?>

											<?php endif; ?>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									</td>
									
									<td><?php echo e($id_user->created_at); ?></td>
									<td><i><a href="sua/<?php echo e($id_user->id_ch); ?>">edit</a></i></td>
									<td><i><a href="xoa/<?php echo e($id_user->id_ch); ?>">delete</a></i></td>

					</table>
						<?php else: ?>
						<table class="table table-hover table-striped">
							<THEAD>
								<tr align="center">
									<th>ID</th>
									<th>NỘI DUNG</th>
									<th>TRẠNG THÁI</th>
									<th>LĨNH VỰC</th>
									<th>NGÀY TẠO</th>

								</tr>
							</THEAD>
							<?php $__currentLoopData = $tieuchidanhgia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr align="left">
									<td><?php echo e($u->id_ch); ?></td>
									<td><?php echo e($u->noidungch); ?></td>
									<td><?php if($u->trangthai == 0): ?>
									<?php echo e('Ẩn'); ?>

								<?php elseif($u->trangthai == 1): ?>
									<?php echo e('Hiện'); ?>

								<?php endif; ?></td>
									<td>
										<?php $__currentLoopData = $linhvuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<?php if($u->id_lv == $lv->id_lv): ?>
												<?php echo e($lv->tenlv); ?>

											<?php endif; ?>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									</td>
									
									<td><?php echo e($u->created_at); ?></td>
									<td><i><a href="sua/<?php echo e($u->id_ch); ?>">edit</a></i></td>
									<td><i><a href="xoa/<?php echo e($u->id_ch); ?>">delete</a></i></td>
									
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						
						</table>
						<center><?php echo $tieuchidanhgia->links(); ?></center>
						<?php endif; ?>

				</tbody>

	</div>
     
          
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TTTT\VNPT-Internship-2.git\trunk\core\resources\views/admin/tieuchidanhgia/danhsachan.blade.php ENDPATH**/ ?>