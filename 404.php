<?php get_header(); ?>

<section id="blog">
    <div class="container">
        <div class="blog-grid">
            <div class="blog-column">

                <div id="post-0" class="post error404 not-found">
                    <h1 class="entry-title"><?php _e( 'Not Found', 'hbd-theme' ); ?></h1>
                    <div class="entry-content">
                        <p><?php _e( 'Ups... Coś poszło nie tak', 'hbd-theme' ); ?></p>
                        <?php get_search_form(); ?>
                    </div>
                </div>

            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>