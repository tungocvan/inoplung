<?php
/**
 * The main template file
 * Template Name: home-template
 */
 define( 'TNV_CSS', get_template_directory_uri());
 get_header('home');
?>
<body id="page-top">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand page-scroll" href="#page-top"><img src="<?php echo TNV_CSS;?>/img/logo.png" alt="logodayana"></a>
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			<li>
			<a class="page-scroll" href="#page-top">Home</a>
			</li>
			<li>
			<a class="page-scroll" href="#about">About</a>
			</li>
			<li>
			<a class="page-scroll" href="#services">Services</a>
			</li>
			<li>
			<a class="page-scroll" href="#portfolio">Work</a>
			</li>
			<li>
			<a class="page-scroll" href="#pricing">Pricing</a>
			</li>
			<li>
			<a class="page-scroll" href="#contact">Contact</a>
			</li>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>

<!-- Section Intro Slider
================================================== -->
<div id="carousel-example-generic" class="carousel intro slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<!-- First slide -->
		<div class="item active" style="background-image:url(https://devtemplate.xyz/demo/images/dayana/s1-min.jpg)">
			<div class="carousel-caption">
				<h2 data-animation="animated bounceInDown">
				In ốp lưng điện thoại chất lượng cao </h2>
				<h1 data-animation="animated bounceInUp">
				MAI GIA </h1>
				<a href="#" class="btn btn-ghost btn-lg" data-animation="animated fadeInLeft">Start Tour</a><a href="#" class="btn btn-primary btn-lg" data-animation="animated fadeInRight">Learn More</a>
			</div>
		</div>
		<!-- /.item -->
		<!-- Second slide -->
		<div class="item" style="background-image:url(https://devtemplate.xyz/demo/images/dayana/s2-min.jpg)">
			<div class="carousel-caption">
				<h2 data-animation="animated zoomInLeft">
				Responsive HTML Template </h2>
				<h1 data-animation="animated zoomInRight">
				Bootstrap Theme </h1>
				<a href="#" class="btn btn-ghost btn-lg" data-animation="animated bounceIn">Start Tour</a><a href="#" class="btn btn-primary btn-lg" data-animation="animated bounceIn">Learn More</a>
			</div>
		</div>
		<!-- /.item -->
		<!-- Third slide -->
		<div class="item" style="background-image:url(https://devtemplate.xyz/demo/images/dayana/s3-min.jpg)">
			<div class="carousel-caption">
				<h2 data-animation="animated bounceInLeft">
				Dayana by DevTemplate</h2>
				<h1 data-animation="animated bounceInRight">
				Happy Coding</h1>
				<a href="#" class="btn btn-ghost btn-lg" data-animation="animated zoomInRight">Start Tour</a><a href="#" class="btn btn-primary btn-lg" data-animation="animated zoomInRight">Learn More</a>
			</div>
		</div>
		<!-- /.item -->
	</div>
	<!-- /.carousel-inner -->
	<!-- Controls (currently displayed none from style.css)-->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
	</a>
</div>
<!-- /.carousel -->

<!-- Section About
================================================== -->
<section id="about">
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1 text-center">
			<h2 class="section-heading">IN ỐP LƯNG CÁ NHÂN VỚI TIÊU CHUẨN<br/>LÀM VIỆC VỚI <b>CÁC THƯƠNG HIỆU LỚN</b></h2>
			<hr>
			<p>
				 Khách hàng cá nhân luôn là ưu tiên hàng đầu của HATO, mỗi chiếc ốp lưng cá nhân được làm ra đều phải đạt những tiêu chuẩn khắt khe nhất như các đối tác doanh nghiệp.
			</p>
			<p>
				 Thợ in lành nghề tại MAIGIA Case luôn kiểm duyệt chặt chẽ trước khi giao đến tay khách hàng.
			</p>
			<p>
				 Mỗi chiếc ốp lưng được làm ra luôn chứa đựng sự nghiêm túc, cẩn thận và tâm huyết của cả tập thể MAIGIA Team – những con người trân quý cái đẹp.
			</p>
	</div>
