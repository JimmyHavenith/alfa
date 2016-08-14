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
      <!-- Récupération des différents services -->
      <?php
      $args = array(
          'type'                     => 'post',
          'child_of'                 => 0,
          'parent'                   => '',
          'orderby'                  => 'ID',
          'order'                    => 'ASC',
          'hide_empty'               => 0,
          'hierarchical'             => 1,
          'exclude'                  => '',
          'include'                  => '',
          'number'                   => '',
          'taxonomy'                 => 'category',
          'pad_counts'               => false

      );
      $categories = get_categories( $args );
      foreach ($categories as $category) : ?>
        <?php if($category->parent == '9'): ?>
          <div class="sevice-prevention service">
            <div class="service_service">
              <a href="<?php bloginfo('wpurl'); ?>/category/services/<?php echo $category->slug; ?>"><img src="<?php bloginfo('template_directory'); ?>/img/formation.png" alt="logo du service formation"></a>
              <div class="service-info">
                <h3><?php echo $category->name ?></h3>
                <div class="service-paragraphe">
                  <p>
                    <?php echo $category->description; ?>
                  </p>
                </div>
                <p>
                  <a class="see-more" href="<?php bloginfo('wpurl'); ?>/category/services/<?php echo $category->slug; ?>">En savoir plus</a>
                </p>
              </div>
            </div>
          </div>
        <?php endif; ?>
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
