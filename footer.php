<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
</div><!-- end #mainContent -->    

<div class="footerWrapper">
<footer>
	<img class="enviroLogo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/wildEnviro.png" alt="Wild Digital is an Environmentally Aware Company" />
    <div class="footerAddress">
		<p><strong>T: 02 6280 0991</strong> | F: 02 6280 0993</p>
        <p>sales@wilddigital.com.au</p>
        <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">99-101 Wollongong St</span>,  PO Box 41,  <span itemprop="addressLocality">Fyshwick</span> <span itemprop="addressRegion">ACT</span>, <span itemprop="postalCode">2609</span></p>
        </div><!-- end .footerAddress -->

      	<h2>Site Map</h2>
		<div class="lrg-colspan6 med-colspan4 colLAST"><?php wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?></div>
        
        <p class="site_details">Copyright &copy; Wild Digital <?php echo date('Y'); ?>. Site design by Wild Digital.</p>
</footer>
</div><!-- end .footerWrapper -->

</div><!-- end .wrapper -->

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<?php wp_footer(); ?>

	
</body>

</html>
