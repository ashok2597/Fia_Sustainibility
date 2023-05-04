<?php wp_footer(); ?>


<?php 
if (is_front_page()) {
?>
    <!-- Report Section -->
    <section class="ReportSection SectionSpace">
      <div class="wrapper">
        <div class="ReportParent">
          <div class="SectionTitle uppercase" data-aos="fade-up">
            <h2><?php the_field("fp-srs_heading", "option"); ?></h2>
          </div>
          <div class="SectionContent pt60 " data-aos="fade-up">
            <?php the_field("fp-srs_content", "option"); ?>
          </div>
          <div class="BtnGrp pt60 d_flex flex_wrap" data-aos="fade-up">
            <div class="button">
              <a href="<?php the_field("fp-srs_download_report_link", "option"); ?>"><?php the_field("fp-srs_download_report_label", "option"); ?><span class="BtnIcon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
                    <path d="M21 21.75L1 21.75M11 1.25L11 18.25M11 18.25L18 11.25M11 18.25L4 11.25" stroke="black" stroke-width="2" stroke-linecap="round" />
                  </svg></span></a>
            </div>
            <div class="button v2">
              <a href="<?php the_field("fp-srs_download_fia_env_link", "option"); ?>"><?php the_field("fp-srs_download_fia_env_label", "option"); ?><span class="BtnIcon"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
                    <path d="M21 21.75L1 21.75M11 1.25L11 18.25M11 18.25L18 11.25M11 18.25L4 11.25" stroke="black" stroke-width="2" stroke-linecap="round" />
                  </svg></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php } else { ?>
    <section class="ReportSection ReportSectionV3 SectionSpace">
      <div class="wrapper">
        <div class="ReportParent">
          <div class="SectionTitle uppercase" data-aos="fade-up">
            <h2><?php the_field("fp-srs_heading", "option"); ?></h2>
          </div>
          <div class="SectionContent pt60 " data-aos="fade-up">
            <?php the_field("fp-srs_content", "option"); ?>
          </div>
          <div class="BtnGrp pt60 d_flex flex_wrap" data-aos="fade-up">
            <div class="button">
              <a href="<?php the_field("fp-srs_download_report_link", "option"); ?>"><?php the_field("fp-srs_download_report_label", "option"); ?><span class="BtnIcon"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="19" viewBox="0 0 11 19" fill="none">
                    <path d="M1 17.5L9 9.5L0.999999 1.5" stroke="#041323" stroke-width="2" stroke-linecap="round" />
                  </svg></span></a>
            </div>
            <div class="button">
              <a href="<?php the_field("fp-srs_download_fia_env_link", "option"); ?>"><?php the_field("fp-srs_download_fia_env_label", "option"); ?><span class="BtnIcon"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="19" viewBox="0 0 11 19" fill="none">
                    <path d="M1 17.5L9 9.5L0.999999 1.5" stroke="#041323" stroke-width="2" stroke-linecap="round" />
                  </svg></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php } ?>

  <!-- footer section -->
  <!-- <section class="FooterSEction blueBg"> -->
  <section class="FooterSection blueBg">
    <div class="wrapper">
      <div class="FooterParent">
        <div class="FooterLogoBox">
          <div class="FooterLogo">
            <a href="<?php echo site_url(); ?>"><img src="<?php the_field("gen_footer_logo", "option"); ?>"></a>
          </div>
        </div>
        <div class="FooterNavbarBox">
          <div class="FooterNavIteam noListStyle ">
            <?php
            wp_nav_menu(array(
              'theme_location' => 'footer-menu',
            ));
            ?>
          </div>
        </div>
      </div>
      <div class="FooterCopyRightParent text-center medium uppercase ">
        <p><?php the_field("gen_copyright_text", "option"); ?><a href="<?php the_field("data_protection_link", "option"); ?>"><?php the_field("gen_data_protection_text", "option"); ?></a></p>
      </div>
    </div>
  </section>
  <?php wp_footer(); ?>

</body>
</html>