</div>
</div>
</section>

<!-- Section after about
================================================== -->
<section class="no-padding">
<div class="equal-heights w-middle">
<div class="col-md-4 bg-primary">
	<div class="box">
		<h2>Make a Difference</h2>
		<p>
			 Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus.
		</p>
		<a href="#" class="btn btn-round btn-white btn-xl">Find a Cause!</a>
	</div>
</div>
<div class="col-md-4">
	<img src="https://devtemplate.xyz/demo/images/dayana/wom.jpg" alt="">
</div>
<div class="col-md-4 bg-dark">
	<div class="box">
		<h2>Real <b>Solutions</b></h2>
		<p>
			 The simplest acts of kindness are by far more powerful then a thousand heads bowing in prayer. Let us not forget that the real solution lies in a world in which charity will be unnecessary.
		</p>
	</div>
</div>
</div>
<div class="equal-heights w-middle">
<div class="col-md-4 bg-gray">
	<div class="box">
		<h2>Give <b>Cheerfully</b></h2>
		<p>
			 When we give cheerfully and accept gratefully, everyone is blessed. A bone to the dog is not charity. Charity is the bone shared with the dog, when you are just as hungry as the dog.
		</p>
	</div>
</div>
<div class="col-md-4 bg-darkgray">
	<div class="box">
		<h2>Real <b>Solutions</b></h2>
		<p>
			 The simplest acts of kindness are by far more powerful then a thousand heads bowing in prayer. Let us not forget that the real solution lies in a world in which charity will be unnecessary.
		</p>
	</div>
</div>
<div class="col-md-4 bg-gray">
	<div class="box">
		<h2>Enjoy <b>Life</b></h2>
		<p>
			 The simplest acts of kindness are by far more powerful then a thousand heads bowing in prayer. Let us not forget that the real solution lies in a world in which charity will be unnecessary.
		</p>
	</div>
</div>
</div>
</section>
<div class="clearfix">
</div>

<!-- Section Services
================================================== -->
<section id="services">
<div class="container">
<div class="row">
	<div class="col-lg-12 text-center">
		<h2 class="section-heading">OUR <b>SERVICES</b></h2>
		<hr class="primary">
	</div>
</div>
</div>
<div class="container">
<div class="row">
	<!-- begin 1st row -->
	<div class="col-lg-4 col-md-6 text-center">
		<div class="service-box">
			<div class="iconbox bg-primary">
				<i class="fa fa-2x fa-trophy wow bounceIn text-fade"></i>
			</div>
			<h3>Bootstrap Template</h3>
			<p class="text-muted">
				 Duis at risus dignissim, mollis augue quis, congue leo. Curabitur sed lacus ut lectus pharetra malesuada et sit amet ligula.
			</p>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 text-center">
		<div class="service-box">
			<div class="iconbox bg-dark">
				<i class="fa fa-2x fa-cloud wow bounceIn text-fade" data-wow-delay=".1s"></i>
			</div>
			<h3>Responsive Layout</h3>
			<p class="text-muted">
				 Duis at risus dignissim, mollis augue quis, congue leo. Curabitur sed lacus ut lectus pharetra malesuada et sit amet ligula.
			</p>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 text-center">
		<div class="service-box">
			<div class="iconbox bg-primary">
				<i class="fa fa-2x fa-newspaper-o wow bounceIn text-fade" data-wow-delay=".2s"></i>
			</div>
			<h3>Theme Support</h3>
			<p class="text-muted">
				 Duis at risus dignissim, mollis augue quis, congue leo. Curabitur sed lacus ut lectus pharetra malesuada et sit amet ligula.
			</p>
		</div>
	</div>
