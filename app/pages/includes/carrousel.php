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