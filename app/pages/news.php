<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News - Ecomania</title>

    <link href="<?=ROOT?>/../public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <header class="p-3 mb-1">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="<?=ROOT?>/home" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
          <img src="<?=ROOT?>/../public/assets/imgs/icon.png" alt="" width="55" height="50">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="<?=ROOT?>/home" class="nav-link px-2 link-body-emphasis">Home</a></li>
          <li><a href="<?=ROOT?>/news" class="nav-link px-2 link-secondary">News</a></li>
          <li><a href="<?=ROOT?>/about" class="nav-link px-2 link-body-emphasis">About</a></li>
          <li><a href="<?=ROOT?>/contact" class="nav-link px-2 link-body-emphasis">Contact</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" style="">
            <li><a class="dropdown-item" href="<?=ROOT?>/admin">Admin</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?=ROOT?>/logout">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>


<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">News</h1>
        <p class="lead text-body-secondary">In this section, you will find current news highlights on one of the most pressing challenges facing our planet: climate change. Focusing our attention on Goal 13 of the UN's 2030 Agenda, "Climate Action," we aim to explore how this global phenomenon, accelerated by human activities such as the burning of fossil fuels and deforestation, is significantly impacting Mexico and the world.</p>
        <p>
          <a href="#" class="btn btn-success my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/../public/assets/imgs/GEI2.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Your image description" />
            <div class="card-body">
              <p class="card-text">This section highlights the most shocking news on climate change, highlighting the crucial role of greenhouse gases in global warming.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">10/03/2024</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/../public/assets/imgs/EnergiaRen.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Your image description" />
            <div class="card-body">
              <p class="card-text">In this section, we will examine how the latest trends in renewable energy and the energy transition are paving the way for a sustainable future.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">10/03/2024</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/../public/assets/imgs/biodiversidad.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Your image description" />
            <div class="card-body">
              <p class="card-text">In this segment, we will explore inspiring stories of ecosystem conservation and biodiversity protection. From local initiatives to global efforts.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">10/03/2024</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/../public/assets/imgs/Agricultura-sostenible.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Your image description" />
            <div class="card-body">
              <p class="card-text">In this space, we will focus on sustainable agriculture and farming practices, highlighting how ecological innovations and strategies are revolutionizing food production.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">10/03/2024</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/../public/assets/imgs/EAM.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Your image description" />
            <div class="card-body">
              <p class="card-text">In this section, discover how knowledge and awareness of environmental issues are empowering individuals and communities to make more responsible and committed decisions about caring for the planet.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">10/03/2024</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/../public/assets/imgs/politicas.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Your image description" />
            <div class="card-body">
              <p class="card-text">In this section, we will explore the scope of climate policy and regulations at the national and international levels. Find out how legislative frameworks and global agreements are laying the groundwork for effective climate action.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">10/03/2024</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/../public/assets/imgs/movilidad-urbana.png" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Your image description" />
            <div class="card-body">
              <p class="card-text">
              In this section, we will explore the topic of sustainable transport and urban mobility, highlighting the need for efficient and environmentally friendly travel in urban environments.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">10/03/2024</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/../public/assets/imgs/aguaSOS.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Your image description" />
            <div class="card-body">
              <p class="card-text">In this section, we will look at the sustainable management of water resources, a crucial aspect for the survival and wellbeing of our planet, and we will look at advanced strategies and technologies for their conservation and efficient use.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">10/03/2024</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?=ROOT?>/../public/assets/imgs/justiciaCLIM.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Your image description" />
            <div class="card-body">
              <p class="card-text">In this section, we address climate justice and equity in the fight against climate change, ensuring inclusive and equitable solutions for all communities, especially the most vulnerable.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-body-secondary">10/03/2024</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="container text-body-secondary py-3">
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