</div>
<!-- end 1st row -->
<br/>
<div class="row">
	<!-- begin 2nd row -->
	<div class="col-lg-4 col-md-6 text-center">
		<div class="service-box">
			<div class="iconbox bg-dark">
				<i class="fa fa-2x fa-yelp wow bounceIn text-fade"></i>
			</div>
			<h3>MultiPurpose Use</h3>
			<p class="text-muted">
				 Duis at risus dignissim, mollis augue quis, congue leo. Curabitur sed lacus ut lectus pharetra malesuada et sit amet ligula.
			</p>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 text-center">
		<div class="service-box">
			<div class="iconbox bg-primary">
				<i class="fa fa-2x fa-wordpress wow bounceIn text-fade" data-wow-delay=".1s"></i>
			</div>
			<h3>WordPress Available</h3>
			<p class="text-muted">
				 Duis at risus dignissim, mollis augue quis, congue leo. Curabitur sed lacus ut lectus pharetra malesuada et sit amet ligula.
			</p>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 text-center">
		<div class="service-box">
			<div class="iconbox bg-dark">
				<i class="fa fa-2x fa-desktop wow bounceIn text-fade" data-wow-delay=".2s"></i>
			</div>
			<h3>Infinite Colors</h3>
			<p class="text-muted">
				 Duis at risus dignissim, mollis augue quis, congue leo. Curabitur sed lacus ut lectus pharetra malesuada et sit amet ligula.
			</p>
		</div>
	</div>
</div>
<!-- end 2nd row -->
</div>
</section>
<div class="clearfix">
</div>

<!-- Section Team
================================================== -->
<section class="no-padding">
<div class="col-md-4 bg-primary no-padding teambox">
<div class="team-thumb overlay-image view-overlay">
	<img src="https://devtemplate.xyz/demo/images/dayana/beauty_dayana_women_01.jpg" alt="" class="img-responsive">
	<div class="mask team_quote">
		<div class="port-zoom-link">
			<p>
				 Its is great to work in such company, some other projects will be started in the same format!
			</p>
		</div>
	</div>
</div>
<h2>BEVERLY GARCIA</h2>
<p>
	 VOLUNTEER WORK
</p>
<div class="team-social">
	<a href="#"><i class="fa fa-twitter"></i></a>
	<a href="#"><i class="fa fa-linkedin"></i></a>
	<a href="#"><i class="fa fa-facebook"></i></a>
	<a href="#"><i class="fa fa-google-plus"></i></a>
	<a href="#"><i class="fa fa-skype"></i></a>
</div>
</div>
<div class="col-md-4 bg-dark no-padding teambox">
<div class="team-thumb overlay-image view-overlay">
	<img src="https://devtemplate.xyz/demo/images/dayana/beauty_dayana_women_02.jpg" alt="" class="img-responsive">
	<div class="mask team_quote">
		<div class="port-zoom-link">
			<p>
				 Its is great to work in such company, some other projects will be started in the same format!
			</p>
		</div>
	</div>
</div>
<h2>MARY LACOSTE</h2>
<p>
	 dayana FOUNDER
</p>
<div class="team-social">
	<a href="#"><i class="fa fa-twitter"></i></a>
	<a href="#"><i class="fa fa-linkedin"></i></a>
	<a href="#"><i class="fa fa-facebook"></i></a>
	<a href="#"><i class="fa fa-google-plus"></i></a>
	<a href="#"><i class="fa fa-skype"></i></a>
</div>
</div>
<div class="col-md-4 bg-primary no-padding teambox">
<div class="team-thumb overlay-image view-overlay">
	<img src="https://devtemplate.xyz/demo/images/dayana/beauty_dayana_women_03.jpg" alt="" class="img-responsive">
	<div class="mask team_quote">
		<div class="port-zoom-link">
			<p>
				 Its is great to work in such company, some other projects will be started in the same format!
			</p>
		</div>
	</div>
</div>
<h2>CAROL STEPHENS</h2>
<p>
	 PUBLIC RELATIONS
</p>
<div class="team-social">
	<a href="#"><i class="fa fa-twitter"></i></a>
	<a href="#"><i class="fa fa-linkedin"></i></a>
	<a href="#"><i class="fa fa-facebook"></i></a>
	<a href="#"><i class="fa fa-google-plus"></i></a>
	<a href="#"><i class="fa fa-skype"></i></a>
</div>
</div>
</section>
<div class="clearfix">
</div>

