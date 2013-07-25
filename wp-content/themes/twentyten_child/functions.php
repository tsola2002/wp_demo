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

// Remove all custom worpress featured images
function remove_twentyTen_headers() {
    unregister_default_headers( array(
        'berries',
        'cherryblossom',
        'concave',
        'fern',
        'forestfloor',
        'inkwell',
        'path',
        'sunset'
    ));
}

add_action('after_setup_theme', 'remove_twentyTen_headers', 11);

// Add new default header image
register_default_headers(
    array(
        'TwentyTen Child' => array(
            'url' => "%s/../twentyten_child/images/HPmainGeneric.png",
            'thumbnail_url' => "%s/../twentyten_child/images/HPmainGenericThumb.png",
            /* translators: header image description */
            'description' => __( 'TwentyTen Child Header', 'twentyten' )
        )
    )
);
