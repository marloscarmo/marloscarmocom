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
  echo "1";
} else if ( is_search() ) {
  get_template_part('content', 'search');
  echo "2";
} else if ( is_category() && file_exists(get_template_directory() . '/content-category.php') ) {
  get_template_part('content', 'category');
  echo "3";
} else if ( is_author() && file_exists(get_template_directory() . '/content-author.php') ) {
  get_template_part('content', 'author');
  echo "4";
} else if ( is_tag() && file_exists(get_template_directory() . '/content-tag.php') ) {
  get_template_part('content', 'tag');
  echo "5";
} else if ( is_date() && file_exists(get_template_directory() . '/content-date.php') ) {
  get_template_part('content', 'date');
  echo "6";
} else {
  if ( file_exists(get_template_directory().'/content-'.$post->post_name.'.php')) {
    echo "8";
    get_template_part('single', $post->post_name);

  } else if ( is_home() ) {
    echo "9";
    get_template_part('content', 'blog');
  } else {
    echo "10";
    get_template_part('content', 'single');
  }
}

get_footer();
?>
