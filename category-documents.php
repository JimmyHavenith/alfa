<?php get_header(); ?>

<?php

$url = sf_get_current_url('base');
$category = get_category_by_path($url, false);

?>

  <section>
    <h2><?php echo $category->name; ?></h2>
    <?php $query = new WP_query( 'post_type=documents');
      while ( $query->have_posts() ): ?>
        <?php $query->the_post(); ?>
        <ul>
          <li>
            <?php $file = get_field('document_fichier'); ?>
            <a href="<?= $file['url']; ?>"><?php the_title(); ?></a>
          </li>
        </ul>
      <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </section>

<?php get_footer(); ?>
