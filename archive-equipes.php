<?php /* Template Name: Page "Nos équipes" */ ?>

<?php get_header(); ?>

<section>
	<h2>Nos équipes</h2>

	<div>
		<?php
		 $taxonomy = 'nos_equipes';
		 $tax_terms = get_terms($taxonomy, array('hide_empty' => false, 'orderby' => 'id',));
		 ?>
		   <ul>
		    <?php
		     foreach ($tax_terms as $tax_term) {
		     echo '<li>' . '<a class="mainButton" href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' .   sprintf( __( "Voir tous les ... in %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'</a>  </li>';
		    }
		    ?>
	</div>
</section>

<?php get_footer(); ?>
