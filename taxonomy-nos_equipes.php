<?php get_header(); ?>
<?php $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy')); ?>

<section class="header-alfa-title">
	<div class="header-alfa-content">
		<div class="container">
			<div class="header-alfa-content-div">
				<h2><?php echo $term->name; ?></h2>
			</div>
		</div>
	</div>
</section>
<section class="header-banner">
	<div class="header-banner-image">
		<?php
			print apply_filters( 'taxonomy-images-queried-term-image', '', array(
				'attr'       => array(
						'alt'   => 'Photo du <?php echo $term->name; ?>',
						'src'   => 'this-is-where-the-image-lives.png',
						'title' => 'Photo du <?php echo $term->name; ?>',
						),
				'image_size' => 'full'
			) );
		?>
	</div>
</section>
<section class="container-page">
	<div class="container-div">
		<?php query_posts($query_string . '&orderby=date&order=ASC'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ): the_post(); ?>
			<div class="container-equipe">
				<?php if( !empty( get_the_title() ) ) : ?>
				<h3><?php the_title(); ?></h3>
				<?php endif; ?>
				<div class="container-equipe-photo">
					<img src="<?= get_field('photo')['url']; ?>" alt="Photo de <?php the_title(); ?>" />
				</div>
				<div class="container-equipe-contact">
					<p>
						<?= get_field('job'); ?>
					</p>
					<p>
						Email : <span class="equipe-info"><?= get_field('email'); ?></span>
					</p>
					<p>
						Tel : <span class="equipe-info"><?= get_field('telephone'); ?></span>
					</p>
				</div>
			</div>
		<?php endwhile; else: ?>
			<p>Il n’y a pas d’articles</p>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
