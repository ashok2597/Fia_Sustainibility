<!-- Blog Slider -->
<?php if (have_rows('fp-cs_slider')) : ?>
<section class="BlogSliderSection blueBg SectionSpace">
  <div class="wrapper">
    <div class="SectionTitle" data-aos="fade-up">
      <h2><?php the_field("fp-cs_heading"); ?></h2>
    </div>
  </div>

  <div class="BlogSliderParent pt80">
    <div class="BlogSliderParentInner" data-aos="fade-up">

      <div class="SwiperBlogSlider">
        <div class="swiper-wrapper">
            <?php while (have_rows('fp-cs_slider')) : the_row();?>
              <?php $pageContentslider = get_sub_field('fp-cs_slider_page');?>
              <?php $pageParentId = get_the_title(wp_get_post_parent_id($pageContentslider->ID));?>
              <div class="BlogSlideRepeter swiper-slide">
                <div class="BlogSliderFeatureImg bg" style="background-image: url('<?php if (!empty(get_the_post_thumbnail_url($pageContentslider->ID))) echo get_the_post_thumbnail_url($pageContentslider->ID); ?>');">
                  <div class="BlogSliderBoxTop">
                    <?php if (empty(get_the_post_thumbnail_url($pageContentslider->ID))) {?>
                      <div class="BlogSlideBoxImg text-center">
                        <img src="<?php echo get_template_directory_uri() . "/images/blog-logo.png"; ?>">
                      </div>
                    <?php } ?>

                    <div class="BlogSlideTitleBoxTop">
                      <?php if (!empty($pageParentId)) { ?>
                        <div class="BlogSlideTopTitle">
                          <p><?php echo $pageParentId; ?></p>
                        </div>
                      <?php } ?>
                      <div class="BlogSliderLink">
                        <h3>
                          <a href="<?php echo get_permalink($pageContentslider->ID); ?>">
                            <?php echo get_the_title($pageContentslider->ID); ?>
                            <span class="AngleBlog">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="42" viewBox="0 0 24 42" fill="none">
                                <path d="M2 40L21 21L2 2" stroke="white" stroke-width="3.59375" stroke-linecap="round" />
                              </svg>
                            </span>
                          </a>
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
            <!-- Add Pagination -->
            <!-- <div class="swiper-pagination"></div> -->
            <!-- Add Scrollbar -->
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>