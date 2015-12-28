<?php
/*
Template Name: Product-Category
*/
?>

<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 
get_header(); ?>
 
<h1><?php the_title(); ?></h1>

   <?php //Add Yoast Breadcrumbs 
	if ( function_exists('yoast_breadcrumb') ) {
	  yoast_breadcrumb('<p id="breadcrumbs">','</p>');
	  } ?>
 
  <?php //create sidebar navigation that only shows child pages.
  	if ($post->post_parent)
  		$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
  	else
  		$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
  
  	if ($children) { ?>
  		<ul class="pageNav lrg-colspan1 med-colspan1">
  		<?php echo $children; ?>
  		</ul>
  	<?php } ?> 
         

        
<section class="pageContent lrg-colspan5 med-colspan3 colLAST">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="categoryInfo">
			<?php the_content(); ?>
			</div>
                
			</article>
            
            
		<?php endwhile; endif; ?> 
        
       	<div class="categoryGallery">
			<ul>
		 	<?php 
			$childPages = get_pages( array( 'child_of' => $post->ID, 'sort_column'=>'menu_order') );
			
			foreach ( $childPages as $page) {
				$content = $page->post_content;
				if ( ! $content ) //Check for empty page
					continue;
				?>
               
               
                <li><a href="<?php echo get_page_link( $page->ID); ?>">
                	<span><?php echo $page->post_title; ?></span>
                    <?php echo get_the_post_thumbnail( $page->ID); ?>
                    </a></li>
			
				<?php } ?>
        		</ul>
  
 		</div><!-- end.categoryGallery -->

</section><!-- end .pageContent -->

<?php get_footer(); ?>
