<?php $main_content = get_field("main_content");
if (!empty($main_content)) {
?>
    <div class="ContentGrpTop fontWhite max985 marginRight" data-aos="fade-up">
        <?php echo $main_content; ?>
    </div>
<?php
}
?>