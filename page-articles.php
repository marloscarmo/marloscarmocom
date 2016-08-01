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

      $color = $GLOBALS["COLORSCATEGORIES"][strtolower(get_the_category()[0]->name)];
    ?>

    <div class="article-item article-<?php echo $color; ?>">
      <div class="article-title <?php echo $color; ?>-box">
        <div class="article-container">
          <h3><?php echo the_title(); ?></h3>
          <div class="article-category">
            <?php echo the_category(); ?>
          </div>
        </div>
      </div>

      <div class="article-excerpt">
        <div class="article-container">
          <?php echo wpautop(get_the_excerpt()); ?>
          <a href="<?php echo get_permalink(); ?>" class="btn">LEIA O ARTIGO</a>
        </div>
      </div>
    </div>

    <?php } ?>


    <div class="articles-nav">
      <a href="#" class="btn big-btn brown more-articles-btn">< PREVIOUS</a>
      <a href="#" class="btn big-btn brown more-articles-btn">NEXT ></a>
    </div>
  </div>
</section>


<?php
get_footer();
?>
