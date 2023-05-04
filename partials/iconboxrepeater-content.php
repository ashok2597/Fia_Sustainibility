<!-- Title Icon -->
<?php if (have_rows('cc_icon_box')) : ?>
  <div class="IconTitleNewV3Section">
    <div class="wrapper">
      <div class="IconTitleParentMainNewV3  marginRight">
        <div class="IconTitleBtnParentNew pt70">
          <div class="IconTitleParentNew d_flex justify_center flex_wrap">
            <?php while (have_rows('cc_icon_box')) : the_row();
              $cc_icon_box_img = get_sub_field('cc_icon_box_img');
              $cc_icon_box_title = get_sub_field('cc_icon_box_title');
            ?>
              <div class="IconTitleBoxNewRepeter" data-aos="fade-up">
                <div class="IconTitleBoxNewInner">
                  <?php if (!empty($cc_icon_box_img)) { ?>
                    <div class="IconNew">
                      <img src="<?php echo $cc_icon_box_img; ?>">
                    </div>
                  <?php } ?>
                  <?php if (!empty($cc_icon_box_title)) { ?>
                    <div class="IconNewTitle pt20">
                      <span><?php echo $cc_icon_box_title; ?></span>
                    </div>
                  <?php } ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<!-- Single Content section -->
<?php $get_content = get_field("icon_box_content_after");?>
<?php if (!empty($get_content)):?>
  <section class="SingleContentsection pt60">
    <div class="wrapper">
      <div class="ContentGrpTop contentWysiwyg marginRight" data-aos="fade-up">
        <?php echo  $get_content; ?>
      </div>
    </div>
  </section>
<?php endif;?>