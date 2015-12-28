<?php
/*
Template Name: info-level2
*/
?>

<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 
 get_header(); ?>
 

<h1><?php $permalink = get_permalink($post->post_parent); ?>
	<a href="<?php echo $permalink; ?>"><?php echo get_the_title( $post->post_parent ); ?></a></h1>


  <ul class="pageNav lrg-colspan1 med-colspan1">
  <li><a href="<?php echo $permalink; ?>"><?php echo get_the_title( $post->post_parent ); ?></a></li>
  <?php //create sidebar navigation that only shows child pages.
  	if ($post->post_parent)
  		$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
  	else
  		$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
  
  	if ($children) { ?>
  		
  		<?php echo $children; ?>
  		
  <?php } ?> 
   		</ul>
    <section class="pageContent lrg-colspan5 med-colspan3 colLAST">
    
   
   

    <!-- The Query for any page text -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">
                
                <h2><?php the_title(); ?></h2> 
				                
                <div class="productInfo">
				<?php the_content(); ?>
				</div>

				</article>

		<?php endwhile; endif; ?> 
        


        
       


       
</section><!-- end .pageContent -->

<?php get_footer(); ?>
