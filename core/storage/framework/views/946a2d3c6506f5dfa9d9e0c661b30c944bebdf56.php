<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="content-header">
      <h1>
        Tài khoản người dùng
        <small>Danh sách</small>
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
		<form action="<?php echo e(route('us_getSearch1')); ?>" method="POST" class="sidebar-form">
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
						<th>HỌ TÊN</th>
						<th>GIỚI TÍNH</th>
						<th>USERNAME</th>
						<!-- <th>PASSWORD</th> -->
						<th>EMAIL</th>
						<th>PHÒNG BAN</th>
						<th>CHỨC VỤ</th>
						<th>QUYỀN</th>
						<th>NGÀY TẠO</th>
						<th>CẬP NHẬT MỚI NHẤT</th>

						</tr>
						</THEAD>
							<td><?php echo e($id_user->id); ?></td>
							<td><?php echo e($id_user->name); ?></td>
							<td><?php if($id_user->gioitinh == 0): ?>
									<?php echo e('Nam'); ?>

								<?php elseif($id_user->gioitinh == 1): ?>
									<?php echo e('Nữ'); ?>

								<?php endif; ?></td>
							<td><?php echo e($id_user->username); ?></td>
							<!-- <td><?php echo e($id_user->check_pass); ?></td> -->
							<td><?php echo e($id_user->email); ?></td>
							<td>
										<?php $__currentLoopData = $phongban; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<?php if($id_user->id_pb == $pb->id_pb): ?>
												<?php echo e($pb->tenpb); ?>

											<?php endif; ?>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									</td>
									<td>
										<?php $__currentLoopData = $chucvu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<?php if($id_user->id_cv == $cv->id_cv): ?>
												<?php echo e($cv->tencv); ?>

											<?php endif; ?>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									</td>
							<td>
								<?php if($id_user->quyen == 0): ?>
									<?php echo e('Admin'); ?>

								<?php elseif($id_user->quyen == 1): ?>
									<?php echo e('Nhân Viên'); ?>

								<?php endif; ?>
							</td>
							<td><?php echo e($id_user->created_at); ?></td>
							<td><?php echo e($id_user->updated_at); ?></td>
							<td><i><a href="sua/<?php echo e($id_user->id); ?>">edit</a></i></td>
							<td><i><a href="xoa/<?php echo e($id_user->id); ?>">delete</a></i></td>
							<td><i><a href="getpass/<?php echo e($id_user->id); ?>">View Password</a></i></td>

							</table>
					<?php else: ?>

							<table class="table table-hover table-striped">
							<THEAD>
							<tr align="center">
								<th>ID</th>
								<th>HỌ TÊN</th>
								<th>GIỚI TÍNH</th>
								<th>USERNAME</th>
								<!-- <th>PASSWORD</th> -->
								<th>EMAIL</th>
								<th>PHÒNG BAN</th>
								<th>CHỨC VỤ</th>
								<th>QUYỀN</th>
								<th>NGÀY TẠO</th>
								<th>CẬP NHẬT MỚI NHẤT</th>

							</tr>
							</THEAD>
							<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr align="left">
									<td><?php echo e($u->id); ?></td>
									<td><?php echo e($u->name); ?></td>
									<td><?php if($u->gioitinh == 0): ?>
									<?php echo e('Nam'); ?>

								<?php elseif($u->gioitinh == 1): ?>
									<?php echo e('Nữ'); ?>

								<?php endif; ?></td>
									<td><?php echo e($u->username); ?></td>
									<!-- <td><?php echo e($u->check_pass); ?></td> -->
									<td><?php echo e($u->email); ?></td>
									<td>
										<?php $__currentLoopData = $phongban; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<?php if($u->id_pb == $pb->id_pb): ?>
												<?php echo e($pb->tenpb); ?>

											<?php endif; ?>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									</td>
									<td>
										<?php $__currentLoopData = $chucvu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<?php if($u->id_cv == $cv->id_cv): ?>
												<?php echo e($cv->tencv); ?>

											<?php endif; ?>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									</td>
									<td>
										<?php if($u->quyen == 0): ?>
											<?php echo e('Admin'); ?>

										<?php elseif($u->quyen == 1): ?>
											<?php echo e('Nhân Viên'); ?>

										
										<?php endif; ?>
									</td>
									<td><?php echo e($u->created_at); ?></td>
									<td><?php echo e($u->updated_at); ?></td>
									<td><i><a href="sua/<?php echo e($u->id); ?>">edit</a></i></td>
									<td><i><a href="xoa/<?php echo e($u->id); ?>">delete</a></i></td>
									<td><i><a href="getpass/<?php echo e($u->id); ?>">View Password</a></i></td>
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</table>
									<center><?php echo $user->links(); ?></center>
						<?php endif; ?>
						
				</tbody>
				
			

	</div>
     
          
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TTTT\VNPT-Internship-2.git\trunk\core\resources\views/admin/user/danhsach.blade.php ENDPATH**/ ?>