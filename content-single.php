<?php if (have_posts()) { while (have_posts()) { the_post() ?>

<article class="post post-<?php echo $GLOBALS["COLORSCATEGORIES"][strtolower(get_the_category()[0]->name)];?>">
  <div class="post-header" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>)">
    <div class="post-author">
      <div class="post-author-photo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo-marlos-carmo.jpg" alt="Marlos Carmo" />
      </div>
    </div>
    <div class="post-date"><?php the_date('d \d\e F \d\e Y'); ?></div>
    <div class="post-title">
      <h1><?php echo the_title(); ?></h1>
    </div>
    <div class="post-category"><?php echo the_category(); ?></div>
  </div>

  <div class="post-content">
    <div class="post-content-padding">
        <?php echo the_content(); ?>
    </div>
  </div>
</article>

<?php } } ?>
