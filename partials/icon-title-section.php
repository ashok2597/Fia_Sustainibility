<?php $icon_title_repeater = get_field('icon_title_repeater'); ?>
<?php if($icon_title_repeater): ?>
<section class="IconTitleSection">
  <div class="IconTitleInnerParentMain">
    <div class="wrapper">

      <div class="SectionTitle" data-aos="fade-up">
        <h2><?php echo get_field('fp-ms_heading');?></h2>
      </div>

      <div class="IconTitleParent pt30 d_flex Mobile_wrap">
        <?php if (have_rows('icon_title_repeater')) : ?>
          <?php while (have_rows('icon_title_repeater')) : the_row(); ?>

            <div class="IconTitleBox mw100" data-aos="fade-up" data-aos-delay="500">

              <div class="IconTitleInnerParent">
                <div class="iconBox">
                  <img src="<?php echo get_sub_field('image'); ?>">
                </div>
                <div class="contentBox contentWysiwyg pt50">
                  <?php echo get_sub_field('content'); ?>
                </div>
              </div>
              
            </div>

          <?php endwhile; ?>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>
<?php endif; ?>

<?php $get_content = get_field("icon_title_content_after");?>
<?php if (!empty($get_content)):?>
  <section class="SingleContentsection pt60">
    <div class="wrapper">
      <div class="ContentGrpTop contentWysiwyg marginRight" data-aos="fade-up">
        <?php echo  $get_content; ?>
      </div>
    </div>
  </section>
<?php endif;?>