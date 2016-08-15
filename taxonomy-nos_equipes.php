<?php get_header(); ?>
<?php $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy')); ?>
<section>
	<h2><?php echo $term->name; ?></h2>
	<?php query_posts($query_string . '&orderby=date&order=ASC'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ): the_post(); ?>
		<div>
			<?php if( !empty( get_the_title() ) ) : ?>
				<h3><?php the_title(); ?></h3>
			<?php endif; ?>
      <p>
        <?= get_field('job'); ?>
      </p>
      <p>
        <?= get_field('email'); ?>
      </p>
      <p>
        <?= get_field('telephone'); ?>
      </p>
		</div>
	<?php endwhile; else: ?>
		<p>Il n’y a pas d’articles</p>
	<?php endif; ?>
</section>

<?php get_footer(); ?>
