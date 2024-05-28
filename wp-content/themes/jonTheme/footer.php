<!-- Footer -->
<footer class="footer">
    <div class="container">
      <div class="footer__inner">
      <?php the_custom_logo(); ?>

        <div class="social footer__social">
          <a class="social__link" href="<?php the_field("instagram") ?>">
            <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/images/icon/instagram.svg" alt="instagram icon">
          </a>
          <a class="social__link" href="<?php the_field("telegram") ?>">
            <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/images/icon/telegram.svg" alt="telegram icon">
          </a>
        </div>

        <ul class="footer__copy">
          <?php 
            wp_nav_menu(array(
              'theme_location' => 'footer_menu'
            ))
          ?>
        </ul>
      </div>
    </div>
  </footer>

  <?php wp_footer() ?>

</body>