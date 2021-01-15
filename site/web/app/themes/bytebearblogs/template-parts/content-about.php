<?php
/**
 * Template part for displaying about page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Byte_Bear_Blogss
 */

?>

<article class="container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="row about-post">
<div class="col-11">
<?php
		the_content();
		?>
</div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
