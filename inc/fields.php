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
			array (
				'key' => 'field_53309ef65234f',
				'label' => 'Control',
				'name' => 'control',
				'type' => 'true_false',
				'instructions' => 'Check if you want the button controls to appear for the slider',
				'required' => 0,
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'field_5330a196d8ad4',
				'label' => 'Number Images',
				'name' => 'number_images',
				'type' => 'number',
				'instructions' => 'Set the number of images here.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 1,
				'max' => '',
				'step' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'gallery',
					'order_no' => 0,
					'group_no' => 1,
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






