<?php if (have_rows('cc_icon_box')) : ?>
    <!-- Title Icon -->
    <div class="IconTitleNewV3Section">
        <div class="wrapper">
            <div class="IconTitleParentMainNewV3 max985 marginRight">
                <div class="IconTitleBtnParentNew pt70">
                    <div class="IconTitleParentNew d_flex justify_center flex_wrap">
                        <?php while (have_rows('cc_icon_box')) : the_row();
                            $cc_icon_box_img = get_sub_field('cc_icon_box_img');
                            $cc_icon_box_title = get_sub_field('cc_icon_box_title');
                        ?>
                            <div class="IconTitleBoxNewRepeter" data-aos="fade-up">
                                <div class="IconTitleBoxNewInner">
                                    <?php if (!empty($cc_icon_box_img)) { ?>
                                        <div class="IconNew">
                                            <img src="<?php echo $cc_icon_box_img; ?>">
                                        </div>
                                    <?php } ?>
                                    <?php if (!empty($cc_icon_box_title)) { ?>
                                        <div class="IconNewTitle pt20">
                                            <h6><?php echo $cc_icon_box_title; ?></h6>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>