<?php $project_main_image = get_field("project_main_image"); 
if(!empty($project_main_image)){ ?>
<div class="ImgGrpTop pt80" data-aos="fade-up">
    <img src="<?php echo $project_main_image; ?>">
</div>
<?php
}
?>

<?php $get_content = get_field("main_image_content_after");?>
<?php if (!empty($get_content)):?>
  <section class="SingleContentsection pt60">
    <div class="wrapper">
      <div class="ContentGrpTop contentWysiwyg marginRight" data-aos="fade-up">
        <?php echo  $get_content; ?>
      </div>
    </div>
  </section>
<?php endif;?>