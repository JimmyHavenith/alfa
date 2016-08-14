<?php get_header(); ?>

<?php

$url = sf_get_current_url('base');
$category = get_category_by_path($url, false);

?>

  <section>
    <h2><?php echo $category->name; ?></h2>
    <?php $query = new WP_query( 'post_type=tarifs');
      while ( $query->have_posts() ): ?>
        <?php $query->the_post(); ?>
        <div>
          <h3><?php the_title(); ?></h3>
          <p>
            <?php echo get_field('tarifs_prix') ?>
          </p>
        </div>
      <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </section>

<?php get_footer(); ?>
