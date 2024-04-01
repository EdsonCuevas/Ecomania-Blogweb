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
          <li><a href="<?=ROOT?>/home" class="nav-link px-2 link-secondary">Home</a></li>
          <li><a href="<?=ROOT?>/news" class="nav-link px-2 link-body-emphasis">News</a></li>
          <li><a href="<?=ROOT?>/about" class="nav-link px-2 link-body-emphasis">About</a></li>
          <li><a href="<?=ROOT?>/contact" class="nav-link px-2 link-body-emphasis">Contact</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" style="">
            <li><a class="dropdown-item" href="<?=ROOT?>/admin">Admin</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="<?=ROOT?>/logout">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <main>
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?=ROOT?>/../public/assets/imgs/6.jpeg" alt="" width="100%" height="100%">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
          </svg>
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Example headline.</h1>
              <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
              <p><a class="btn btn-lg btn-success" href="#">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?=ROOT?>/../public/assets/imgs/3.jpg" alt="" width="100%" height="100%">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg btn-success" href="#">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?=ROOT?>/../public/assets/imgs/7.jpg" alt="" width="100%" height="100%">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>One more for good measure.</h1>
              <p>Some representative placeholder content for the third slide of this carousel.</p>
              <p><a class="btn btn-lg btn-success" href="#">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
            <!-- Reemplazar el rectángulo con la etiqueta image -->
            <image href="<?=ROOT?>/../public/assets/imgs/g4.gif" width="100%" height="100%" />
          </svg>
          <h2 class="fw-normal">Heading</h2>
          <p>Some representative placeholder content for the three columns of text below the carousel. This is the first
            column.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
            <!-- Reemplazar el rectángulo con la etiqueta image -->
            <image href="<?=ROOT?>/../public/assets/imgs/g1.gif" width="100%" height="100%" />
          </svg>
          <h2 class="fw-normal">Recycling in México</h2>
          <p>Data presented by Forbes shows that 68% of companies in México use recycled materials.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
            <!-- Reemplazar el rectángulo con la etiqueta image -->
            <image href="<?=ROOT?>/../public/assets/imgs/g3.gif" width="100%" height="100%" />
          </svg>
          <h2 class="fw-normal">Heading</h2>
          <p>And lastly this, the third column of representative placeholder content.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

    </div>

    <!--Box-COntent-->
    <div class="col-lg-8 mx-auto" style="padding: 10px; margin-top: 100px;">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1"> What is Ecomania? <span class="text-body-secondary">A simple
              school project?.</span></h2>
          <p class="lead">We are a team united by the cause of climate action, our initiative is focused on addressing
            the challenges of climate change and actively contribute to Sustainable Development Goal number 13 of the
            ONU.</p>
        </div>
        <div class="col-md-5">
          <img src="<?=ROOT?>/../public/assets/imgs/8.jpg" alt="" width="100%" height="100%">

        </div>
      </div>

      <!---News---->

      <div class="container" style="margin-top: 100px;">
        <div class="row">

          <?php

            $query = "select * from posts order by id desc limit 6";
            $rows = query($query);
            if($rows){

              foreach($rows as $row){
                include '../app/pages/includes/post-card.php';
              }

            }else {
              echo "No items found!";
            }

            

          ?>

        </div>
      </div>


  </main>

  <footer class="container" style="margin-top: 200px;">
    <div class="row">
      <div class="col-lg-4">
        <h5>Get to know us</h5>
        <p><a href="<?=ROOT?>/about">About us</a></p>
        <p><a href="<?=ROOT?>/news">News</a></p>
      </div>
      <div class="col-lg-4">
        <h5>Terms and Conditions</h5>
        <p><a href="#">Privacy Policy</a></p>
        <p>&copy; 2024 Universidad de Colima, Inc. Ecomania</p>
      </div>
      <div class="col-lg-4">
        <h5>Contact us</h5>
        <p>Ecomania2023@gmail.com</p>
        <p>Manzanillo, Colima</p>
      </div>
    </div>
    <p class="float-end"><a href="#">Back to top</a></p>

  </footer>

  <script src="<?=ROOT?>/../public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>