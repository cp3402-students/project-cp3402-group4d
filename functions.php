<?php

/*
Enquire Styles
*/

if(!funtion_exists('new_rad')):
    funtion new_rad(){
        wp_enqueue_style('rad_style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version');
        )
    }
endif;

add_action('wp_enqueue_scripts', 'new_rad');
