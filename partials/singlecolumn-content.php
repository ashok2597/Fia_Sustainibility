<?php $main_content = get_field("main_content");
if (!empty($main_content)) {
?>
  <!-- <div class="ContentGrpTop  marginRight" data-aos="fade-up"> -->
  <div class="ContentGrpTop contentWysiwyg  marginRight" data-aos="fade-up">
    <?php echo $main_content; ?>
  </div>
<?php
}
?>