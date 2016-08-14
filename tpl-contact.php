<?php /* Template Name: Page "Contact" */ ?>

<?php get_header(); ?>

	<section>
  	<h1>Contact</h1>
  	<?php $query = new WP_query( array( 'post_type' => 'contact', 'order' => 'ASC' ) );
  		while ( $query -> have_posts() ): $query -> the_post(); global $post; ?>
  		<h3><?php the_title(); ?></h3>
      <p>
        adresse : <?php echo get_field('contact_adresse'); ?>
      </p>
      <p>
        téléphone : <?php echo get_field('contact_telephone'); ?>
      </p>
      <p>
        fax : <?php echo get_field('contact_fax'); ?>
      </p>
      <p>
        horaire : <?php echo get_field('contact_horaire'); ?>
      </p>
      <p>
        photo :
      </p>
      <?php $img = get_field('contact_photo'); ?><img src="<?= $img['url']; ?>" alt="<?= $img['alt']; ?>">
      <div class="map">
        <h3>GOOGLE MAP</h3>
        <?php echo get_field('contact_map'); ?>
      </div>
  	<?php endwhile; ?>
	</section>

<?php get_footer(); ?>
