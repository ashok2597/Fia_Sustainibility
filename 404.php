<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage FIA
 * @since 1.0.0
 */

get_header();
?>
<section class="errorPage">
	<div class="wrapper">
		<div class="erroParentContent" >
			<div class="page-header">
				<h1 class="page-title">Oops! That page can’t be found.</h1>
			</div>
			<div class="errorPageBtn button">
				<a href="<?php echo site_url(); ?>">GO TO HOME</a>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
