<?php
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
