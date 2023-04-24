<?php get_header(); ?>

<section class="BannerSection overlayNew">
  <div class="BannerVideoParent">
        <video id="hero-video" class="video" muted="" autoplay="" loop="">
            <source src="<?php echo get_field("fp-banner_video"); ?>" type="video/mp4">
        </video>
        <div class="VideoContentsMain">
            <div class="wrapper">
                <div class="bannerContentParentMain">
                    <div class="bannerContentParent">
                        <div class="SectionTitle fontWhite uppercase">
                            <h1><?php echo get_field("fp-banner_heading"); ?></h1>
                        </div>
                        <div class="SectionSubTitle fontWhite pt25">
                            <h3><?php echo get_field("fp-banner_sub_heading"); ?></h3>
                        </div>
                        <div class="BannerBtn NormalBtn pt25">
                            <a href="<?php echo get_field("fp-banner_report_link"); ?>"><?php echo get_field("fp-banner_report_text"); ?><span class="dIcon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
                                        <path d="M21 21.75L1 21.75M11 1.25L11 18.25M11 18.25L18 11.25M11 18.25L4 11.25" stroke="#64D855" stroke-width="2" stroke-linecap="round" />
                                    </svg></span></a>
                        </div>
                    </div>
                    <div class="AngleBoxMain">
                        <div class="AngleImgTxt fontGreen">
                            <a href="javascript:void(0)"><img src="<?php echo get_field("fp-banner_scroll_img"); ?>"><span><?php echo get_field("fp-banner_scroll_text"); ?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Icon Section -->
<section class="IconTitleSection themeBg SectionSpace">
    <div class="IconTitleInnerParentMain">
        <div class="wrapper">
            <div class="SectionTitle" data-aos="fade-up">
                <h2><?php echo get_field('fp-ms_heading'); ?></h2>
            </div>
            <div class="IconTitleParent pt30 d_flex Mobile_wrap">
                <?php if (have_rows('fp-ms_icon_box')) : ?>

                    <?php while (have_rows('fp-ms_icon_box')) : the_row(); ?>
                        <div class="IconTitleBox mw100" data-aos="fade-up" data-aos-delay="500">
                            <div class="IconTitleInnerParent">
                                <div class="iconBox">
                                    <img src="<?php echo get_sub_field('fp-ms_icon_box_img'); ?>">
                                </div>
                                <div class="contentBox pt50 fontWhite">
                                    <?php echo get_sub_field('fp-ms_icon_box_img_content'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- BoxTabing -->
<section class="BoxTabingSection bg SectionSpace overlay BlackOverlay" style='background-image: url("<?php echo get_field('fp-ms_bg_img'); ?>")'>
    <div class="wrapper">
        <div class="SectionTitleSubTitle">
            <div class="SectionTitle" data-aos="fade-up">
                <h2><?php echo get_field('fp-ess_heading'); ?></h2>
            </div>
            <div class="SectionContent SpanGreenTxt fontWhite pt30 max970" data-aos="fade-up">
                <?php echo get_field('fp-ess_content'); ?>

            </div>
        </div>
        <div class="BoxTabParentMain d_flex flex_wrap align_center pt80">
            <div class="tabP TabBoxContentBox altThemeBg" data-aos="fade-up">
                <?php if (have_rows('fp-ess_tab')) : ?>
                    <?php while (have_rows('fp-ess_tab')) : the_row(); ?>
                        <div id="fiaTab1_<?php echo get_row_index(); ?>" class="showcontent <?php if (get_row_index() == 1) {
                                                                                                echo "show";
                                                                                            } ?>">
                            <div class="TabInnerContent fadein">
                                <div class="TabBackWordTxt">
                                    <?php the_sub_field("fp-ess_tab_bg_svg"); ?>
                                </div>
                                <div class="TabInnerContentInn">
                                    <div class="TabHead fontTheme">
                                        <h2><?php the_sub_field("fp-ess_tab_heading"); ?></h2>
                                    </div>
                                    <div class="equal_ContentMain">
                                        <div class="TabCont pt40">
                                            <?php the_sub_field("fp-ess_tab_content"); ?>
                                        </div>
                                    </div>
                                    <div class="TabBotItemMain d_flex align_center pt40">
                                        <div class="TabBotHead fontTheme normal">
                                            <h4><?php the_sub_field("fp-ess_tab_sub_tag1"); ?></h4>
                                        </div>
                                        <div class="TabBotImg">
                                            <?php the_sub_field("fp-ess_tab_circle_svg1"); ?>

                                        </div>
                                        <div class="TabBotHead fontTheme normal">
                                            <h4><?php the_sub_field("fp-ess_tab_sub_tag2"); ?></h4>
                                        </div>
                                        <div class="TabBotImg">
                                            <?php the_sub_field("fp-ess_tab_circle_svg2"); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="tabs TabListItemBox">
                <label class='expandTabb'>Select Category</label>
                <div class='tabsToggle'>
                    <div class="showMobile TabTitle mw100 noListStyle">
                        <?php if (have_rows('fp-ess_tab')) : ?>
                            <ul>
                                <?php while (have_rows('fp-ess_tab')) : the_row(); ?>
                                    <li data-aos="fade-up"><a class="tab <?php if (get_row_index() == 1) {
                                                                                echo "active";
                                                                            } ?>" href="#fiaTab1_<?php echo get_row_index(); ?>"><?php the_sub_field("fp-ess_tab_heading"); ?></a></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Slider  -->
