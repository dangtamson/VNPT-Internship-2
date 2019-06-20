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
          <div style="width: 1140px;" class="box">
                        <div class="box_main">
                          <div id="support">
                            <table class="table table-hover table-striped">
                            <tbody>
                              <tr>
                                   <td>
                                        <div style="width: 550px;" class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="left">
                                          <div class="box">
                                              <div style="background: #eee;" class="box_top">
                                                 <p style="text-align: center;color: #286090;border: 20px">Thông tin nhân viên</p>    
                                              </div>
                                                  <div class="box_main">
                                                      <div id="support">
                                                        <table class="table table-hover table-striped">
                                                            <tbody>
                                                                <?php if(isset(Auth::user()->username)): ?>
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
                                                                       <?php $__currentLoopData = $phongban; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                          <?php if(auth::user()->id_pb == $pb->id_pb): ?>
                                                                            <?php echo e($pb->tenpb); ?>

                                                                          <?php endif; ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </td>
                                                                  </tr>
                                                                 
                                                                  <tr>
                                                                      <td>Chức vụ:</td>
                                                                      <td><?php $__currentLoopData = $chucvu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                          <?php if(auth::user()->id_cv == $cv->id_cv): ?>
                                                                            <?php echo e($cv->tencv); ?>

                                                                          <?php endif; ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td>Ngày tạo:</td>
                                                                      <td><?php echo e(auth::user()->created_at); ?></td>
                                                                  </tr>
                                                                <?php else: ?>
                                                                  <script>window.location = "/main";</script>
                                                                <?php endif; ?>  

                                                            </tbody> 
                                                        </table>
                                                      </div>
                                                  </div>
                                          </div>
                                        </div>
                                  </td>      
                                  <td style="padding-right: 0px;border-right-width: 65px;padding-left: 0px;">
                                        <div style="width: 550px;" class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="left">
                                          <div class="box">
                                              
                                                 
                                                      
                                                        <table class="table table-hover table-striped">
                                                            <tbody>
                                                                  <tr>
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
                                                                      <div>
                                                                          <img  src="<?php echo e(asset('css/avatar.png')); ?>" class="img-circle" alt="User Image" style="height: 75px;margin-left: 56px;">
                                                                      </div>
                                                                          <a href="khaosat"  style="margin-left: 68px;"> Khảo sát </a>
                                                                  </tr>
                                                            </tbody> 
                                                        </table>   
                                          </div>
                                        </div>
                                  </td>      
                              </tr>
                             </tbody> 
                            </table>
                          </div>
                        </div>    
          </div> 
        </div> 
      </div>
    </div>
  <div id="bg_footer" style="width: 1140px; margin-left: 105px; background: #2267a2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="footer">
                    <p>Bản quyền thuộc team_tttt@vnpt.com</p>              
                </div>
            </div>
        </div>
  </div>
  </body>
</html>






























<?php /**PATH E:\VNPT-Internship-2\trunk\core\resources\views/successlogin2.blade.php ENDPATH**/ ?>