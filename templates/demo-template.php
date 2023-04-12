<?php
/**
 * Template Name: Demo Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage FIA
 * @since 1.0.0
 */
get_header();
?>

<main id="site-content">

    <?php

    if ( have_posts() ) {

        while ( have_posts() ) {
            the_post();

            get_template_part( 'template-parts/content', get_post_type() );
        }
    }

    ?>

</main><!-- #site-content -->


<?php get_footer(); ?>
