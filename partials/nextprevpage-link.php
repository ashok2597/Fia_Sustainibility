<?php
$previousPage = get_field("op-previous_page_link", false, false);
$nextPage = get_field("op-next_page_link", false, false);
if (!empty($previousPage) && !empty($nextPage)) {
?>
    <section class="NextPrevBtnSection pt80">
        <div class="wrapper">
            <div class="NextPrevBtnParent d_flex justify_space-between">
                <div class="PrevBtnBoxTop" data-aos="fade-up">

                    <div class="PrevBtnBox NormalBtn NormalBtnSmall">
                        <a href="<?php echo get_permalink($previousPage); ?>"><span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="19" viewBox="0 0 11 19" fill="none">
                                    <path d="M10 1.5L2 9.5L10 17.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg></span>previous</a>
                    </div>
                    <div class="BtnTitleNew medium fontWhite">
                        <h6><?php echo get_the_title($previousPage); ?>
                        </h6>
                    </div>
                </div>
                <div class="PrevBtnBoxTop text-right" data-aos="fade-up">
                    <div class="NextBtnBox NormalBtn NormalBtnSmall LeftAngleSmall">
                        <a href="<?php echo get_permalink($nextPage) ?>">next <span><svg xmlns="http://www.w3.org/2000/svg" width="11" height="19" viewBox="0 0 11 19" fill="none">
                                    <path d="M1 17.5L9 9.5L0.999999 1.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg></span></a>
                    </div>
                    <div class="BtnTitleNew medium fontWhite">
                        <h6><? echo get_the_title($nextPage); ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>