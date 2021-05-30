<?php

function audio_enqueue(){
	wp_register_script('r_sound', plugins_url('r_sound.js',R_SOUND_PLUGIN), ['jquery'], time(), true);
	wp_enqueue_script('jquery');
	wp_enqueue_script('r_sound');


}