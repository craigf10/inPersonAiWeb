<?php

// Main Script Loading

function vv_script_enqueue() {

	wp_enqueue_style('styles', get_template_directory_uri() . '/css/vv-style.css', array(), '1.0.0', 'all');
	wp_enqueue_script('jquery', array(), '1.0.0', true);
	wp_enqueue_script('global-js', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
  }
  add_action('wp_enqueue_scripts', 'vv_script_enqueue');