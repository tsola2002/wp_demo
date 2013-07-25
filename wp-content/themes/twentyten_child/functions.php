<?php
/**
 *
 * Package: wp_site
 * Filename: functions.php
 * Author: solidstunna101
 * Date: 25/07/13
 * Time: 12:50
 *
 */

function ttc_header_width(){
    $width = 980;
    return $width;
}

function ttc_header_height(){
    $height = 224;
    return $height;
}

add_filter('twentyten_header_image_width', 'ttc_header_width');
add_filter('twentyten_header_image_height', 'ttc_header_height');