<?php get_header(); ?>

<!-- mainbody -->
<!--==================================================-->

<div class="mainbody pt-xs-70">

  <!-- single-content-1 -->
  <!--==================================================-->

  <div class="single-content-1 mb-xs-50 mb-lg-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="single-content-1-inner mb-xs-50 mb-md-0">
            <?php if ( have_posts() ): the_post(); ?>
              <h2 class="fadeline mb-xs-20">
                <span class="fadeline-main family-serif">
                  <?php the_title(); ?>
                </span>
              </h2>
              <div class="single-meta mb-xs-30">
                <span class="single-meta-category">
                  <i class="fas fa-folder"></i> <?php the_category( ' / ', 'multiple' ); ?>
                </span>　
                <span class="single-meta-author">
                  <i class="fas fa-user"></i> <?php the_author(); ?>
                </span>　
                <span class="single-meta-tag">
                  <?php the_tags( '<i class="fas fa-tags"></i> ', ' / ' ); ?>
                </span>　
                <span class="single-meta-date">
                  <i class="far fa-calendar-alt"></i> <?php the_time( 'Y/n/j' ); ?>
                </span>
              </div>
              <div class="single-content">
                <?php the_content(); ?>
              </div>

              <div class="pagination mt-30">
                <div class="pagination-previous">
                  <?php if( get_previous_post_link() ): ?>
                    <div class="pagination-previous-inner">
                      <?php previous_post_link('%link', '前の投稿');?>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="pagination-next">
                  <?php if( get_next_post_link() ): ?>
                    <div class="pagination-next-inner">
                      <?php next_post_link('%link', '次の投稿');?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>

            <?php else: ?>
              <p class="no-article single-no-article">
                まだ記事の投稿がありません。
              </p>
            <?php endif; ?>
            <?php if( function_exists('dynamic_sidebar') ) wp_reset_postdata(); ?>
          </div>
        </div>
        <div class="col-lg-3">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div><!-- .archive-content-1 -->
</div><!-- .mainbody -->

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