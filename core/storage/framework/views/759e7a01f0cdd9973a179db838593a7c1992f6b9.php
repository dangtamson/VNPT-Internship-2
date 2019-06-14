<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="content-header">
      <h1>
        Quản lý khảo sát
        <small>Xem khảo sát</small>
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

            <?php if(session('thongbao1')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session('thongbao1')); ?>

                </div>
            <?php endif; ?>

            <?php if(session('thongbao')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('thongbao')); ?>

                </div>
            <?php endif; ?>


            <form action="" method="post" class="form-horizontal"> 
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                <div class="form-group">
                    <table class="table table-hover table-striped">
                        <tr>
                            <td><label class="control-label">Tên khảo sát: </label></td>
                            <td><label class="control-label">Ngày bắt đầu: </label></td>
                            <td><label class="control-label">Ngày kết thúc: </label></td>
                            
                        </tr>
                        
                        <tr>
                            <td><a type="text" name="tenks" class="form-control" placeholder="Nhập tên khảo sát" value=""><?php echo e($khaosat->tenks); ?></a></td>
                            <td>
                                <a type="date" class="form-control" name="ngaybd" class="date" placeholder="Chọn ngày bắt đầu" value=""><?php echo e($khaosat->ngaybd); ?></a></td>
                            <td>
                                <a type="date" class="form-control" name="ngaykt" class="date" placeholder="Chọn ngày kết thúc" value=""><?php echo e($khaosat->ngaykt); ?></a>
                            </td>
                        </tr>
                         </table>
                       
                       
                         <table class="table table-hover table-striped">
                            <THEAD>
                                <tr align="center">
                                    <th>TIÊU CHÍ ĐÁNH GIÁ</th>
                                    <th>RẤT KHÔNG HÀI LÒNG</th>
                                    <th>KHÔNG HÀI LÒNG</th>
                                    <th>BÌNH THƯỜNG</th>
                                    <th>HÀI LÒNG</th>
                                    <th>RẤT HÀI LÒNG</th>

                                </tr>
                            </THEAD>
                            
                                <?php $__currentLoopData = $tieuchidanhgia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($khaosat->id_ks == $tc->id_ks): ?>
                             <tr align="left">                              
                            <td><?php echo e($tc->noidungch); ?></td>       
                            <td><input type="radio" name="tl" value="1"></td>
                            <td><input type="radio" name="tl" value="2"></td>
                            <td><input type="radio" name="tl" value="3"></td>
                            <td><input type="radio" name="tl" value="4"></td>
                            <td><input type="radio" name="tl" value="5"></td>
                            </tr>
                            <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                    </table>
                        
                        <tr style="background-color: white">
                            <td colspan="2" align="center">
                                <a href="/admin/khaosat/danhsach" name="btn_submit" class="btn btn-success" style="width: 8em">Back</a>
                            </td>
                        </tr>
                   
                </div>
            </form>
        </div>
</div>

           
     <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\TTTT\VNPT-Internship-2.git\trunk\core\resources\views/admin/khaosat/xem.blade.php ENDPATH**/ ?>