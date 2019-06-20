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

            <br><br>
            <form action="them" method="post" class="form-horizontal"> 
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                <div class="form-group">
                   
                            
    
                                
                                <label class="control-label" style="font-size: 17px" ><b>Lĩnh vực: </b></label>
                                <select name="id_lv" style="width: 700px"  class=" form-control productcategory" id="id_lv">
                                    
                                    <option value="0" disabled="true" selected="true">-Lĩnh vực-</option>
                                    <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($cat->id_lv); ?>"><?php echo e($cat->tenlv); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                                
                                <br>
                              
                                <label class="control-label" style="font-size: 17px"><b>Tiêu chí đánh giá: </b></label>
                                
                                <select name="id_ch" style="width: 700px" class="form-control productname">

                                    <option value="0" disabled="true" selected="true">-Tiêu chí đánh giá-</option>
                                </select>
                            <br>
                                
                                <label class="control-label" style="font-size: 17px"><b>Đợt khảo sát: </b></label>
                                &nbsp
                                <select name="id_ks" style="width: 700px" class="form-control">

                                    <option value="0" disabled="true" selected="true">-Chọn đợt khảo sát-</option>
                                    <?php $__currentLoopData = $khaosat_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id_ks); ?>"><?php echo e($data->tenks); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>


                            

                                
                            
                        
                        <!-- <tr style="background-color: white">
                            <td colspan="2" align="center"> -->
                                <br><br>
                               <center>
                                <button type="submit" name="btn_submit" class="btn btn-success" style="width: 8em">Thêm</button>
                            </center>
                            <!-- </td>
                        </tr> -->
                    </table>
                </div>
            </form>
        </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('change','.productcategory',function(){
            // console.log("hmm its change");

            var id_lv=$(this).val();
            // console.log(cat_id);
            var div=$(this).parent();

            var op=" ";

            $.ajax({
                type:'get',
                url:'<?php echo URL::to('findProductName'); ?>',
                data:{'id_lv':id_lv},
                success:function(data){
                    //console.log('success');

                    //console.log(data);

                    //console.log(data.length);
                    op+='<option value="0" selected disabled>Chọn tiêu chí đánh giá</option>';
                    for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].id_ch+'">'+data[i].noidungch+'</option>';
                   }

                   div.find('.productname').html(" ");
                   div.find('.productname').append(op);
                },
                error:function(){

                }
            });
        });

        

    });
</script>

     
     <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\TTTT\VNPT-Internship-2.git\trunk\core\resources\views/admin/phieukhaosat/them.blade.php ENDPATH**/ ?>