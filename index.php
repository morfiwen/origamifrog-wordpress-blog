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
      <a href="http://origamifrog.pl/diy-napis-liny/">
        <img src="http://origamifrog.pl/wp-content/uploads/2016/07/diy_napis_z_liny_01.jpg" alt="DIY Napis z liny">
      </a>
    </div>
    <div class="popular-posts-item">
      <a href="http://origamifrog.pl/kuskus-brokulem-parmezanem/">
        <img src="http://origamifrog.pl/wp-content/uploads/2016/06/przepis_kuskus_brokul_parmezan_01.jpg" alt="Kuskus z brokułem i parmezanem">
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

            <p class="post-body-short">
              <?php the_excerpt(); ?>
            </p>

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
