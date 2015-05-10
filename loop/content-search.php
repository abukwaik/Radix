<?php
/**
 * @package Radix
 * @since Radix 1.0
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemtype="http://schema.org/BlogPosting" itemscope="itemscope">
    <header class="entry-header">
        <h1 class="entry-title" itemprop="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="entry-meta">
            <?php Radix_posted_on(); ?>
        </div>
    </header><!-- .entry-header -->
	<div class="entry-content clearfix">
		<?php the_excerpt(); ?>
    </div>
    <footer class="entry-footer">
        <?php Radix_entry_footer(); ?>
    </footer>
</article>

