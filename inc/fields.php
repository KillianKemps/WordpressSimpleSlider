<?php
add_action('init', 'gallery_fields', 10);

function gallery_fields (){
	if(function_exists("register_field_group"))
	{
	register_field_group(array (
		'id' => 'acf_gallery-entries',
		'title' => 'Gallery entries',
		'fields' => array (
			array (
				'key' => 'field_5326fcc469d96',
				'label' => 'Slides',
				'name' => 'slides',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_5326fcd769d97',
						'label' => 'Image',
						'name' => 'image',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'id',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add an image',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'gallery',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
		));
	}
}






