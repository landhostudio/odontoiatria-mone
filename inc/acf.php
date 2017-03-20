<?php

if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
		'page_title' 	=> 'Opzioni Tema',
		'menu_title'	=> 'Opzioni',
		'menu_slug' 	=> 'options-theme'
	));
  
}

function my_acf_google_map_api($api) {
  $api['key'] = 'AIzaSyBqcuWjVT_P93S8C9Vit5A2eMKAr8VfFbY';
  return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
