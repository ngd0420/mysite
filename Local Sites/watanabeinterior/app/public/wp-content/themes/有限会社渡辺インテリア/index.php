<?php get_header(); ?>
<main>
  <!-- main -->

  <!-- mainvisual -->
  <div class="mainvisual">
    <!-- text -->
    <div class="mainvisual__catch">
      <p>新築・リフォームetc...<br />お気軽にご相談ください</p>
    </div>
    <!-- /text -->

    <!-- fade -->
    <ul class="fade">
      <li><img src="<?php echo get_template_directory_uri(); ?>/img/animation-bg1.png" alt="bg1" /></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/img/animation-bg2.jpeg" alt="bg2" /></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/img/animation-bg3.jpeg" alt="bg3" /></li>
    </ul>
    <!-- /fade -->
  </div>
  <!-- /mainvisual -->

  <!-- about -->
  <div class="about">
    <!-- about__wrapper -->
    <div class="about__wrapper">
      <!-- about__logo -->
      <div class="about__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/渡辺インテリアロゴ.png" alt="渡辺インテリア" />
      </div>
      <!-- /about__logo -->

      <!-- about__text -->
      <div class="about__text">
        <p>
          　（有）渡辺インテリアへようこそ！　
          新築・リフォームの
          内装仕上げとそれに付随するインテリアの
          提案 及び 施工を専門とする会社です。

          協力会社様や社員同士の
          「和」を大切に、
          他業種の方ともしっかりとした
          コミュニケーションをとり
          サポートし合って
          一つの仕事を仕上げていくことに
          やりがいを感じながら
          毎日の仕事に取り組んでいます。

          クロス貼りはもちろん、
          床やカーテンなどの内装を
          トータルでご提案することも可能です！
        </p>
      </div>
      <!-- /about__text -->
      <a href="<?php echo esc_url(home_url('/company')); ?>" class="btn">会社について</a>
    </div>
    <!-- /about__wrapper -->
  </div>
  <!-- /about -->

  <!-- works -->
  <div class="works">
    <!-- works__wrapper -->
    <div class="works__wrapper">
      <h2 class="section-title">試行事例・メニュー例</h2>

      <!-- slider -->
      <div class="slider">
        <!-- slider__item -->
        <div class="slider__item">
          <!-- img -->
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/slider1-min.jpeg" />
          </figure>
          <!-- /img -->

          <!-- slider__info -->
          <dl class="slider__info">
            <dt class="slider__title">デジウォール</dt>
          </dl>
          <!-- /slider__info -->
        </div>

        <!-- slider__item -->
        <div class="slider__item">
          <!-- img -->
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/slider2-min.jpeg" />
          </figure>
          <!-- /img -->

          <!-- slider__info -->
          <dl class="slider__info">
            <dt class="slider__title">ロールカーテン</dt>
          </dl>
          <!-- /slider__info -->
        </div>

        <!-- slider__item -->
        <div class="slider__item">
          <!-- img -->
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/slider3-min.jpeg" />
          </figure>
          <!-- /img -->

          <!-- slider__info -->
          <dl class="slider__info">
            <dt class="slider__title">ディズニーシリーズ</dt>
          </dl>
          <!-- /slider__info -->
        </div>
        <!-- slider__item -->

        <!-- slider__item -->
        <div class="slider__item">
          <!-- img -->
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/slider4-min.jpeg" />
          </figure>
          <!-- /img -->

          <!-- slider__info -->
          <dl class="slider__info">
            <dt class="slider__title">木製ブラインド</dt>
          </dl>
          <!-- /slider__info -->
        </div>

        <!-- slider__item -->
        <div class="slider__item">
          <!-- img -->
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/slider5-min.jpeg" />
          </figure>
          <!-- /img -->

          <!-- slider__info -->
          <dl class="slider__info">
            <dt class="slider__title">和製シェード</dt>
          </dl>
          <!-- /slider__info -->
        </div>

        <!-- slider__item -->
        <div class="slider__item">
          <!-- img -->
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/slider6-min.jpeg" />
          </figure>
          <!-- /img -->

          <!-- slider__info -->
          <dl class="slider__info">
            <dt class="slider__title">
              施行例《G様邸》
            </dt>
          </dl>
          <!-- /slider__info -->
        </div>

        <!-- slider__item -->
        <div class="slider__item">
          <!-- img -->
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/slider7-min.jpeg" />
          </figure>
          <!-- /img -->

          <!-- slider__info -->
          <dl class="slider__info">
            <dt class="slider__title">
              シェード
            </dt>
          </dl>
          <!-- /slider__info -->
        </div>

      </div>
      <!-- /slider -->
      <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="btn">もっと見る</a>
    </div>
    <!-- works__wrapper -->

  </div>

  <!-- works -->

  <!-- news -->
  <div class="news">
    <!-- news__wrapper -->
    <div class="news__wrapper">
      <!-- news__left-right -->
      <div class="news__left-right">
        <!-- news__info -->
        <dl class="news__info">
          <dt class="news__title">お知らせ</dt>
        </dl>
        <!-- news__info -->
        <ul class="news-list">
          <?php query_posts('post_type=post&paged=' . $paged); ?>
          <?php query_posts('posts_per_page=3'); ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <!-- news-list__item -->
              <li class="news-list__item">
                <a href="<?php the_permalink(); ?>">
                  <span><?php the_time('Y/m/d'); ?></span>
                  <p><?php the_title(); ?></p>
                </a>
              </li>
              <!-- /news-list__item -->
              <!-- /news-list -->
          <?php endwhile;
          endif;
          wp_reset_query(); ?>
        </ul>
        <!-- news-list -->

      </div>
      <!-- /news__left-right -->
    </div>
    <!-- /news__wrapper -->
  </div>
  <!-- /news -->

  <!-- releted -->
  <div class="releted">
    <!-- releted__wrapper -->
    <div class="releted__wrapper">
      <!-- releted__item -->
      <div class="releted__item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/releted-item1.png" alt="ビルのアイコン" />
        <p>会社<span class="small-text">について</span></p>
        <span class="arrow"></span>
        <a href="<?php echo esc_url(home_url('/company')); ?>" class="item__link"></a>
      </div>
      <!-- /releted__item -->

      <!-- releted__item -->
      <div class="releted__item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/releted-item2.png" alt="カーテンと窓のイラスト" />
        <p>サービス<span class="small-text">について</span></p>
        <span class="arrow"></span>
        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="item__link"></a>
      </div>
      <!-- /releted__item -->

      <!-- releted__item -->
      <div class="releted__item">

        <img src="<?php echo get_template_directory_uri(); ?>/img/releted-item3.png" alt="電話のアイコン" />
        <p>問い合わせ<span class="small-text">について</span></p>
        <span class="arrow"></span>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="item__link"></a>
      </div>
      <!-- /releted__item -->
    </div>
    <!-- /releted__wrapper -->
  </div>
  <!-- /releted -->

  <!-- message -->
  <div class="message">
    <!-- message__wrapper -->
    <div class="message__wrapper">
      <!-- message__info -->
      <div class="message__info">
        <h2 class="message__title">社長について</h2>
        <p>
          ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
        </p>
        <p>
          ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
        </p>
      </div>
      <!-- message__info -->

      <!-- message__image -->
      <figure class="message__image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/渡辺様.png" alt="" />
        <a class="viewmore viewmore--bottom" href="<?php echo esc_url(home_url('/company')); ?>">もっと見る</a>
      </figure>
      <!-- /message__image -->
    </div>
    <!-- /message__wrapper -->
  </div>
  <!-- /message -->

  <!-- blog -->
  <div class="blog">
    <!-- blog__wrapper -->
    <div class="blog__wrapper">
      <!-- blog__item -->
      <div class="blog__item">
        <!-- blog__info -->
        <div class="blog__info">
          <h2 class="blog__title">ブログ</h2>
        </div>
        <!-- /blog__info -->

        <!-- blog-list -->
        <ul class="blog-list">
          <?php query_posts('post_type=post&paged=' . $paged); ?>
          <?php query_posts('posts_per_page=3'); ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <!-- blog-list__item -->
              <li class="blog-list__item">
                <a href="#">
                  <span><?php the_time('Y/m/d'); ?></span>
                  <p><?php the_title(); ?></p>>
                </a>
              </li>
              <!-- /blog-list__item -->
          <?php endwhile;
          endif;
          wp_reset_query(); ?>
        </ul>
        <!-- /blog__list -->
      </div>
      <!-- /blog__item -->

      <a href="<?php echo esc_url(home_url('/blog')); ?>" class="viewmore viewmore--right">もっと見る</a>
    </div>
    <!-- /blog__wrapper -->
  </div>
  <!-- /blog -->

  <!-- access -->
  <div class="access">
    <!--  access__wrapper -->
    <div class="access__wrapper">
      <!--access__left -->
      <div class="access__left">
        <!-- access__logo -->
        <div class="access__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/位置バルーン (1).png" alt="位置バルーン" />
        </div>
        <!-- /access__logo -->

        <!-- access__text -->
        <div class="access__text">
          <p class="text--large">アクセス</p>
          <p class="text--small">〒971-8182</p>
          <p class="text--small">福島県いわき市泉町滝尻定ノ田111</p>
          <p class="text--small">駐車場有</p>
        </div>
      </div>
      <!-- /access__text -->

      <!-- access__right -->
      <div class="access__right">
        <div class="access__gmap">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3188.2298920983335!2d140.8619903153739!3d36.956565979916654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6021128d0200cc29%3A0x3ef8fcfc35fedc12!2z77yI5pyJ77yJ5rih6L6644Kk44Oz44OG44Oq44Ki!5e0!3m2!1sja!2sjp!4v1646662210030!5m2!1sja!2sjp" width="100%" height="400px" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
      <!-- access__right -->
    </div>
    <!--  /access__wrapper -->
  </div>
  <!--  /access -->

  <!-- Tppに戻る -->
  <div class="scroll">
    <a href="#">Page Top<br /><i class="fas fa-chevron-up"></i></a>
  </div>
  <!-- /Tppに戻る -->
</main>
<?php get_footer(); ?>