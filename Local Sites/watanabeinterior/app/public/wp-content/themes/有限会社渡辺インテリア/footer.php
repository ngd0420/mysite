<footer>
  <div class="footer__wrapper">

    <figure class="footer__logo">
      <img src="<?php echo get_template_directory_uri(); ?>/img/渡辺インテリアロゴフッター.png" alt="">
    </figure>

    <div class="footer-nav__wrapper">
      <nav class="footer-nav">
        <div class="footer-nav__inner">
          <ul class="footer-nav__items">
            <?php
            $args = array(
              'menu' => 'フッターメニュー',
              'menu_class' => '',
              'container' => false,
            );
            wp_nav_menu($args);
            ?>
          </ul>
        </div>
      </nav>
      <!-- footer__icons -->
      <ul class="footer__icons">
        <li class="footer__icon">
          <a href=""><i class="fa-brands fa-instagram-square"></i></a>
        </li>
        <li class="footer__icon">
          <a href=""><i class="fa-brands fa-facebook"></i></a>
        </li>
      </ul>
      <!-- /footer__icons -->

      <div class="footer__info">

        <div class="info__left">
          <div class="info__address">
            <p>〒971-8182</p>
            <p>福島県いわき市泉町滝尻定ノ田111</p>
          </div>
          <div class="info__tel">
            <p>TEL：0246-38-7571<span>FAX：0246-56-6511</span>></p>
            <p></p>
          </div>
        </div>

        <div class="info__right">
          <div class="info__direct-tel">
            <p>直通電話：090-1491-8768</p>
            <p>営業時間:9:00～17:00</p>
          </div>
        </div>

      </div>
    </div>

  </div>

  </div>
  <!-- copywriter -->
  <div class="footer__copywriter">
    <p>
      <small>Copyright ©︎Watanabe interior, .All rights reserved.</small>
    </p>
  </div>
  <!-- /copywriter -->

</footer>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<?php
wp_enqueue_script('jquery');
wp_enqueue_style('slick-carousel', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
wp_enqueue_style('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
wp_enqueue_script('watanabe-interior', get_template_directory_uri() . '/js/main.js');
wp_footer(); ?>
</body>

</html>