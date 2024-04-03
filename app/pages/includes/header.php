<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title>Home - Ecomania</title>

  <link href="<?=ROOT?>/../public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?=ROOT?>/../public/assets/css/headers.css" rel="stylesheet">
  <link href="<?=ROOT?>/../public/assets/css/carousel.css" rel="stylesheet">
</head>

<body style="padding: 0; background-color: #D8F4CC;">

  <header class="p-3 mb-0 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="<?=ROOT?>/home" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
          <img src="<?=ROOT?>/../public/assets/imgs/icon.png" alt="" width="55" height="50">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="<?=ROOT?>/home" class="nav-link px-2 <?=$url[0] =='home' ? 'link-secondary':'link-body-emphasis'?>">Home</a></li>
          <li><a href="<?=ROOT?>/news" class="nav-link px-2 <?=$url[0] =='news' ? 'link-secondary':'link-body-emphasis'?>">News</a></li>
          <li><a href="<?=ROOT?>/about" class="nav-link px-2 <?=$url[0] =='about' ? 'link-secondary':'link-body-emphasis'?>">About</a></li>
          <li><a href="<?=ROOT?>/contact" class="nav-link px-2 <?=$url[0] =='contact' ? 'link-secondary':'link-body-emphasis'?>">Contact</a></li>
        </ul>

        <form action="<?=ROOT?>/search" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <div class="input-group">
            <input value="<?=$_GET['find'] ?? ''?>" name="find" type="search" class="form-control" placeholder="Search..." aria-label="Search">
            <button class="btn btn-success">Find</button>
          </div>
        </form>

        <?php if(!logged_in()):?>
          <div>
            <a href="<?=ROOT?>/login">
              <img src="<?=ROOT?>/../public/assets/imgs/user-icon.png" style="" width="36" height="36" class="rounded-circle">
            </a>
          </div>
        <?php endif;?>

        <?php if(logged_in()):?>
        <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            <img src="<?=get_image(user('image'))?>" style="object-fit: cover;" width="36" height="36" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="">Hi, <?=user('username')?></a></li>
            <li><a class="dropdown-item" href="<?=ROOT?>/admin">Admin</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="<?=ROOT?>/logout">Sign out</a></li>
          </ul>
        </div>
        <?php endif;?>

      </div>
    </div>
  </header>