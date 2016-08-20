<?php /* Template name: Page "Plan du site" */ ?>
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
      <ul class="plan-du-site">
        <li><a href="#">Accueil</a></li>
        <li>
          <a href="#">A propos</a>
          <ul>
            <li><a href="#">Nous soutenir</a></li>
            <li><a href="#">Nos équipes</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Nos services</a>
          <ul>
            <li><a href="#">Service de prévention</a></li>
            <li><a href="#">Service thérapeutique</a></li>
            <li><a href="#">Service de parentalité</a></li>
            <li><a href="#">Service réduction des risques</a></li>
          </ul>
        </li>
        <li>
          <a href="#">News</a>
          <ul>
            <li><a href="#">Toutes les news</a></li>
            <li><a href="#">Stages &amp; jobs </a></li>
          </ul>
        </li>
        <li><a href="#">Tarifs</a></li>
        <li>
          <a href="#">Partenariats</a>
          <ul>
            <li><a href="#">partenariats et réseaux</a></li>
            <li><a href="#">Self-help</a></li>
          </ul>
        </li>
        <li><a href="#">Documents</a></li>
        <li><a href="#">FAQs</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
