<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="<?=ROOT?>/../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Home - Ecomania</title>

    <link href="<?=ROOT?>/../public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?=ROOT?>/../public/assets/css/headers.css" rel="stylesheet">
    <link href="<?=ROOT?>/../public/assets/css/carousel.css" rel="stylesheet">
  </head>
  <body style="padding: 0;">
  <header class="d-flex flex-wrap justify-content-center py-3">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img src="<?=ROOT?>/../public/assets/imgs/icon.png" alt="" width="55" height="50" style="object-fit: cover;">
        <span class="fs-4">Ecomania</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="<?=ROOT?>/news" class="nav-link">News</a></li>
        <li class="nav-item"><a href="<?=ROOT?>/about" class="nav-link">About</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
      </ul>
    </header>

    <main>
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active"> 
        <img src="<?=ROOT?>/../public/assets/imgs/6.jpeg" alt="" width="100%" height="100%">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?=ROOT?>/../public/assets/imgs/3.jpg" alt="" width="100%" height="100%">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?=ROOT?>/../public/assets/imgs/7.jpg" alt="" width="100%" height="100%">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
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
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
        <!-- Reemplazar el rectángulo con la etiqueta image -->
        <image href="<?=ROOT?>/../public/assets/imgs/g4.gif" width="100%" height="100%" />
        </svg>

        <h2 class="fw-normal">Heading</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
        <!-- Reemplazar el rectángulo con la etiqueta image -->
        <image href="<?=ROOT?>/../public/assets/imgs/g1.gif" width="100%" height="100%" />
        </svg>        <h2 class="fw-normal">Recycling inMéxico</h2>
        <p>Data presented by Forbes shows that 68% of companies in México use recycled materials.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
        <!-- Reemplazar el rectángulo con la etiqueta image -->
        <image href="<?=ROOT?>/../public/assets/imgs/g3.gif" width="100%" height="100%" />
        </svg>
        <h2 class="fw-normal">Heading</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

  </div>


  <footer class="container">
    <div class="row">
        <div class="col-lg-4">
            <h5>Conócenos</h5>
            <p><a href="#">Quiénes somos</a></p>
            <p><a href="#">Noticias</a></p>
        </div>
        <div class="col-lg-4">
            <h5>Términos y condiciones</h5>
            <p><a href="#">Políticas de privacidad</a></p>
            <p>&copy; 2024 Universidad de Colima, Inc. Ecomania</p>
        </div>
        <div class="col-lg-4">
            <h5>Contactanos</h5>
            <p>ucol@ucol.mx</p>
            <p>Manzanillo, Colima</p>
        </div>
    </div>
    <p class="float-end"><a href="#">Volver arriba</a></p>
  </footer>
    </main>

 
    <script src="<?=ROOT?>/../public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
