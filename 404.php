<?php get_header(); ?>

<section id="blog">
    <div class="container">
        <div class="blog-grid">
            <div class="blog-column">

                <div id="post-0" class="post error404 not-found">
                    <h1 class="post-title center"><?php _e( 'Nie ma takiej strony' ); ?></h1>
                    <div class="center">
                        <img src="<?php bloginfo('template_url')?>/img/404.gif">
                        <p class="center"><?php _e( 'Ups... Coś poszło nie tak' ); ?></p>
                        <p class="center">Znajdź to czego szukałeś:</p>
                        <?php get_search_form(); ?>
                    </div>
                </div>

            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>
