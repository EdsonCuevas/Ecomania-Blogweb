<?php

  if(!logged_in()){
    redirect('login');
  }

  if(user('role') != 'admin'){
    redirect('editor/posts');
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
    <meta charset="utf-8"/>
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
    
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    
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
    
</body>
<!--   Core JS Files   -->
<script src="<?=ROOT?>/../public/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?=ROOT?>/../public/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?=ROOT?>/../public/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?=ROOT?>/../public/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Chartist Plugin  -->
<script src="<?=ROOT?>/../public/assets/js/plugins/chartist.min.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="<?=ROOT?>/../public/assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="<?=ROOT?>/../public/assets/js/demo.js"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

</html>