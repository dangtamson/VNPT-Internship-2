<!-- <?php 
	session_start();
	  if (!isset($_SESSION['username']))
	  {
         header('Location: login.php'); 
       }
?> -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hệ thống khảo sát</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../../css/bootstrap1.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
     
     
    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/main/successlogin1" style="padding-left: 30px;">    QUẢN LÝ HỆ THỐNG</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <?php if(isset(Auth::user()->username)): ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  Xin chào:&nbsp; <?php echo e(Auth::user()->name); ?>             
                         <b class="caret"></b></a>
                    
                            <ul class="dropdown-menu">
                              <!-- User image -->
                              <li class="user-header" style="background-color: #3c8dbc; background:hover">
                                <div>
                                    <img src="https://static.myfigurecollection.net/pics/figure/big/796312.jpg" class="img-circle" alt="User Image" style="height: 75px;margin-left: 56px;">
                                </div>
                                <div align="center">
                                <p style="color: rgba(255,255,255,0.8);">
                                  <?php echo e(Auth::user()->name); ?> <br> <?php echo e(Auth::user()->username); ?><br>
                                  <small>Member since <?php echo e(Auth::user()->created_at); ?></small><br>
                                </p>
                                </div>
                              </li>
                              <!-- Menu Body -->
                              
                              <!-- Menu Footer-->
                              <li class="user-footer" style="background-color: #f9f9f9;">
                            
                             <li class="divider"></li>
                             <li>
                                <a href="/main/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                              </li>
                            </ul>
                </li>
                 <?php else: ?>
                    <script>window.location = "/main";</script>
                <?php endif; ?>
            </ul>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- /.navbar-collapse -->
        </nav>
  <div id="page-wrapper">

<div class="controler- container-fluid">
<!-- Page Heading --><?php /**PATH E:\VNPT-Internship-2\trunk\core\resources\views/layouts/header.blade.php ENDPATH**/ ?>