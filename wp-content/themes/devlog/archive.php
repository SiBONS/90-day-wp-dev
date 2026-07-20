<?php get_header(); ?>
<div class="archive-header">
    <h1><?php echo get_the_archive_title(); ?></h1>
    <p><?php echo get_the_archive_description(); ?></p>
</div>
    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <article class="post-card">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>

                <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <p><?php the_time('F j, Y'); ?></p>
                <p><?php the_category(', '); ?></p>
                <p>By <?php the_author(); ?></p>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Read more →</a>
            </article>
            <hr>

        <?php endwhile; ?>

    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>

<?php get_footer(); ?>