<!-- Section Testimonials
================================================== -->
<section id="testimonials">
<div class="container">
<div class="row">
	<div class="col-md-12" data-wow-delay="0.2s">
		<div class="carousel slide" data-ride="carousel" id="quote-carousel">
			<!-- Bottom Carousel Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://devtemplate.xyz/demo/images/dayana/testimonial1.jpg" alt="">
				</li>
				<li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://devtemplate.xyz/demo/images/dayana/testimonial2.jpg" alt="">
				</li>
			</ol>
			<!-- Carousel Slides / Quotes -->
			<div class="carousel-inner text-center">
				<!-- Quote 1 -->
				<div class="item active">
					<blockquote>
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore!
								</p>
								<small>William W. Purkey</small>
							</div>
						</div>
					</blockquote>
				</div>
				<!-- Quote 2 -->
				<div class="item">
					<blockquote>
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
								</p>
								<small>Johnny Doe</small>
							</div>
						</div>
					</blockquote>
				</div>
				<!-- End Quote 2 -->
			</div>
			<!-- Carousel Buttons Next/Prev -->
			<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
			<a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
		</div>
	</div>
</div>
</div>
</section>

<!-- Section Fun Facts
================================================== -->
<section id="funfacts" class="parallax parallax-image" style="background-image:url(https://devtemplate.xyz/demo/images/dayana/glamour_1280.jpg);">
<div class="wrapsection">
<div class="container">
	<div class="parallax-content">
		<div class="row">
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<i class="fa fa-tint"></i>
					</div>
					<h2 class="counter" data-from="0" data-to="294" data-speed="2500"></h2>
					<h4>Happy Clients</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<i class="fa fa-trophy"></i>
					</div>
					<h2 class="counter" data-from="0" data-to="163" data-speed="2500"></h2>
					<h4>Awards Received</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<i class="fa fa-send-o"></i>
					</div>
					<h2 class="counter" data-from="0" data-to="317" data-speed="2500"></h2>
					<h4>Letters Sent</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<i class="fa fa-user"></i>
					</div>
					<h2 class="counter" data-from="0" data-to="458" data-speed="2500"></h2>
					<h4>Hired People</h4>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<div class="clearfix">
</div>

<!-- Section Portfolio
================================================== -->
<section id="portfolio">
<div class="container">
<div class="row">
	<div class="col-lg-12 text-center">
		<h2 class="section-heading"><b>PORTFOLIO</b></h2>
		<hr class="primary">
		<br/>
	</div>
</div>
</div>
<div class="container-fluid">
<div class="row no-gutter">
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="portfolio-box">
		<img src="https://devtemplate.xyz/demo/images/dayana/awesome_dayana_women_01.jpg" class="img-responsive" alt="">
		<div class="portfolio-box-caption">
			<div class="portfolio-box-caption-content">
				<div class="project-category text-faded">
					 Category
				</div>
				<div class="project-name">
					 Project Name
				</div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="portfolio-box">
		<img src="https://devtemplate.xyz/demo/images/dayana/awesome_dayana_women_02.jpg" class="img-responsive" alt="">
		<div class="portfolio-box-caption">
			<div class="portfolio-box-caption-content">
				<div class="project-category text-faded">
					 Category
				</div>
				<div class="project-name">
					 Project Name
				</div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="portfolio-box">
		<img src="https://devtemplate.xyz/demo/images/dayana/awesome_dayana_women_03.jpg" class="img-responsive" alt="">
		<div class="portfolio-box-caption">
			<div class="portfolio-box-caption-content">
				<div class="project-category text-faded">
					 Category
				</div>
				<div class="project-name">
					 Project Name
				</div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="portfolio-box">
		<img src="https://devtemplate.xyz/demo/images/dayana/awesome_dayana_women_04.jpg" class="img-responsive" alt="">
		<div class="portfolio-box-caption">
			<div class="portfolio-box-caption-content">
				<div class="project-category text-faded">
					 Category
				</div>
				<div class="project-name">
					 Project Name
				</div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="portfolio-box">
		<img src="https://devtemplate.xyz/demo/images/dayana/awesome_dayana_women_05.jpg" class="img-responsive" alt="">
		<div class="portfolio-box-caption">
			<div class="portfolio-box-caption-content">
				<div class="project-category text-faded">
					 Category
				</div>
				<div class="project-name">
					 Project Name
				</div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="portfolio-box">
		<img src="https://devtemplate.xyz/demo/images/dayana/awesome_dayana_women_06.jpg" class="img-responsive" alt="">
		<div class="portfolio-box-caption">
			<div class="portfolio-box-caption-content">
				<div class="project-category text-faded">
					 Category
				</div>
				<div class="project-name">
					 Project Name
				</div>
			</div>
		</div>
		</a>
	</div>
