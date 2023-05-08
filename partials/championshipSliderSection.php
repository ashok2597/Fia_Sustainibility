<!-- Champion Slider  -->
<?php
$championship_title = get_field("championship_title");
$championship_bg_img = get_field("championship_bg_img");
?>

<section class="ChampionSliderSection SectionSpace bg pt60"
  style="background-image: url('<?php echo $championship_bg_img; ?>');">
  <div class="wrapper">
    <div class="SectionTitleSmall" data-aos="fade-up">
      <h3>
        <?php echo $championship_title; ?>
      </h3>
    </div>
    <div class="ChampionSliderParent mySwiperCounterSliderParent pt70">
      <div class="swiper ChampionSlider">
        <div class="swiper-wrapper">
          <?php
          if (have_rows('championship_lists')): ?>
            <?php while (have_rows('championship_lists')):
              the_row();
              $championship_lists_r_title = get_sub_field('championship_lists_r_title');
              $championship_lists_content = get_sub_field('championship_lists_content');
              $ch_content_lists = get_sub_field('ch_content_lists');
              $ch_content_lists_r_table_image = get_sub_field('ch_content_lists_r_table_image');
              $ch_content_lists_r_bottom_text = get_sub_field('ch_content_lists_r_bottom_text');
              $ch_content_lists_r_read_more_link = get_sub_field('ch_content_lists_r_read_more_link');
              if (get_row_index() == 1):
                ?>
                <div class="CountSlideRepeter swiper-slide swiper-slide--style">
                  <div class="CounterSlideInner">
                    <div class="SlideTitleContentBox text-center">
                      <div class="SlideTitle" data-aos="fade-up">
                        <h2>
                          <?php echo $championship_lists_r_title; ?>
                        </h2>
                      </div>
                      <div class="SlideContent fontWhite pt40 max970 marginAuto text-left" data-aos="fade-up">
                        <?php echo $championship_lists_content; ?>
                      </div>
                    </div>
                    <div class="ListItemParentMainNewOne pt70 d_flex flex_wrap marginAuto">
                      <div class="ListItemBoxNewOneRepeter mw100">
                        <?php if (have_rows('ch_content_lists', $post->ID)): ?>
                          <?php while (have_rows('ch_content_lists')):
                            the_row();
                            $ch_content_lists_r_icon = get_sub_field('ch_content_lists_r_icon');
                            $ch_content_lists_r_title = get_sub_field('ch_content_lists_r_title');
                            $ch_content_lists_r_content = get_sub_field('ch_content_lists_r_content');
                            if (!empty($ch_content_lists_r_title)):
                              ?>
                              <?php
                              if (get_row_index() % 2 != 0): ?>
                                <div class="ListItemBoxNewOneInner <?php echo (get_row_index() == 3) ? "pt50" : " "; ?>" data-aos="fade-up">
                                  <div class="Title medium">
                                    <h6>
                                      <?php echo $ch_content_lists_r_title; ?>
                                    </h6>
                                  </div>
                                  <div class="ListiteamNewBox listStyleDoubleAngle pt25">
                                    <?php echo $ch_content_lists_r_content; ?>
                                  </div>
                                </div>
                              <?php endif; ?>
                            <?php endif; ?>
                          <?php endwhile; ?>
                        <?php endif; ?>
                      </div>
                      <div class="ListItemBoxNewOneRepeter mw100">
                        <?php if (have_rows('ch_content_lists', $post->ID)): ?>
                          <?php while (have_rows('ch_content_lists', $post->ID)):
                            the_row();
                            $ch_content_lists_r_icon = get_sub_field('ch_content_lists_r_icon');
                            $ch_content_lists_r_title = get_sub_field('ch_content_lists_r_title');
                            $ch_content_lists_r_content = get_sub_field('ch_content_lists_r_content');
                            if (!empty($ch_content_lists_r_title)):
                              ?>
                              <?php
                              if (get_row_index() % 2 == 0): ?>
                                <div class="ListItemBoxNewOneInner <?php echo (get_row_index() == 4) ? "pt50" : " "; ?>" data-aos="fade-up">
                                  <div class="Title medium">
                                    <h6>
                                      <?php echo $ch_content_lists_r_title; ?>
                                    </h6>
                                  </div>
                                  <div class="ListiteamNewBox listStyleDoubleAngle pt25">
                                    <?php echo $ch_content_lists_r_content; ?>
                                  </div>
                                </div>
                              <?php endif; ?>
                            <?php endif; ?>
                          <?php endwhile; ?>
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="SliderBtn NormalBtnV2 pt70 text-center" data-aos="fade-up">
                      <a href="<?php echo $ch_content_lists_r_read_more_link; ?>">
                        <?php echo $ch_content_lists_r_bottom_text; ?>
                        <span class="BtnAngle">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28" fill="none">
                            <path d="M1 26.5L14 14L0.999999 1.5" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round">
                            </path>
                          </svg>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
              <?php if (get_row_index() == 2): ?>
                <div class="CountSlideRepeter swiper-slide swiper-slide--style">
                  <div class="CounterSlideInner">
                    <div class="SlideTitleContentBox text-center">
                      <div class="SlideTitle" data-aos="fade-up">
                        <h2>
                          <?php
                          echo $championship_lists_r_title; ?>
                        </h2>
                      </div>
                      <div class="SlideContent fontWhite pt40 max970 marginAuto text-left" data-aos="fade-up">
                        <?php echo $championship_lists_content; ?>
                      </div>
                    </div>
                    <div class="ChampionIconTitleBtnParentNew IconTitleBtnParentNew pt80">
                      <div class="IconTitleParentNew d_flex justify_center flex_wrap">
                        <?php if (have_rows('ch_content_lists', $post->ID)): ?>
                          <?php while (have_rows('ch_content_lists', $post->ID)):
                            the_row();
                            $ch_content_lists_r_icon = get_sub_field('ch_content_lists_r_icon');
                            $ch_content_lists_r_title = get_sub_field('ch_content_lists_r_title');
                            $ch_content_lists_r_content = get_sub_field('ch_content_lists_r_content');
                            if (!empty($ch_content_lists_r_icon)):
                              ?>
                              <div class="IconTitleBoxNewRepeter" data-aos="fade-up">
                                <div class="IconTitleBoxNewInner">
                                  <div class="IconNew">
                                    <img src="<?php echo $ch_content_lists_r_icon; ?>">
                                  </div>
                                  <div class="IconNewTitle pt20 text-center">
                                    <h6>
                                      <?php echo $ch_content_lists_r_title; ?>
                                    </h6>
                                  </div>
                                  <?php if (have_rows('ch_content_lists_r_note')): ?>
                                    <?php while (have_rows('ch_content_lists_r_note')):
                                      the_row();
                                      $ch_content_lists_r_note_cont = get_sub_field('ch_content_lists_r_note_cont');
                                      $ch_content_lists_r_note_list = get_sub_field('ch_content_lists_r_note_list');
                                      if (!empty($ch_content_lists_r_note_cont)):
                                        ?>
                                        <div class="IconNewTitleNew pt10" data-aos="fade-up">
                                          <p>
                                            <?php echo $ch_content_lists_r_note_cont; ?>
                                          </p>
                                        </div>
                                      <?php endif;
                                      if (!empty($ch_content_lists_r_note_cont)):
                                        ?>
                                        <div class="ListiteamNewBox listStyleDoubleAngle pt20" data-aos="fade-up">
                                          <?php echo $ch_content_lists_r_note_list; ?>
                                        </div>
                                      <?php endif; ?>
                                    <?php endwhile; ?>
                                  <?php endif; ?>
                                </div>
                              </div>
                            <?php endif; ?>
                          <?php endwhile; ?>
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="SliderBtn NormalBtnV2 pt70 text-center" data-aos="fade-up">
                      <a href="<?php echo $ch_content_lists_r_read_more_link; ?>">
                        <?php echo $ch_content_lists_r_bottom_text; ?>
                        <span class="BtnAngle">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28" fill="none">
                            <path d="M1 26.5L14 14L0.999999 1.5" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round">
                            </path>
                          </svg>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
              <?php if (get_row_index() == 3): ?>
                <div class="CountSlideRepeter swiper-slide swiper-slide--style">
                  <div class="CounterSlideInner">
                    <div class="SlideTitleContentBox text-center">
                      <div class="SlideTitle" data-aos="fade-up">
                        <h2>
                          <?php echo $championship_lists_r_title; ?>
                        </h2>
                      </div>
                    </div>
                    <div class="IconTitleBtnParentNew pt80">
                      <div class="IconTitleParentNew d_flex justify_center flex_wrap">
                        <?php if (have_rows('ch_content_lists', $post->ID)): ?>
                          <?php while (have_rows('ch_content_lists', $post->ID)):
                            the_row();
                            $ch_content_lists_r_icon = get_sub_field('ch_content_lists_r_icon');
                            $ch_content_lists_r_title = get_sub_field('ch_content_lists_r_title');
                            $ch_content_lists_r_content = get_sub_field('ch_content_lists_r_content');
                            if (!empty($ch_content_lists_r_icon)):
                              ?>
                              <div class="IconTitleBoxNewRepeter" data-aos="fade-up">
                                <div class="IconTitleBoxNewInner">
                                  <div class="IconNew">
                                    <img src="<?php echo $ch_content_lists_r_icon; ?>">
                                  </div>
                                  <div class="IconNewTitle pt20 text-center" data-aos="fade-up">
                                    <h6>
                                      <?php echo $championship_lists_r_title; ?>
                                    </h6>
                                  </div>
                                </div>
                              </div>
                            <?php endif; ?>
                          <?php endwhile; ?>
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="SliderBtn NormalBtnV2 pt70 text-center" data-aos="fade-up">
                      <a href="<?php echo $ch_content_lists_r_read_more_link; ?>">
                        <?php echo $ch_content_lists_r_bottom_text; ?>
                        <span class="BtnAngle">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28" fill="none">
                            <path d="M1 26.5L14 14L0.999999 1.5" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round">
                            </path>
                          </svg>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

              <?php if (get_row_index() == 4): ?>
                <div class="CountSlideRepeter swiper-slide swiper-slide--style">
                  <div class="CounterSlideInner">
                    <div class="SlideTitleContentBox text-center">
                      <div class="SlideTitle" data-aos="fade-up">
                        <h2>
                          <?php
                          echo $championship_lists_r_title; ?>
                        </h2>
                      </div>
                      <div class="SlideContent fontWhite pt40 max970 marginAuto text-left" data-aos="fade-up">
                        <?php echo $championship_lists_content; ?>
                      </div>
                    </div>
                    <div class="ListItemArrowCenter max970 marginAuto">
                      <?php if (have_rows('ch_content_lists', $post->ID)): ?>
                        <?php while (have_rows('ch_content_lists', $post->ID)):
                          the_row();
                          $ch_content_lists_r_icon = get_sub_field('ch_content_lists_r_icon');
                          $ch_content_lists_r_title = get_sub_field('ch_content_lists_r_title');
                          $ch_content_lists_r_content = get_sub_field('ch_content_lists_r_content');
                          if (!empty($ch_content_lists_r_content)):
                            ?>
                            <div class="ListiteamNewBox listStyleDoubleAngle pt50" data-aos="fade-up">
                              <?php echo $ch_content_lists_r_content; ?>
                            </div>
                            <div class="ChampionBoxNewTitle pt40 medium" data-aos="fade-up">
                              <h6>
                                <?php echo $ch_content_lists_r_title ?>
                              </h6>
                            </div>
                          <?php endif; ?>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    </div>
                    <div class="SliderBtn NormalBtnV2 pt70 text-center" data-aos="fade-up">
                      <a href="<?php echo $ch_content_lists_r_read_more_link; ?>">
                        <?php echo $ch_content_lists_r_bottom_text; ?>
                        <span class="BtnAngle">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28" fill="none">
                            <path d="M1 26.5L14 14L0.999999 1.5" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round"> </path>
                          </svg>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              <?php endif;


              if (get_row_index() == 5): ?>
                <div class="CountSlideRepeter swiper-slide swiper-slide--style">
                  <div class="CounterSlideInner">
                    <div class="SlideTitleContentBox text-center">
                      <div class="SlideTitle" data-aos="fade-up">
                        <h2>
                          <?php
                          echo $championship_lists_r_title; ?>
                        </h2>
                      </div>
                      <div class="ChampionBoxNewTitle pt25 medium max970 marginAuto text-left" data-aos="fade-up">
                        <h6>
                          <?php echo $championship_lists_content; ?>
                        </h6>
                      </div>
                    </div>
                    <div class="ListItemArrowCenter max970 marginAuto">
                      <div class="ListiteamNewBox listStyleDoubleAngle pt50" data-aos="fade-up">
                        <?php if (have_rows('ch_content_lists', $post->ID)): ?>
                          <?php while (have_rows('ch_content_lists', $post->ID)):
                            the_row();
                            $ch_content_lists_r_icon = get_sub_field('ch_content_lists_r_icon');
                            $ch_content_lists_r_title = get_sub_field('ch_content_lists_r_title');
                            $ch_content_lists_r_content = get_sub_field('ch_content_lists_r_content');
                            if (!empty($ch_content_lists_r_content)):
                              ?>
                              <?php echo $ch_content_lists_r_content; ?>
                            <?php endif; ?>
                          <?php endwhile; ?>
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="SliderBtn NormalBtnV2 pt70 text-center" data-aos="fade-up">
                      <a href="<?php echo $ch_content_lists_r_read_more_link; ?>">
                        <?php echo $ch_content_lists_r_bottom_text; ?>
                        <span class="BtnAngle">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28" fill="none">
                            <path d="M1 26.5L14 14L0.999999 1.5" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round"> </path>
                          </svg>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              <?php endif;
              if (get_row_index() == 6): ?>
                <div class="CountSlideRepeter swiper-slide swiper-slide--style">
                  <div class="CounterSlideInner">
                    <div class="SlideTitleContentBox text-center">
                      <div class="SlideTitle" data-aos="fade-up">
                        <h2>
                          <?php
                          echo $championship_lists_r_title; ?>
                        </h2>
                      </div>
                      <div class="SlideContent fontWhite pt40 max970 marginAuto text-left" data-aos="fade-up">
                        <?php echo $championship_lists_content; ?>
                      </div>
                    </div>
                    <?php if (!empty($ch_content_lists_r_table_image)): ?>
                      <div class="SlideImgNew max970 marginAuto pt25" data-aos="fade-up">
                        <img src="<?php echo $ch_content_lists_r_table_image; ?>">
                      </div>
                    <?php endif; ?>
                    <div class="SliderBtn NormalBtnV2 pt70 text-center" data-aos="fade-up">
                      <a href="<?php echo $ch_content_lists_r_read_more_link; ?>">
                        <?php echo $ch_content_lists_r_bottom_text; ?>
                        <span class="BtnAngle">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28" fill="none">
                            <path d="M1 26.5L14 14L0.999999 1.5" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round"> </path>
                          </svg>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</section>


<!-- Champion Slider  -->