<section class="CounterSliderSection themeBg SectionSpace">
    <div class="wrapper">
        <div class="SectionTitleSmall" data-aos="fade-up">
            <h3><?php the_field("fp-kas_heading"); ?></h3>
        </div>
        <div class="mySwiperCounterSliderParent pt70 text-center">
            <div class="swiper mySwiperCounterSlider">
                <div class="swiper-wrapper">
                    <?php if (have_rows('fp-kas_slides')) : ?>
                        <?php while (have_rows('fp-kas_slides')) : the_row();
                            $heading = get_sub_field('fp-kas_slides_heading');
                            $content = get_sub_field('fp-kas_slides_content');

                        ?>
                            <div class="CountSlideRepeter swiper-slide swiper-slide--style">
                                <div class="CounterSlideInner">
                                    <div class="SlideTitleContentBox">
                                        <?php if (!empty($heading)) { ?>
                                            <div class="SlideTitle" data-aos="fade-up">
                                                <h2><?php echo $heading; ?></h2>
                                            </div>
                                        <?php } ?>
                                        <?php if (!empty($content)) { ?>
                                            <div class="SlideContent fontWhite pt40 Max600 marginAuto" data-aos="fade-up">
                                                <?php echo $content ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <?php if (have_rows('fp-kas_counter')) : ?>
                                        <div class="CounterTopBoxMain pt25 Max600 marginAuto">
                                            <div class="ConterTopParent noListStyle" data-aos="fade-up">
                                                <ul id="counterTop">
                                                    <?php while (have_rows('fp-kas_counter')) : the_row();
                                                        $datacounter = get_sub_field('kas-data-counter');
                                                        $counter_heading = get_sub_field('kas-data-counter_heading');
                                                        $counter_content = get_sub_field('kas-data-counter_content');
                                                        $counter_sign = get_sub_field('kas-data-counter_sign');
                                                        $counter_bottom_text = get_sub_field("kas-data-counter_bottom_text");
                                                    ?>
                                                        <li>
                                                            <h2><span class="count percent" data-count="<?php echo $datacounter; ?>">0</span>
                                                                <span class="CounterSign"><?php echo $counter_sign; ?></< /span>
                                                            </h2>
                                                            <span class="CounterTxt normal fontWhite">
                                                                <h4><?php echo $counter_heading; ?></h4>
                                                            </span>
                                                        </li>
                                                    <?php endwhile; ?>
                                                </ul>
                                            </div>
                                            <?php if (!empty($counter_content)) { ?>
                                                <div class="CountBotContent fontWhite pt25" data-aos="fade-up">
                                                    <?php echo $counter_content; ?>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                            <?php if (!empty($counter_bottom_text)) { ?>
                                                <div class="CountBotContentV2 fontWhite pt25" data-aos="fade-up">
                                                    <p><?php echo $counter_bottom_text  ?></p>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (have_rows('fp-kas_icon_box')) : ?>
                                        <div class="IconTitleBtnParentNew pt60">
                                            <div class="IconTitleParentNew d_flex justify_center flex_wrap">
                                                <?php while (have_rows('fp-kas_icon_box')) : the_row();
                                                    $Iconimage = get_sub_field('fp-kas_icon_box_img');
                                                    $iconHeading = get_sub_field('fp-kas_icon_box_heading');
                                                ?>
                                                    <div class="IconTitleBoxNewRepeter" data-aos="fade-up">
                                                        <div class="IconTitleBoxNewInner">
                                                            <div class="IconNew">
                                                                <img src="<?php echo $Iconimage; ?>">
                                                            </div>
                                                            <div class="IconNewTitle pt20">
                                                                <h6><?php echo $iconHeading; ?></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endwhile; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php $kas_slide2_img = get_sub_field('fp-kas_slide2_img');
                                    if (!empty($kas_slide2_img)) : ?>
                                        <div class="TableImg pt80">
                                            <img src="<?php echo $kas_slide2_img; ?>">
                                        </div>
                                    <?php endif; ?>
                                    <?php
                                    $kas_uncc_logo_img = get_sub_field("fp-kas_uncc_logo_img");
                                    $kas_uncc_heading = get_sub_field("fp-kas_uncc_heading");
                                    $kas_uncc_content = get_sub_field("fp-kas_uncc_content");
                                    if (!empty($kas_uncc_logo_img) && !empty($kas_uncc_logo_img) && !empty($kas_uncc_content)) {
                                    ?>
                                        <div class="BoxSlidePartMain altThemeBg fontTheme">
                                            <div class="BoxSlidePartLogo">
                                                <img src="<?php echo $kas_uncc_logo_img; ?>">
                                            </div>
                                            <div class="BoxSlidePartTitle pt25 medium">
                                                <h6><?php echo $kas_uncc_heading; ?></h6>
                                            </div>
                                            <div class="BoxSlidePartContent pt25">
                                                <?php echo $kas_uncc_content; ?>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <?php 
                                    if (get_row_index()==4) { ?>
                                        <div class="LeftImgRightCounterParent d_flex flex_wrap align_center pt80">
                                            <?php $kas_slide4_img = get_sub_field('fp-kas_slide4_chart_img');
                                            if (!empty($kas_slide4_img)) : ?>
                                                <div class="LeftImgRightCounterBox">
                                                    <img src="<?php echo $kas_slide4_img; ?>">
                                                </div>
                                            <?php endif; ?>
                                            <?php if (have_rows('fp-kas_measurement_countr')) : ?>
                                                <div class="RightImgRightCounterBox">
                                                    <div class="RightImgRightCounterBoxInner" id="counterTopV2New">
                                                        <?php while (have_rows('fp-kas_measurement_countr')) : the_row();
                                                            $counter_text = get_sub_field('fp-counter_text');
                                                            $counter_svg = get_sub_field('fp-counter_svg');
                                                            $counter_heading = get_sub_field('fp-counter_heading');
                                                            $counter_contentff = get_sub_field('fp-counter_content');
                                                            if(!empty($counter_text) && !empty($counter_heading) && !empty($counter_svg) ){
                                                        ?>
                                                            <div class="TwoColumnCounterRepeter d_flex text-left">
                                                                <div class="TwoColumnCounterRepeter d_flex text-left">
                                                                    <div class="TwoColCounterParent">
                                                                        <div class="TwoColColuter">
                                                                            <h2><span class="count percent" data-count="<?php echo get_sub_field('fp-counter_per'); ?>">0</span>
                                                                                <span class="CounterSign">%</span>
                                                                            </h2>
                                                                            <span class="TwoColCountTxt">
                                                                                <?php echo $counter_text ?>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="TwoColCounterRightPart">
                                                                        <div class="TwoColCounterRightIcon">
                                                                            <?php echo $counter_svg; ?>
                                                                        </div>
                                                                        <div class="TwoColCounterRightTitle pt10">
                                                                            <h5><?php echo $counter_heading; ?></h5>
                                                                        </div>
                                                                        <?php if (!empty($counter_contentff)){ ?>
                                                                        <div class="TwoColCounterRightContent pt10 fontWhite">
                                                                            <?php echo $counter_contentff; ?>
                                                                        </div>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } endwhile; ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php } ?>
                                    <div class="SliderBtn NormalBtnV2 pt50">
                                        <a href="<?php echo get_sub_field("fp-kas_read_more_btn_link"); ?>">read more<span class="BtnAngle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28" fill="none">
                                                    <path d="M1 26.5L14 14L0.999999 1.5" stroke="#64D855" stroke-width="2" stroke-linecap="round"> </path>
                                                </svg></span></a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
</section>

<!--  Tab v2-->
<section class="TabV2Section themeBg SectionSpace">
    <div class="wrapper">
        <div class="SectionTitleSmall" data-aos="fade-up" data-aos-delay="50">
            <h3><?php echo get_field("fp-fpt_main_heading"); ?></h3>
        </div>
        <div class="BoxTabParentMainV2  d_flex flex_wrap pt50">
            <?php if (have_rows('fp-fpt_main_tab_content')) : ?>
                <div class="tabPV2 TabBoxContentBoxV2" data-aos="fade-up">
                    <?php while (have_rows('fp-fpt_main_tab_content')) : the_row(); ?>
                        <div id="fiaTab2_<?php echo get_row_index(); ?>" class="showcontentV2 <?php if (get_row_index() == 2) {
                                                                                                    echo "showV2";
                                                                                                } ?>">
                            <div class="TabInnerContentV2 fadein">
                                <div class="TabHeadV2 <?php if (get_row_index() == 4){echo" ForFont82";} ?>">
                                    <h2><?php echo get_sub_field('fp-fpt_tab_heading'); ?></h2>
                                </div>
                                <div class="TabImgContentParentV2 d_flex flex_wrap pt50">
                                    <div class="TabContentBoxV2Top">
                                        <div class="TabContentBoxV2 fontWhite">
                                            <?php echo get_sub_field('fp-fpt_tab_content'); ?>
                                        </div>
                                        <div class="TabBtn NormalBtnV2 pt50">
                                            <a href="<?php echo get_sub_field('fp-fpt_tab_read_more_link'); ?>">read more<span class="BtnAngle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28" fill="none">
                                                        <path d="M1 26.5L14 14L0.999999 1.5" stroke="#64D855" stroke-width="2" stroke-linecap="round" />
                                                    </svg></span></a>
                                        </div>
                                    </div>
                                    <div class="TabImgBoxV2Top text-right">
                                        <img src="<?php echo get_sub_field('fp-fpt_tab_img'); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <div class="tabsV2 TabListItemBoxV2">
                <label class='expandTabbV2'>Select Category</label>
                <div class='tabsToggleV2'>
                    <div class="showMobileV2 TabTitleV2 mw100 noListStyle">
                        <?php if (have_rows('fp-fpt_main_tab_content')) : ?>
                            <ul>
                                <?php while (have_rows('fp-fpt_main_tab_content')) : the_row(); ?>
                                    <li data-aos="fade-up"><a class="tabV2 <?php if (get_row_index() == 2) {
                                                                                echo "activeV2";
                                                                            }; ?>" href="#fiaTab2_<?php echo get_row_index(); ?>"><?php the_sub_field('fp-fpt_tab_heading'); ?></a></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of tab -->
<!-- Blog Slider -->
<section class="BlogSliderSection blueBg SectionSpace">
    <div class="wrapper">
        <div class="SectionTitle fontWhite" data-aos="fade-up">
            <h2><?php the_field("fp-cs_heading"); ?></h2>
        </div>
    </div>
    <div class="BlogSliderParent pt80">
        <div class="BlogSliderParentInner" data-aos="fade-up">
            <div class="SwiperBlogSlider">
                <div class="swiper-wrapper">
                    <?php if (have_rows('fp-cs_slider')) : ?>
                        <?php while (have_rows('fp-cs_slider')) : the_row();
                            $pageContentslider = get_sub_field('fp-cs_slider_page');
                            $pageParentId = get_the_title(wp_get_post_parent_id($pageContentslider->ID));
                        ?>
                            <div class="BlogSlideRepeter swiper-slide">
                                <div class="BlogSliderFeatureImg bg" style="background-image: url('<?php if (!empty(get_the_post_thumbnail_url($pageContentslider->ID))) echo get_the_post_thumbnail_url($pageContentslider->ID); ?>');">
                                    <div class="BlogSliderBoxTop">
                                        <?php
                                        if (empty(get_the_post_thumbnail_url($pageContentslider->ID))) {
                                        ?>
                                            <div class="BlogSlideBoxImg text-center">
                                                <img src="<?php echo get_template_directory_uri() . "/images/blog-logo.png"; ?>">
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <div class="BlogSlideTitleBoxTop">
                                            <?php
                                            if (!empty($pageParentId)) {
                                            ?>
                                                <div class="BlogSlideTopTitle fontGreen">
                                                    <p><?php echo $pageParentId; ?></p>
                                                </div>
                                            <?php } ?>
                                            <div class="BlogSliderLink">
                                                <h3>
                                                    <a href="<?php echo get_permalink($pageContentslider->ID); ?>"><?php echo get_the_title($pageContentslider->ID); ?><span class="AngleBlog"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="42" viewBox="0 0 24 42" fill="none">
                                                                <path d="M2 40L21 21L2 2" stroke="white" stroke-width="3.59375" stroke-linecap="round" />
                                                            </svg></span></a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- Add Pagination -->
                    <!-- <div class="swiper-pagination"></div> -->
                    <!-- Add Scrollbar -->
                </div>
            </div>
        </div>
</section>

<?php get_footer(); ?>