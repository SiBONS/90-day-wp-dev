    <?php get_header(); ?>
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

    <?php
    $projects_query = new WP_Query([
    'post_type'      => 'projects',
    'posts_per_page' => 2,
    'orderby'        => 'date',
    'order'          => 'DESC',
]);

if($projects_query->have_posts()) : ?>
    <h2 class="section-title">Latest Projects</h2>
    <?php while($projects_query->have_posts()) : $projects_query->the_post(); ?>
        <article class="post-card">
            <?php if(has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php endif; ?>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">View Project →</a>
        </article>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php get_footer(); ?>