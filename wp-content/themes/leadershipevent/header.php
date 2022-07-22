<!doctype html>
<!-- If multi-language site, reconsider usage of html lang declaration here. -->
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <?php wp_head(); ?>
</head>
<body>
  <!--container start-->
  <div class="container">
    <!--header section start-->
    <header>
      <div class="wrapper">
        <?php 
          get_template_part('template-parts/modules/header/header', 'logo');

          wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'navbar',
            'container' => 'nav',
            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
          ));
          
          get_template_part('template-parts/modules/header/header', 'buy-tickets-cta');
        ?>
      </div>
    </header>
    <!--header section start-->
    <!--main section start-->
    <main>