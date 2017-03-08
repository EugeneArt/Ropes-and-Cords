<?php get_header(); ?>
    <main>
        <div class="rope"></div>
        <div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                    <?php the_post_thumbnail('full'); ?>
                    <p> <?php the_content(); ?> </p>
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </main>
<?php get_footer(); ?>