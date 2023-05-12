
<?php 
$sa_main_image=get_field("sa_main_image");
$sa_content=get_field("sa_content");
$sa_sub_image=get_field("sa_sub_image");
?>
<?php if(!empty($sa_main_image)):?>

  <!-- <div class="ImageGrpNew  marginRight pt60" data-aos="fade-up">
      <img src="<?php //echo $sa_main_image; ?>">
  </div> -->

<?php endif; ?>

<?php
if(!empty($sa_content) && !empty($sa_sub_image)):
?>
  <div class="GrpTwoColImgContMain  marginRight pt60">
      <div class="GrpTwoColImgContParent d_flex flex_wrap">
          <div class="GrpTwoColImgCont contentWysiwyg" data-aos="fade-up">
              <?php echo $sa_content; ?>
          </div>
          <div class="GrpTwoColImg mtop30 mobile-center mw100" data-aos="fade-up">
              <img src="<?php echo $sa_sub_image; ?>">
          </div>
      </div>
  </div>
<?php endif; ?>

<?php $get_content = get_field("image_content_columns_content_after");?>
<?php if (!empty($get_content)):?>
  <section class="SingleContentsection pt60">
    <div class="wrapper">
      <div class="ContentGrpTop contentWysiwyg marginRight" data-aos="fade-up">
        <?php echo  $get_content; ?>
      </div>
    </div>
  </section>
<?php endif;?>