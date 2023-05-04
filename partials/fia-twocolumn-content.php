 <!-- DEACTIVATED -->
 <!-- TwoColContentBox -->
 <?php if (have_rows('fia_two_column_main_content')) : ?>
     <div class="GrpTwoColContensMain pt80">
         <div class="wrapper">
             <div class="GrpTwoColContensParent   marginRight">
                 <div class="GrpTwoColContensTop d_flex flex_wrap">
                     <?php while (have_rows('fia_two_column_main_content')) : the_row();
                            $twoColumnContent = get_sub_field('two_column_content');
                        ?>
                         <div class="GrpTwoColContens w50 mw100" data-aos="fade-up">
                             <?php echo $twoColumnContent; ?>
                         </div>
                     <?php endwhile; ?>
                 </div>
             </div>
         </div>
     </div>
 <?php endif; ?>