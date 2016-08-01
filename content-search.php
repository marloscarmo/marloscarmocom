<?php
/*
Template Name: Search Page
*/

get_header();
?>

<section class="category category-orange">
  <div class="section-title">
    <h1>Search</h1>
    <span class="section-desc">Resultado da busca pela palavra: <strong><?php echo get_search_query();?></strong></span>
  </div>
</section>

<section class="category-articles articles brown-box">
  <div class="container">

    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();

        require("part/articles.php");
      }
    } else {
    ?>
      <span class="no-results">Não foi encontrado nenhum resultado com a palavra: <br><strong><?php echo get_search_query();?></strong>.</span>
    <?php
    }

    require("part/pagination.php");
    ?>

  </div>
</section>


<?php
get_footer();
?>
