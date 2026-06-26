<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <h1>DEV // LOG</h1>
    <p>A tech blog by Mile Kostic</p>
</header>

<main>
    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <article>
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
</main>

<?php wp_footer(); ?>
</body>
</html>