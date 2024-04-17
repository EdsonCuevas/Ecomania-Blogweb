<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Ecomania | News</title>
    <link rel="stylesheet" href="<?=ROOT?>/./assets/css/gridder.css">
    <link rel="stylesheet" href="<?=ROOT?>/./assets/css/app.css">
	<link rel="shortcut icon" href="<?=ROOT?>/../public/assets/imgs/icon.png">

    <meta name="theme-color " content="#ffffff ">
</head>
<body>

<header class="header graphic-4 ">
	<div class="container ">
    <div class="navigation ">
        <div class="row ">
            <div class="tiny-4 small-4 medium-4 ">
                <label for="nav" class="nav-open"><i></i><i></i><i></i></label>
                <a href="<?=ROOT?>/home" class="logo">
                    <img src="<?=ROOT?>/../public/assets/imgs/icon.png" alt="logo" style="width: 70px;">
                </a>
            </div>
            <?php include '../app/pages/includes/header.php';?>
        </div>
    </div>
</div>

    <?php

    $slug = $url[1] ?? null;

    if($slug){
        $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id where posts.slug = :slug limit 1";
        $row = query_row($query, ['slug'=>$slug]);
    }

    ?>

	<div class="container ">
		<div class="row ">
			<div class="tiny-12 tiny-center">
				<h1>
                    <?=esc($row['title'])?>
                </h1>
                <p style="color: black;">
                    Category: 
                    <?=esc($row['category'] ?? 'Unknown')?>
                </p>
                <p style="color: black;">
                    Date release:
                    <?=date("jS M, Y",strtotime($row['date']))?>
                </p>
			</div>
		</div>
	</div>
</header>

<svg style="background:transparent;position:relative;top:-50px;" width="100%" height="50px " viewBox="0 0 1440 130 " preserveAspectRatio="none " xmlns="http://www.w3.org/2000/svg " xmlns:xlink="http://www.w3.org/1999/xlink " style="transform-origin:50%50%;transform:rotateX(180deg);">
	<path  id="wave-bottom-white " fill="var(--clr-light)" d="M0,56.050526 C121.352261,18.683509 262.172393,0 422.460394,0 C662.892396,0 818.88453,115.474324 1058.94661,115.474324 C1218.988,115.474324 1342.92081,94.808741 1440,56 L1440,130 L0,130 L0,56.050526 Z " ></path>
</svg>

<main>
	<section id="articles">
		<div class="container">
			<div class="row">

            <?php
			
			if(!empty($row)){ ?>

				<link rel="stylesheet" href="<?=ROOT?>/../public/assets/css/post-styles2.css">

                <div class="card" style="margin: 0 auto;">
                    <img src="<?=get_image($row['image'])?>" class="card-img-top">
                    <div class="card-content">  

                        <p>
                            <?=nl2br(esc($row['content']))?>
                        </p>

                    </div>
                </div>

            <?php
            
			}else {
			echo "No items found!";
			}

			?>
				
				


			</div>
		</div>
	</section>

    <div id="disqus_thread" style="margin: 100px;"></div>
        <script>
            var disqus_config = function () {
                this.page.url = window.location.href;  // Set the page URL to the current browser URL
                this.page.identifier = '<?= $slug ?>'; // Use PHP to dynamically output the slug
            };

            (function() {
                var d = document, s = d.createElement('script');
                s.src = 'https://EXAMPLE.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</main>

<!--Footer--->

<?php include '../app/pages/includes/footer.php';?>

<script src="<?=ROOT?>/../public/assets/js/countUp.js"></script>
<script src="<?=ROOT?>/../public/assets/js/app.js"></script>
<script id="dsq-count-scr" src="//your-disqus-shortname.disqus.com/count.js" async></script>

</body>
</html>

