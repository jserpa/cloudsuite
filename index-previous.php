<html lang="en">
 <head>
	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	 
	<title>Life Technologies CloudSuite</title>
	  
	<link href="http://www.lifetechnologies.com/etc/designs/lifetech/clientlibs/base.css" rel="stylesheet" />
	<link href="http://www.lifetechnologies.com/etc/designs/lifetech/clientlibs/sharedstatic.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>

	<!-- Important Owl stylesheet -->
	<link rel="stylesheet" href="owl-carousel/owl.carousel.css">
	 
	<!-- Default Theme -->
	<link rel="stylesheet" href="owl-carousel/owl.theme.css">
	 
	<!--  jQuery 1.7+  -->
	<script src="js/jquery-1.9.1.min.js"></script>
	 
	<!-- Include js plugin -->
	<script src="owl-carousel/owl.carousel.js"></script>

	<!--[if lte IE 8]>
	  <link href="http://www.lifetechnologies.com/etc/designs/lifetech/clientlibs/ie.css" rel="stylesheet" />
	<![endif]-->

	<!-- application specific styles here -->
	<link href="css/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
	 
	<script src="http://www.lifetechnologies.com/etc/designs/lifetech/clientlibs/base.js"></script>
	<!-- the following scripts call on jQuery 1.4.2 -->
	<script src="http://www.lifetechnologies.com/shared-static/scripts/global.js"></script>



	<script>
	$(document).ready(function() {
	 
	  $("#advanced-tools").owlCarousel({
	 
	      navigation : false, // Show next and prev buttons
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      singleItem:true
	 
	      // "singleItem:true" is a shortcut for:
	      // items : 1, 
	      // itemsDesktop : false,
	      // itemsDesktopSmall : false,
	      // itemsTablet: false,
	      // itemsMobile : false
	 
	  }),

	  	  $("#secure-storage").owlCarousel({
	 
	      navigation : false, // Show next and prev buttons
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      singleItem:true
	 
	      // "singleItem:true" is a shortcut for:
	      // items : 1, 
	      // itemsDesktop : false,
	      // itemsDesktopSmall : false,
	      // itemsTablet: false,
	      // itemsMobile : false
	 
	  }),

	  	  $("#easy-collaboration").owlCarousel({
	 
	      navigation : false, // Show next and prev buttons
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      singleItem:true
	 
	      // "singleItem:true" is a shortcut for:
	      // items : 1, 
	      // itemsDesktop : false,
	      // itemsDesktopSmall : false,
	      // itemsTablet: false,
	      // itemsMobile : false
	 
	  });
	 
	});
	</script>


 
</head>

