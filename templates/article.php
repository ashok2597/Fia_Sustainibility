<?php
/**
 * Template Name: Article Template
 * Template Post Type: post, page
*/
get_header();
include get_template_directory() . '/partials/banner-part.php';
?>

<section class="ContentImgGrpSection pt80">
  <div class="wrapper">
  <div class="ContentImgGrpParent">
    <?php 
    include get_template_directory() . '/partials/singlecolumn-content.php';
    include get_template_directory() . '/partials/projectreport-img.php';
    include get_template_directory() . '/partials/projectdescription-content.php';
    include get_template_directory() . '/partials/report-content.php';
    include get_template_directory() . '/partials/reducecarbon-content.php';
    include get_template_directory() . '/partials/grouplogo-img.php';
    include get_template_directory() . '/partials/imgrightside-content.php';
    ?>
  </div>
  </div>
</section>

<?php
include get_template_directory() . '/partials/horizone-content.php';
include get_template_directory() . '/partials/fiateam-content.php';
include get_template_directory() . '/partials/fia-twocolumn-content.php';
include get_template_directory() . '/partials/greenbox-content.php';
include get_template_directory() . '/partials/datacounter.php';
include get_template_directory() . '/partials/iconboxrepeater-content.php';
include get_template_directory() . '/partials/nextprevpage-link.php';

get_footer();
?>