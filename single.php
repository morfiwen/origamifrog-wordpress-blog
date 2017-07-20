<?php get_header(); ?>

<section id="blog">
  <div class="container">
    <div class="blog-grid">
      <div class="blog-column">

        <?php the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="tile post post-page">
            <div class="post-header">
              <h1 class="post-title container single-entry-title entry-title"><?php the_title(); ?></h1>

      				<div class="single-post-cat">
      				  <?php echo get_the_category_list(); ?>
      				</div>

              <div class="post-tags">
      					<?php
                $all_the_tags = get_the_tags();
                if( $all_the_tags ) foreach($all_the_tags as $tag) {
                ?>
                <a href="<?php echo get_tag_link($tag->term_id); ?>"><span><?php echo $tag->name; ?></span></a>
                <?php   } else {
                ?>
                <!-- not tagged --><span style="display: none"></span>
                <?
                }
                ?>
              </div>

              <div>
                <span class="post-date post_date"><time class="entry-date updated"><?php the_time( get_option( 'date_format' ) ); ?></time></span>
                <span class="post-author post_author vcard author fn">Napisała Edyta Tarnowska</span>
              </div>

              <img class="post-thumb post-img" src="<?php the_post_thumbnail_url(); ?>">

              <div class="post-body">
                <?php the_content(); ?>
              </div>

            </div>

            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- We wpisie -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-2551322717520201"
                 data-ad-slot="9577803170"
                 data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>

            <div class="post-nav prev-next">
              <a href="<?php echo get_permalink(get_adjacent_post(false, '', false)); ?>" class="btn btn-green"><i class="icon-left-dir"></i>Następny post</a>
              <a href="<?php echo get_permalink(get_adjacent_post(false, '', true)); ?>" class="btn btn-green">Poprzedni post <i class="icon-right-dir"></i></a>
            </div>

            <div class="tile comments">
              <h2>Komentarze</h2>
              <?php comments_template('', true); ?>
            </div>
          </div>
        </div>
      </div>

      <?php get_sidebar(); ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>
