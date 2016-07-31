<?php
/**
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Marlos Carmo
 * @since Marlos Carmo 1.0
 */
get_header();

if ( is_front_page() ) {
  get_template_part('content', 'home');
} else if ( is_search() ) {
  get_template_part('content', 'search');
} else if ( is_category() && file_exists(get_template_directory() . '/content-category.php') ) {
  get_template_part('content', 'category');
} else if ( is_author() && file_exists(get_template_directory() . '/content-author.php') ) {
  get_template_part('content', 'author');
} else if ( is_tag() && file_exists(get_template_directory() . '/content-tag.php') ) {
  get_template_part('content', 'tag');
} else if ( is_date() && file_exists(get_template_directory() . '/content-date.php') ) {
  get_template_part('content', 'date');
} else {
  if ( file_exists(get_template_directory().'/content-'.$post->post_name.'.php')) {
    get_template_part('single', $post->post_name);
  } else if ( is_home() ) {
    get_template_part('content', 'blog');
  } else {
    get_template_part('content', 'single');
  }
}

get_footer();
?>
