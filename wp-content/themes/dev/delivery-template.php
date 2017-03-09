<?php
/*
Template Name: Страница доставка
*/
?>

<?php get_header(); ?>
    <main>
        <div class="rope"></div>
        <div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <div class="delivery">
                    <?php the_post_thumbnail('full'); ?>
                    <div class="about-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </main>
<?php get_footer(); ?>