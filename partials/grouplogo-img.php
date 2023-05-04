<!-- Image Grid -->
<!-- Wysiswyg after -->

<?php $image_grid_gallery = get_field('image_grid_gallery'); ?>
<?php if ($image_grid_gallery) : ?>
  <div class="GrpILogoParentMain  marginRight pt70">
    <div class="GrpILogoParent">
      <?php foreach($image_grid_gallery as $image):?>
          <div class="GrpILogo" data-aos="fade-up">
            <img src="<?php echo $image; ?>">
          </div>
      <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>

<!-- Single Content section -->
<?php $get_content = get_field("image_grid_content_after");?>
<?php if (!empty($get_content)):?>
  <section class="SingleContentsection pt60">
  <div class="wrapper">
    <div class="ContentGrpTop contentWysiwyg marginRight" data-aos="fade-up">
    <?php echo  $get_content; ?>
    </div>
  </div>
  </section>
<?php endif;?>