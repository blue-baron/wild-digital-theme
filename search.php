<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	<h1><?php _e('Search Results','html5reset'); ?></h1>
    
	<section class="pageContent lrg-colspan6 med-colspan4 colLAST">
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				<div class="entry">
					<?php the_excerpt(); ?>
					</div>
                <hr />

			</article>

		<?php endwhile; ?>

	

	<?php else : ?>

		<h2><?php _e('Sorry, no results were found for your search.','html5reset'); ?></h2>

	<?php endif; ?>

</section><!-- end .pageContent -->

<?php get_footer(); ?>
