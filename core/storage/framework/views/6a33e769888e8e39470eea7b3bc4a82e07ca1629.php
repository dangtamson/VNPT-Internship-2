<?php include('core/resources/views/layouts/header.blade.php')?>

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
						<tr>
							<td>
								<label class="control-label">Password mới </label>
							</td>
							<td><input type="text" name="password" class="form-control password" placeholder="Nhập mật khẩu mới" value="<?php echo e($user->check_pass); ?>"> 
							</td>
						</tr>
						<tr>
							<td><label class="control-label">Nhập lại Password: </label></td>
							<td><input type="text" name="passwordAgain" class="form-control" placeholder="Nhập lại mật khẩu" value="<?php echo e($user->check_pass); ?>"></td>
						</tr>
						<tr>
							<td><label class="control-label">Email: </label></td>
							<td><input type="text" name="email" class="form-control" placeholder="Họ tên" value="<?php echo e($user->email); ?>"></td>
						</tr>
						<tr>
							<td><label class="control-label">Phòng ban: </label></td>
							<td>
								<select name="id_pb" class="form-control" id="sel1">
									<option value="0" 
										<?php if($user->id_pb == 0): ?>
											<?php echo e("selected"); ?>

										<?php endif; ?>
										>Khối chính quyền
									</option>
									<option value="1"
										<?php if($user->id_pb == 1): ?>
											<?php echo e("selected"); ?>

										<?php endif; ?>
										>Khối doanh nghiệp
									</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><label class="control-label">Chức vụ: </label></td>
							<td>
								<select name="id_cv" class="form-control" id="sel1">
									<option value="0" 
										<?php if($user->id_cv == 0): ?>
											<?php echo e("selected"); ?>

										<?php endif; ?>
										>Quản lý
									</option>
									<option value="1"
										<?php if($user->id_cv == 1): ?>
											<?php echo e("selected"); ?>

										<?php endif; ?>
										>Nhân Viên
									</option>
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
								<button type="submit" name="btn_submit" class="btn btn-success" style="width: 8em">Thêm</button>
							</td>
						</tr>
					</table>
				</div>
			</form>
		</div>
</div>





 <div id="footer">
            <p>Bản quyền thuộc về team_tttt@vnpt.com</p>
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../../js/plugins/morris/raphael.min.js"></script>
    <script src="../../../js/plugins/morris/morris.min.js"></script>
    <script src="../../../js/plugins/morris/morris-data.js"></script>

</body>

</html><?php /**PATH E:\VNPT-Internship-2\trunk\core\resources\views/admin/user/sua.blade.php ENDPATH**/ ?>