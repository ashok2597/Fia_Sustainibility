<!-- Image Grid Repeater Section -->
<?php $image_grid_repeater = get_field('image_grid_repeater'); ?>
<?php if($image_grid_repeater): ?>
<section class="ImageGridSection pt60">
   <div class="wrapper">

    <?php if ($image_grid_repeater) : ?>
      <?php foreach($image_grid_repeater as $image): ?>

      <figure class="" data-aos="fade-up" data-aos-delay="500">
        <img src="<?php echo $image; ?>">
      </figure>

      <?php endforeach; ?>
    <?php endif; ?>

  </div>
</section>
<?php endif; ?>

<!-- Single Content section -->
<?php $get_content = get_field("image_grid_repeater_content_after");?>
<?php if (!empty($get_content)):?>
  <section class="SingleContentsection pt60">
  <div class="wrapper">
    <div class="ContentGrpTop contentWysiwyg marginRight" data-aos="fade-up">
    <?php echo  $get_content; ?>
    </div>
  </div>
  </section>
<?php endif;?>