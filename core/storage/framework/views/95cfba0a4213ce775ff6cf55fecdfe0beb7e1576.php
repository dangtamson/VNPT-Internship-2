<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="index/css1/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/index/font-awesome1/4.5.0/css/index/font-awesome1.min.css">
    <link rel="stylesheet" type="text/css" href="index/css1/bootstrap.min.css">
    <script type="text/javascript" src="index/js1/jquery.js"></script>
    <script type="text/javascript" src="index/js1/jquery.js"></script>
    <script type="text/javascript" src="index/js1/wowslider.js"></script>
    <script type="text/javascript" src="index/js1/script.js"></script>
    <script type="text/javascript" src="index/js1/bootstrap.min.js"></script>
  </head>
  <body>
    <?php if(isset(Auth::user()->username)): ?>
    <div class="container">
      <div class="row">
                 <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" id="header">
                 
                    <div id="logo">
                        <p><img src="index/images1/logo1.jpg">
                        <button type="button" class="btn btn-default btn-sm">
                         
                          <a href="/main/logout"><img  src="<?php echo e(asset('css/logout.png')); ?>" style=" width: 27px;border-right-width: 7px;padding-right: 7px;">Thoát</a>
                        </button></p>
                  
                    </div>
                  <div  style=" background: #2267a2" id="menu">
                    <ul id="menu_top">
                      <li><a href="">Trang chủ</a></li>
                      <li><a href="">Giới thiệu</a></li>
                      <li><a href="">Thể thao</a></li>
                      <li><a href="">Giáo dục</a></li>
                      <li><a href="">Pháp luật</a></li>
                      <li><a href="">Giải trí</a></li>
                      <li><a href="">Xã hội</a></li>
                      <li><a href="">Thế giới</a></li>
                      <li><a href="">Sự kiện</a></li>
                      <li><a href="">Liên hệ</a></li>
                    </ul>
                    <div class="clearfix"></div>
                    <div id="search">
                      <form name="frmsearch" method="POST" action="">
                        <input type="text" name="ten" value="" placeholder="Tìm kiếm từ khóa">
                        <input type="submit" name="submit" value="Tìm kiếm">
                      </form>   
                    </div>
                  </div>
                 </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" id="slider">
          <div id="wowslider-container">
              <div class="ws_images">
                <ul>
                <li>
                  <a href=""><img src="index/images1/2.jpg" alt="The most strong and popular web design trend over last couple of years is a sliding horizontal panels also known as Sliders or Carousels. It is a very effective method to increase the web site usability and engage the user." title="" /></a>
                </li>
                <li>
                  <a href=""><img src="index/images1/3.jpg" alt="WOWSlider is a responsive jQuery image slider with amazing visual effects and tons of professionally made templates." title="team_tttt@vnptsoctrang" /></a>
                </li>
                <li><a href=""><img src="index/images1/4.jpg" alt="NO Coding - WOWSlider is packed with a point-and-click wizard to create fantastic sliders in a matter of seconds without coding and image editing."  /></a>F
                </li>
                <li><img src="index/images1/5.jpg" alt="How to create a slider in 7 seconds" title="" /></li>

              </ul>
            </div>
            <div class="ws_bullets">
              <div>
                <a href="#"><img src="index/images1/2.jpg" alt="CSS3 Slider"/></a>
                <a href="#"><img src="index/images1/3.jpg" alt="CSS Slideshow"/></a>
                <a href="#"><img src="index/images1/4.jpg" alt="CSS Gallery"/></a>
                <a href="#"><img src="index/images1/5.jpg" alt="How to create a slider in 7 seconds"/></a>

              </div>
            </div>
            </div>
          <script type="text/javascript" src="index/js1/wowslider.js"></script>
            <script type="text/javascript" src="index/js1/script.js"></script>
          </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="left">
          <div class="box">
                         <div style="background: #2267a2" class="box_top">
                          <p>Thông tin nhân viên</p>    
                         </div>
                         <div class="box_main">
                          <div id="support">
                            <table class="table table-hover table-striped">
        <THEAD>

           <table class="table table-hover table-striped">
                                                            <tbody>
                                                                
                                                                  <tr>
                                                                      <td>Họ tên:</td>
                                                                      <td><?php echo e(auth::user()->name); ?></td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td>Giới tính:</td>
                                                                      <td><?php if(auth::user()->gioitinh == 0): ?>
                                                                            <?php echo e('Nam'); ?>

                                                                          <?php elseif(auth::user()->gioitinh == 1): ?>
                                                                            <?php echo e('Nữ'); ?>

                                                                          <?php endif; ?></td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td>Tài khoản:</td>
                                                                      <td> <?php echo e(auth::user()->username); ?></td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td>Email:</td>
                                                                      <td><?php echo e(auth::user()->email); ?> </td>
                                                                  </tr>
                                                                  
                                                                  <tr>
                                                                      <td>Phòng ban:</td>
                                                                      <td>
                                                                       
                                                                        </td>
                                                                  </tr>
                                                                 
                                                                  <tr>
                                                                      <td>Chức vụ:</td>
                                                                      <td></td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td>Ngày tạo:</td>
                                                                      <td><?php echo e(auth::user()->created_at); ?></td>
                                                                  </tr>
                                                                

                                                            </tbody> 
                                                        </table>
       
        </THEAD>
        <tbody>
              
        </tbody>
      </table>
            </div>
            </div>
          </div>
         
           
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" id="center">
          
                    <div class="box_center">
                         <div style="border-bottom: 3px solid #286090" class="box_center_top">
                            <div style="background: #286090" class="box_center_top_l">
                                <a href="">Bảng khảo sát</a>     
                            </div>
                            <div style="border-left: 32px solid #286090" class="box_center_top_r"></div>
                            <div class="clearfix"></div>
                         </div>
                         <div class="box_center_main">

                           <form action="" method="post" class="form-horizontal"> 
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                <div class="form-group">
                    <center><h2><?php echo e($khaosat->tenks); ?></h2></center>
                    <table class="table table-hover">
                        <tr>
                            
                            <td><label class="control-label">Ngày bắt đầu: </label></td>
                            <td><label class="control-label">Ngày kết thúc: </label></td>
                            
                        </tr>
                        
                        <tr>
                            
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
                                    <th></th>

                                </tr>
                            </THEAD>
                            
                                <?php $__currentLoopData = $phieukhaosat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $__currentLoopData = $tieuchidanhgia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($khaosat->id_ks == $tc->id_ks && $tc->id_ch == $c->id_ch): ?>

                               
                               
                                     <tr align="left">                              
                                    <td><?php echo e($c->noidungch); ?></td>  
                                    <center></center>   
                                    <td><input type="radio" name="<?php echo e($tc->id_pks); ?>" value="1"></td>
                                    <td><input type="radio" name="<?php echo e($tc->id_pks); ?>" value="2"></td>
                                    <td><input type="radio" name="<?php echo e($tc->id_pks); ?>" value="3"></td>
                                    <td><input type="radio" name="<?php echo e($tc->id_pks); ?>" value="4"></td>
                                    <td><input type="radio" name="<?php echo e($tc->id_pks); ?>" value="5"></td>
                                    </center> 
                                   
                                    </tr>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                    </table>
                        
                   <tr><center><a name="nop"  class="btn btn-success" href="">Nộp khảo sát</a></center></tr>
                </div>
            </form>
                            
                         </div>
                    </div>            
        </div>        
      </div>
    </div>
  </div>
  <div id="bg_footer" style="width: 1145px; margin-left: 105px; background: #2267a2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="footer">
                    <p>Bản quyền thuộc team_tttt@vnpt.com</p>              
                </div>
            </div>
        </div>
  </div>
   <?php else: ?>
                                                                  <script>window.location = "/main";</script>
                                                                <?php endif; ?> 
  </body>
</html><?php /**PATH E:\VNPT-Internship-2\trunk\core\resources\views/khaosat.blade.php ENDPATH**/ ?>