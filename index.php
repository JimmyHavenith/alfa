<?php get_header() ?>
<section class="about-alfa">
  <div class="container">
    <div class="about-alfa-div">
      <!-- Contenu à-propos page d'accueil -->
      <?php
      $query = new WP_query( 'name=a-propos' );
      while ( $query->have_posts() ):
      ?>
      <?php $query->the_post(); ?>
      <h2><?php echo get_the_title(); ?></h2>
      <p><?php echo get_the_content(); ?></p>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<section class="services-alfa">
  <div class="container">
    <div class="services-alfa-div">
      <h2>Nos services</h2>
      <div class="sevice-prevention service">
        <div class="service_service">
          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/formation.png" alt="logo du service formation"></a>
          <div class="service-info">
            <h3>Service de prévention</h3>
            <div class="service-paragraphe">
              <p>
                Inspirée du modèle thérapeutique, l’intervention préventive s’articule sur les approches psychosociale et systémique. Toute demande d’aide est analysée avec le demandeur afin d’adapter notre intervention à chaque situation.
              </p>
            </div>
            <p>
              <a class="see-more" href="#">En savoir plus</a>
            </p>
          </div>
        </div>
      </div>
      <div class="sevice-therapeutique service">
        <div class="service_service">
          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/therapeutique.png" alt="logo du service thérapeutique"></a>
          <div class="service-info">
            <h3>Service thérapeutique</h3>
            <div class="service-paragraphe">
              <p>
                Il est composé d'une équipe pluridisciplinaire (assistants sociaux, médecins, psychologues et psychiatre).
              </p>
            </div>
            <p>
              <a class="see-more" href="#">En savoir plus</a>
            </p>
          </div>
        </div>
      </div>
      <div class="sevice-parentalite service">
        <div class="service_service">
          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/parent.png" alt="logo du service parentalite"></a>
          <div class="service-info">
            <h3>Service parentalité</h3>
            <div class="service-paragraphe">
              <p>
                Le Service « Parentalité » est assuré par une équipe pluridisciplinaire spécifique. L’objectif de ce service est de favoriser des relations familiales harmonieuses et un développement psycho-médico-social optimum de l'enfant par un accompagnement personnalisé, de proximité et en réseau, de parents et futurs parents toxicodépendants et/ou souffrant de problèmes de santé mentale et de leurs enfants de 0 à 18 ans, placés ou vivant en famille.
              </p>
            </div>
            <p>
              <a class="see-more" href="#">En savoir plus</a>
            </p>
          </div>
        </div>
      </div>
      <div class="sevice-risques service">
        <div class="service_service">
          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/risque.png" alt="logo du service réduction des risques"></a>
          <div class="service-info">
            <h3>Service réduction des risques</h3>
            <div class="service-paragraphe">
              <p>
                La réduction des risques est une stratégie de santé publique qui vise à prévenir les dommages que l’usage de drogues peut occasionner tant pour la société que pour les personnes qui ne peuvent ou ne veulent pas s’abstenir d’en consommer.
              </p>
            </div>
            <p>
              <a class="see-more" href="#">En savoir plus</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="news-alfa">
  <div class="container">
    <div class="news-alfa-div">
      <h2>Les dernières news</h2>
      <div class="news">
        <ul>
          <?php $query = new WP_query( array( 'post_type' => 'news', 'order' => 'ASC', 'posts_per_page' => 3 ) );
  						if(have_posts()): while ( $query -> have_posts() ): $query -> the_post(); global $post; ?>
                <li>
                  <h3><?php echo get_the_title(); ?></h3>
                  <p>
                    <?php echo get_field('news_content'); ?>
                  </p>
                </li>
              <?php endwhile; endif; ?>
        </ul>
        <a href="#">Afficher toutes les news</a>
      </div>
    </div>
  </div>
</section>
<?php get_footer() ?>
