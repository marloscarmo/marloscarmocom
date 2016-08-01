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

    <?php
    if (have_posts()) { while (have_posts()) { the_post();

      require("part/articles.php");

    } }

    require("part/pagination.php");
    ?>

  </div>
</section>
