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
    	
    	<div class="footer-form-border">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/footer-form-border.svg">
		</div>
    	<div id="register-interest" class="footer-form-content">
    		<div class="container">
    			<h1>Register Your Interest</h1>
    			<h4 class="mb-5">Book a trial lesson, enter your details below!</h4>
    			
    			<?php echo do_shortcode('[contact-form-7 id="60" title="Register you Interest"]'); ?>
    		
    			
				<!--<form>-->
				<!--	<div class="form-row">-->
				<!--		<div class="form-group col-lg-4 col-md-12">-->
				<!--			<label for="swimmers-name" class="sr-only">Swimmer's name</label>-->
				<!--			<input id="swimmers-name" type="text" class="form-control" placeholder="Swimmer's name">-->
				<!--		</div>-->
				<!--		<div class="form-group col-lg-4 col-md-12">-->
				<!--			<label for="swimmers-dob" class="sr-only">Swimmer's date of birth</label>-->
				<!--			<input id="swimmers-dob" type="date" class="form-control" placeholder="Swimmer's date of birth">-->
				<!--		</div>-->
				<!--		<div class="form-group col-lg-4 col-md-12">-->
				<!--			<label for="swimmers-gender" class="sr-only">Swimmer's gender</label>-->
				<!--			<select class="custom-select">-->
				<!--			  <option selected>Swimmer's gender</option>-->
				<!--			  <option value="male">Male</option>-->
				<!--			  <option value="female">Female</option>-->
				<!--			</select>-->
				<!--		</div>-->
				<!--	</div>-->
				<!--	<div class="form-row">-->
				<!--		<div class="form-group col-lg-6 col-md-12">-->
				<!--			<label for="swimmers-full-name" class="sr-only">Swimming experience</label>-->
				<!--			<textarea id="swimmers-full-name" class="form-control" placeholder="Swimming experience (as much detail as possible)"></textarea>-->
				<!--		</div>-->
				<!--		<div class="form-group col-lg-6 col-md-12">-->
				<!--			<label for="swimmers-medical-needs" class="sr-only">Medical needs</label>-->
				<!--			<textarea id="swimmers-medical-needs" class="form-control" placeholder="Describe any medical needs"></textarea>-->
				<!--		</div>-->
				<!--	</div>-->
				<!--	<div class="form-row">-->
				<!--		<div class="form-group col-lg-4 col-md-12">-->
				<!--			<label for="parents-name" class="sr-only">Parent/Guardian's name (if applicable)</label>-->
				<!--			<input id="parents-name" type="text" class="form-control" placeholder="Parent/Guardian's name (if applicable)">-->
				<!--		</div>-->
				<!--		<div class="form-group col-lg-4 col-md-12">-->
				<!--			<label for="email" class="sr-only">Email</label>-->
				<!--			<input id="email" type="email" class="form-control" placeholder="Email">-->
				<!--		</div>-->
				<!--		<div class="form-group col-lg-4 col-md-12">-->
				<!--			<label for="tel" class="sr-only">Telephone number</label>-->
				<!--			<input id="tel" type="tel" class="form-control" placeholder="Telephone number">-->
				<!--		</div>-->
				<!--	</div>-->
				<!--	<div class="form-row">-->
				<!--		<div class="form-group col-lg-6 col-md-12">-->
				<!--			<label for="address-line-1" class="sr-only">Address line one</label>-->
				<!--			<input id="address-line-1" type="text" class="form-control" placeholder="Address line one">-->
				<!--		</div>-->
				<!--		<div class="form-group col-lg-6 col-md-12">-->
				<!--			<label for="address-line-2" class="sr-only">Address line two</label>-->
				<!--			<input id="address-line-2" type="text" class="form-control" placeholder="Address line two">-->
				<!--		</div>-->
				<!--	</div>-->
				<!--	<div class="form-row">-->
				<!--		<div class="form-group col-lg-4 col-md-12">-->
				<!--			<label for="city" class="sr-only">City/Town</label>-->
				<!--			<input id="city" type="text" class="form-control" placeholder="City/Town">-->
				<!--		</div>-->
				<!--		<div class="form-group col-lg-4 col-md-12">-->
				<!--			<label for="county" class="sr-only">County</label>-->
				<!--			<input id="county" type="text" class="form-control" placeholder="County">-->
				<!--		</div>-->
				<!--		<div class="form-group col-lg-4 col-md-12">-->
				<!--			<label for="post-code" class="sr-only">Postal Code</label>-->
				<!--			<input id="post-code" type="text" class="form-control" placeholder="Postal Code">-->
				<!--		</div>-->
				<!--	</div>-->
				<!--	<h5>Select Session(s) Convenient Below</h5>-->
				<!--	<div class="form-row">-->
				<!--		<div class="form-group">-->
				<!--			<div class="form-check form-check-inline">-->
				<!--			  <input class="form-check-input" type="checkbox" id="mon-MHS" value="MondayMHS">-->
				<!--			  <label class="form-check-label" for="mon-MHS">Monday - Manor House Spa, Birkenshaw</label>-->
				<!--			</div>-->
				<!--			<div class="form-check form-check-inline">-->
				<!--			  <input class="form-check-input" type="checkbox" id="tue-BGS" value="TuesdayBGS">-->
				<!--			  <label class="form-check-label" for="tue-BGS">Tuesday - Bradford Grammar School</label>-->
				<!--			</div>-->
				<!--			<div class="form-check form-check-inline">-->
				<!--			  <input class="form-check-input" type="checkbox" id="wed-MHS" value="WednesdayMHS">-->
				<!--			  <label class="form-check-label" for="wed-MHS">Wednesday - Manor House Spa, Birkenshaw</label>-->
				<!--			</div>-->
				<!--			<div class="form-check form-check-inline">-->
				<!--			  <input class="form-check-input" type="checkbox" id="thur-GPH" value="ThursdayMHS">-->
				<!--			  <label class="form-check-label" for="thur-GPH">Thursday - Gomersal Park Hotel, Cleckheaton</label>-->
				<!--			</div>-->
				<!--			<div class="form-check form-check-inline">-->
				<!--			  <input class="form-check-input" type="checkbox" id="fri-WGS" value="FridayWGS">-->
				<!--			  <label class="form-check-label" for="fri-WGS">Friday - Woodhouse Grove School</label>-->
				<!--			</div>-->
				<!--			<div class="form-check form-check-inline">-->
				<!--			  <input class="form-check-input" type="checkbox" id="sat-BGS" value="SaturdayBGS">-->
				<!--			  <label class="form-check-label" for="sat-BGS">Saturday - Bradford Grammar School</label>-->
				<!--			</div>-->
				<!--		</div>-->
				<!--	</div>-->
				<!--	<div class="form-row">-->
				<!--		<div class="form-group col-lg-6 col-md-12">-->
				<!--			<label for="hear-about" class="sr-only">How did you hear about us?</label>-->
				<!--			<input id="hear-about" type="text" class="form-control" placeholder="How did you hear about us?">-->
				<!--		</div>-->
				<!--		<div class="form-group col-lg-6 col-md-12">-->
				<!--			<label for="promotional-code" class="sr-only">Promotion code (if applicable)</label>-->
				<!--			<input id="promotional-code" type="text" class="form-control" placeholder="Promotion code (if applicable)">-->
				<!--		</div>-->
				<!--	</div>-->
				<!--	<button type="submit" class="btn-primary btn-block btn">Register Interest</button>-->
				<!--</form>-->
				
    		</div>
    	</div>
    	
    	<div class="footer-border-2">
		
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
