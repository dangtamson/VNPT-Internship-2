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
<a href="khaosat">Khảo sát</a>

<?php /**PATH E:\VNPT-Internship-2\trunk\core\resources\views/successlogin.blade.php ENDPATH**/ ?>