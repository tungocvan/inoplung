<?php

$data = getPost('gioi-thieu');	

	 // var_dump($vnkings->posts);
?>
<!-- Section About
================================================== -->
<section id="about">
	 <?php echo $data[0]['post_content'] ; ?> 
</section>