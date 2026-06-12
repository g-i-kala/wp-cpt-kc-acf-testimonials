<?php

add_action('acf/init', 'kc_register_testimonial_fields');

function kc_register_testimonial_fields()
{
    if (! function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(
        array(
         'key'    => 'group_kc_testimonial',
         'title'  => 'Testimonial Fields',
         'fields' => array(
             array(
                 'key'   => 'field_kc_testimonial_text',
                 'label' => 'Testimonial Text',
                 'name'  => 'testimonial_text',
                 'type'  => 'textarea',
                 'rows'  => 5,
             ),
             array(
                 'key'   => 'field_kc_testimonial_role',
                 'label' => 'Role / Position',
                 'name'  => 'testimonial_role',
                 'type'  => 'text',
             ),
         ),
         'location' => array(
             array(
                 array(
                     'param'    => 'post_type',
                     'operator' => '==',
                     'value'    => 'testimonial',
                 ),
             ),
         ),
    )
    );

}
