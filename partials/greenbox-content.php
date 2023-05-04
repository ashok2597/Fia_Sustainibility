 <!-- DEACTIVATED -->
 <!-- Box -->
 <?php
 $fia_greenbox_logo=get_field("fia_greenbox_logo");
 $fia_greenbox_title=get_field("fia_greenbox_title");
 $fia_greenbox_content=get_field("fia_greenbox_content");
 if(!empty($fia_greenbox_logo) && !empty($fia_greenbox_title) && !empty( $fia_greenbox_content)){
 ?>
 <div class="GrpIconContBoxNewMain pt50">
     <div class="wrapper">
         <div class="GrpIconContBoxNewTop  marginRight">
             <div class="BoxSlidePartMain altThemeBg fontTheme">
                 <div class="BoxSlidePartLogo" data-aos="fade-up">
                     <img src="<?php echo $fia_greenbox_logo; ?>">
                 </div>
                 <div class="BoxSlidePartTitle pt25 medium" data-aos="fade-up">
                     <h6><?php echo  $fia_greenbox_title;  ?></h6>
                 </div>
                 <div class="BoxSlidePartContent pt25" data-aos="fade-up">
                     <?php echo $fia_greenbox_content;  ?>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <?php
 }
 ?>