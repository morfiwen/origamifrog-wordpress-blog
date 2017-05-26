<?php get_header(); ?>

<section id="blog">
    <div class="container">
        <div class="blog-grid">
            <div class="blog-column">

                    <?php the_post(); ?>
                    <?php the_content(); ?>

            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>