
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    
    <title>Ecomania | Contact</title>

    <link rel="stylesheet" href="<?=ROOT?>/../public/assets/css/gridder.css">
    <link rel="stylesheet" href="<?=ROOT?>/../public/assets/css/app.css">

    <meta name="theme-color " content="#ffffff ">
</head>
<body>

<header class="header graphic-4 ">
	<div class="container">
    <div class="navigation">
        <div class="row ">
            <div class="tiny-4 small-4 medium-4 ">
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
			<div class="tiny-12 tiny-center">
				<h1>Contact us</h1>
				<p style="font-size:1.35rem;">If you have any questions, contact us.</p>
			</div>
		</div>
	</div>
</header>

<svg style="background:transparent;position:relative;top:-50px;" width="100%" height="50px " viewBox="0 0 1440 130 " preserveAspectRatio="none " xmlns="http://www.w3.org/2000/svg " xmlns:xlink="http://www.w3.org/1999/xlink " style="transform-origin:50%50%;transform:rotateX(180deg);">
	<path  id="wave-bottom-white " fill="var(--clr-light)" d="M0,56.050526 C121.352261,18.683509 262.172393,0 422.460394,0 C662.892396,0 818.88453,115.474324 1058.94661,115.474324 C1218.988,115.474324 1342.92081,94.808741 1440,56 L1440,130 L0,130 L0,56.050526 Z " ></path>
</svg>

<main>
	<section id="articles ">
		<div class="container ">
			<div class="row ">

				<div class="tiny-12 small-10 medium-8 small-offset-1 medium-offset-2 ">

                    <form action="https://api.web3forms.com/submit" method="POST">
                        <input type="hidden" name="access_key" value="e0230737-e106-4974-9f36-9af4a2f965b1">
                        <label for="name ">Name <span class="required">(required)</span></label>
                        <input type="text " name="your-name" value="" size="40 " id="name " aria-label="Name" aria-required="true" aria-invalid="false " required placeholder="Your name here ">
                        
                        <label for="e-mail ">Email address <span class="required ">(required)</span></label>
                        <input type="email " name="your-email" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$ " size="40 " id="e-mail " aria-label="Email address " aria-required="true " aria-invalid="false " required placeholder="Your email here ">
                        
                        <label for="message ">Message <span class="required ">(required)</span></label>
                        <textarea name="message " rows="6" cols="25" id="message" aria-label="Message " aria-required="true " aria-invalid="false " required placeholder="Your message here "></textarea>

                        <footer>
                            <div class="button-group">
                                <input class="btn normal" type="submit" id="contactSubmit" value="Send message ">
                                <input class="btn normal outline " type="reset" value="Clear contact form ">
                            </div>
                        </footer>
                        
                    </form>

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

