<?php
/*
Template Name: Artigos
*/

get_header();

$page = ($_REQUEST["page"] == undefined) ? 1 : $_REQUEST["page"];

echo $paged;

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

    require("part/pagination.php");
    ?>

  </div>
</section>


<?php
get_footer();
?>
