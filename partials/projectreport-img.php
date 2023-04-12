<?php $project_main_image = get_field("project_main_image"); 
if(!empty($project_main_image)){ ?>
<div class="ImgGrpTop pt80" data-aos="fade-up">
    <img src="<?php echo $project_main_image; ?>">
</div>
<?php
}
?>