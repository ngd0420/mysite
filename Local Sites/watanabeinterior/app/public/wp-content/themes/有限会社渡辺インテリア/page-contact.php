<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>
<!-- main -->
<main>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
  <!-- Tppに戻る -->
  <div class="scroll">
    <a href="#">Page Top<br /><i class="fas fa-chevron-up"></i></a>
  </div>
  <!-- /Tppに戻る -->
</main>

<?php get_footer(); ?>