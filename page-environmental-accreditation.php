<?php
/**
 * This is how you override a template based on the slug
 * Please check https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * Please also make sure in the CMS you also didn't select 'Archive' template, so this page-slug.php template takes over
*/
get_header();
include get_template_directory() . '/partials/banner-part.php';
?>

<section class="ContentImgGrpSection pt80">
  <div class="wrapper">
  <div class="ContentImgGrpParent">
    <?php 
    include get_template_directory() . '/partials/singlecolumn-content.php';
    include get_template_directory() . '/partials/imgrightside-content.php';
    include get_template_directory() . '/partials/icon-title-section.php';
    include get_template_directory() . '/partials/template-image-grid.php';
    include get_template_directory() . '/partials/projectreport-img.php';
    // include get_template_directory() . '/partials/projectdescription-content.php'; // DISABLED
    include get_template_directory() . '/partials/report-content.php';
    // include get_template_directory() . '/partials/reducecarbon-content.php'; // DEACTIVATED
    include get_template_directory() . '/partials/grouplogo-img.php';
    ?>
  </div>
  </div>
</section>

<?php
include get_template_directory() . '/partials/horizone-content.php';
include get_template_directory() . '/partials/fiateam-content.php';
// include get_template_directory() . '/partials/fia-twocolumn-content.php';
// include get_template_directory() . '/partials/greenbox-content.php'; // DISABLED
include get_template_directory() . '/partials/datacounter.php';
include get_template_directory() . '/partials/iconboxrepeater-content.php';
include get_template_directory() . '/partials/nextprevpage-link.php';   

?>

<?php
// print_r(get_post_ancestors( $post ));
if(empty(get_post_ancestors( $post ))) { // Works
  // echo "<h1>PARENT PAGE</h1>";
  include get_template_directory() . '/partials/blog-slider-section.php';

// } else {
  // echo "<h1>else</h1>";
}
?>

<?php get_footer(); ?>