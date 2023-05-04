 <!-- AlterNateSection -->
 <!-- Wysiswyg after -->

<?php if (have_rows('fia_team')) : ?>
  <section class="AlternateSection pt60 ">
    <div class="wrapper">
      <div class="AlternateParentMain">
        <?php while (have_rows('fia_team')) : the_row();
          $fia_tm_profile_img = get_sub_field('fia_tm_profile_img');
          $fia_tm_description = get_sub_field('fia_tm_description');
          $fia_tm_sign = get_sub_field('fia_tm_sign');
          $fia_tm_name = get_sub_field('fia_tm_name');
          $fia_tm_profession = get_sub_field('fia_tm_profession');
        ?>
          <div class="AlternateBoxRepeter d_flex flex_wrap align_center">
            <?php if (!empty($fia_tm_profile_img)) {  ?>
              <div class="AlternateImgBoxTop tb100">
                <div class="AlternateImgBoxInner" data-aos="fade-up">
                  <img src="<?php echo $fia_tm_profile_img; ?>">
                </div>
              </div>
            <?php } ?>
            <div class="AlternateContentBoxTop altThemeBg tb100">
              <div class="AlternateContentBoxInner">
                <?php if (!empty($fia_tm_description)) {  ?>
                  <div class="AlternateContentBox ContentMarginTop0" data-aos="fade-up">
                    <?php echo $fia_tm_description; ?>
                  </div>
                <?php } ?>
                <?php if (!empty($fia_tm_sign)) {  ?>
                <div class="AlternateFiaSign pt50" data-aos="fade-up">
                  <img src="<?php echo $fia_tm_sign ?>">
                </div>
                <?php } ?>
                <?php if (!empty($fia_tm_name) && !empty($fia_tm_profession)) {  ?>
                <div class="AlternateFiaDetails pt25 fontTheme medium" data-aos="fade-up">
                  <h6><?php echo $fia_tm_name; ?><span><?php echo $fia_tm_profession; ?></span></h6>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
 <?php endif; ?>

<!-- Single Content section -->
<?php $get_content = get_field("image_box_block_content_after");?>
<?php if (!empty($get_content)):?>
  <section class="SingleContentsection pt60">
  <div class="wrapper">
    <div class="ContentGrpTop contentWysiwyg marginRight" data-aos="fade-up">
    <?php echo  $get_content; ?>
    </div>
  </div>
  </section>
<?php endif;?>