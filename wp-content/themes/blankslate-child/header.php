<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner">
    </div>
            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <img src="http://localhost:8888/planty/wp-content/uploads/2023/10/Group-1.png" alt="planty logo">
                <?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
            </nav>
        </header>
    <div id="container">
    <main id="content" role="main">