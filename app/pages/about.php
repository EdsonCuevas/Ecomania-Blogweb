<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Ecomania | About</title>

	<link rel="stylesheet" href="<?=ROOT?>/../public/assets/css/gridder.css">
    <link rel="stylesheet" href="<?=ROOT?>/../public/assets/css/app.css">
	<link rel="shortcut icon" href="<?=ROOT?>/../public/assets/imgs/icon.png">
	<link rel="stylesheet" href="<?=ROOT?>/../public/assets/css/card-about.css">
	<link rel="stylesheet" href="<?=ROOT?>/../public/assets/css/post-styles.css">
    <meta name="theme-color " content="#ffffff ">
</head>
<body>

<header class="header graphic-4 ">
	<div class="container">
    <div class="navigation">
        <div class="row">
            <div class="tiny-4 small-4 medium-4">
				<label for="nav" class="nav-open"><i></i><i></i><i></i></label>	
                <a href="<?=ROOT?>/home" class="logo">
                    <img src="<?=ROOT?>/../public/assets/imgs/icon.png" alt="logo" style="width: 70px;">
                </a>
            </div>
            <?php include '../app/pages/includes/header.php';?>
        </div>
    </div>
</div>
	<div class="container">
		<div class="row">
			<div class="tiny-12 small-6 medium-6 tiny-center small-start">
				<h1>Who are we?</h1>
				<p style="font-size:1.35rem;">We are a small team of university developers, software engineering students, which made this blogweb project as part of an integrative project to solve the problem number 13 of the UN.</p>
			</div>
			<div class="tiny-12 small-6 medium-6 tiny-center small-end">
				<img src="./assets/img/graphic-17.svg" alt="">
			</div>
		</div>
	</div>
</header>

<svg style="background:transparent;position:relative;top:-50px;" width="100%" height="50px " viewBox="0 0 1440 130 " preserveAspectRatio="none " xmlns="http://www.w3.org/2000/svg " xmlns:xlink="http://www.w3.org/1999/xlink " style="transform-origin:50%50%;transform:rotateX(180deg);">
	<path  id="wave-bottom-white " fill="var(--clr-light)" d="M0,56.050526 C121.352261,18.683509 262.172393,0 422.460394,0 C662.892396,0 818.88453,115.474324 1058.94661,115.474324 C1218.988,115.474324 1342.92081,94.808741 1440,56 L1440,130 L0,130 L0,56.050526 Z " ></path>
</svg>

<main>
	<section>
		<div class="container ">
			<div class="row">
					<div class="card tiny-center">
						<img src="<?=ROOT?>/../public/assets/imgs/devs/elizaldi.jpg" class="card-img-top img-fluid" alt="Jefe Jeta Mayor">
						<div class="card-content">
							<h2 style="margin: 0px;">
								Alfredo
							</h2>
							<p style="color: black;">
								PROJECT MANAGER AND SECUNDARY PROGRAMMER
							</p>
							<br>
							<a href="mailto:aelizaldi@ucol.mx" class="a">aelizaldi@ucol.mx</a>
						</div>
					</div>

					<div class="card tiny-center">
						<img src="<?=ROOT?>/../public/assets/imgs/devs/edson.jpg" class="card-img-top img-fluid" alt="Jefe Jeta Mayor">
						<div class="card-content">
							<h2 style="margin: 0px;">
								Edson
							</h2>
							<p style="color: black;">
								LEAD DEVELOPER
							</p>
							<br>
							<a href="mailto:efelix@ucol.mx" class="a">efelix@ucol.mx</a>
						</div>
					</div>

					<div class="card tiny-center">
						<img src="<?=ROOT?>/../public/assets/imgs/devs/gus.jpg" class="card-img-top img-fluid" alt="Jefe Jeta Mayor">
						<div class="card-content">
							<h2 style="margin: 0px;">
								Gustavo
							</h2>
							<p style="color: black;">
								SUBDEVELOPER AND DEPUTY PROMOTER
							</p>
							<br>
							<a href="mailto:gaguilar7@ucol.mx" class="a">gaguilar7@ucol.mx</a>
						</div>
					</div>

					<div class="card tiny-center" id="move-card">
						<img src="<?=ROOT?>/../public/assets/imgs/devs/lutter.jpg" class="card-img-top img-fluid" alt="Jefe Jeta Mayor">
						<div class="card-content">
							<h2 style="margin: 0px;">
								Johan
							</h2>
							<p style="color: black;">
								SUBDEVELOPER
							</p>
							<br>
							<a href="mailto:jlutter@ucol.mx" class="a">jlutter@ucol.mx</a>
						</div>
					</div>

					<div class="card tiny-center">
						<img src="<?=ROOT?>/../public/assets/imgs/devs/heidy.jpg" class="card-img-top img-fluid" alt="Jefe Jeta Mayor">
						<div class="card-content">
							<h2 style="margin: 0px;">
								Heidy
							</h2>
							<p style="color: black;">
								SUBDEVELOPER
							</p>
							<br>
							<a href="mailto:hguzman2@ucol.mx" class="a">hguzman2@ucol.mx</a>
						</div>
					</div>

					
			</div>
		</div>
	</section>
</main>


<!--Footer--->

<?php include '../app/pages/includes/footer.php';?>

<script src="<?=ROOT?>/../public/assets/js/countUp.js"></script>
<script src="<?=ROOT?>/../public/assets/js/app.js"></script>

</body>
</html>



