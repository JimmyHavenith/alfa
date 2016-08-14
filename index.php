<?php get_header() ?>
<section class="about-alfa">
  <div class="container">
    <div class="about-alfa-div">
      <!-- Contenu à-propos page d'accueil -->
      <?php $query = new WP_query( 'name=a-propos' );
      while ( $query->have_posts() ): ?>
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
      <?php
      // Récupérer la taxonomie dans une variable
      $taxonomy = 'sous-services';
      // Variable avec le get_terms
      $tax_terms = get_terms($taxonomy, array('hide_empty' => false, 'orderby' => 'id'));
      ?>
      <?php foreach ($tax_terms as $tax_term) : ?>
          <div class="sevice-prevention service">
            <div class="service_service">
              <?php $test = get_field('taxonomy_image', $tax_term); ?>
              <a href="<?= esc_attr(get_term_link($tax_term, $taxonomy)); ?>"><img src="<?= $test['url']; ?>" alt="<?= $test['alt']; ?>"/></a>
              <div class="service-info">
                <h3><?= $tax_term->name ; ?></h3>
                <div class="service-paragraphe">
                  <p>
                    <?= wpautop( $tax_term->description ); ?>
                  </p>
                </div>
                <p>
                  <a class="see-more" href="<?= esc_attr(get_term_link($tax_term, $taxonomy)); ?>" title="<?= sprintf( __( "Voir le contenu de ce service" ), $tax_term->name ); ?>">En savoir plus</a>
                </p>
              </div>
            </div>
          </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<section class="news-alfa">
  <div class="container">
    <div class="news-alfa-div">
      <h2>Les dernières news</h2>
      <!-- Récupération des différentes news (maximum 3) -->
      <div class="news">
        <ul>
          <?php $query = new WP_query( array( 'post_type' => 'news', 'order' => 'DESC', 'posts_per_page' => 3 ) );
  						if(have_posts()): while ( $query -> have_posts() ): $query -> the_post(); global $post; ?>
                <li>
                  <h3><?php echo get_the_title(); ?></h3>
                  <p>
                    <?php echo get_field('news_content'); ?>
                  </p>
                </li>
              <?php endwhile; endif; ?>
        </ul>
        <a href="<?php bloginfo('wpurl'); ?>/category/news">Afficher toutes les news</a>
      </div>
    </div>
  </div>
</section>
<?php get_footer() ?>
