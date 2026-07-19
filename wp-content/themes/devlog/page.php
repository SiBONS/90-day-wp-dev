<?php get_header(); ?>

  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article class="post-card">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php endif; ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>Page not found.</p>
  <?php endif; ?>
  <?php get_footer(); ?>