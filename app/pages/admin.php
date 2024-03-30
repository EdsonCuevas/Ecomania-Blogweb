<?php

  if(!logged_in()){
    redirect('login');
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

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../public/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Admin - Ecomania</title>
    

    <link href="<?=ROOT?>/../public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=ROOT?>/../public/assets/css/bootstrap-icons.css" rel="stylesheet">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

  </head>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="<?=ROOT?>/home">Ecomania</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="<?=ROOT?>/logout">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="nav flex-column">

            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 <?=$section == 'dashboard' ? 'active':''?>" aria-current="page" href="<?=ROOT?>/admin">
                <i class="bi bi-speedometer2"></i>
                Dashboard
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 <?=$section == 'users' ? 'active':''?>" aria-current="page" href="<?=ROOT?>/admin/users">
                <i class="bi bi-person"></i>
                Users
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 <?=$section == 'categories' ? 'active':''?>" aria-current="page" href="<?=ROOT?>/admin/categories">
                <i class="bi bi-tags"></i>
                Categories
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 <?=$section == 'posts' ? 'active':''?>" aria-current="page" href="<?=ROOT?>/admin/posts">
                <i class="bi bi-file-earmark-post"></i>
                Posts
              </a>
            </li>

          </ul>
        </div>
      </div>
    </div>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>
      <?php

          require_once $filename;

      ?>
    </main>
  </div>
</div>
<script src="<?=ROOT?>/../public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=ROOT?>/../public/assets/js/dashboard.js"></script>
</body>
</html>
