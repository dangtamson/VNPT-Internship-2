<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
<section class="content-header">
      <h1>
        Tài khoản người dùng
        <small>Thêm</small>
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

            <?php if(session('thongbao2')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session('thongbao2')); ?>

                </div>
            <?php endif; ?>

            <?php if(session('thongbao')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('thongbao')); ?>

                </div>
            <?php endif; ?>


            <form action="them" method="post" class="form-horizontal"> 
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                <div class="form-group">
                    <table class="table table-hover table-striped">
                        <tr>
                            <td><label class="control-label">Tên người dùng: </label></td>
                            <td><input type="text" name="name" class="form-control" placeholder="Họ tên"></td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Username: </label></td>
                            <td><input type="text" name="username" class="form-control" placeholder="Nhập tên tài khoản"></td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Password: </label></td>
                            <td><input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu"></td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Nhập lại Password: </label></td>
                            <td><input type="password" name="passwordAgain" class="form-control" placeholder="Nhập lại mật khẩu"></td>
                        </tr>
                         <tr>
                            <td><label class="control-label">Email: </label></td>
                            <td><input type="text" name="email" class="form-control" placeholder="Nhập email"></td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Giới tính: </label></td>
                            <td>
                                <select name="gioitinh" class="form-control" id="gioitinh">
                                    <option value="0">Nam</option>
                                    <option value="1">Nữ</option>
                                    
                                </select>
                            </td>
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
                                    <option value="0">Admin</option>
                                    <option value="1">Nhân Viên</option>
                                    
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

           
     <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\thuctap\VNPT-Internship-2\trunk\core\resources\views/admin/user/them.blade.php ENDPATH**/ ?>