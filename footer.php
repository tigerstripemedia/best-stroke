<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package best-stroke
 */

?>

	<!-- Footer -->
    <footer>
    	<div class="footer-border">
    		
		</div>
		<div class="footer-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3><?php $nav_menu = wp_get_nav_menu_object(3); echo $nav_menu->name; ?> <span class="footer-bubbles"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/bubbles.svg" alt=""></span></h3>
						<hr>
						<?php
						wp_nav_menu( array(
						    'theme_location'    => 'footer-one',
						    'menu'              => 'ul',
						    'menu_class'        => 'footer-menu'
						) );
						?>
					</div>
					<div class="col-md-6">
						<h3><?php $nav_menu = wp_get_nav_menu_object(4); echo $nav_menu->name; ?> <span class="footer-bubbles"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/bubbles.svg" alt=""></span></h3>
						<hr>
						<?php
		            	wp_nav_menu( array(
			                'theme_location'    => 'footer-two',
			                'menu'              => 'ul',
			                'menu_class'        => 'footer-menu'
		        		) );
				          ?>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="copyright">
				<small>&copy; 2018 Best Stroke School of Swimming | <a href="https://www.tigerstripemedia.com" target="_blank">Website made with &#9825; by Tiger Stripe Media</a></small>
			</div>
		</div>
    </footer>

	<?php wp_footer(); ?>
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<!-- Custom JS -->
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
