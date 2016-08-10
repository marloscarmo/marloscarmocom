<section class="cover" id="cover">
  <div class="cover-title">
    <h1>MarlosCarmo</h1>
    <div class="cover-ghost">
      <div class="cover-ghost-img"></div>
    </div>
  </div>

  <span class="cover-desc">development, project management & audience</span>

  <a class="btn big-btn cover-btn" href="#articles">know more</a>
</section>

<section class="articles brown-box" id="articles">
  <div class="container">
    <h2 class="section-title brown">BLOG</h2>
    <span class="section-desc brown">Sharing opinions.</span>

    <?php if (have_posts()) { while (have_posts()) { the_post();

    require("part/articles.php");

    } } ?>

    <div class="articles-nav">
      <a href="/articles" class="btn big-btn brown more-articles-btn">MORE ARTICLES</a>
    </div>
  </div>
</section>

<section class="projects yellow-box" id="projects">
  <h2 class="section-title">PROJECTS</h2>
  <span class="section-desc brown">Opening ideas.</span>

  <div class="project-item">
    <div class="container">
      <h3 class="project-name">$transl</h3>
      <div class="project-excerpt">
        <p>
          Quem trabalha com tecnologia convive o tempo todo com diversos idiomas no seu dia a dia. Além do inglês, precisamos fazer consultas em muitas línguas para aprender um conteúdo novo, descobrir uma nova tecnologia e até mesmo trocar experiência com outros profissionais. Para ganhar agilidade na tradução de um termo ou de uma frase em qualquer idioma criei o <strong>$transl</strong>, um comando para terminal que traduz qualquer coisa para qualquer idioma de uma forma simples e rápida. <strong>Conheça o projeto!</strong>
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
          Criar eventos de conversão para o Google Analytics é sempre chato ou sempre necessitamos de espalhar vários códigos dentro do projeto. O <strong>data-metrics</strong> é uma biblioteca que facilita a criação e a integração de eventos no GA, seja por clique, envio de formulário ou qualquer outro evento. <strong>Conheça agora o projeto!</strong>
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
          Conhece o Webflow? O <a href="http://webflow.com" target="_blank"><strong>Webflow</strong></a> é uma ferramenta para designers criarem projetos web diretamente no browser. O Webflow Exporter é um app que facilita a exportação e integração da ferramenta com o WordPress sem necessidade de codificar. <strong>Em breve novidades!</strong>
        </p>
      </div>
      <a class="btn big-btn" href="#">COMING SOON</a>
    </div>
  </div>
</section>

<section class="bio green-box" id="bio">
  <h2 class="section-title">BIO</h2>
  <span class="section-desc brown">A bit about me.</span>

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
      <span class="tag-medium">#entrepreneur</span>
      <span class="tag-medium">#leadership</span>
    </div>

    <div class="bio-photo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo-marlos-carmo.jpg" alt="Marlos Carmo" />
    </div>

    <div class="bio-desc">
      Creative & Technology.<br><br>
      Estas duas palavras pautaram meus 18 anos trabalhando com projetos digitais de diversos tamanhos e desafios. Atualmente sou co-fundador e diretor de operações da ZUBB, agência digital com foco no negócio. Apaixonado por inovação e por números, digo sempre que #soudev.
    </div>
  </div>
</section>
