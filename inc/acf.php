<?php

function my_acf_google_map_api($api) {
  $api['key'] = 'AIzaSyBqcuWjVT_P93S8C9Vit5A2eMKAr8VfFbY';
  return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
