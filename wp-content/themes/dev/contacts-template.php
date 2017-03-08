<?php
/*
Template Name: Страница контакты
*/
?>

<?php get_header(); ?>
    <main>
        <nav>
            <?php wp_nav_menu(array('theme_location'=> 'menu')); ?>
        </nav>
        <div class="rope"></div>
        <div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <div class="contact">
                    <p> <?php the_content(); ?> </p>
                    <div class="contact-map">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=1uBKG-5BIriEx5Iz2Wx4v-o-6h8uzZ4z&amp;width=1024&amp;height=500&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
                    </div>
                </div>
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </main>
<?php get_footer(); ?>