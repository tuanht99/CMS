<?php
/*
Plugin Name: Test plugin
Plugin URI: https://wordpress.com/
Description: Test plugin 
Version: 1.0
Author: Automattic
Author URI: google.com
*/

// add_action( 'the_content', 'my_thank_you_text' );
// function my_thank_you_text ( $content ) {
// return $content .= '<p>Thank you for reading!</p>';
// }

if ( ! function_exists( 'group_6_print_random_post' ) ) {
    function group_6_print_random_post()
    {
        $args = array(
            'post_type'=>'post', //Loại là post
            'orderby' => 'rand', //Lấy ngẫu nhiên
            'posts_per_page' => 1 //Lấy 5 bài post 1 trang
         );
         $the_query = new WP_Query( $args );
         if ($the_query->have_posts()):
            while ($the_query->have_posts()):
                $the_query->the_post();
                echo the_title("<br>");
            endwhile;endif;
    }

  }
add_action('init','group_6_print_random_post');