<body>

	<div id="globalHeader">
		<?= file_get_contents('http://www.lifetechnologies.com/us/en/home/_jcr_content/globalHeader.anonymous.html'); ?>
	</div>

	<div class="content">
		<div class="container-wrap template-1-column home">
			<div id="blurred-image-container" class="hero">
				<div class="img-src" style="background-image:url('img/hero-bg-dark.jpg')">
					<div class="container">
						<div><img src="img/icon-cloudsuite.png" alt=""></div>
						<h1>Life Technologies CloudSuite</h1>
						<p>Built on a foundation of providing advanced analysis tools, secure storage, and easy collaboration fueled by superior performance fueled by superior performance.</p>
						<a href="#" class="btn btn-large btn-xl">Try it now ›</a>
					</div>
				</div>
				<div class="img-src blurred-image" style="background-image:url('img/hero-bg-blured.jpg');opacity:0">
					<div class="container">
					<div><img src="img/icon-cloudsuite.png" alt=""></div>
					<h1>Life Technologies CloudSuite</h1>
					<p>Built on a foundation of providing advanced analysis tools, secure storage, and easy collaboration fueled by superior performance fueled by superior performance.</p>
					<a href="#" class="btn btn-large btn-primary btn-xl">Try it now ›</a>
				</div>
			</div><!-- </blurred-image-container> -->
		</div><!-- </container-wrap> -->

		<div class="container">
			<div id="browsers">
				<p>CloudSuite is an immersive platform for scientific analysis which requires an up-to-date browser.</p>
				<ul class=”no-bullet”>
					<li class="browsers-icon-firefox">Version 16.x</li>
					<li class="browsers-icon-ie">Version 10.x</li>
					<li class="browsers-icon-chrome">Version 25.x</li>
					<li class="browsers-icon-safari">Version 5.x</li>
				</ul>
			</div>
		</div>
			

			<div class="container padd">
				<div id="advanced-tools">
					<div class="item">

						<div class="billboard gradient-one">
							<div class="span5 center">
								<h2 class="h2-oversized">Advanced tools</h2>
								<p>Life Technologies CloudSuite provides the analysis modules, research tools, service and support, and resources to drive your success.</p>
								<a href="~">Call to action text link ›</a>
							</div>
							<div class="span5 pull-right">
								<img src="img/instrument.png">
							</div>
						</div><!-- </billboard> -->

					</div><!-- </item> -->

					<div class="item">

						<div class="billboard gradient-one">
							<div class="span5 center">
								<h2 class="h2-oversized">Advanced tools</h2>
								<p>Life Technologies CloudSuite provides the analysis modules, research tools, service and support, and resources to drive your success.</p>
								<a href="~">Call to action text link ›</a>
							</div>
							<div class="span5 pull-right">
								<img src="img/instrument.png">
							</div>
						</div><!-- </billboard> -->

					</div><!-- </item> -->
				</div><!-- </advanced-tools> -->



				<div id="secure-storage">
					<div class="item">

						<div class="billboard">
							<div class="span5">
								<img src="img/storage.png">
							</div>
							<div class="textblock span5 center pull-right">
								<h2 class="h2-oversized">Secure storage</h2>
								<p>Life Technologies CloudSuite storage environment keeps your research data safe and secure while providing instant availability for analysis, evaluation, comparison, collaboration, or sharing.</p>
								<a href="~">Call to action text link ›</a>
							</div>
						</div><!-- </billboard> -->

					</div><!-- </item> -->


					<div class="item">

						<div class="billboard">
							<div class="span5">
								<img src="img/storage.png">
							</div>
							<div class="textblock span5 center pull-right">
								<h2 class="h2-oversized">Secure storage</h2>
								<p>Life Technologies CloudSuite storage environment keeps your research data safe and secure while providing instant availability for analysis, evaluation, comparison, collaboration, or sharing.</p>
								<a href="~">Call to action text link ›</a>
							</div>
						</div><!-- </billboard> -->

					</div><!-- </item> -->

				</div><!-- </secure-storage> -->


				<div id="easy-collaboration">
					<div class="item">

						<div class="billboard gradient-two">
							<div class="textblock span5 center">
								<h2 class="h2-oversized">Easy Collaboration</h2>
								<p>Life Technologies CloudSuite provides the analysis modules, research tools, service and support, and resources to drive your success.</p>
								<a href="~">Call to action text link ›</a>
							</div>
							<div class="span5 pull-right">
								<img src="img/colaboration.png">
							</div>
						</div><!-- </billboard> -->

					</div><!-- </item> -->

					<div class="item">

						<div class="billboard gradient-two">
							<div class="textblock span5 center">
								<h2 class="h2-oversized">Easy Collaboration</h2>
								<p>Life Technologies CloudSuite storage environment keeps your research data safe and secure while providing instant availability for analysis, evaluation, comparison, collaboration, or sharing.</p>
								<a href="~">Call to action text link ›</a>
							</div>
							<div class="span5 pull-right">
								<img src="img/colaboration.png">
							</div>
						</div><!-- </billboard> -->

					</div><!-- </item> -->
				</div><!-- </easy-collaboration> -->




			</div><!-- </container> -->
		</div><!-- </container-wrap> -->
	</div><!-- </content> -->



 
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-body">
    <iframe width="853" height="480" src="//www.youtube.com/embed/toRensptErg?rel=0" frameborder="0" allowfullscreen></iframe>
  </div>
</div>







	<div id="globalFooter">
		<?= file_get_contents('http://www.lifetechnologies.com/us/en/home/_jcr_content/globalFooter.anonymous.html'); ?>
	</div>

	<script>
$(document).ready(function() {
    $(window).scroll(function(e) {
        var s = $(window).scrollTop(),
            d = $(document).height(),
            c = $(window).height(),
            opacityVal = (s / 150);

        $('.blurred-image').css('opacity', opacityVal);
    });
});
	</script>
 
</body>
</html>
