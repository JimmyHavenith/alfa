<?php /* Template name: Page "A propos" */ ?>
<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<div class="centerZone editor-content">
			<section class="aboutPage">
				<h1 class="mainTitle titleRegular"><?php the_title(); ?></h1>
				<div>
					<?php the_content(); ?>
				</div>
			</section>
		</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
