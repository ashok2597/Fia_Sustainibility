<?php $previousPage = get_field("op-previous_page_link", false, false);?>
<?php $nextPage = get_field("op-next_page_link", false, false);?>

<?php if (!empty($previousPage) || !empty($nextPage)):?>
  <section class="sectionNextPrevNew">
    <div class="wrapper">

      <div>
      <?php if(!empty($previousPage)): ?>
        <a class="NextPrevButton NextPrevButton--prev" href="<?php echo get_permalink($previousPage); ?>" data-aos="fade-up">
          <svg class="NextPrevButtonIcon" xmlns="http://www.w3.org/2000/svg" width="11" height="19" viewBox="0 0 11 19" fill="none">
            <path d="M10 1.5L2 9.5L10 17.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
          </svg>
          <p class="NextPrevButtonLabel">
            <span>
              previous
            </span>
            <span class="LabelPageName"><?php echo get_the_title($previousPage); ?></span>
          </p>
        </a>
      <?php endif; ?>
      </div>
      
      <div>
      <?php if(!empty($nextPage)): ?>
        <a class="NextPrevButton NextPrevButton--next" href="<?php echo get_permalink($nextPage) ?>" data-aos="fade-up">
          <svg class="NextPrevButtonIcon" xmlns="http://www.w3.org/2000/svg" width="11" height="19" viewBox="0 0 11 19" fill="none">
            <path d="M1 17.5L9 9.5L0.999999 1.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
          </svg>
          <p class="NextPrevButtonLabel">
            <span>
              next
            </span>
            <span class="LabelPageName"><?php echo get_the_title($nextPage); ?></span>
          </p>
        </a>
      </div>
      <?php endif; ?>
      </div>

    </div>
  </section>
<?php endif; ?>