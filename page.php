<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 
 get_header(); ?>
 

<h1><?php $permalink = get_permalink($post->post_parent); ?>
	<a href="<?php echo $permalink; ?>"><?php echo get_the_title( $post->post_parent ); ?></a></h1>

  <?php //Add Yoast Breadcrumbs 
	if ( function_exists('yoast_breadcrumb') ) {
	  yoast_breadcrumb('<p id="breadcrumbs">','</p>');
	  } ?>
      
     
    <section class="pageContent lrg-colspan6 med-colspan4 colLAST">
       
   

    <!-- The Query for any page text -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">
				                
                <div class="productInfo">
				<?php the_content(); ?>
				</div>

				</article>

		<?php endwhile; endif; ?> 
        


        
       


       
</section><!-- end .pageContent -->

<?php get_footer(); ?>
