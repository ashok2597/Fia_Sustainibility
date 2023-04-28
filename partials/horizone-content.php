 <!-- Title Listing Section -->
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
             <?php if (have_rows('horizone_sec_card')) : ?>
                 <div class="GrpTitlesListingParent pt25 d_flex Mobile_wrap Mobile_wrap">
                     <?php while (have_rows('horizone_sec_card')) : the_row();
                            $horizone_year = get_sub_field('horizone_year');
                            $horizon_card_title = get_sub_field('horizon_card_title');
                            $horizone_card_inner_list = get_sub_field('horizone_card_inner_list');
                        ?>
                         <div class="GrpTitlesListingBox mw100" data-aos="fade-up" data-aos-delay="500">
                             <div class="GrpTitlesListingInnerParent">
                                 <div class="GrpTitlesListingBoxTitle">
                                     <?php if (!empty($horizone_year)) { ?>
                                         <h2><?php echo $horizone_year; ?></h2>
                                     <?php } ?>
                                     <?php if (!empty($horizon_card_title)) { ?>
                                         <h4><?php echo $horizon_card_title; ?></h4>
                                     <?php } ?>
                                 </div>
                                 <?php if (!empty($horizone_card_inner_list)) { ?>
                                     <div class="GrpTitlesListing pt24  noListStyle listStyleDisk pt25">
                                         <?php echo $horizone_card_inner_list; ?>
                                     </div>
                                 <?php } ?>
                             </div>
                         </div>
                     <?php endwhile; ?>
                 </div>
             <?php endif; ?>
         </div>
     </div>
 </section>
 <!-- Single Content section -->
 <?php
    $get_content = get_field("horizone_content");
    if (!empty($get_content)) {
    ?>
     <section class="SingleContentsection pt60">
         <div class="wrapper">
             <div class="ContentGrpTop   marginRight" data-aos="fade-up">
                 <?php echo  $get_content; ?>
             </div>
         </div>
     </section>
 <?php
    }
    ?>