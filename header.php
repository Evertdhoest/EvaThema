<!DOCTYPE html>
<html>

        <head>

            <?php wp_head();?>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        </head>

<body <?php body_class();?>>

<nav class="navbar navbar-background sticky-top">
          <a href="#" class="navbar-brand">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/Logo_Eva_3.svg" width="50" height="50" alt="Eva Wuyts Logo">
            <span class="brand-text">&nbsp; Eva Wuyts | </span>
            <span class="brand-text">&nbsp; Osteopathiepraktijk Schelle</span>
          </span></a>

          <div>
            <?php wp_nav_menu (

                  array(

                    'theme_location' => 'Top-menu',
                    'menu_class' => 'nav-eva'

                  )
            );?>
          </div>
    </nav>