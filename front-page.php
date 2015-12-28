<?php  
/*
Template Name: Home
*/
?>

<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<section class="pageContent">
<a href="http://www.wilddigital.com.au/wallart">
	<div class="bannerFeature">
	<img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/WallArt-Web-Banner.jpg" alt="New! Removable Wall Art, Peel and Stick Posters" />
	</div>
</a>

<h1 class="homeTitle">Wild Digital - Home of Digital Printing - Big Prints, short print runs</h1>
<div class="feature">
	
	<div class="lrg-featureColLEFT">
    	
		<div class="FeatureImg_full mobile_half"><a href="index.php?page_id=98"><img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/feature_4.jpg" alt="Printed corflute sign from Wild Digital" /><span>Corflute</span></a></div>
        <div class="FeatureImg_full mobile_half"><a href="index.php?page_id=89"><img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/feature_3.jpg" alt="Printed Wallpaper from Wild Digital" /><span>Wallpaper</span></a></div>
        </div>
        
	<div class="lrg-featureColMIDDLE">
    	<div class="FeatureImg_full mobile_half"><a href="index.php?page_id=100"><img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/feature_1.jpg" alt="Printed banner vinyl with rope and eyelets" /><span>Banners</span></a></div>
       	<div class="Feature_text mobile_hide"><img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/feature_text.jpg" alt="Big Prints, short print runs" /></div>
       	<div class="FeatureImg_full mobile_right"><a href="index.php?page_id=31"><img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/feature_7.jpg" alt="Printed self adhesive window graphics" /><span>Window Graphics</span></a></div>
        </div>
        
	<div class="lrg-featureColRIGHT">
    	<div class="FeatureImg_full mobile_full"><a href="index.php?page_id=112"><img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/feature_2.jpg" alt="Auction paddles from Wild Digital printed on composite aluminium" /><span>Auction Paddles</span></a></div>
		<div class="FeatureImg_halfLeft"><a href="index.php?page_id=35"><img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/feature_5.jpg" alt="Deluxe rollup bannerstand" /><span>Rollups</span></a></div>
		<div class="FeatureImg_halfRight"><a href="index.php?page_id=110"><img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/feature_6.jpg" alt="Event flags from Wild Digital" /><span>Flags</span></a></div>
		
        </div>
</div><!-- end .feature -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="categoryInfo">
			<?php the_content(); ?>
			</div>
                
			</article>
            
            
		<?php endwhile; endif; ?> 


</section><!-- end .pageContent -->


<?php get_footer(); ?>