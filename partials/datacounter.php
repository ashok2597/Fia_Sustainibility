<!-- CounterBox -->
<?php if (have_rows('counter_content')) : ?>
    <div class="GrpCounterV4Section">
        <div class="wrapper">
            <div class="GrpCounterV4Parent pt60  marginRight">
                <div class="ConterTopParent noListStyle" data-aos="fade-up">
                    <ul id="counterTopV4">
                        <?php while (have_rows('counter_content')) : the_row();
                            $cc_count_num = get_sub_field('cc_count_num');
                            $cc_count_title = get_sub_field('cc_count_title');
                            $cc_count_num_sign = get_sub_field("cc_count_num_sign");
                        ?>
                            <li>
                                <h2><span class="countV4 percent" data-count="<?php echo $cc_count_num; ?>">0</span>
                                    <?php if (!empty($cc_count_num_sign)) { ?>
                                        <span class="CounterSign"><?php echo $cc_count_num_sign; ?></span>
                                    <?php } ?>
                                </h2>
                                <span class="CounterTxt normal ">
                                    <h4> <?php echo $cc_count_title; ?> </h4>
                                </span>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<!-- Single Content section -->
<?php $get_content = get_field("counter_content_after");?>
<?php if (!empty($get_content)):?>
  <section class="SingleContentsection pt60">
    <div class="wrapper">
      <div class="ContentGrpTop contentWysiwyg marginRight" data-aos="fade-up">
        <?php echo  $get_content; ?>
      </div>
    </div>
  </section>
<?php endif;?>