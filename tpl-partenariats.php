<?php /* Template name: Page "Partenariats" */ ?>
<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<section>
		<h1><?php the_title(); ?></h1>
		<div>
			<?php echo get_field('partenariats_liens'); ?>
		</div>
	</section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
