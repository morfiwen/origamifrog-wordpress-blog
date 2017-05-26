<?php get_header(); ?>

<section id="blog">
    <div class="container">
        <div class="blog-grid">
            <div class="blog-column">

				<?php if ( have_posts() ) : ?>
					<div class="tile">
				        <h2 class="page-title"><?php _e( 'Wyniki wyszukiwania: ', 'hbd-theme' ); ?><span><?php the_search_query(); ?></span></h2>
				    </div>

				<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				    <div class="nav-pagination">
                        <?php echo paginate_links( array(
                            'prev_text' => __('<i class="icon-left-dir"></i>'),
                            'next_text' => __('<i class="icon-right-dir"></i>'),
                            ) );
                        ?>
                    </div>
				<?php } ?>

				<?php while ( have_posts() ) : the_post() ?>

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

				<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				    <div class="nav-pagination">
                        <?php echo paginate_links( array(
                            'prev_text' => __('<i class="icon-left-dir"></i>'),
                            'next_text' => __('<i class="icon-right-dir"></i>'),
                            ) );
                        ?>
                    </div>
				<?php } ?>

				<?php else : ?>
					<div class="tile">
						<div id="post-0" class="post no-results not-found">
				            <h2 class="entry-title"><?php _e( 'Nie znaleziono', 'hbd-theme' ) ?></h2>
				        	<div class="entry-content">
				            	<p><?php _e( 'Brak wyników', 'hbd-theme' ); ?></p>
				    <?php get_search_form(); ?>
					        </div>
					    </div>
					</div>

				<?php endif; ?>


            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>