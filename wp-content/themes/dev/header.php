<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1280">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header header-title">
            <a href="<?php echo home_url();?>">
                <h1>Канаты и Верёвки</h1>
                <span>продажа оптом и в розницу</span>
            </a>
        </div>
        <div class="header header-contacts">
            <p>Телефон(гор.): <span>+7 (495) 724-56-44</span></p>
            <p>Телефон(моб.): <span>+7 (916) 593-67-83</span></p>
            <p>Почта: <span>mail@kanati-verevki.ru</span></p>
            <p>Адрес: <span> ул.Амбулаторная, д.51</span></p>
        </div>
        <nav class="mobile-nav">
            <div class="menu-btn" id="menu-btn">
                <div></div>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="responsive-menu">
                <?php wp_nav_menu(array('theme_location'=> 'menu')); ?>
            </div>
        </nav>
    </header>