<?php

function play_clip($atts){
	
	$atts      = shortcode_atts([
   'name'      => 'name',
   'url'       => 'url'
	], $atts);

return '<a class="fas fa-volume-up" style="cursor: pointer !important;" data-audio-url='. $atts['url'] .' > '. $atts['name'] .' </a>';
}