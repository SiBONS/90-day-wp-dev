<?php get_header(); ?>

<div class="content-wrapper">
    <div class="main-content">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <article class="post-card">
                <?php if(has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>
                <h1><?php the_title(); ?></h1>
                <p><?php the_time('F j, Y'); ?></p>
                <p><?php the_category(', '); ?></p>
                <p>By <?php the_author(); ?></p>
                <?php the_content(); ?>
            </article>
            <a href="<?php echo home_url('/'); ?>">← Back to blog</a>
        <?php endwhile; endif; ?>
    </div>

    <aside class="sidebar">
        <?php if(is_active_sidebar('blog-sidebar')) : ?>
            <?php dynamic_sidebar('blog-sidebar'); ?>
        <?php endif; ?>
    </aside>
</div>

<?php get_footer(); ?>