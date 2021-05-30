<?php
/*
 * Plugin Name:Audio Clip Plugin;
 * Description: Audio Clip plugin ;
 * Version:1.0;
 * Author: Aman Khan;
 */

//Setup
define('R_SOUND_PLUGIN', __FILE__);



//Includes
include('play-clip.php');
include('includes/front/enqueue.php');


//Hooks
add_action('wp_enqueue_scripts', 'audio_enqueue');



//Shortcodes
add_shortcode( 'play_clip', 'play_clip' );