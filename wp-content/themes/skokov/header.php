<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo("name"); ?></title>
    <?php wp_head(); ?> 
</head>
<body>
<div class="wrapper">
    <header class="header">
        <h1>skokov</h1>
        <section class="logo-nav">
            <div class="logo">
                <a href="<?php echo home_url() ;?>">
                    <img src="<?php bloginfo("template_url"); ?>/img/logo.png" height="116" width="116" alt="Skokov"/>
                </a>
            </div>
          <?php wp_nav_menu( array(
            "theme_location" => "main menu",
            'menu_class'     => 'header-nav',
            "container"      => false,
            ) ); ?>
           
        </section>
        <section class="slider">
            <div class="title">BLOG</div>
        </section>
    </header>


