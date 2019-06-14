<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
<section class="content-header">
      <h1>
        Phiếu khảo sát
        <small>Tạo</small>
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
                            <td><label class="control-label">Lĩnh vực: </label></td>
                            <td>
                                <select name="id_lv" id="id_lv" class="form-control" id="sel1">

                                    <?php $__currentLoopData = $linhvuc_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id_lv); ?>"><?php echo e($data->tenlv); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Tiêu chí đánh giá: </label></td>
                            <td>
                                <select name="id_ch" id= "id_ch" class="form-control" id="sel1">

                                    <?php $__currentLoopData = $tieuchidanhgia_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id_ch); ?>"><?php echo e($data->noidungch); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Đợt khảo sát: </label></td>
                            <td>
                                <select name="id_ks" class="form-control" id="sel1">

                                    <?php $__currentLoopData = $khaosat_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id_ks); ?>"><?php echo e($data->tenks); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
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
<?php /**PATH D:\thuctap\VNPT-Internship-2\trunk\core\resources\views/admin/phieukhaosat/them.blade.php ENDPATH**/ ?>