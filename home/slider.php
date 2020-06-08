<?php
	$data = getPostCateSlug('Banner Slider');
	$dem = count($data);
?>
<!-- Section Intro Slider
================================================== 
-->
<div id="carousel-example-generic" class="carousel intro slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<?php 
			for($i=0;$i<$dem;$i++){
				if($i==0){
					echo "<li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li>";
				}else{
					echo "<li data-target='#carousel-example-generic' data-slide-to='{$i}'></li>";
				}
			}
		?>
	</ol>
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<?php 
			foreach($data as $key => $value){
				if($key == 0 ){
					echo "
						<div class='item active' style='background-image:url({$value['img']})'>
							<div class='carousel-caption'>
								<h2 data-animation='animated bounceInDown'>
								{$value['title']}</h2>
								<h1 data-animation='animated bounceInUp'>
								MAI GIA <?php echo $dem; ?></h1>
								<a href='#' class='btn btn-ghost btn-lg' data-animation='animated fadeInLeft'>Start Tour</a><a href='#' class='btn btn-primary btn-lg' data-animation='animated fadeInRight'>Learn More</a>
							</div>
						</div>
						";
				}else{
					echo "
					<div class='item' style='background-image:url({$value['img']})'>
					<div class='carousel-caption'>
						<h2 data-animation='animated zoomInLeft'>
						{$value['title']}</h2>
						<h1 data-animation='animated zoomInRight'>
						Bootstrap Theme </h1>
						<a href='#' class='btn btn-ghost btn-lg' data-animation='animated bounceIn'>Start Tour</a><a href='#' class='btn btn-primary btn-lg' data-animation='animated bounceIn'>Learn More</a>
					</div>
					</div>
					";
				}
				
			}
		?>
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