<?php
/*
Template Name: ブログ2
*/
?>
<?php get_header(); ?>

<main>
  <div class="popular-blog">
    <div class="popular-blog__wrapper">

      <?php query_posts('post_type=post&paged=' . $paged); ?>
      <?php query_posts('posts_per_page=3'); ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="popular-blog__item">
            <a href="<?php the_permalink(); ?>">
              <div class="popular-blog__eyecatch">
                <?php the_post_thumbnail(); ?>
              </div>
              <p><?php the_title(); ?></p>
            </a>

          </div>
      <?php endwhile;
      endif;
      wp_reset_query(); ?>


    </div>
  </div>

  <div class="new-blog">
    <p class="blog-title">新着順</p>
    <div class="new-blog__wrapper">

      <?php query_posts('posts_per_page=12'); ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="new-blog__item">
            <a href="<?php the_permalink(); ?>">
              <div class="new-blog__eyecatch">
                <?php the_post_thumbnail(); ?>
              </div>

              <div class="new-blog__text">
                <p><?php the_title(); ?></p>
              </div>
            </a>
          </div>
      <?php endwhile;
      endif;
      wp_reset_query(); ?>
    </div>
  </div>
  </div>

  <?php get_footer(); ?>