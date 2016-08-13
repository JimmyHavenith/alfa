<?php get_header(); ?>

  <section style="border-bottom:none;">
    <h2><?php echo $category->name; ?></h2>
    <?php $query = new WP_query( 'post_type=news');
      while ( $query->have_posts() ): ?>
        <?php $query->the_post(); ?>
        <div>
          <h2><?php the_title(); ?></h2>
          <p>
            <?php echo get_field('news_content') ?>
          </p>
        </div>
      <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </section>

<?php get_footer(); ?>
