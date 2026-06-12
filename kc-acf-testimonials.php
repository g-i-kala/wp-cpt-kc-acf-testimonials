<?php

/**
 * Plugin Name: K::C ACF Testimonials
 * Description: Testimonial custom post type and fields.
 * Version: 1.0.0
 * Author: karo_ej
 */

if (! defined('ABSPATH')) {
    exit;
}

add_action('init', 'kc_acf_register_testimonial_cpt');

function kc_acf_register_testimonial_cpt()
{
    $labels = array(
        'name'               => __('Testimonials', 'kc-testimonials'),
        'singular_name'      => __('Testimonial', 'kc-testimonials'),
        'add_new'            => __('Add New', 'kc-testimonials'),
        'add_new_item'       => __('Add New Testimonial', 'kc-testimonials'),
        'edit_item'          => __('Edit Testimonial', 'kc-testimonials'),
        'new_item'           => __('New Testimonial', 'kc-testimonials'),
        'view_item'          => __('View Testimonial', 'kc-testimonials'),
        'search_items'       => __('Search Testimonials', 'kc-testimonials'),
        'not_found'          => __('No testimonials found', 'kc-testimonials'),
        'not_found_in_trash' => __('No testimonials found in Trash', 'kc-testimonials'),
        'menu_name'          => __('Testimonials', 'kc-testimonials'),
    );

    $args = array(
        'labels'       => $labels,
        'public'       => true,
        'show_in_rest' => true,
        'has_archive'  => true,
        'rewrite'      => array( 'slug' => 'testimonials' ),
        'menu_icon'    => 'format-quote',
        'supports'     => array(
            'title',
            'thumbnail',
            'revisions',
        ),
    );

    register_post_type('testimonial', $args);
}

require_once __DIR__ . '/inc/acf-fields.php';
