<?php /* Template name: Page "A propos" */ ?>
<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <section>
  	<h1><?php the_title(); ?></h1>
  	<div>
  		<?php the_content(); ?>
  	</div>
  </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
