<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title>Normandy EcoSpace</title>
    <?php wp_head(); ?>
</head>
<body>

<header id="Header">
    <nav class="navbar navbar-expand-md navbar-light">
        <?php the_custom_logo(); ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php wp_nav_menu(array(
            'menu' => 'headermenu',
            'menu_class' => 'navbar-nav ml-auto',
            'container' => 'div',
            'container_id' => 'nav_collapse',
            'container_class' => 'navbar-collapse collapse'
        )); ?>
    </nav>
</header>

