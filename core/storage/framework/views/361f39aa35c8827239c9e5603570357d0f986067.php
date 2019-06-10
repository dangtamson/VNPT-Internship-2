<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
<section class="content-header">
      <h1>
        Tiêu chí đánh giá
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


            <form action="/admin/tieuchidanhgia/sua/<?php echo e($tieuchidanhgia->id_ch); ?>" method="post" class="form-horizontal"> 
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                <div class="form-group">
                    <table class="table table-hover table-striped">
                        <tr>
                            <td><label class="control-label">Nội dung: </label></td>
                            <td><input type="text" name="noidungch" class="form-control" value =" <?php echo e($tieuchidanhgia->noidungch); ?>"></td>
                        </tr>
                       
                        <tr>
                            <td><label class="control-label">Trạng thái: </label></td>
                            <td>
                                <select name="trangthai" class="form-control" id="gioitinh">
                                    <option value="0"
                                        <?php if($tieuchidanhgia->trangthai == 0): ?>
                                            <?php echo e("selected"); ?>

                                        <?php endif; ?>>
                                        Ẩn</option>
                                    <option value="1"
                                        <?php if($tieuchidanhgia->trangthai == 1): ?>
                                            <?php echo e("selected"); ?>

                                        <?php endif; ?>>
                                        Hiện
                                    </option>
                                    
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label">Lĩnh vực: </label></td>
                            <td>
                                <select name="id_lv" class="form-control" id="sel1">

                                    <?php $__currentLoopData = $linhvuc_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id_lv); ?>"><?php echo e($data->tenlv); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </select>
                            </td>
                        </tr>
                        
                        <tr style="background-color: white">
                            <td colspan="2" align="center">
                                <button type="submit" name="btn_submit" class="btn btn-success" style="width: 8em">Lưu</button>
                                <a href="/admin/tieuchidanhgia/danhsach" name="btn_back" class="btn btn-info" style="width: 8em">Back</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
</div>

           
     <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\TTTT\VNPT-Internship-2.git\trunk\core\resources\views/admin/tieuchidanhgia/sua.blade.php ENDPATH**/ ?>