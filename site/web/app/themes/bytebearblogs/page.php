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
 * @package Byte_Bear_Blogss
 */

get_header();
?>
<div class="site-wrapper container">
	<div class="row">
		<main id="primary" class="site-main col-md-8">

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
			
			<aside id="sidebar" class="col-lg-4 col-sm-12">
					<?php get_template_part( 'template-parts/sidebar', 'none');?>
			</aside><!-- #sidebar -->
		</div>
	</div>
	
	<?php
	get_footer();
