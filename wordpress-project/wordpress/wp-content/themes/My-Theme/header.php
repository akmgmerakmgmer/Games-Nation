<!DOCTYPE html>
<html <?php language_attributes(  ); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' );?>"/>
        <title><?php wp_title(  ); bloginfo( 'name' );?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' );?>"/>
        <?php wp_head(  );?>
    </head>
    <body>
        <header>
            <section>
                <div class="header">
                    <div class="wrapper">
                        <div class="icon">
                            <span class="line top"></span>
                            <span class="line center"></span>
                            <span class="line bottom"></span>
                        </div>
                    </div>
                    <div class="navigation">
                        <a href="<?php bloginfo( 'url' )?>"><img src="<?php echo get_bloginfo('template_url') ?>/images/logo-symbol-dark.png" alt="Tryo"/></a>
                        <nav>
                            <?php menus();?>
                        </nav>
                    </div>
                </div>
            </section>
        </header>
    