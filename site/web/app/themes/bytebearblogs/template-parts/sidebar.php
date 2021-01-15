<?php
/**
 * Template part for displaying sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Byte_Bear_Blogss
 * 
 * 
 */

$facebook = "https://www.facebook.com/bytebearblogs/";
$instagram = "https://instagram.com/bytebearbree";
$twitter = "https://twitter.com/ByteBearBree";
$github = "https://github.com/bytebearbree";
$youtube = "https://www.youtube.com/";

 $author_id = "hello@bytebearblogs.com";
 $avatar = get_avatar_url($author_id);
//  $author_img = '/wp-content/uploads/2020/11/author_image.jpg';

 $author_img = get_field('author_image');
?>
<div class="sidebar-wrapper">
    <div class="bio">
        <h3 class="title">About Me</h3>
        <img src="<?php echo $author_img; ?>" alt="" class="bio-img" />
        <div class="bio-content">
            <p class="author-title"><?php echo get_the_author_meta('nickname');?></p>
            <p class="author-content"><?php echo get_the_author_meta('description');?></p>
        </div>
    </div>
    <div class="social-media">
        <h2 class="title">Subscribe & Follow</h2>
        <?php get_template_part( 'template-parts/social-media-bar', 'none');?>
    </div>
    <div class="recent-post-section">
    <h2 class="title">Categories</h2>
    <ul class="recent-posts">
        <?php wp_list_categories(
            array(
                'orderby'   => 'name',
                'title_li'  => '',
            )
            );?>
    </ul>
    </div>
</div>