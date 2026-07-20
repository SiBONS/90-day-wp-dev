<?php get_header(); ?>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

        <article class="post-card">
            <?php if(has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
            <?php endif; ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <a href="<?php echo home_url('/projects/'); ?>">← Back to Projects</a>
        </article>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>