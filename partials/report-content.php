<!-- Content Image Group Section -->
<!-- Wysiswyg after -->

<?php if (have_rows('measurement_counter')): ?>
<div class="CounterBoxParentV3Part  marginRight pt60" data-aos="fade-up">

  <?php
    $measurement_sub_heading1 = get_field("measurement_sub_heading1");
    if (!empty($measurement_sub_heading1)):
  ?>
    <div class="CountV3Title normal">
      <h4><?php echo $measurement_sub_heading1;?></h4>
    </div>
  <?php endif;?>

  <?php if (have_rows('measurement_counter')): ?>
    <div class="LeftImgRightCounterParent d_flex flex_wrap align_center pt25">
      <div class="RightImgRightCounterBox">
        <div class="RightImgRightCounterBoxInner" id="counterTopV2New">
          <?php
          while (have_rows('measurement_counter')) : the_row();
            $mc_data_count_start = get_sub_field('mc_data_countnumber_start');
            $mc_data_count_end = get_sub_field('mc_data_count_end');
            $mc_atmos_level_text = get_sub_field('mc_atmos_level_text');
            $mc_icon_svg = get_sub_field('mc_icon_svg');
            $mc_icon_title = get_sub_field('mc_icon_title');
            $mc_icon_content = get_sub_field('mc_icon_content');
            $mc_data_count_sign = get_sub_field('mc_data_count_sign');
            $color = get_sub_field('color');
            // if (!empty($mc_data_count_end)):
          ?>
              <div class="TwoColumnCounterRepeter d_flex text-left" <?php if($color):?>style="color: <?php echo $color;?>"<?php endif;?>>
                <div class="TwoColCounterParent">
                  <div class="TwoColColuter">
                    <h2><span class="count percent" data-count="<?php echo $mc_data_count_end; ?>"><?php if(!empty($mc_data_count_start)) {echo $mc_data_count_start;}else{echo '';};  ?></span>
                      <span class="CounterSign"><?php echo $mc_data_count_sign; ?></span>
                    </h2>
                    <span class="TwoColCountTxt">
                      <?php echo $mc_atmos_level_text; ?>
                    </span>
                  </div>
                </div>
                <div class="TwoColCounterRightPart">
                  <div class="TwoColCounterRightIcon">
                    <?php echo $mc_icon_svg; ?>
                  </div>
                  <div class="TwoColCounterRightTitle pt10">
                    <h5><?php echo $mc_icon_title; ?></h5>
                  </div>
                  <div class="TwoColCounterRightContent contentWysiwyg pt10 ">
                    <?php echo $mc_icon_content; ?>
                  </div>
                </div>
              </div>
          <?php
            // endif;
          // Do something...
          endwhile;
          ?>
        </div>
      </div>
      <div class="LeftImgRightCounterBox">
        <img src="<?php echo get_field("measurement_chart_image"); ?>">
      </div>
    </div>
  <?php endif; ?>
</div>
<?php endif;?>

<?php $get_content = get_field("measurement_chart_content");?>
<?php if (!empty($get_content)):?>
<div class="ContentGrpTop marginRight pt60 contentWysiwyg" data-aos="fade-up">
  <?php echo get_field("measurement_chart_content"); ?>
</div>
<?php endif;?>