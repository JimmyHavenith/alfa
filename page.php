<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="centerZone editor-content">
      <p>
        ca fonctionne ?
      </p>
        <section>
            <h2 class="mainTitle titleRegular"><?php the_title(); ?></h2>

            <?php include  'includes/intro.php'; ?>

            <div>
                <?php the_content(); ?>
            </div>
        </section>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
