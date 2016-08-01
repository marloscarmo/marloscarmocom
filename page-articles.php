<?php /* Template Name: Artigos */

get_header();

$posts = get_posts( array(
  'posts_per_page' => 10,
  'orderby' => 'post_date',
  'order' => 'DESC'
));
?>

<section class="category category-orange">
  <div class="section-title">
    <h1>Artigos</h1>
    <span class="section-desc">Sharing opinions</span>
  </div>
</section>

<section class="category-articles articles brown-box">
  <div class="container">

    <?php
    foreach( $posts as $post ) {
      setup_postdata( $post );

      require("part/articles.php");
    }
    ?>

    <div class="articles-nav">
      <a href="#" class="btn big-btn brown more-articles-btn">< PREVIOUS</a>
      <a href="#" class="btn big-btn brown more-articles-btn">NEXT ></a>
    </div>
  </div>
</section>


<?php
get_footer();
?>
