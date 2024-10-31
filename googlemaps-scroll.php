<?php
   /*
   Plugin Name: Scroll Stop Google Maps
   Description: A plugin to stop Google Maps from scroll when a user tries to scroll down the page. Very easy to use, and it shows an overlay to let the user know they must click the map if they want to scroll.
   Version: 1.0
   Author: JQ Rambo
   Author URI: http://www.jqwebdev.com/
   License: WooCommerce RRP. A Plugin that works with the Google Map iframes.
            Copyright 2017 Jordan QUartermain - info@jqwebdev.com
            This program is free software: you can redistribute it and/or modify
            it under the terms of the GNU General Public License as published by
            the Free Software Foundation, either version 3 of the License, or
            (at your option) any later version.
            This program is distributed in the hope that it will be useful,
            but WITHOUT ANY WARRANTY; without even the implied warranty of
            MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
            GNU General Public License for more details.
            You should have received a copy of the GNU General Public License
            along with this program.  If not, see http://www.gnu.org/licenses/gpl-3.0.html.
   */
            

  if (!class_exists('ScrollStopGoogleMaps_Plugin')) {
    class ScrollStopGoogleMaps_Plugin {
      public function __construct() {
        add_action('wp_enqueue_scripts', array($this, 'init'));
      }
      public static function init() {
        wp_enqueue_style('googlemaps-scroll-style', plugin_dir_url(__FILE__) . 'public/css/googlemaps-scroll.css');  
        wp_enqueue_script('googlemaps-scroll-script', plugin_dir_url(__FILE__) . 'public/js/googlemaps-scroll.js', array('jquery'));
      }
    }
    ScrollStopGoogleMaps_Plugin::init();
  }
?>