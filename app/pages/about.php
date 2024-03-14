<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About - Ecomania</title>

    <link href="<?=ROOT?>/../public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>
    

    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
          <img src="<?=ROOT?>/../public/assets/imgs/icon.png" alt="" width="70" height="67">
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="<?=ROOT?>/home" class="nav-link px-2 link-success">Home</a></li>
        <li><a href="<?=ROOT?>/news" class="nav-link px-2 link-success">News</a></li>
        <li><a href="#" class="nav-link px-2 link-secondary">About</a></li>
        <li><a href="<?=ROOT?>/contact" class="nav-link px-2 link-success">Contact</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <a href="<?=ROOT?>/login"><button type="button" class="btn btn-success me-2">Login</button></a>
      </div>
    </header>


  <main>
  <div class="col-lg-8 mx-auto" style="padding: 10px;">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1"> What is Ecomania? <span class="text-body-secondary">A simple school project?.</span></h2>
        <p class="lead">Somos un equipo de estudiantes unidos por la causa de la acción climática. Nuestra iniciativa se centra en abordar los desafíos del cambio climático y contribuir activamente al Objetivo de Desarrollo Sostenible número 13 de la ONU, que pretende tomar medidas urgentes para combatir el cambio climático y sus impactos. A través de esfuerzos colaborativos y soluciones innovadoras, nos esforzamos por tener un impacto positivo en el medio ambiente e inspirar a otros a unirse a nosotros  </p>
      </div>
      <div class="col-md-5">
      <img src="<?=ROOT?>/../public/assets/imgs/8.jpg" alt="" width="100%" height="100%">

      </div>
    </div>

  

    <div class="row featurette" style="margin-top : 100px;">
      <div class="col-md-7 order-md-2 ">
        <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-body-secondary">See for yourself.</span></h2>
        <p class="lead">Ecomania is born through the review of the problems of humanity to promote environmental awareness and lead meaningful actions to mitigate the impacts of climate change that may be irreversible if urgent action is not taken, that is why greater will is needed to curb the temperature rise, we believe in the power of collaboration and community mobilization to generate a positive and sustainable change in our environment. We will continue to face the challenges of climate change with determination and creativity, inspiring others to join us in this crucial mission to protect our planet for generations to come.</p>
      </div>
      <div class="col-md-5 order-md-1 ">
      <img src="<?=ROOT?>/../public/assets/imgs/REF.jpg" alt="" width="100%" height="100%">
      </div>
    </div>

    

    <div class="row featurette" style="margin-top : 100px;">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">How can you help us. <span class="text-body-secondary">Share.</span></h2>
        <p class="lead">We firmly believe in the importance of raising awareness about the environmental challenges facing our planet and the need to promote meaningful actions to address them. By sharing our articles, tips and resources with others, you are helping to amplify our message and inspire more people to join the cause of caring for the environment. Together, we can make a difference and work towards a more sustainable and healthy future for all. Thank you for your support and for being part of our movement for a better world!.</p>
      </div>
      <div class="col-md-5">
      <img src="<?=ROOT?>/../public/assets/imgs/tierra.png" alt="" width="100%" height="100%">

      </div>
    </div>

    <hr class="featurette-divider">

  </div>
  </div>
      
      
  </main>
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
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
