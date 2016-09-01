<?php /* Template Name: Page "Contact" */ ?>

<?php get_header(); ?>
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
			<?php $query = new WP_query( array( 'post_type' => 'contact', 'order' => 'ASC' ) );
	  		while ( $query -> have_posts() ): $query -> the_post(); global $post; ?>
					<div class="header-banner-map">
						<?= get_field('contact_map'); ?>
					</div>
				<?php endwhile; ?>
		</div>
	</section>
  <section class="container-page">
    <div class="container-div">
			<?php $query = new WP_query( array( 'post_type' => 'contact', 'order' => 'ASC' ) );
	  		while ( $query -> have_posts() ): $query -> the_post(); global $post; ?>
				<div class="contact">
					<div class="contact-infos">
						<p>
							<?= get_field('contact_adresse'); ?>
						</p>
						<p>
							<span>téléphone</span> : <?= get_field('contact_telephone'); ?>
						</p>
						<p>
							<span>fax</span> : <?= get_field('contact_fax'); ?>
						</p>
						<p>
							<span>horaire</span> : <?= get_field('contact_horaire'); ?>
						</p>
					</div>
					<div class="contact-photo">
						<?php $img = get_field('contact_photo'); ?><img src="<?= $img['url']; ?>" alt="<?= $img['alt']; ?>">
					</div>
				</div>
	  	<?php endwhile; ?>
    </div>
  </section>

<?php get_footer(); ?>
