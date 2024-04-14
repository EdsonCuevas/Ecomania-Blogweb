<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Ecomania | About</title>

	<link rel="stylesheet" href="<?=ROOT?>/../public/assets/css/gridder.css">
    <link rel="stylesheet" href="<?=ROOT?>/../public/assets/css/app.css">
	<link rel="shortcut icon" href="<?=ROOT?>/../public/assets/imgs/icon.png">

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
				<h1>How does it work?</h1>
				<p style="font-size:1.35rem;">Calculating a website's carbon footprint is far from simple; however, we've invested numerous hours refining a method for this complex task. While our approach primarily relies on the latest data, it inevitably includes some elements of estimation. Therefore, consider the results as a general guide rather than precise science.</p>
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
			<div class="row ">
				<div class="tiny ">
					<h2>How do you calculate co2 emissions?</h2>
					<p>To determine the energy consumption and emissions of a web page, we utilize the subsequent datapoints:</p>
					<ol>
						<li>Website traffic</li>
						<li>Energy concentration of online data</li>
						<li>Power source of the data center</li>
						<li>Data transmission across the network</li>
						<li>Carbon footprint of electrical power</li>
					</ol>
					
					<h3>Energy concentration of online data</h3>
					<p>Energy is consumed at the data center, within telecom networks, and by the user's computer or mobile device. Naturally, this differs for each website and visitor, so we utilize an average value.</p>
					
					<h3>Carbon footprint of electrical power</h3>
					<p>The carbon footprint of grid electricity is derived from the global average for such electricity. For renewable electricity utilized in data centers, we apply a reduced carbon factor.</p>
					
					<h3>Power source of the data center</h3>
					<p>To estimate the energy source, we presume all websites utilize conventional grid electricity for both the telecoms network and end user, given our lack of specific insight. For energy consumption at the data center, we refer to <a href="https://www.thegreenwebfoundation.org/" target="_blank ">The Green Web Foundation (TGWF)</a> database to determine if green energy is in use. If it is, we adjust the carbon emissions for that segment of energy consumption. It's worth noting that The Green Web Foundation database lists data centers that buy regular grid electricity but offset their emissions. In the context of this calculator, we consider them equivalent.</p>
						
					<h3>Data transmission across the network</h3>
					<p>When a website loads, the energy consumption corresponds closely to the volume of data transmitted. We gauge the data sent during the webpage's loading and then factor in our energy usage figures. Additionally, we account for recurring visitors who might have cached website content on their devices.</p>
					
					<h3>Website traffic</h3>
					<p>By multiplying the carbon emissions per page view by the average annual page views, we can gauge the total yearly CO2 emissions.</p>
					
					<h3>The formula</h2>
					<p>While our approach primarily relies on the latest data, it inevitably includes some elements of estimation. Therefore, consider the results as a general guide rather than precise science.</p>
					<ul>
						<li><code>C</code> = CO2 in grams per page view</li>
						<li><code>B</code> = The total tranfer size of the website adjusted for returning visitors and cached data</li>
						<li><code>b</code> = The total number of bytes transferred.</li>
						<li><code>R</code> = Average percentage of returning visitors</li>
						<li><code>S</code> = Estimated percentage of data loaded on subsequent loads</li>
						<li><code>F</code> = Estimated percentage of first time viewers</li>
						<li><code>E</code> = Estimated energi consumption on data transfer</li>
						<li><code>e</code> = Energi consumption factor</li>
						<li><code>D</code> = Average energi consumption in datacenter</li>
						<li><code>U</code> = Average energi consumption on end-user device</li>
						<li><code>cr</code> = Renewable CO2 to data ratio</li>
						<li><code>cg</code> = Conventional CO2 to data ratio</li>
					</ul>

					<p>
						<code><strong>B</strong></code> = (<code>b</code> * <code>R</code>) + (<code>S</code> * <code>b</code> * <code>F</code>)
						<br>
						<code><strong>C</strong></code> = ((<code>B</code> * (<code>E</code> / <code>e</code>))</code> * <code>D</code> * <code>cr</code>) + (((<code>B</code> * <code>R</code>) + (<code>S</code> * <code>B</code> * <code>F</code>) * (<code>E</code> / <code>e</code>) * <code>U</code> * <code>cg</code>)
					</p>

					<h2>Which pages do you test?</h2>
					<p>The publicly available version of CO2 Observer is designed for simplicity, providing a basic gauge of website efficiency. While it tests only the single URL you input, you're free to test multiple distinct URLs.</p>
					<p>While any website can undergo testing, only those meeting the criteria below are listed in our rankings:</p>
					<ul>
						<li>Accessible to the public via a standard web browser.</li>
						<li>Features unique content for human readers, excluding placeholder pages, error notifications, demos, or other non-valuable pages</li>
						<li>Search engine-friendly.</li>
						<li>No login required.</li>
					</ul>


					<h2 id="how_we_grade ">How do you grade websites?</h2>

					<p>The final grade is determined using two scores.</p>
					<p>First, the size-score reflects how the site's total size compares to other sites we've scanned. Second, the performance-score is derived from the Google Lighthouse API.</p>
					<p>In the weighting process, the size-score carries a 35% weight, while the performance-score holds a 65% weight. Thus a site that ends up with a final score of <strong>0.81</strong> is graded <strong>A-</strong>.</p>
					<p>The grades are divided accordingly:</p>
					<ul>
						<li><code>&gt;= 0.90</code>: A+</li>
						<li><code>&gt;= 0.85</code>: A</li>
						<li><code>&gt;= 0.80</code>: A-</li>
						<li><code>&gt;= 0.75</code>: B+</li>
						<li><code>&gt;= 0.70</code>: B</li>
						
						<li><code>&gt;= 0.65</code>: C+</li>
						<li><code>&gt;= 0.45</code>: C</li>
						
						<li><code>&gt;= 0.30</code>: D+</li>
						<li><code>&gt;= 0.20</code>: D</li>
						
						<li><code>&gt;= 0.10</code>: E</li>
						<li><code>&lt; 0.10</code>: F</li>

					</ul>

					<h2>The test did not work on my website, why?</h2>
					<p>There are instances where our carbon calculator might struggle to accurately assess specific website addresses, primarily due to extended loading times leading to test timeouts, or DNS setting routing issues that hinder page loading. We recommend users to scrutinize their website’s load times and DNS settings, making adjustments as necessary to guarantee peak performance.</p>
					
					<h2>I utilize green hosting, yet your test indicates otherwise. Why?</h2>
					<p>
						There are instances where we might not detect green hosting due to several reasons
						<ul>
							<li>If your hosting provider hasn't registered your server's IP address with <a href="https://www.thegreenwebfoundation.org/" target="_blank ">The Green Web Foundation</a>, detection will be impossible. Kindly verify this with your hosting provider.</li>
							<li>When utilizing a CDN, the IP address of your primary web host remains unidentified to us, leading the test to consider the CDN provider as the host instead.</li>
							<li>There might be temporary periods where we can't retrieve results from <a href="https://www.thegreenwebfoundation.org/" target="_blank ">The Green Web Foundation</a> API. During such times, the test might incorrectly suggest that your website relies on standard energy. This issue is typically short-lived, so consider retesting on the following day.</li>
						</ul>
					</p>

					<h2>More info & documentation</h2>
					<p>
						<span class="icon-list-item ">
							<svg xmlns="http://www.w3.org/2000/svg " class="icon icon-tabler icon-tabler-file-type-pdf " width="24 " height="24 " viewBox="0 0 24 24 " stroke-width="2 " stroke="currentColor " fill="none " stroke-linecap="round " stroke-linejoin="round "><path stroke="none " d="M0 0h24v24H0z " fill="none "></path><path d="M14 3v4a1 1 0 0 0 1 1h4 "></path><path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4 "></path><path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6 "></path><path d="M17 18h2 "></path><path d="M20 15h-3v6 "></path><path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z "></path></svg>	
							<a href="/downloads/new-perspectives-on-internet-electricity-use-in-2030.pdf " download>New perspectives on internet electricity use in 2030</a>
						</span>
						<br>
						<span class="icon-list-item ">
							<svg xmlns="http://www.w3.org/2000/svg " class="icon icon-tabler icon-tabler-file-spreadsheet " width="24 " height="24 " viewBox="0 0 24 24 " stroke-width="2 " stroke="currentColor " fill="none " stroke-linecap="round " stroke-linejoin="round "><path stroke="none " d="M0 0h24v24H0z " fill="none "></path><path d="M14 3v4a1 1 0 0 0 1 1h4 "></path><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z "></path><path d="M8 11h8v7h-8z "></path><path d="M8 15h8 "></path><path d="M11 11v7 "></path></svg>
							<a href="/downloads/Supplement-EASL-2020-17.xlsx " download>Supplement EASL</a>
						</span>
						<br>
						<span class="icon-list-item ">
							<svg xmlns="http://www.w3.org/2000/svg " class="icon icon-tabler icon-tabler-file-type-csv " width="24 " height="24 " viewBox="0 0 24 24 " stroke-width="2 " stroke="currentColor " fill="none " stroke-linecap="round " stroke-linejoin="round "><path stroke="none " d="M0 0h24v24H0z " fill="none "></path><path d="M14 3v4a1 1 0 0 0 1 1h4 "></path><path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4 "></path><path d="M7 16.5a1.5 1.5 0 0 0 -3 0v3a1.5 1.5 0 0 0 3 0 "></path><path d="M10 20.25c0 .414 .336 .75 .75 .75h1.25a1 1 0 0 0 1 -1v-1a1 1 0 0 0 -1 -1h-1a1 1 0 0 1 -1 -1v-1a1 1 0 0 1 1 -1h1.25a.75 .75 0 0 1 .75 .75 "></path><path d="M16 15l2 6l2 -6 "></path></svg>
							<a href="/downloads/domains/majestic_million.csv " download>Majestic Million</a>
						</span>
						<br>
						<span class="icon-list-item ">
							<svg xmlns="http://www.w3.org/2000/svg " class="icon icon-tabler icon-tabler-file-type-csv " width="24 " height="24 " viewBox="0 0 24 24 " stroke-width="2 " stroke="currentColor " fill="none " stroke-linecap="round " stroke-linejoin="round "><path stroke="none " d="M0 0h24v24H0z " fill="none "></path><path d="M14 3v4a1 1 0 0 0 1 1h4 "></path><path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4 "></path><path d="M7 16.5a1.5 1.5 0 0 0 -3 0v3a1.5 1.5 0 0 0 3 0 "></path><path d="M10 20.25c0 .414 .336 .75 .75 .75h1.25a1 1 0 0 0 1 -1v-1a1 1 0 0 0 -1 -1h-1a1 1 0 0 1 -1 -1v-1a1 1 0 0 1 1 -1h1.25a.75 .75 0 0 1 .75 .75 "></path><path d="M16 15l2 6l2 -6 "></path></svg>
							<a href="/downloads/domains/builtwith-top1m-20230920.csv " download>Builtwith Top 1m</a>
						</span>
					</p>

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



