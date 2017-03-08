<?php get_header(); ?>
    <main>
        <nav>
            <?php wp_nav_menu(array('theme_location'=> 'menu')); ?>
        </nav>
        <div class="rope"></div>
        <div class="container">
            <section>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <div class="rope-item">
                    <?php the_post_thumbnail('full'); ?>
                    <p> <?php the_content(); ?> </p>
                </div>
                <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
            </section>
        </div>
    </main>
<?php get_footer(); ?>