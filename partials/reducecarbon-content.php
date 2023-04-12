<?php if (have_rows('rc_emission')) : ?>
    <?php while (have_rows('rc_emission')) : the_row();
        $subheading = get_sub_field('rc_subheading');
        $subcontent = get_sub_field('rc_subcontent');

    ?>
        <div class="ContentGrpTitleTop max985 marginRight pt25">
            <div class="ContentGrpTitle" data-aos="fade-up">
                <h5><?php echo $subheading; ?></h5>
            </div>
            <div class="ContentGrpTop fontWhite" data-aos="fade-up">
                <?php echo $subcontent; ?>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php if (have_rows('reduce_polution_list')) : ?>
    <div class="ContentGrpListItem ContentGrpListItemV2 listStyleDoubleAngle fontWhite max985 marginRight pt30">
        <ul>
            <?php while (have_rows('reduce_polution_list')) : the_row(); ?>
                <li data-aos="fade-up"><?php echo get_sub_field("polutio_list_li"); ?></li>
            <?php endwhile; ?>
        </ul>
    </div>
<?php endif; ?>


