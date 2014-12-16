<?php
if( !class_exists('WPAlchemy_MetaBox') )
{
    include_once 'class/metabox.php';
}

// global styles for the meta boxes
if( is_admin() )
{
    add_action('admin_enqueue_scripts', 'metabox_style');
}

function metabox_style()
{
    wp_enqueue_style('wpalchemy-metabox', get_stylesheet_directory_uri() . '/metaboxes/meta.css');
}

/* eof */

include_once 'metaboxes/simple-spec.php';

//include_once 'metaboxes/full-spec.php';
//
//include_once 'metaboxes/checkbox-spec.php';
//
//include_once 'metaboxes/radio-spec.php';
//
//include_once 'metaboxes/select-spec.php';

/* eof */