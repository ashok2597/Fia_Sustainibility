<!--TimeLineSlider  -->
<section class="TimeLineSliderSection pt60 pb50 SectionSpace">
  <div class="wrapper">
    <div class="TimeLineTitleBox">
      <?php
      $network_heading = get_field("fp-network_heading");
      $network_content = get_field("fp-network_content");
      ?>
      <div class="SectionTitle" data-aos="fade-up">
        <h3>
          <?php echo $network_heading; ?>
        </h3>
      </div>
      <div class="TimeLineContentBox max970 pt20" data-aos="fade-up">
        <?php echo $network_content; ?>
      </div>
    </div>
  </div>

  <?php if (have_rows('fp-network_time_slider')): ?>
    <div class="TimeLineSlideParentMain" data-aos="fade-up">
      <div class="TimeLineSlideParent wrapLeft">
        <div class="container slider-column">
          <div class="swiper TimeLineSlideMain">
            <div class="swiper-wrapper">
              <?php while (have_rows('fp-network_time_slider')):
                the_row();
                $network_box_date = get_sub_field('fp-network_box_date');
                $network_box_image = get_sub_field('fp-network_box_image');
                $network_box_heading = get_sub_field('fp-network_box_heading');
                if (!empty($network_box_image)):
                  ?>
                  <div class="TimeLineSlide swiper-slide">
                    <div class="TimeLineSlideTopDate pb80 pt50">
                      <div class="TimeLineSlideDate text-center medium">
                        <h4>
                          <?php echo $network_box_date; ?>
                        </h4>
                      </div>
                    </div>
                    <div class="TimeLineSlideBottomBox">
                      <div class="TimeLineSlideImg bg" style="background-image: url('<?php echo $network_box_image; ?>');">
                      </div>
                      <div class="TimeLineSlideContentBox equal_Title">
                        <div class="TimeineTitleBox p40-0">
                          <h4>
                            <?php echo $network_box_heading; ?>
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php
  $network_btn_link = get_field("fp-network_btn_link");
  $network_btn_text = get_field("fp-network_btn_text");
  ?>
  <div class="wrapper">
    <div class="TimeLineSliderBtn NormalBtnV2 pt50" data-aos="fade-up">
      <a href=" <?php echo $network_btn_link; ?>">
        <?php echo $network_btn_text; ?>
        <span class="BtnAngle">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28" fill="none">
            <path d="M1 26.5L14 14L0.999999 1.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"> </path>
          </svg>
        </span>
      </a>
    </div>
  </div>
</section>
