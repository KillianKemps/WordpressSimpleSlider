<?php

class shortcode_gallery {
	function __construct() {
		add_shortcode( 'slider', array( $this, 'shortcode_gallery'));
		add_action('init', array( $this, 'enqueue'), 30 );
		add_action('init', array( $this, 'image_size'), 30 );
/*		add_action('init', array( $this, 'gallery_slider'), 30 );
		add_action('admin_footer', array( $this, 'prompt_box'), 30 );*/

	}

	function shortcode_gallery($atts){
		extract( shortcode_atts( array(
				'gallery_id' => '',
			), $atts));

		
		$slides = get_field('slides', $gallery_id);
		$return = '';
			if ( !empty ( $slides ) && is_array($slides) ) :

				$return .="	<div id=\"slider\">
								<div id=\"slider-display\">
									<ul id='slider-list'>";
				foreach ($slides as $image_container => $image) {
					$return .= "<li>" . wp_get_attachment_image( $image['image'], 'slider_medium' ) . "</li>";
				}
				$return .="</ul><!-- #slider-list -->
					<div id=\"slider-caption\"><p>FOR YOUR <span>perfect hotel</span></p>
						<div id=\"slider-caption-navigator-display\">

							<ul id=\"slider-caption-navigator\">
								<li><img src=" . SIMPLE_SLIDER_WP_URL. "/img/pic_navigator_1.png></li>
								<li><img src=" . SIMPLE_SLIDER_WP_URL . "/img/pic_navigator_2.png></li>
							</ul>

						</div><!--#slider-caption-navigator-display-->
					</div><!--#slider-caption-->
				</div><!--#slider-display-->
				<p id=\"currentSlide\">0</p>
			</div><!--#slider-->";

			endif;
			return $return;
	}

	function enqueue() {
		//Add the script to execute the slider
		wp_enqueue_script(
			'slider-main', 
			SIMPLE_SLIDER_WP_URL . 'js/slider_main.js',
			array('jquery','plugin'),
			"1.0",
			false	
		);

		//Add the script library
		wp_enqueue_script(
			'plugin', 
			SIMPLE_SLIDER_WP_URL . 'js/slider_plugin.js',
			array('jquery'),
			"1.0",
			false	
		);

		wp_enqueue_style(
			'slider-style',
			SIMPLE_SLIDER_WP_URL . 'css/slider_style.css',
			false,
			'1.0.0',
			'all'
		);

	}

	function image_size(){
		//Add a new size of image. It will be generated at the next upload of the image.
		add_theme_support('post-thumbnails');
		add_image_size('slider_medium', '640', '220', true );
	}

	/*function gallery_slider() {

	if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
		return;
	}

	if ( get_user_option('rich_editing') == 'true' ) {

		add_filter( 'mce_external_plugins', array( $this, 'add_plugin') );
		add_filter( 'mce_buttons', array( $this, 'register_button') );

		wp_enqueue_style( 'galerie_shortcode_form', WSIMPLE_SLIDER_WP . '/lib/style.css', false, "1.0", 'all' );
		wp_enqueue_script('button_js', WSIMPLE_SLIDER_WP . '/js/gallery-button.js', array('jquery', 'tinymce'), "1.0", true);
		}

	}

	function prompt_box(){
	$gallery_query = new WP_Query( array(
	'post_type' => 'galerie'
	) );

	if (!$gallery_query->have_posts() ){
	return;
	}

	$box = "<div id='gallery-plugin' class='prompt'>
	<form>
	<label>Nom de la galerie:</label>
	<br />
	<select id='shortcode_list'>
	<option value=''>Choisissez votre galerie</option>";

	while ($gallery_query->have_posts()):
	$gallery_query->the_post();
	$box .= "<option value='" . get_the_ID() . "'>";
	$box .= get_the_title();
	$box .= "</option>";
	endwhile;
	$box .= "</select>
	<br />
	<input type='submit' value='Valider'/>
	<input class='shortcode_cancel' type='button' value='Cancel'/>
	<form>
	</div>";

	echo $box;
	}

	function register_button( $buttons ) {
	array_push( $buttons, "|", "galeries" );
	return $buttons;
	}

	function add_plugin( $plugin_array ) {
	$plugin_array['galeries'] = WSIMPLE_SLIDER_WP . '/js/gallery-button.js';
	return $plugin_array;
	}*/
}

