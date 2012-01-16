<?php if (!have_posts()) : ?>
    <div class="page-header"><h1><?php _e( 'Not Found', 'twentyten' ); ?></h1></div>
    <div class="alert-message block-message error">
        <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
    </div>
<?php endif; ?>

<?php if (function_exists('bcn_display')): ?>
    <?php
        ob_start();
        bcn_display_list();
        $output = str_replace('</a>', '</a> <span class="divider">/</span>', ob_get_contents());
        ob_end_clean();
    if (strpos($output, '</a>') !== false): ?>
        <ul class="breadcrumb"><?php echo $output; ?></ul>
    <?php endif; ?>
<?php endif; ?>

<?php while (have_posts()): the_post(); ?>
    <article>
        <div class="page-header">
            <h1><?php the_title(); ?></h1>
        </div> <!-- /page-header -->
        <div class="post_content">
            <?php if (is_archive() || is_search()): // Only display excerpts for archives and search. ?>
                    <?php the_excerpt(); ?>
            <?php else : ?>
                    <?php the_content(__('Continue reading &rarr;', 'twentyten')); ?>
            <?php endif; ?>
        </div>
	</article>
<?php endwhile; // End the loop. Whew. ?>
