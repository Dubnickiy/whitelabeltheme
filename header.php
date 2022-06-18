<!DOCTYPE html>
<html lang="en">
<head>
  <?php wp_head(); ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Whetelabel</title>
</head>
<body>
  
<header>
  <div class="navigation">
        <div class="navigation-logo">
          <?php if ( ! has_custom_logo() ) { ?>

                <?php if ( is_front_page() && is_home() ) : ?>

                        <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

                <?php else : ?>

                        <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

                <?php endif; ?>

                <?php
              } else {
                the_custom_logo();
              }
              ?>
          
          <h1 class="logo-text">TAHITI</h1>
        </div>
        <?php wp_nav_menu()?>
      </div>
  
      <div class="menu-burger">
        <input type="checkbox" id="menu" hidden>
        <label class="button" for="menu">
          <span></span>
        </label>
  
        <div class="burger">
          <?php wp_nav_menu()?>
        </div>
      </div>
</header>
