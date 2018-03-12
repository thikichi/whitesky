<?php get_header(); ?>

<!-- mainbody -->
<!--==================================================-->

<div class="mainbody pt-xs-70">

  <!-- archive-content-1 -->
  <!--==================================================-->

  <div class="archive-content-1 mb-xs-50 mb-lg-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="archive-content-1-inner mb-xs-50 mb-md-0">
            <h2 class="fadeline mb-xs-30 mb-lg-40">
              <span class="fadeline-main family-serif">
                <?php echo get_mw_archive_title(); ?>
              </span>
            </h2>
            <?php if ( have_posts() ): ?>
              <div class="row homecontent-row">
                <?php while( have_posts() ) : the_post(); ?>
                  <div class="col-md-6 matchHeight">
                    <div class="homecontent-box">
                      <div class="homecontent-box-thumb">
                        <a href="<?php the_permalink(); ?>">
                        <?php
                        // アイキャッチ画像のIDを取得
                        $eyecatch_id  = get_post_thumbnail_id();
                        // mediumサイズの画像内容を取得（引数にmediumをセット）
                        $eyecatch_img = wp_get_attachment_image_src( $eyecatch_id , 'img_golden_ratio' );
                        // 画像IDから画像のメタ情報を取得
                        $attachment = get_post($eyecatch_id);
                        // 画像キャプション取得
                        $eyecatch_caption = $attachment->post_excerpt;
                        // 画像説明を取得
                        $eyecatch_explain = $attachment->post_content;
                        // 画像alt取得
                        $eyecatch_alt = get_post_meta($eyecatch_id, '_wp_attachment_image_alt', true);
                        // 画像の有無判定
                        if($eyecatch_img) {
                          // 画像あり
                          echo '<img class="img-fluid cener-block img-scale" src="' . $eyecatch_img[0] . '" alt="' . $eyecatch_alt . '">';
                        } else {
                          // 画像なし
                          echo '<img class="img-fluid mx-auto d-bloc img-scale" src="http://placehold.jp/72/3d4070/ffffff/750x465.png?text=No Image" alt="">';
                        }
                        ?>
                        </a>
                      </div>
                      <h3 class="homecontent-box-subttl family-serif">
                        <a href="<?php the_permalink(); ?>">
                          <?php the_title(); ?>
                        </a>
                      </h3>
                      <p class="homecontent-box-subttl-under">
                        ( Posted date: <?php the_time( 'Y年n月j日' ); ?> )
                      </p>
                      <div class="homecontent-box-text mb-15">
                        <?php the_excerpt(); ?>
                      </div>
                      <div class="homecontent-meta">
                        <span class="homecontent-meta-category">
                          <i class="fas fa-folder"></i> <?php the_category( ' | ', 'multiple' ); ?>
                        </span>　
                        <span class="homecontent-meta-author">
                          <i class="fas fa-user"></i> <?php the_author(); ?>
                        </span>　
                        <span class="homecontent-meta-tag">
                          <?php the_tags( '<i class="fas fa-tags"></i> ', ' | ' ); ?>
                        </span>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              </div><!-- .row -->


              <div class="pagination mt-30">
                <div class="pagination-previous">
                  <?php if( get_previous_posts_link() ): ?>
                    <div class="pagination-previous-inner">
                      <?php previous_posts_link('前の投稿');?>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="pagination-next">
                  <?php if( get_next_posts_link() ): ?>
                    <div class="pagination-next-inner">
                      <?php next_posts_link('次の投稿');?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>


            <?php else: ?>
              <p class="no-article homecontent-no-article">
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