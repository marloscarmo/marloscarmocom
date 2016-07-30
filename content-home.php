<section class="cover" id="cover">
  <h1>MarlosCarmo <div class="cover-ghost"></div></h1>
  <span class="cover-desc">development, project management & audience</span>

  <a class="btn big-btn cover-btn" href="#articles">know more</a>
</section>

<section class="articles brown-box" id="articles">
  <div class="container">
    <h2 class="section-title brown">BLOG</h2>
    <span class="section-desc brown">Algumas opiniões sem compromisso.</span>

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

<section class="projects yellow-box" id="projects">
  <h2 class="section-title">PROJECTS</h2>
  <span class="section-desc brown">Alguns projetos para facilitar a vida.</span>

  <div class="project-item">
    <div class="container">
      <h3 class="project-name">$transl</h3>
      <div class="project-excerpt">
        <p>
          Quem trabalha com tecnologia convive o tempo todo com diversos idiomas no seu dia a dia. Além do inglês, precisamos fazer consultas em outro idioma para aprender um conteúdo novo, descobrir uma nova tecnologia e até mesmo para trocar experiência com outros profissionais. Para ganhar agilidade na tradução de um termo ou de uma frase em qualquer idioma criei o <strong>$transl</strong>, um comando para terminal que traduz qualquer coisa para qualquer idioma de uma forma simples e rápida. <strong>Conheça o projeto!</strong>
        </p>
      </div>
      <a class="btn big-btn" href="https://github.com/marloscarmo/transl" target="_blank">GO TO PROJECT</a>
    </div>
  </div>

  <div class="project-item">
    <div class="container">
      <h3 class="project-name">data-metrics</h3>
      <div class="project-excerpt">
        <p>
          Criar tags de conversão para o Google Analytics sempre é um pouquinho chato ou sempre necessitamos de espalhar vários códigos dentro do projeto. O <strong>data-metrics</strong> é uma biblioteca que facilita a criação e a integração de eventos no GA, seja por clique, envio de formulário ou qualquer outro evento. <strong>Conheça agora o projeto!</strong>
        </p>
      </div>
      <a class="btn big-btn" href="https://github.com/marloscarmo/data-metrics" target="_blank">GO TO PROJECT</a>
    </div>
  </div>

  <div class="project-item">
    <div class="container">
      <h3 class="project-name">webflow-exporter</h3>
      <div class="project-excerpt">
        <p>
          Você conhece o Webflow? O <a href="http://webflow.com" target="_blank"><strong>Webflow</strong></a> é uma ferramenta voltada para designers que podem criar projetos web diretamente no browser. O Webflow exporter é um app que facilita a exportação e integração da ferramenta com o WordPress sem necessidade de saber desenvolver. <strong>Em breve novidades!</strong>
        </p>
      </div>
      <a class="btn big-btn" href="#">COMING SOON</a>
    </div>
  </div>
</section>

<section class="bio green-box" id="bio">
  <h2 class="section-title">BIO</h2>
  <span class="section-desc brown">Um pouco sobre mim.</span>

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
