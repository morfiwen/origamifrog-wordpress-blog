<?php get_header(); ?>

<section id="blog">
  <div class="container">
    <div class="blog-grid">
      <div class="blog-column">

        <?php the_post(); ?>
        <div class="tile">
  				<h2 class="archive-title"><?php printf( __( 'Kategoria: %s' ), single_tag_title( '', false ) ); ?></h2>

          <?php
              // Show an optional term description.
              $term_description = term_description();
              if ( ! empty( $term_description ) ) :
                  printf( '<div class="taxonomy-description">%s</div>', $term_description );
              endif;
          ?>
  			</div>

  			<?php rewind_posts(); ?>

  			<?php while ( have_posts() ) : the_post(); ?>

  	    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="tile post">
            <div class="img-thumbnail">
              <a href="<?php the_permalink(); ?>"><img class="post-thumb" src="<?php the_post_thumbnail_url(); ?>"></a>
            </div>
            <div class="post-header">
              <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <span class="post-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
              <a class="post-comments" href="<?php the_permalink(); ?>#disqus_thread">
                <span class="disqus-comment-count" data-disqus-url="<?php the_permalink(); ?>"></span>
              </a>
              <?php edit_post_link( __( 'Edit' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
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

  			<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
  			<div class="nav-pagination">
          <?php echo paginate_links( array(
              'prev_text' => __('<i class="icon-left-dir"></i>'),
              'next_text' => __('<i class="icon-right-dir"></i>'),
              ) );
          ?>
  	     </div>
  			<?php } ?>

      </div>

      <?php get_sidebar(); ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>
