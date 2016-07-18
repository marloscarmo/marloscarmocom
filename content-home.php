<section class="cover">
  <h1>MarlosCarmo <div class="cover-ghost"></div></h1>
  <span class="cover-desc">development, project management & audience</span>

  <a class="btn big-btn cover-btn" href="#">know more</a>
</section>

<section class="articles brown-box">
  <div class="container">
    <h2 class="section-title brown">BLOG</h2>
    <span class="section-desc brown">This is some text inside of a div block.</span>

    <?php if (have_posts()) { while (have_posts()) { the_post() ?>

    <div class="article-item article-<?php echo $GLOBALS["COLORSCATEGORIES"][strtolower(get_the_category()[0]->name)];?>">
      <div class="article-title">
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
      <a href="#" class="btn big-btn brown more-articles-btn">MORE ARTICLES</a>
    </div>
  </div>
</section>

<section class="projects yellow-box">
  <h2 class="section-title">PROJECTS</h2>
  <span class="section-desc brown">This is some text inside of a div block.</span>

  <div class="project-item">
    <div class="container">
      <h3 class="project-name">$transl</h3>
      <div class="project-excerpt">
        <p>
          Sempre que pensamos em uma estratégia de Attraction para nossas ações e campanhas, recorremos aos modelos tradicionais que aprendemos na escola de propaganda: definimos uma verba e compramos a mídia ideal para trazer o público e #pronto.
        </p>
      </div>
      <a class="btn big-btn" href="#">GO TO PROJECT</a>
    </div>
  </div>

  <div class="project-item">
    <div class="container">
      <h3 class="project-name">data-metrics</h3>
      <div class="project-excerpt">
        <p>
          Sempre que pensamos em uma estratégia de Attraction para nossas ações e campanhas, recorremos aos modelos tradicionais que aprendemos na escola de propaganda: definimos uma verba e compramos a mídia ideal para trazer o público e #pronto.
        </p>
      </div>
      <a class="btn big-btn" href="#">GO TO PROJECT</a>
    </div>
  </div>

  <div class="project-item">
    <div class="container">
      <h3 class="project-name">webflow-exporter</h3>
      <div class="project-excerpt">
        <p>
          Sempre que pensamos em uma estratégia de Attraction para nossas ações e campanhas, recorremos aos modelos tradicionais que aprendemos na escola de propaganda: definimos uma verba e compramos a mídia ideal para trazer o público e #pronto.
        </p>
      </div>
      <a class="btn big-btn" href="#">GO TO PROJECT</a>
    </div>
  </div>
</section>

<section class="bio green-box">
  <h2 class="section-title">BIO</h2>
  <span class="section-desc brown">This is some text inside of a div block.</span>

  <div class="container">
    <div class="bio-tags">
      <span class="tag-medium">#advertising</span>
      <span class="tag-big">#digitalmarketing</span>
      <span class="tag-small">#development</span>
      <span class="tag-big">#javascript</span>
      <span class="tag-medium">#css</span>
      <span class="tag-medium">#html5</span>
      <span class="tag-medium">#inbound</span>
      <span class="tag-small">#nodejs</span>
      <span class="tag-medium">#scrum</span>
      <span class="tag-big">#projectmanagement</span>
      <span class="tag-big">#audience</span>
      <span class="tag-medium">#osep</span>
      <span class="tag-medium">#leadership</span>
    </div>

    <div class="bio-photo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo-marlos-carmo.jpg" alt="Marlos Carmo" />
    </div>

    <div class="bio-desc">
      Sempre que pensamos em uma estratégia de Attraction para nossas ações e campanhas, recorremos aos modelos tradicionais que aprendemos na escola de propaganda: definimos uma verba e compramos a mídia ideal para trazer o público e #pronto
    </div>
  </div>
</section>

<?php
get_footer();
?>
