<?php
/**
 * Blog Archive Template
 */

get_header();
?>

<div class="container" style="padding-top: 8rem; padding-bottom: 4rem;">

    <!-- Page Header -->
    <header class="page-header" style="text-align: center; margin-bottom: 4rem;">
        <h1 class="page-title" style="font-size: 3rem; color: #1e3a2d; margin-bottom: 1rem;">
            <?php
            if (is_category()) {
                single_cat_title();
            } elseif (is_tag()) {
                single_tag_title();
            } elseif (is_author()) {
                echo 'Posts by ' . get_the_author();
            } elseif (is_day()) {
                echo 'Daily Archives: ' . get_the_date();
            } elseif (is_month()) {
                echo 'Monthly Archives: ' . get_the_date('F Y');
            } elseif (is_year()) {
                echo 'Yearly Archives: ' . get_the_date('Y');
            } else {
                echo 'Blog';
            }
            ?>
        </h1>
        <?php if (is_category() && category_description()) : ?>
            <div class="archive-description" style="max-width: 600px; margin: 0 auto; color: #666;">
                <?php echo category_description(); ?>
            </div>
        <?php endif; ?>
    </header>

    <!-- Blog Posts Grid -->
    <?php if (have_posts()) : ?>
        <div class="blog-posts">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post-card'); ?>>

                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('blog-thumbnail', array('class' => 'post-thumbnail')); ?>
                        </a>
                    <?php endif; ?>

                    <div class="post-content">
                        <h2 class="post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <div class="post-meta">
                            <?php echo get_the_date(); ?> • By <?php the_author(); ?>
                            <?php if (has_category()) : ?>
                                • <?php the_category(', '); ?>
                            <?php endif; ?>
                        </div>

                        <div class="post-excerpt">
                            <?php the_excerpt(); ?>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="read-more" style="color: #1e3a2d; text-decoration: none; font-weight: 600;">
                            Read More →
                        </a>
                    </div>

                </article>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="pagination" style="margin-top: 3rem; text-align: center;">
            <?php
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => __('← Previous', 'celtic-knot'),
                'next_text' => __('Next →', 'celtic-knot'),
            ));
            ?>
        </div>

    <?php else : ?>

        <!-- No posts found -->
        <div class="no-posts" style="text-align: center; padding: 4rem 0;">
            <h2>No posts found</h2>
            <p>Sorry, no posts were found matching your criteria.</p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="button">Return to Homepage</a>
        </div>

    <?php endif; ?>

</div>

<?php get_footer(); ?>