</div>
</div>
</section>

<!-- Section Pricing
================================================== -->
<section id="pricing" class="no-padding">
<div class="container">
<div class="row">
	<div class="col-lg-12 text-center">
		<h2 class="section-heading"><b>PRICING</b></h2>
		<hr class="primary">
		<br/>
	</div>
</div>
</div>
<div class="container">
<div class="row">
	<div class="wow-pricing-table col-md-4">
		<div class="wow-pricing">
			<div class="wow-pricing-header">
				<h5>Silver</h5>
				<div class="wow-pricing-cost">
					 $69.99
				</div>
				<div class="wow-pricing-per">
					 per month
				</div>
			</div>
			<div class="wow-pricing-content">
				<ul>
					<li>5 products</li>
					<li>1 image per product</li>
					<li>basic stats</li>
					<li>non commercial</li>
				</ul>
			</div>
			<div class="wow-pricing-button">
				<a href="#" class="wow-button buttonprice" target="_self" rel="nofollow"><span class="wow-button-inner">Sign Up</span></a>
			</div>
		</div>
	</div>
	<!-- /.col-md-4 -->
	<div class="wow-pricing-table col-md-4">
		<div class="wow-pricing featured">
			<div class="wow-pricing-header">
				<h5>Premium</h5>
				<div class="wow-pricing-cost">
					 $339.99
				</div>
				<div class="wow-pricing-per">
					 per month
				</div>
			</div>
			<div class="wow-pricing-content">
				<ul>
					<li>5 products</li>
					<li>1 image per product</li>
					<li>basic stats</li>
					<li>non commercial</li>
				</ul>
			</div>
			<div class="wow-pricing-button">
				<a href="#" class="wow-button buttonprice" target="_self" rel="nofollow"><span class="wow-button-inner">Sign Up</span></a>
			</div>
		</div>
	</div>
	<!-- /.col-md-4 -->
	<div class="wow-pricing-table col-md-4">
		<div class="wow-pricing">
			<div class="wow-pricing-header">
				<h5>Ultim</h5>
				<div class="wow-pricing-cost">
					 $429.99
				</div>
				<div class="wow-pricing-per">
					 per month
				</div>
			</div>
			<div class="wow-pricing-content">
				<ul>
					<li>15 products</li>
					<li>4 image per product</li>
					<li>premium stats</li>
					<li>commercial</li>
				</ul>
			</div>
			<div class="wow-pricing-button">
				<a href="#" class="wow-button buttonprice" target="_self" rel="nofollow"><span class="wow-button-inner">Sign Up</span></a>
			</div>
		</div>
	</div>
	<!-- /.col-md-4 -->
</div>
</div>
</section>
<div class="clearfix">
</div>

<!-- Section after pricing
================================================== -->
<section>
<div class="equal-heights w-middle">
<div class="col-md-4 bg-primary">
	<div class="box">
		<h2>Final <b>Action</b></h2>
		<p>
			 Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus.
		</p>
		<a href="#" class="btn btn-round btn-white btn-xl">Action Button</a>
	</div>
</div>
<div class="col-md-4" style="height: 337px;">
	<img src="https://devtemplate.xyz/demo/images/dayana/cat.jpg" alt="">
</div>
<div class="col-md-4 bg-dark">
	<div class="box">
		<h2><b>Convinced</b> Yet</h2>
		<p>
			 The simplest acts of kindness are by far more powerful then a thousand heads bowing in prayer. Let us not forget that the real solution lies in a world in which charity will be unnecessary.
		</p>
	</div>
