<?php

/**
 * Template Name: Offsetting Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage FIA
 * @since 1.0.0
 */
get_header();
?>
<section class="BannerCommonsection themeBg">
    <div class="BannerCommonInnerParent bg" style="background-image: url('<?php the_field("op-banner_bg_img"); ?>');">
        <div class="wrapper">
            <div class="BannerCommonContentMain">
                <div class="BannerCommonTopLink NormalBtn NormalBtnSmall">
                    <a href="<?php echo site_url(); ?>"><span class="LeftAngleSmall"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="19" viewBox="0 0 11 19" fill="none">
                                <path d="M10 1.5L2 9.5L10 17.5" stroke="#64D855" stroke-width="2" stroke-linecap="round" />
                            </svg></span>back to home page</a>
                </div>
                <div class="BannerCommonBotContentsTop">
                    <div class="BannerCommonBotContents">
                        <div class="BannerCommonTopTitle medium fontGreen">
                            <p><?php the_field("op-report_year"); ?></p>
                        </div>
                        <div class="BannerCommonTitle fontWhite pt10">
                            <h1><?php the_title(); ?></h1>
                        </div>
                        <div class="BannerCommonBtn pt10 buttonBox">
                            <?php
                            $parent_page = get_the_title(wp_get_post_parent_id($post->ID));
                            ?>
                            <a href="<?php echo get_permalink($post->post_parent); ?>"><?php echo $parent_page; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content Image Group Section -->
<section class="ContentImgGrpSection themeBg pt80">
    <div class="wrapper">
        <div class="ContentImgGrpParent">
            <div class="ContentGrpTop fontWhite max985 marginRight" data-aos="fade-up">
                <?php the_field("op-banner_content"); ?>
            </div>
            <div class="ImgGrpTop pt80" data-aos="fade-up">
                <img src="<?php the_field("op-report_image"); ?>">
            </div>
            <div class="ContentGrpTop pt70 fontWhite max985 marginRight" data-aos="fade-up">
                <?php the_field("op-report_content"); ?>
            </div>
        </div>
    </div>
</section>
<?php
include get_template_directory() . '/partials/nextprevpage-link.php';
?>
<?php get_footer(); ?>