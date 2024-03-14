<?php

if(!logged_in()){
  redirect('login');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Ecomania</title>

    <link href="<?=ROOT?>/../public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="<?=ROOT?>/home">Ecomania</a>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="<?=ROOT?>/logout">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create a new post</h1>
      </div>

    </main>
  </div>
</div>

  </body>
</html>
