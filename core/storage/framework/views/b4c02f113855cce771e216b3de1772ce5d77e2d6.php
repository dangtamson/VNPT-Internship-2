<?php include('core/resources/views/header.blade.php')?>
                <div class="row">
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

                    <div class="col-lg-12" >
                        <h1 class="page-header" style="margin-top: 0px;">
                            Thêm nhân viên
                        </h1 


                     <form action=them_nv" method="POST">
                         <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />

                            <div class="form-group">
                                
                            </div>
                            <div class="form-group">
                                 <label> Tên nhân viên</label>
                                <input type="text" name="name" class="form-control" placeholder="Nhập họ tên">
                             </div>
                             <div class="form-group">
                                 <label> Username</label>
                                <input type="text" name="Username" class="form-control" placeholder="Nhập tên tài khoản">
                             </div>

                            

                             <div class="form-group">
                                 <label>Mật khẩu</label>
                                <input type="PASSWORD" name="password" class="form-control" placeholder="Nhập mật khẩu">
                             </div>

                              <div class="form-group">
                                 <label>Nhập lại mật khẩu</label>
                                <input type="PASSWORD" name="passwordagain" class="form-control" placeholder="Nhập lại mật khẩu">
                             </div>
                        

                             <div class="form-group">
                                 <label>Email</label>
                                <input type="text" name="EMAIL" class="form-control" placeholder="Nhập email">
                             </div>


                             <div class="form-group">
                                 <label> Địa chỉ</label>
                                <input type="text" name="DIACHI" class="form-control" placeholder=" Nhập địa chỉ">
                             </div>

                              
                             <div class="form-group">
                                 <label> Quyền người dùng:</label>
                                <select style="width: 96px;" name="quyen" class="form-control" id="sel1">
                                    <option value="0">Admin</option>
                                    <option value="1">Nhân Viên</option>
                                    
                                </select>
                             </div>
                        <input style="margin-top: 10px;" type="submit" name="btn_submit" class="btn btn-primary" value="Thêm mới">
                    </div>
                </div>
                <!-- /.row -->
            </div>
           </form>

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
<?php /**PATH E:\VNPT-Internship-2\trunk\core\resources\views/them_nv.blade.php ENDPATH**/ ?>