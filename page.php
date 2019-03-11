<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package best-stroke
 */

get_header('nonav');

?>

<section class="awards-back-button">
    <div class="container">
        <a href="/" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
</section>

<section class="awards-page-title">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</section>

	<div id="primary" class="content-area container" style="padding-top: 50px;">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
