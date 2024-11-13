<!DOCTYPE html>
<html lang="it">
  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta httpEquiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>" />

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
    <header class="header">
      <div class="header__content">
        <div class="header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>"><p><?php echo get_bloginfo('name'); ?></p> </a>
        </div>
          <nav class="header__menu">
           	<?php custom_menu(); ?>
          </nav>
          
          <div class="icon-hamburger">
            <span></span>
            <span></span>
          </div>
      </div>
    </header>
    <div class="spacer"></div>

    <script>
      let item = document.querySelector('.icon-hamburger');
      item.addEventListener("click", function() {
        document.body.classList.toggle('menu-open');
      });
    </script>

