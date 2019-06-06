<?php include('core/resources/views/layouts/header.blade.php')?>
        
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
                            <td><label class="control-label">Phòng ban: </label></td>
                            <td>
                                <select name="id_pb" class="form-control" id="sel1">
                                    <option value="0">Khối chính quyền</option>
                                    <option value="1">Khối doanh nghiệp</option>
                                    
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Công việc: </label></td>
                            <td>
                                <select name="id_cv" class="form-control" id="sel1">
                                    <option value="0">Quản lý</option>
                                    <option value="1">Nhân viên</option>
                                    
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

</html>
<?php /**PATH E:\VNPT-Internship-2\trunk\core\resources\views/admin/user/them.blade.php ENDPATH**/ ?>