<?php /* Template Name: Page "Partenariats & réseaux" */ ?>

<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <section class="header-alfa-title">
    <div class="header-alfa-content">
      <div class="container">
        <div class="header-alfa-content-div">
          <h2><?php the_title(); ?></h2>
        </div>
      </div>
    </div>
  </section>
  <section class="header-banner">
    <div class="header-banner-image">
      <?php $image = get_field('photo'); ?>
      <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>"/>
    </div>
  </section>
  <section class="container-page">
    <div class="container-div">
			<ul class="lien-telecharger">
			<?php $query = new WP_query( array( 'post_type' => 'partenariat-reseaux', 'order' => 'ASC' ) );
				while ( $query -> have_posts() ): $query -> the_post(); global $post; ?>
				<li>
					<a href="<?= get_field('partenaire-lien'); ?>"><?php the_title(); ?></a>
				</li>
			<?php endwhile; ?>
			</ul>
    </div>
  </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
