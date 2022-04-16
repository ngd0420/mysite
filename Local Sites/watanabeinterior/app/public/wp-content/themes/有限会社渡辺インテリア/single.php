<?php get_header(); ?>

<div class="page-title">
    <p>ブログ・お知らせ</p>
</div>

<main class="main">
    <div class="container">
        <div class="row">
            <div class="content">
                <div class="content-left">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
                                <div class="article_header">
                                    <p class="article_meta">
                                        <span><?php the_time('Y年m月d日'); ?></span>
                                    </p>
                                    <h1 class="article_title"><?php the_title(); ?></h1>
                                </div>

                                <div class="article_body">
                                    <div class="content">
                                        <?php the_content(); ?>
                                    </div>
                                </div>

                                <?php
$prevPost = get_adjacent_post(true, '', true); 
$nextPost = get_adjacent_post(true, '', false); 
$prevThumbnail = get_the_post_thumbnail($prevPost->ID, array(80,80) ); 
$nextThumbnail = get_the_post_thumbnail($nextPost->ID, array(80,80) );
 
if( $prevPost || $nextPost ){ 
    echo '<div class="prev-next-link">';
    previous_post_link( '%link', '<p class="prev-next-label">前の記事</p><div class="thumb-wrap">'.$prevThumbnail.'<p>%title</p></div>', true );
    next_post_link( '%link', '<p class="prev-next-label">前の記事</p><div class="thumb-wrap">'.$nextThumbnail.'<p>%title</p></div>', true );
    echo '</div>';
} ?>
                
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="content-right">
                <div class="col-12 col-md-3">
                    <?php get_sidebar('categories'); ?>
                    <?php get_sidebar('archives'); ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>