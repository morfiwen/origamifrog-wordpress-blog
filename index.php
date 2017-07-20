<?php get_header(); ?>

<section id="blog">

  <div class="popular-posts">
    <div class="popular-posts-item">
      <a href="http://origamifrog.pl/diy-koszulka-na-trening-z-wlasnym-nadrukiem-prezent/">
        <img src="http://origamifrog.pl/wp-content/uploads/2016/08/diy_koszulka_trening_nadruk_01.jpg" alt="DIY Koszulka na trening">
      </a>
    </div>
    <div class="popular-posts-item">
      <a href="http://origamifrog.pl/7-przydatne-hacki-do-bullet-journal/">
        <img src="http://origamifrog.pl/wp-content/uploads/2017/02/bullet_journal_hacki_01.jpg" alt="Bullet Journal - przydatne hacki">
      </a>
    </div>
    <div class="popular-posts-item">
      <a href="http://origamifrog.pl/bulgaria-2016-wazne-informacje-dojazd-i-ceny/">
        <img src="http://origamifrog.pl/wp-content/uploads/2016/07/bulgaria_2016_ceny_dojazd_00.jpg" alt="Bułgaria 2016 ceny, dojazd, ważne informacje">
      </a>
    </div>
    <div class="popular-posts-item">
      <a href="http://origamifrog.pl/plakaty-do-druku-na-lato/">
        <img src="http://origamifrog.pl/wp-content/uploads/2017/06/plakaty_do_druku_lato_01.jpg" alt="Plakaty do druku na lato">
      </a>
    </div>
  </div>

  <div class="container">
    <div class="blog-grid">
      <div class="blog-column">
        <h2>Najnowsze wpisy</h2>

        <?php while ( have_posts() ) : the_post() ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="tile post">
            <div class="img-thumbnail">
              <a href="<?php the_permalink(); ?>"><img class="post-thumb" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
            </div>
            <div class="post-header">
              <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <span class="post-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
              <a class="post-comments" href="<?php the_permalink(); ?>#disqus_thread">
                <span class="disqus-comment-count" data-disqus-identifier="article_<?php the_ID(); ?>_identifier"></span>
              </a>
              <?php edit_post_link( __( 'Edit', 'hbd-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
            </div>

            <div class="post-body-short">
              <?php the_excerpt(); ?>
            </div>

            <div class="post-readmore">
              <a class="btn btn-green" href="<?php the_permalink(); ?>">Czytaj dalej</a>
            </div>
          </div>
        </div>

        <?php endwhile; ?>

        <div class="nav-pagination">
          <?php echo paginate_links( array(
              'prev_text' => __('<i class="icon-left-dir"></i>'),
              'next_text' => __('<i class="icon-right-dir"></i>'),
              ) );
          ?>
        </div>

      </div>

      <?php get_sidebar(); ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>
