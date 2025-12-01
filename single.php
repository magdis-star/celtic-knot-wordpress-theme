<?php
/**
 * Single Post Template
 */

get_header();
?>

<div class="container" style="padding-top: 8rem; padding-bottom: 4rem;">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <!-- Post Header -->
            <header class="post-header" style="max-width: 800px; margin: 0 auto 3rem;">
                <div class="post-meta" style="text-align: center; color: #999; margin-bottom: 1rem;">
                    <span><?php echo get_the_date(); ?></span>
                    <span> • </span>
                    <span>By <?php the_author(); ?></span>
                    <?php if (has_category()) : ?>
                        <span> • </span>
                        <?php the_category(', '); ?>
                    <?php endif; ?>
                </div>

                <h1 class="post-title" style="font-size: 3rem; text-align: center; color: #1e3a2d; margin-bottom: 2rem;">
                    <?php the_title(); ?>
                </h1>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-featured-image" style="margin-bottom: 3rem; border-radius: 0.75rem; overflow: hidden;">
                        <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto;')); ?>
                    </div>
                <?php endif; ?>
            </header>

            <!-- Post Content -->
            <div class="post-content" style="max-width: 800px; margin: 0 auto; font-size: 1.125rem; line-height: 1.8; color: #333;">
                <?php the_content(); ?>
            </div>

            <!-- Post Footer -->
            <footer class="post-footer" style="max-width: 800px; margin: 3rem auto 0; padding-top: 2rem; border-top: 1px solid #ddd;">
                <?php if (has_tag()) : ?>
                    <div class="post-tags" style="margin-bottom: 2rem;">
                        <strong>Tags:</strong> <?php the_tags('', ', ', ''); ?>
                    </div>
                <?php endif; ?>

                <!-- Share buttons could go here -->
                <div style="text-align: center;">
                    <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="button">← Back to Blog</a>
                </div>
            </footer>

        </article>

        <!-- Navigation between posts -->
        <nav class="post-navigation" style="max-width: 800px; margin: 3rem auto; display: flex; justify-content: space-between; gap: 1rem;">
            <div class="nav-previous">
                <?php previous_post_link('%link', '← %title'); ?>
            </div>
            <div class="nav-next">
                <?php next_post_link('%link', '%title →'); ?>
            </div>
        </nav>

        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        ?>

    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
