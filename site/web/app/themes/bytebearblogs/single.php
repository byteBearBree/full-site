<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Byte_Bear_Blogss
 */

get_header();
?>
<div class="site-wrapper single container">
	<div class="row">
		<main id="primary" class="site-main col-md-8">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'byte-bear-blogss' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'byte-bear-blogss' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

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
