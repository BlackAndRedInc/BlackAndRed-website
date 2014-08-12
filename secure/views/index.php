<?php
require_once 'projects.model.php';
require_once 'clients.model.php';
?>

<!doctype html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>black & red inc</title>
		<meta name="description" content="">
		<link href="/generated/css/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
		<link href="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.min.css" rel="stylesheet" type="text/css" />
		<link href="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.theme.css" rel="stylesheet" type="text/css" />
		</head>
	</head>
	<body>
		
		<script type="text/javascript">

			// BOOTSTRAP DATA
			var Data = {
				'clients': <?= json_encode(BlackAndRed_Model_Clients::get()); ?>,
				'projects': <?= json_encode(BlackAndRed_Model_Projects::get()); ?>,
			};

		</script>

		<div class="main">
			<a href="#who-are-they" class="hotspot who-are-they"></a>
			<a href="#what-do-they-do" class="hotspot what-do-they-do"></a>
			<a href="#who-do-they-serve" class="hotspot who-do-they-serve"></a>
			<a href="#how-to-contact-them" class="hotspot how-to-contact-them"></a>
			<section class="l-page-section section-home"id="home">
				<div class="content-wrapper">
					<h2>Everybody <br> be cool, <br> this is a <span class="highlight">deadline</span>. <span class="icon gun"></span></h2>
					<div class="section-content">
						<img src="images/jules.svg" alt="Jules Senior Agency Software Developer" class="jules">
					</div>
				</div>
				<div class="nav">
				</div>
			</section>
			<section class="l-page-section" id="who-are-they">
				<div class="content-wrapper">
					<h2><span class="highlight">Who</span> are they?</h2>
					<h3>Let’s get down to brass tacks, gentleman. If I was informed correctly, the clock is ticking.</h3>
					<p class="section-content">We are a team of highly trained software engineers, project managers, and designers with one goal: To get the job done, on-time, and when you need it. Whether it’s integrating with your team, picking up where the other guys left off, or starting from scratch, we have your back. </p>
					<p class="section-content">The deadline’s 30 days away. We’ll be there in 10.</p>
				</div>
				<div class="nav"></div>
			</section>
			<section class="l-page-section" id="what-do-they-do">
				<div class="content-wrapper">
					<h2><span class="highlight">What</span> do they do?</h2>
					<h3>We solve problems.</h3>
					<div class="section-content">We believe in accountability. We specialize in impossible time frames. <br> We love excellent code.</div>
					<ul class="bullet-list pull-left">
						<li>IOS & Android Apps</li>
						<li>Web App & SAAS</li>
						<li>E-Commerce</li>
						<li>REST/SOAP Compliant API</li>
						<li>Agile Project Management</li>
					</ul>
					<ul class="bullet-list pull-right">
						<li>JS</li>
						<li>Ruby</li>
						<li>PHP</li>
						<li>.NET</li>
						<li>Java</li>
					</ul>
				</div>
				<div class="nav-wrapper">
					<div class="nav"></div>
				</div>
			</section>
			<section class="l-page-section section-portfolio" id="who-do-they-serve">
				<div class="content-wrapper">
					<h2><span class="highlight">Who</span> do they serve?</h2>
					<h3>You’re sending the wolf?</h3>
					<div class="section-content">We work on the best with the best. Click through some of our work <br> below to get a sense of who we are and what we do.</div>
					<div id="portfolio-menu"></div>
					<div class="portfolio-slider">
						<img src="/images/laptop.svg" class="laptop">
						<div id="laptop-screen"></div>
						<div class="portfolio-description-wrapper">
							<p class="label">Agency:</p>
							<div class="display-logo" id="display-logo"></div>
							<div class="portfolio-detail" id="portfolio-detail"></div>
						</div>
					</div>
				</div>
				<div class="nav"></div>
			</section>
			<section class="l-page-section section-contact" id="how-to-contact-them">
				<div class="content-wrapper">
					<h2><span class="highlight">How</span> to contact them?</h2>
					<h3>You’re sending the wolf?</h3>
					<ul class="bullet-list">
						<li>p : 303.736.9924</li>
						<li>E : info@blackandred.io</li>
						<li>A : 1245 Pearl Street, Suite 200 <br> Boulder, Colorado 80302</li>
					</ul>
					<!-- <h3>Meet the leaders of Black & Red :</h3> -->
				</div>
				<div class="nav"></div>
			</section>
		</div>


		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script type="text/javascript">
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-47452134-1', 'blackandredconsulting.com');
			ga('send', 'pageview');
		</script>

		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.6.0/underscore-min.js"></script>
		<script type="text/javascript" src="js/lib/underscore-prototype/underscore-proto.js"></script>
		<script type="text/javascript" src="js/lib/creatable/creatable.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
