<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="content-header">
      <h1>
        Quản lý đợt khảo sát
        <small>Sửa</small>
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


            <form action="/admin/khaosat/sua/<?php echo e($khaosat->id_ks); ?>" method="post" class="form-horizontal"> 
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                <div class="form-group">
                    <table class="table table-hover table-striped">
                        <tr>
                            <td><label class="control-label">Tên khảo sát: </label></td>
                            <td><input type="text" name="tenks" class="form-control" placeholder="Nhập tên khảo sát" value="<?php echo e($khaosat->tenks); ?>"></td>
                        </tr>
                        
                        <tr>
                            <td><label class="control-label">Ngày bắt đầu: </label></td>
                            <td>
                                <input type="date" class="form-control" name="ngaybd" class="date" placeholder="Chọn ngày bắt đầu" value="<?php echo e($khaosat->ngaybd); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Ngày kết thúc: </label></td>
                            <td>
                                <input type="date" class="form-control" name="ngaykt" class="date" placeholder="Chọn ngày kết thúc" value="<?php echo e($khaosat->ngaykt); ?>">
                            </td>
                        </tr>

                        <tr>
                           
                            <td><label class="control-label">Trạng thái: </label></td>
                            <td>
                                <select name="trangthai" class="form-control" id="sel1">
                                    <option value="0" 
                                        <?php if($khaosat->trangthai == 0): ?>
                                            <?php echo e("selected"); ?>

                                        <?php endif; ?>
                                        >Đóng khảo sát
                                    </option>
                                    <option value="1"
                                        <?php if($khaosat->trangthai == 1): ?>
                                            <?php echo e("selected"); ?>

                                        <?php endif; ?>
                                        >Mở khảo sát
                                    </option>
                                </select>
                            </td>
                        
                        </tr>
                       <!--  -->
                        
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

           
     <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\VNPT-Internship-2\trunk\core\resources\views/admin/khaosat/sua.blade.php ENDPATH**/ ?>