<footer class="footer">
  <div class="container">
    <div class="footer-inner">
      <nav class="footer-nav">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'FOOTER NAVIGATION',
            'menu_class' => 'footer-nav-main',
          )
        );
        ?>
      </nav>
      <p class="footer-copyright">©2018 Chakuromaru.</p>
    </div><!-- .footer-inner -->
  </div>
</footer><!-- .footer -->


<?php wp_footer(); ?>
<script>
  (function($){

    /* すべての Javascript の後に記述したいスクリプト */



  })(jQuery);
</script>
</body>
</html>