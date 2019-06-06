
<?php include('core/resources/views/layouts/header.blade.php')?>

<section class="content-header">
      <h1>
        Phòng ban
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
        <form action="<?php echo e(route('us_getSearch')); ?>" method="POST" class="sidebar-form">
            <div class="input-group">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                <input style="width: 226px;margin-left: 820px;" type="text" name="search" class="form-control" placeholder="Nhập username..." value="<?php if(isset($id_hocvien)): ?><?php echo e($id_hocvien->ma_hv); ?><?php elseif(isset($id_lop)): ?><?php echo e($ma_lop); ?><?php endif; ?>">
                <span class="input-group-btn">
                    <button type="submit" name="btn_submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
        </form>
    
            <table class="table table-hover table-striped">
                <THEAD>
                    <tr align="center">
                        <th>ID</th>
                        <th>TÊN PHÒNG BAN</th>

                    </tr>
                </THEAD>
                <tbody>
                    <tr align="left">
                        <?php if(isset($id_pb)): ?>
                            <td><?php echo e($id_pb->id_pb); ?></td>
                            <td><?php echo e($id_pb->tenpb); ?></td>
                            
                            <td><?php echo e($id_pb->created_at); ?></td>
                            <td><i><a href="sua/<?php echo e($id_pb->id_pb); ?>">edit</a></i></td>
                            <td><i><a href="xoa/<?php echo e($id_pb->id_pb); ?>">delete</a></i></td>
                    </tr>
                        <?php else: ?>
                            <?php $__currentLoopData = $phongban; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr align="left">
                                    <td><?php echo e($u->id_pb); ?></td>
                                    <td><?php echo e($u->tenpb); ?></td>
                                    <td><?php echo e($u->created_at); ?></td>
                                    <td><i><a href="sua/<?php echo e($u->id_pb); ?>">edit</a></i></td>
                                    <td><i><a href="xoa/<?php echo e($u->id_pb); ?>">delete</a></i></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                </tbody>
                
            </table>

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
<?php /**PATH E:\VNPT-Internship-2\trunk\core\resources\views/admin/phongban/danhsach.blade.php ENDPATH**/ ?>