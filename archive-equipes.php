<?php /* Template Name: Page "Nos équipes" */ ?>

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
      <div class="page-liens">
				<?php
				 $taxonomy = 'nos_equipes';
				 $tax_terms = get_terms($taxonomy, array('hide_empty' => false, 'orderby' => 'id',));
				 ?>
						<?php
						 foreach ($tax_terms as $tax_term) {
						 echo '<a class="lien-first" href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' .   sprintf( __( "Voir tous les membres de l'équipe $tax_term->name " )) . '" ' . '>' . $tax_term->name.'</a>';
						}
						?>
      </div>
    </div>
  </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
