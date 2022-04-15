<?php
// Social
if(!function_exists('shortcode_social')){
    function shortcode_social($atts, $content){
        $icon = $link = '';
        $attr = shortcode_atts( array(
            'icon' => 'fa-facebook',
            'link' => '#',
        ), $atts );

        echo '<a href="'. $link .'"><i class="fa '.$icon.'"></i>'. $content .'</a>';
    }
    add_shortcode('social', 'shortcode_social');
}
