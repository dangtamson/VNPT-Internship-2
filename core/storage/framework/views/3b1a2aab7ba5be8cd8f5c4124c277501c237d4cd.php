<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="content-header">
      <h1>
        Thông tin chức vụ
        <small><?php echo e($chucvu->tencv); ?></small>
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


            <form action="/admin/chucvu/suacv/<?php echo e($chucvu->id_cv); ?>" method="post" class="form-horizontal"> 
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                <div class="form-group">
                    <table class="table table-hover table-striped">
                        <tr>
                            <td><label class="control-label">Tên chức vụ: </label></td>
                            <td><input type="text" name="tencv" class="form-control" placeholder="Tên chức vụ" value="<?php echo e($chucvu->tencv); ?>"></td>
                        </tr>                   
                        
                        <tr style="background-color: white">
                            <td colspan="2" align="center">
                                <button type="submit" name="btn_submit" class="btn btn-success" style="width: 8em">Sửa</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
</div>




<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>
 <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TTTT\VNPT-Internship-2.git\trunk\core\resources\views/admin/chucvu/suacv.blade.php ENDPATH**/ ?>