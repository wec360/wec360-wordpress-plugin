<?php
/*
Plugin Name: wec360
Plugin URI: http://www.wec360.com
Description: Makes it easy to embed your wec360° views into WordPress.
Version: 1.0.1
Author: wec360
Author URI: https://www.wec360.com
License: MIT
Text Domain: wec
*/

wp_oembed_add_provider('https://view.wec360.com/*', 'https://view.wec360.com/api/oembed');
