<?php /* Template Name: Page "Home" */ ?>

<?php get_header() ?>

<section class="header-alfa-title">
  <div class="header-alfa">
    <div class="container">
      <div class="header-alfa-div">
        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="logo du centre alfa"></a>
        <h1>Le centre ALFA</h1>
      </div>
    </div>
  </div>
</section>
<section class="header-banner">
  <div class="header-banner-image">
    <?php $query = new WP_query( array( 'post_type' => 'banniere', 'order' => 'DESC', 'posts_per_page' => 1 ) );
      while ( $query -> have_posts() ): $query -> the_post(); global $post; ?>
        <div class="header-banner-map">
          <?php $banner = get_field('photo', $tax_term); ?>
          <img src="<?= $banner['url']; ?>" alt="Photo de la page d'accueil"/>
        </div>
      <?php endwhile; ?>
      <div class="header-banner-info">
        <p>
          Aide Liégoise aux Alcooliques et à leur famille
        </p>
        <p class="num-tel">
          04 223 09 03
        </p>
      </div>
  </div>
</section>
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
      <a href="#" title="en savoir plus sur le centre alfa">En savoir plus</a>
    </div>
  </div>
</section>
<section class="services-alfa">
  <div class="container">
    <div class="services-alfa-div">
      <h2>Nos services</h2>
      <?php
      $taxonomy = 'sous_services';
      $tax_terms = get_terms($taxonomy, array('hide_empty' => false, 'orderby' => 'id'));
      ?>
      <?php foreach ($tax_terms as $tax_term) : ?>
          <div class="sevice-prevention service">
            <div class="service_service">
              <?php $logo = get_field('taxonomy_image', $tax_term); ?>
              <a title="voir le contenu du <?= $tax_term->name; ?>" href="<?= esc_attr(get_term_link($tax_term, $taxonomy)); ?>"><img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>"/></a>
              <div class="service-info">
                <h3><?= $tax_term->name ; ?></h3>
                <div class="service-paragraphe">
                  <?= wpautop( $tax_term->description ); ?>
                </div>
                <p>
                  <a class="see-more" href="<?= esc_attr(get_term_link($tax_term, $taxonomy)); ?>" title="voir le contenu du <?= $tax_term->name; ?>">En savoir plus</a>
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
                  <h3><?php echo get_the_title(); ?> <span>(<?php echo get_the_date(); ?>)</span></h3>
                  <img class="streamer" src="<?php bloginfo('template_directory'); ?>/img/streamer.png" alt="banderole pour news">
                    <?php echo get_field('news_content'); ?>
                </li>
              <?php endwhile; endif; ?>
        </ul>
        <a title="Afficher toutes les news" href="<?php bloginfo('wpurl'); ?>/les-news">Afficher toutes les news</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer() ?>
