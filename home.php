<?php
/**
 * The main template file
 * Template Name: home-template
 */
 define( 'TNV_CSS', get_template_directory_uri());
 get_header('home');
?>
<body id="page-top">
<?php 
	require_once('home/nav.php'); 
	require_once('home/slider.php'); 
	require_once('home/about.php'); 
	require_once('home/after-about.php'); 
	require_once('home/services.php'); 
	require_once('home/portfolio.php'); 
	require_once('home/team.php'); 
	require_once('home/testimonials.php'); 
	require_once('home/funfacts.php'); 
	require_once('home/pricing.php'); 
	require_once('home/after-pricing.php'); 
	require_once('home/timeline.php'); 
	require_once('home/social.php'); 
	require_once('home/contact.php'); 	
?>
<?php
	get_footer('home');
?>