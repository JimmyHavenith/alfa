<?php /* Template name: Page "Partenariats" */ ?>
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
				<a class="lien-first" href="<?= get_permalink(62); ?>">Partenariats & réseaux</a>
				<a href="<?= get_permalink(75); ?>">Self-help</a>
      </div>
    </div>
  </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