</div>
</div>
</section>
<div class="clearfix">
</div>

<!-- Section Timeline
================================================== -->
<section id="tline">
<div class="container">
<div class="row">
	<div class="col-lg-12 text-center">
		<h2 class="section-heading"><b>Timeline</b></h2>
	</div>
</div>
</div>
<br/>
<div class="container">
<div class="row">
	<div class="col-md-12">
		<ul class="tline-holder">
			<!-- tline ITEM-->
			<li class="tline-item-left wow fadeInLeft">
			<div class="tline-item-content">
				<div class="date-icon fa fa-rocket">
				</div>
				<div class="tline-item-txt text-right">
					<div class="meta">
						 January 2017
					</div>
					<h3>Love Fashion</h3>
					<p>
						 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
					</p>
				</div>
			</div>
			</li>
			<!-- /tline-->
			<!-- tline-->
			<li class="tline-item-right wow fadeInRight">
			<div class="tline-item-content">
				<div class="date-icon fa fa-camera">
				</div>
				<div class="tline-item-txt text-left">
					<div class="meta">
						 December 2016
					</div>
					<h3>Green is Health</h3>
					<p>
						 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
					</p>
				</div>
			</div>
			</li>
			<!-- /tline-->
			<!-- tline-->
			<li class="tline-item-left wow fadeInLeft">
			<div class="tline-item-content">
				<div class="date-icon fa fa-user">
				</div>
				<div class="tline-item-txt text-right">
					<div class="meta">
						 November 2016
					</div>
					<h3>Why you love us</h3>
					<p>
						 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
					</p>
				</div>
			</div>
			</li>
			<!-- /tline-->
			<!-- tline-->
			<li class="tline-item-right wow fadeInRight">
			<div class="tline-item-content">
				<div class="date-icon fa fa-bullhorn">
				</div>
				<div class="tline-item-txt text-left">
					<div class="meta">
						 September 2016
					</div>
					<h3>Save our Planet</h3>
					<p>
						 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
					</p>
				</div>
			</div>
			</li>
			<!-- /tline-->
			<li class="tline-start">
			<div class="tline-start-content">
				<div class="tline-start-icon">
				</div>
				<a href="#" class="btn btn-primary bgn-xl wow zoomIn">START</a>
			</div>
			</li>
		</ul>
	</div>
</div>
</div>
</section>

<!-- Section Social
================================================== -->
<section id="social" class="parallax parallax-image" style="background-image:url(https://devtemplate.xyz/demo/images/dayana/s3-min.jpg);">
<div class="overlay" style="background:#222;opacity:0.5;">
</div>
<div class="wrapsection">
<div class="container">
	<div class="parallax-content">
		<div class="row wow fadeInLeft">
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
					<h4>Twitter</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<a href="#"><i class="fa fa-facebook"></i></a>
					</div>
					<h4>Facebook</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<a href="#"><i class="fa fa-google"></i></a>
					</div>
					<h4>Google</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<a href="#"><i class="fa fa-wordpress"></i></a>
					</div>
					<h4>Blog</h4>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<div class="clearfix">
</div>

<!-- Section Contact
================================================== -->
<section id="contact">
<div class="container">
<div class="row">
	<div class="col-md-8 col-md-offset-2 text-center">
		<h2 class="section-heading">CONTACT <b>US</b></h2>
		<hr class="primary">
		<p>
			 Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!
		</p>
		<div class="regularform">
			<div class="done">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					Your message has been sent. Thank you!
				</div>
			</div>
			<form method="post" action="contact.php" id="contactform" class="text-left">
				<input name="name" type="text" class="col-md-6 norightborder" placeholder="Your Name *">
				<input name="email" type="email" class="col-md-6" placeholder="E-mail address *">
				<textarea name="comment" class="col-md-12" placeholder="Message *"></textarea>
				<input type="submit" id="submit" class="contact submit btn btn-primary btn-xl" value="Send message">
			</form>
		</div>
	</div>
</div>
</div>
</section>

<?php
 get_footer('home');
?>