<?php 
/**
 * TODO @Pratiksha, please see this 'template part' as a refernce of slightly better Semantic HMTL
 * (using more tags than only divs - such figure, but we can also use 'article' 'aside' etc etc)
 * 
 * Also see how reduced the outputted HTML is compared to other sections delivered by WebOccult
 * we would ideally try and write very minimal html and scss not wrapping everything in divs unnecessarily
 * 
 * This can be seen live on the link below:
 * https://sustainability.fia.axon.host/members/survey-2022/
 * Use password: FIAsus2023! 
 *  
*/

?>
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