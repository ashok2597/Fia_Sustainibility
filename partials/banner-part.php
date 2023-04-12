<!-- Banner Section -->
<section class="BannerCommonsection themeBg">
    <div class="BannerCommonInnerParent bg" style="background-image: url('<?php the_field("banner_bg_image"); ?>');">
        <div class="wrapper">
            <div class="BannerCommonContentMain">
                <div class="BannerCommonTopLink NormalBtn NormalBtnSmall">
                    <a href="<?php echo site_url(); ?>"><span class="LeftAngleSmall"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="19" viewBox="0 0 11 19" fill="none">
                                <path d="M10 1.5L2 9.5L10 17.5" stroke="#64D855" stroke-width="2" stroke-linecap="round" />
                            </svg></span>back to home page</a>
                </div>
                <div class="BannerCommonBotContentsTop">
                    <div class="BannerCommonBotContents">
                        <?php $bannerReportyear=get_field("banner_report_year"); 
                        if(!empty($bannerReportyear)){
                        ?>
                        <div class="BannerCommonTopTitle medium fontGreen">
                            <p><?php echo $bannerReportyear; ?></p>
                        </div>
                        <?php } ?>
                        <div class="BannerCommonTitle fontWhite pt10">
                            <h1><?php the_title(); ?></h1>
                        </div>
                        <?php
                        $parentpage = get_permalink($post->post_parent);
                        if ($post->post_parent) {
                        ?>
                            <div class="BannerCommonBtn pt10 buttonBox">
                                <a href="<?php echo $parentpage  ?>"><?php echo get_the_title($post->post_parent); ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>