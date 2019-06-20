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
                        </p>
                  
                    </div>
                        
                  <div  style=" background: #2267a2" id="menu">
                    <ul id="menu_top">
                      <li><a href="successlogin2">Trang chủ</a></li>
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
                      <button type="button" class="btn btn-default btn-sm">
                         
                          <a href="/main/logout"><img  src="<?php echo e(asset('css/logout.png')); ?>" style=" width: 27px;border-right-width: 7px;padding-right: 7px; margin-top: 7px ">Đăng xuất</a>
                        </button>  
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


       <div class="panel-body">
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
                    <form class="form-horizontal" method="POST" action="postsua">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('current-password') ? ' has-error' : ''); ?>">
                            <label for="new-password" class="col-md-4 control-label">Nhập mật khẩu</label>

                            <div class="col-md-6">
                                <input id="current-password" type="password" class="form-control" name="current-password" required>

                                <?php if($errors->has('current-password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('current-password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('new-password') ? ' has-error' : ''); ?>">
                            <label for="new-password" class="col-md-4 control-label">Mật khẩu mới</label>

                            <div class="col-md-6">
                                <input id="new-password" type="password" class="form-control" name="new-password" required>

                                <?php if($errors->has('new-password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('new-password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="new-password-confirm" class="col-md-4 control-label">Nhập lại mật khẩu mới</label>

                            <div class="col-md-6">
                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Lưu thay đổi
                                </button>
                            </div>
                        </div>
                    </form>
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






























<?php /**PATH D:\TTTT\VNPT-Internship-2.git\trunk\core\resources\views/sua.blade.php ENDPATH**/ ?>