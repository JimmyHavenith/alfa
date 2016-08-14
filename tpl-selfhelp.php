<?php /* Template Name: Page "Self-help" */ ?>

<?php get_header(); ?>

	<section>
  	<h1>Self-help</h1>
  	<div>
      <?php $query = new WP_query( array( 'post_type' => 'self-help', 'order' => 'ASC' ) );
        while ( $query -> have_posts() ): $query -> the_post(); global $post; ?>
          <h3><?php the_title(); ?></h3>
          <p>
            <span>Quand ?</span><?= get_field('help_horaire'); ?>
          </p>
          <p>
            <span>contact :</span>
          </p>
          <p>
            <?= get_field('help_contact'); ?>
          </p>
    	  <?php endwhile; ?>
  	</div>
	</section>

<?php get_footer(); ?>
