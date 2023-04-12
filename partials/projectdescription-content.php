<?php
$project_image_content = get_field("project_image_content");
if (!empty($project_image_content)) {
?>
    <div class="ContentGrpBtnMain max985 marginRight pt70">
        <div class="ContentGrpListItemMain">
            <div class="ContentGrpTop fontWhite max985 marginRight" data-aos="fade-up">
                <?php echo $project_image_content; ?>
            </div>
            <?php if (have_rows('project_content_list')) : ?>
                <div class="ContentGrpListItem listStyleDoubleAngle fontWhite max985 marginRight pt25" data-aos="fade-up">
                    <ul>
                        <?php while (have_rows('project_content_list')) : the_row();
                            $contentList = get_sub_field('list_of_content');
                        ?>
                            <li>
                                <?php echo $contentList; ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php } ?>