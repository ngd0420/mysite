<?php
add_theme_support('title-tag');

add_theme_support('menus');

register_nav_menu( 'footer-menu', 'フッターメニュー' );

add_theme_support('post-thumbnails');
add_filter('next_post_link', 'next_post_link_attributes');
add_filter('previous_post_link', 'prev_post_link_attributes');
 
function next_post_link_attributes($output) {
    $injection = 'class="next-link"';
    return str_replace('<a href=', '<a '.$injection.' href=', $output);
}
function prev_post_link_attributes($output) {
    $injection = 'class="prev-link"';
    return str_replace('<a href=', '<a '.$injection.' href=', $output);
}
