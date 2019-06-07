<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="content-header">
      <h1>
        Tài khoản người dùng
        <small><?php echo e($user->username); ?></small>
      </h1>

</section>
<br>
  			
<div>
	<div class="col-lg-7">
			<?php if(count($errors) > 0): ?>
				<div class="alert alert-danger">
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php echo e($err); ?><br>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>

			<?php endif; ?>


			<?php if(session('thongbao')): ?>
				<div class="alert alert-success">
					<?php echo e(session('thongbao')); ?>

				</div>
			<?php endif; ?>


  			<form action="/admin/user/sua/<?php echo e($user->id); ?>" method="post" class="form-horizontal"> 
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
				<div class="form-group">
					<table class="table table-hover table-striped">
						<tr>
							<td><label class="control-label">Tên người dùng: </label></td>
							<td><input type="text" name="name" class="form-control" placeholder="Họ tên" value="<?php echo e($user->name); ?>"></td>
						</tr>
						<tr>
							<td><label class="control-label">Username: </label></td>
							<td><input type="text" name="username" class="form-control" placeholder="Nhập tên tài khoản" value="<?php echo e($user->username); ?>" ></td>
						</tr>
						<!-- <tr>
							<td>
								<label class="control-label">Password mới </label>
							</td>
							<td><input type="text" name="password" class="form-control password" placeholder="Nhập mật khẩu mới" value="<?php echo e($user->check_pass); ?>"> 
							</td>
						</tr>
						<tr>
							<td><label class="control-label">Nhập lại Password: </label></td>
							<td><input type="text" name="passwordAgain" class="form-control" placeholder="Nhập lại mật khẩu" value="<?php echo e($user->check_pass); ?>"></td>
						</tr> -->
						<tr>
							<td><label class="control-label">Email: </label></td>
							<td><input type="text" name="email" class="form-control" placeholder="Họ tên" value="<?php echo e($user->email); ?>"></td>
						</tr>
						<tr>
                            <tr>
							<td><label class="control-label">Giới tính: </label></td>
							<td>
								<select name="gioitinh" class="form-control" id="sel1">
									<option value="0" 
										<?php if($user->gioitinh == 0): ?>
											<?php echo e("selected"); ?>

										<?php endif; ?>
										>Nam
									</option>
									<option value="1"
										<?php if($user->gioitinh == 1): ?>
											<?php echo e("selected"); ?>

										<?php endif; ?>
										>Nữ
									</option>
								</select>
							</td>
						</tr>
                        </tr>
						<tr>
							<td><label class="control-label">Phòng ban: </label></td>
							<td>
								<select name="id_pb" class="form-control" id="sel1">
									 <?php $__currentLoopData = $phongban_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id_pb); ?>"><?php echo e($data->tenpb); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</td>
						</tr>
						<tr>
							<td><label class="control-label">Chức vụ: </label></td>
							<td>
								<select name="id_cv" class="form-control" id="sel1">
									<?php $__currentLoopData = $chucvu_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id_cv); ?>"><?php echo e($data->tencv); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</td>
						</tr>
						<tr>
							<td><label class="control-label">Quyền người dùng: </label></td>
							<td>
								<select name="quyen" class="form-control" id="sel1">
									<option value="0" 
										<?php if($user->quyen == 0): ?>
											<?php echo e("selected"); ?>

										<?php endif; ?>
										>Admin
									</option>
									<option value="1"
										<?php if($user->quyen == 1): ?>
											<?php echo e("selected"); ?>

										<?php endif; ?>
										>Nhân Viên
									</option>
								</select>
							</td>
						</tr>
						
						<tr style="background-color: white">
							<td colspan="2" align="center">
								<button type="submit" name="btn_submit" class="btn btn-success" style="width: 8em">Lưu</button>
							</td>
						</tr>
					</table>
				</div>
			</form>
		</div>
</div>





  <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TTTT\VNPT-Internship-2.git\trunk\core\resources\views/admin/user/sua.blade.php ENDPATH**/ ?>