<?php
/*
Template Name: Страница контакты
*/
?>

<?php get_header(); ?>
    <main>
        <div class="rope"></div>
        <div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <div class="contact">
                    <p> <?php the_content(); ?> </p>
                    <div class="contact-map">
                        <iframe src="https://api-maps.yandex.ru/frame/v1/-/C6AZuZpG" width="100%" height="350px" frameborder="0"></iframe>
                    </div>
                </div>
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </main>
<?php get_footer(); ?>