<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage FIA
 * @since 1.0.0
 */

 get_header();
 ?>
 <section class="allPageBannerMain">
	 <div class="pageMainContent">
		 <div class="wrapper">
			 <div class="pageTitle">
				 <h1><?php echo get_the_title($post->ID); ?></h1>
			 </div>
		 </div>
	 </div>
 </section>
 <?php
 get_footer();
 ?>