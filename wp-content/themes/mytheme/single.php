<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 1.0
 */

get_header();
$product = wc_get_product(get_the_ID());
?>
<div class="container">
	<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
	<h5><?php echo $product->name ?></h5>
	<p><?php  $product->get_regular_price(); ?></p>
	<p><?php $product->description ?></p>
</div>

<?php
get_footer();