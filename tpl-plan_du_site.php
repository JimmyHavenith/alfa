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
        <li><a href="<?php bloginfo('wpurl'); ?>">Accueil</a></li>
        <li>
          <a href="<?php bloginfo('wpurl'); ?>/a-propos">A propos</a>
          <ul>
            <li><a href="<?php bloginfo('wpurl'); ?>/nous-soutenir">Nous soutenir</a></li>
            <li><a href="<?php bloginfo('wpurl'); ?>/nos-equipes">Nos équipes</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Nos services</a>
          <ul>
            <li><a href="<?php bloginfo('wpurl'); ?>/sous_services/service-prevention">Service de prévention</a></li>
            <li><a href="<?php bloginfo('wpurl'); ?>/sous_services/service-therapeutique">Service thérapeutique</a></li>
            <li><a href="<?php bloginfo('wpurl'); ?>/sous_services/service-parentalite">Service de parentalité</a></li>
            <li><a href="<?php bloginfo('wpurl'); ?>sous_services/service-risques">Service réduction des risques</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php bloginfo('wpurl'); ?>/les-news">News</a>
          <ul>
            <li><a href="<?php bloginfo('wpurl'); ?>/les-news">Toutes les news</a></li>
            <li><a href="<?php bloginfo('wpurl'); ?>/les-news/stages-jobs">Stages &amp; jobs </a></li>
          </ul>
        </li>
        <li><a href="<?php bloginfo('wpurl'); ?>/nos-tarifs">Tarifs</a></li>
        <li>
          <a href="<?php bloginfo('wpurl'); ?>/partenariats">Partenariats</a>
          <ul>
            <li><a href="<?php bloginfo('wpurl'); ?>/partenariats/partenariats-reseaux">partenariats et réseaux</a></li>
            <li><a href="<?php bloginfo('wpurl'); ?>/partenariats/self-help">Self-help</a></li>
          </ul>
        </li>
        <li><a href="<?php bloginfo('wpurl'); ?>/documents-a-telecharger">Documents</a></li>
        <li><a href="<?php bloginfo('wpurl'); ?>/foire-aux-questions">FAQs</a></li>
        <li><a href="<?php bloginfo('wpurl'); ?>/nous-contacter">Contact</a></li>
      </ul>
    </div>
  </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
