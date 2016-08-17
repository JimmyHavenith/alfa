<?php get_header(); ?>

<?php
  $items = [
    'articles' => [],
    'membres' => [],
    'documents' => [],
    'news' => [],
    'faqs' => [],
    'tarifs' => [],
    'partenariat-reseaux' => [],
    'self-help' => []
  ];
  foreach ($wp_query->posts as $post) {
    if($post->post_type == 'services'){
      array_push( $items['articles'], $post);
    }
    if($post->post_type == 'equipes'){
      array_push( $items['membres'], $post);
    }
    if($post->post_type == 'documents'){
      array_push( $items['documents'], $post);
    }
    if($post->post_type == 'news'){
      array_push( $items['news'], $post);
    }
    if($post->post_type == 'faqs'){
      array_push( $items['faqs'], $post);
    }
    if($post->post_type == 'tarifs'){
      array_push( $items['tarifs'], $post);
    }
    if($post->post_type == 'partenariat-reseaux'){
      array_push( $items['partenariat-reseaux'], $post);
    }
    if($post->post_type == 'self-help'){
      array_push( $items['self-help'], $post);
    }
  }
?>
<section class="header-alfa-title">
  <div class="header-alfa-content">
    <div class="container">
      <div class="header-alfa-content-div">
          <h2><?php echo $wp_query->found_posts; ?><?php _e(' résultats trouvés pour'); ?> : <span class="page_recherche-mot">"<?php the_search_query(); ?>"</span></h2>
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
    <?php if (!empty(have_posts())) : ?>
      <?php if(!empty($items['articles'])): ?>
        <div class="search-content">
          <h3>Articles</h3>
          <ul>
          <?php foreach($items['articles'] as $item) : ?>
            <li>
              <a href="<?php echo $item->guid; ?>">
                <?php echo $item->post_title; ?>
              </a>
            </li>
          <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <?php if(!empty($items['membres'])): ?>
        <div class="search-content">
          <h3>Membres</h3>
          <ul>
          <?php foreach($items['membres'] as $item) : ?>
            <li>
              <a href="<?php echo $item->guid; ?>">
                <?php echo $item->post_title; ?>
              </a>
            </li>
          <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <?php if(!empty($items['documents'])): ?>
        <div class="search-content">
          <h3>Liens</h3>
          <ul>
          <?php foreach($items['documents'] as $item) : ?>
            <li>
              <?php $file = get_field('document_fichier'); ?>
              <a href="<?= $file['url']; ?>"><?php echo $item->post_title; ?></a>
            </li>
          <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <?php if(!empty($items['news'])): ?>
        <div class="search-content">
          <h3>News</h3>
          <ul>
          <?php foreach($items['news'] as $item) : ?>
            <li>
                <a href="<?php bloginfo('wpurl'); ?>/<?php echo $item->post_title; ?>"><?php echo $item->post_title; ?></a>
            </li>
          <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <?php if(!empty($items['faqs'])): ?>
        <div class="search-content">
          <h3>Foire aux questions</h3>
          <ul>
          <?php foreach($items['faqs'] as $item) : ?>
            <li>
                <a href="<?php echo $item->guid; ?>"><?php echo $item->post_title; ?></a>
            </li>
          <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <?php if(!empty($items['tarifs'])): ?>
        <div class="search-content">
          <h3>Tarifs</h3>
          <ul>
          <?php foreach($items['tarifs'] as $item) : ?>
            <li>
                <a href="<?php echo $item->guid; ?>"><?php echo $item->post_title; ?></a>
            </li>
          <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <?php if(!empty($items['partenariat-reseaux'])): ?>
        <div class="search-content">
          <h3>Partenariat-reseaux</h3>
          <ul>
          <?php foreach($items['partenariat-reseaux'] as $item) : ?>
            <li>
                <a href="<?php echo $item->guid; ?>"><?php echo $item->post_title; ?></a>
            </li>
          <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <?php if(!empty($items['self-help'])): ?>
        <div class="search-content">
          <h3>Self help</h3>
          <ul>
          <?php foreach($items['self-help'] as $item) : ?>
            <li>
                <a href="<?php echo $item->guid; ?>"><?php echo $item->post_title; ?></a>
            </li>
          <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

    <?php else: ?>
      <p>
        Aucuns résultats, faites une nouvelle recherche
      </p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
