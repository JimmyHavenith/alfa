<?php /* Template Name: Page "Partenariats & réseaux" */ ?>

<?php get_header(); ?>

	<section>
	<h1>Partenariats & réseaux</h1>

	<ul>
	<?php $query = new WP_query( array( 'post_type' => 'partenariat-reseaux', 'order' => 'ASC' ) );
		while ( $query -> have_posts() ): $query -> the_post(); global $post; ?>
		<li>
			<a href="<?= get_field('partenaire-lien'); ?>"><?php the_title(); ?></a>
		</li>
	<?php endwhile; ?>
	</ul>
	</section>

<?php get_footer(); ?>
