<?php get_header(); ?>

  <!-- mainvisual -->
  <!--==================================================-->

  <?php
  // Get custom header images
  $custom_header_images = get_uploaded_header_images();
  ?>

  <div class="mainvisual">
    <div class="mainvisual-inner">
      <ul class="slider-for">
        <?php
        foreach ($custom_header_images as $custom_header_image) {
          echo '<li style="background-image: url(' . $custom_header_image['url'] . ');"></li>';
        }
        ?>
      </ul>
    </div>
  </div><!-- .mainvisual -->

<!-- mainbody -->
<!--==================================================-->

<div class="mainbody">

  <!-- homeslider -->
  <!--==================================================-->

  <div class="homeslider">
    <div class="container">
      <div class="homeslider-inner">
        <div class="homeslider-inner-1">
          <div class="homeslider-main">
            <div class="homeslider-mv-navi">
              <ul class="slider-nav">
                <?php
                foreach ($custom_header_images as $custom_header_image) {
                  echo '<li>';
                  echo '<img src="' . $custom_header_image['url'] . '" alt="">';
                  echo '</li>';
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- .homeslider -->

  <!-- homecontent-1 -->
  <!--==================================================-->

  <div class="homecontent-1 mb-xs-50 mb-lg-100">
    <div class="container">
      <div class="homecontent-1-inner">
        <h2 class="fadeline">
          <span class="fadeline-main family-serif">最新の記事一覧</span>
        </h2>
        <?php
        $args = array(
          'post_type' => 'post',
          'paged' => get_query_var('paged'),
        );
        $the_query = new WP_Query( $args );
        ?>
        <?php if ( $the_query->have_posts() ): ?>
          <div class="row homecontent-row">
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="col-md-4 matchHeight">
                <div class="homecontent-box">
                  <div class="homecontent-box-thumb">
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
                    echo '<img class="img-fluid cener-block" src="' . $eyecatch_img[0] . '" alt="' . $eyecatch_alt . '">';
                  } else {
                    // 画像なし
                    echo '<img class="img-fluid mx-auto d-bloc" src="http://placehold.jp/72/3d4070/ffffff/750x465.png?text=No Image" alt="">';
                  }
                  ?>
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
        <?php else: ?>
          <p class="no-article homecontent-no-article">
            まだ記事の投稿がありません。
          </p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </div><!-- .homecontent-1 -->
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