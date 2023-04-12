<?php if (have_rows('gpi_logo_main')) : ?>
    <div class="GrpILogoParentMain max985 marginRight pt70">
        <div class="GrpILogoParent">
            <?php while (have_rows('gpi_logo_main')) : the_row();
                $logoGroupIMG = get_sub_field("gpi_logo");
                if (!empty($logoGroupIMG)) {
            ?>
                    <div class="GrpILogo" data-aos="fade-up">
                        <img src="<?php echo $logoGroupIMG; ?>">
                    </div>
            <?php }
            endwhile; ?>
        </div>
    </div>
<?php endif; ?>