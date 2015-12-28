<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<h1><?php the_title(); ?></h1>

<section class="pageContent lrg-colspan6 med-colspan4 colLAST">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

				<div class="entry">
				<?php the_content(); ?>
				</div>

			</article>
		

		<?php endwhile; endif; ?>

</section><!-- end .pageContent -->

<?php get_footer(); ?>
