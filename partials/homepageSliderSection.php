<section class="homepageSliderSection CounterSliderSection SectionSpace">
  <div class="wrapper">

    <div class="SectionTitleSmall" data-aos="fade-up">
      <h3><?php the_field("fp-kas_heading"); ?></h3>
    </div>
    
    <div class="mySwiperCounterSliderParent pt70 text-center">
      <div class="swiper mySwiperCounterSlider">
        <div class="swiper-wrapper">
          <?php if (have_rows('fp-kas_slides')) : ?>
          <?php while (have_rows('fp-kas_slides')) : the_row();?>
            <?php $heading = get_sub_field('fp-kas_slides_heading');?>
            <?php $content = get_sub_field('fp-kas_slides_content');?>
            <div class="CountSlideRepeter swiper-slide swiper-slide--style">
              <div class="CounterSlideInner">
                <div class="SlideTitleContentBox">
                  <?php if (!empty($heading)) { ?>
                    <div class="SlideTitle" data-aos="fade-up">
                      <h2><?php echo $heading; ?></h2>
                    </div>
                  <?php } ?>
                  <?php if (!empty($content)) { ?>
                    <div class="SlideContent pt40 Max600 marginAuto" data-aos="fade-up">
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
                            <span class="CounterTxt normal ">
                              <h4><?php echo $counter_heading; ?></h4>
                            </span>
                          </li>
                        <?php endwhile; ?>
                      </ul>
                    </div>

                    <?php if (!empty($counter_content)) { ?>
                      <div class="CountBotContent pt25" data-aos="fade-up">
                        <?php echo $counter_content; ?>
                      </div>
                    <?php } ?>

                    <?php if (!empty($counter_bottom_text)) { ?>
                      <div class="CountBotContentV2 pt25" data-aos="fade-up">
                        <p><?php echo $counter_bottom_text  ?></p>
                      </div>
                    <?php } ?>
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

                <?php
                  $kas_slide2_img = get_sub_field('fp-kas_slide2_img');
                  if (!empty($kas_slide2_img)) : 
                ?>
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
                <?php } ?>
                <?php 
                  if (get_row_index()==4) { 
                ?>
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
                            $color = get_sub_field('color');
                            if(!empty($counter_text) && !empty($counter_heading) && !empty($counter_svg) ){
                          ?>
                            <!-- <div class="TwoColumnCounterRepeter d_flex text-left"> -->
                              <div class="TwoColumnCounterRepeter d_flex text-left" <?php if($color):?>style="color: <?php echo $color;?>"<?php endif;?>>
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
                                  <div class="TwoColCounterRightContent pt10">
                                    <?php echo $counter_contentff; ?>
                                  </div>
                                  <?php } ?>
                                </div>
                              </div>
                            <!-- </div> -->
                          <?php } endwhile; ?>
                        </div>
                      </div>
                    <?php endif; ?>
                  </div>
                <?php } ?>

                <div class="SliderBtn NormalBtnV2 pt50">
                  <a href="<?php echo get_sub_field("fp-kas_read_more_btn_link"); ?>">
                    read more
                    <span class="BtnAngle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28" fill="none">
                        <path d="M1 26.5L14 14L0.999999 1.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"> </path>
                      </svg>
                    </span>
                  </a>
                </div>

              </div>
            </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    
    </div>
  </div>
</section>
