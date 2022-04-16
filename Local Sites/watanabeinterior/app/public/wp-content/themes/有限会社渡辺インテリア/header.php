<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php bloginfo('有限会社渡辺インテリアの公式サイトです。'); ?>" />
  <title><?php bloginfo('有限会社渡辺インテリア'); ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <?php
  wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css');
  wp_head();
  ?>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.inc" type="image/x-icon">

</head>

<body>
  <!-- header -->
  <header class="header">
    <!-- header___wrapper -->
    <div class="header__wrapper">
      <!-- header__logo -->
      <div class="header__logo">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/渡辺インテリアロゴ.png" alt="有限会社 渡辺インテリア" /></a>
      </div>

      <!-- nav -->
      <nav class="nav">
        <ul class="nav__wrapper">
          <?php
          $args = array(
            'menu' => 'global-navigation',
            'menu_class' => '',
            'container' => false,
          );
          wp_nav_menu($args);
          ?>
        </ul>
      </nav>
      <!-- /nav -->

      <!-- hamburger -->
      <div id="toggle">
        <div id="toggle-box">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <div id="nav-content">
        <nav>
          <?php
          $args = array(
            'menu' => 'global-navigation--sp',
            'menu_class' => '',
            'container' => false,
          );
          wp_nav_menu($args);
          ?>
        </nav>
      </div>
      <!-- hamburger -->
    </div>
    <!-- /header-wrapper -->
  </header>
  <!-- /header -->