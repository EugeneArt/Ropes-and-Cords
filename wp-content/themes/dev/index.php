<?php get_header(); ?>
<main>
    <div class="rope"></div>
    <div class="container">
        <ul class="goods row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <li class="col-xs-12 col-sm-6 col-lg-4">
                   <a href="<?php the_permalink(); ?>">
                        <figure>
                            <?php the_post_thumbnail('full'); ?>
                            <figcaption>
                                <div><?php the_title(); ?></div>
                            </figcaption>
                        </figure>
                    </a>
               </li>
            <?php endwhile; ?>
                 <?php wp_pagenavi(); ?>
            <?php else: ?>
            <?php endif; ?>
        </ul>
    </div>
</main>
<?php get_footer(); ?>