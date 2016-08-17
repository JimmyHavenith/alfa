<?php get_header(); ?>
<?php while ( have_posts() ): ?>
  <?php the_post(); ?>
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
      <img src="<?php bloginfo('template_directory'); ?>/img/search.png" alt="logo du centre alfa">
    </div>
  </section>
  <section class="container-page">
    <div class="container-div">
      <div>
        <?php if($post->post_type === "news"): ?>
          <div class="content__item">
              <?php $sc = get_the_terms( get_the_ID(), 'tous_les_services' ); ?>
              <h3><?php the_title(); ?></h3>
              <p>
                <?= get_field('news_content'); ?>
              </p>
          </div>
        <?php endif; ?>
        <?php if($post->post_type === "services"): ?>
          <div class="content__item">
              <?php $sc = get_the_terms( get_the_ID(), 'tous_les_services' ); ?>
              <h3><?php the_title(); ?></h3>
              <p>
                <?= get_field('service_contenu'); ?>
              </p>
          </div>
        <?php endif; ?>
        <?php if($post->post_type === "equipes"): ?>
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
        <?php endif; ?>
        <?php if($post->post_type === "faqs"): ?>
          <ul class="lien-telecharger">
            <li>
              <h3>" <?php the_title(); ?> "</h3>
              <p>
                <?= get_field('faq_reponse') ?>
              </p>
            </li>
          </ul>
        <?php endif; ?>
        <?php if($post->post_type === "tarifs"): ?>
          <ul class="lien-telecharger">
            <li>
              <h3><?php the_title(); ?></h3>
              <p>
                <?= get_field('tarifs_prix') ?>
              </p>
            </li>
          </ul>
        <?php endif; ?>
        <?php if($post->post_type === "partenariat-reseaux"): ?>
          <ul class="lien-telecharger">
            <li>
              <a href="<?= get_field('partenaire-lien'); ?>"><?php the_title(); ?></a>
            </li>
          </ul>
        <?php endif; ?>
        <?php if($post->post_type === "self-help"): ?>
          <ul class="lien-telecharger">
            <li>
              <h3 class="title-list"><?php the_title(); ?></h3>
              <p>
                <span class="label-strong">Horaire : </span><?= get_field('help_horaire'); ?>
              </p>
              <p>
                <span class="label-strong">contact :</span>
              </p>
              <p>
                <?= get_field('help_contact'); ?>
              </p>
            </li>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endwhile; ?>
<?php get_footer(); ?>
