<?php get_header(); ?>
    <main>
        <nav>
            <?php wp_nav_menu(array('theme_location'=> 'menu')); ?>
        </nav>
        <div class="rope"></div>
        <div class="container">
           <h1>Страница не найдена!</h1>
            <img src="<?php bloginfo('template_url') ?>/images/404.jpg" alt="" center>
        </div>
    </main>
<?php get_footer(); ?>