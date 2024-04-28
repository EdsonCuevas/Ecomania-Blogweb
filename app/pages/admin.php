<?php

  if(!logged_in()){
    redirect('login');
  }

  if(user('role') != 'admin'){
    redirect('noaccess');
  }

  $section = $url[1] ?? 'dashboard';
  $action  = $url[2] ?? 'view';
  $id      = $url[3] ?? 0;

  $filename = "../app/pages/admin/".$section.".php";

  if(!file_exists($filename)){
    $filename = "../app/pages/admin/404.php";
  }

  if($section == 'users'){
    require_once "../app/pages/admin/users-controller.php";
  }
  elseif($section == 'categories'){
    require_once "../app/pages/admin/categories-controller.php";
  }
  elseif($section == 'posts'){
    require_once "../app/pages/admin/posts-controller.php";
  }

?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Ecomania | Dashboard</title>
    <link rel="shortcut icon" href="<?=ROOT?>/../public/assets/imgs/icon.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?=ROOT?>/../public/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=ROOT?>/../public/assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href=".<?=ROOT?>/../public/assets/css/demo.css" rel="stylesheet" />
    
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="<?=ROOT?>/../public/assets/imgs/sidebar-5.jpg" data-color="green">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="<?=ROOT?>/home" class="simple-text">
                        Ecomania
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item <?=$section == 'dashboard' ? 'active':''?>">
                        <a class="nav-link" href="<?=ROOT?>/admin">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item <?=$section == 'users' ? 'active':''?>">
                        <a class="nav-link" href="<?=ROOT?>/admin/users">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li class="nav-item <?=$section == 'categories' ? 'active':''?>">
                        <a class="nav-link" href="<?=ROOT?>/admin/categories">
                            <i class="nc-icon nc-tag-content"></i>
                            <p>Categories</p>
                        </a>
                    </li>
                    <li class="nav-item <?=$section == 'posts' ? 'active':''?>">
                        <a class="nav-link" href="<?=ROOT?>/admin/posts">
                            <i class="nc-icon nc-single-copy-04"></i>
                            <p>Posts</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?=ROOT?>/admin"> Dashboard </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>

                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?=ROOT?>/logout">
                                    
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">

                    <?php

                        require_once $filename;

                    ?>
                    
                            
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="<?=ROOT?>/home">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="<?=ROOT?>/news">
                                    News
                                </a>
                            </li>
                            <li>
                                <a href="<?=ROOT?>/contact">
                                    Contact
                                </a>
                            </li>
                            <li>
                                <a href="<?=ROOT?>/about">
                                    About us
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="https://github.com/EdsonCuevas/Ecomania-Blogweb/graphs/contributors">Team 4</a>, made with love
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
</body>
<!--   Core JS Files   -->
<script src="<?=ROOT?>/../public/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?=ROOT?>/../public/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?=ROOT?>/../public/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?=ROOT?>/../public/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="<?=ROOT?>/../public/assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?=ROOT?>/../public/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="<?=ROOT?>/../public/assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="<?=ROOT?>/../public/assets/js/demo.js"></script>

</html>