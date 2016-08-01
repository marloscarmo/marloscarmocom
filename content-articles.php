<?php
$color = $GLOBALS["COLORSCATEGORIES"][strtolower(single_cat_title("", false))];
?>

<section class="category category-<?php echo $color; ?>">
  <div class="section-title">
    <h1><?php echo single_cat_title("", false); ?></h1>
    <span class="section-desc"><?php echo strip_tags(category_description()); ?></span>
  </div>
</section>

<section class="category-articles articles brown-box">
  <div class="container">

    <?php if (have_posts()) { while (have_posts()) { the_post() ?>

    <div class="article-item article-<?php echo $color; ?>">
      <div class="article-title <?php echo $color; ?>-box">
        <div class="article-container">
          <h3><?php echo get_the_title(); ?></h3>
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

    <?php } } ?>


    <div class="articles-nav">
      <a href="#" class="btn big-btn brown more-articles-btn">< PREVIOUS</a>
      <a href="#" class="btn big-btn brown more-articles-btn">NEXT ></a>
    </div>
  </div>
</section>
