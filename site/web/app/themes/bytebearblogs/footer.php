<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Byte_Bear_Blogss
 */

 $miniLogo = "/wp-content/uploads/2020/11/min_logo-02.png";

?>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<img src="<?php echo $miniLogo; ?>" alt="" class="footer-logo">
			<?php get_template_part( 'template-parts/social-media-bar', 'none');?>
			<p class="footer-tag">Built by <span class="moji">😄</span> with lots of coffee and love!</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
