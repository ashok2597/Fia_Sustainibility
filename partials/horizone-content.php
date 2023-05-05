<!-- Title Listing Section -->
<!-- Wysiswyg after -->

<?php if (have_rows('horizone_sec_card')) : ?>
<section class="TitleListingSection pt60">
  <div class="wrapper">
    <div class="GrpTitlesListingMain">
      <?php $horizone_sec_heading = get_field("horizone_sec_heading");
        if (!empty($horizone_sec_heading)) { ?>
        <div class="GrpListSectionTitle" data-aos="fade-up">
          <h5><?php echo $horizone_sec_heading; ?>
          </h5>
        </div>
      <?php } ?>
        <div class="GrpTitlesListingParent">
          <?php while (have_rows('horizone_sec_card')) : the_row();
              $horizone_year = get_sub_field('horizone_year');
              $horizon_card_title = get_sub_field('horizon_card_title');
              $horizone_card_inner_list = get_sub_field('horizone_card_inner_list');
            ?>
            <div class="GrpTitlesListingBox mw100" data-aos="fade-up" data-aos-delay="500">
              <div class="GrpTitlesListingInnerParent">
                <?php if (!empty($horizone_card_inner_list)) { ?>
                  <div class="GrpTitlesListing contentWysiwyg">
                    <?php echo $horizone_card_inner_list; ?>
                  </div>
                <?php } ?>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<!-- Single Content section -->
<?php $get_content = get_field("horizone_content");?>
<?php if (!empty($get_content)):?>
  <section class="SingleContentsection pt60">
    <div class="wrapper">
      <div class="ContentGrpTop contentWysiwyg marginRight" data-aos="fade-up">
        <?php echo  $get_content; ?>
      </div>
    </div>
  </section>
<?php endif;?>