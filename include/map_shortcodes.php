<?php
//Shortcodes for Visual Composer

add_action( 'vc_before_init', 'chairman_vc_shortcodes' );
function chairman_vc_shortcodes() {
	
	//Brand logos
	vc_map( array(
		'name' => esc_html__( 'Brand Logos', 'chairman' ),
		'base' => 'ourbrands',
		'class' => '',
		'category' => esc_html__( 'Theme', 'chairman'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of columns', 'chairman' ),
				'param_name' => 'colsnumber',
				'value' => esc_html__( '6', 'chairman' ),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of rows', 'chairman' ),
				'param_name' => 'rowsnumber',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
					),
			),
		)
	) );

	//Categories carousel
	vc_map( array(
		'name' => esc_html__( 'Categories Carousel', 'chairman' ),
		'base' => 'categoriescarousel',
		'class' => '',
		'category' => esc_html__( 'Theme', 'chairman'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of columns', 'chairman' ),
				'param_name' => 'colsnumber',
				'value' => esc_html__( '6', 'chairman' ),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of rows', 'chairman' ),
				'param_name' => 'rowsnumber',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
					),
			),
		)
	) );
	
	//MailPoet Newsletter Form
	vc_map( array(
		'name' => esc_html__( 'Newsletter Form (MailPoet)', 'chairman' ),
		'base' => 'wysija_form',
		'class' => '',
		'category' => esc_html__( 'Theme', 'chairman'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Form ID', 'chairman' ),
				'param_name' => 'id',
				'value' => '',
				'description' => esc_html__( 'Enter form ID here', 'chairman' ),
			),
		)
	) );
	
	//Latest posts
	vc_map( array(
		'name' => esc_html__( 'Latest posts', 'chairman' ),
		'base' => 'latestposts',
		'class' => '',
		'category' => esc_html__( 'Theme', 'chairman'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of posts', 'chairman' ),
				'param_name' => 'posts_per_page',
				'value' => esc_html__( '5', 'chairman' ),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Image scale', 'chairman' ),
				'param_name' => 'image',
				'value' => array(
						'Wide'	=> 'wide',
						'Square'	=> 'square',
					),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Excerpt length', 'chairman' ),
				'param_name' => 'length',
				'value' => esc_html__( '20', 'chairman' ),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of columns', 'chairman' ),
				'param_name' => 'colsnumber',
				'value' => esc_html__( '4', 'chairman' ),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of rows', 'chairman' ),
				'param_name' => 'rowsnumber',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
					),
			),
		)
	) );
	
	//Testimonials
	vc_map( array(
		'name' => esc_html__( 'Testimonials', 'chairman' ),
		'base' => 'woothemes_testimonials',
		'class' => '',
		'category' => esc_html__( 'Theme', 'chairman'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of testimonial', 'chairman' ),
				'param_name' => 'limit',
				'value' => esc_html__( '10', 'chairman' ),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Display Author', 'chairman' ),
				'param_name' => 'display_author',
				'value' => array(
					'Yes'	=> 'true',
					'No'	=> 'false',
				),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Display Avatar', 'chairman' ),
				'param_name' => 'display_avatar',
				'value' => array(
					'Yes'	=> 'true',
					'No'	=> 'false',
				),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Avatar image size', 'chairman' ),
				'param_name' => 'size',
				'value' => '',
				'description' => esc_html__( 'Avatar image size in pixels. Default is 50', 'chairman' ),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Display URL', 'chairman' ),
				'param_name' => 'display_url',
				'value' => array(
					'Yes'	=> 'true',
					'No'	=> 'false',
				),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Category', 'chairman' ),
				'param_name' => 'category',
				'value' => esc_html__( '0', 'chairman' ),
				'description' => esc_html__( 'ID/slug of the category. Default is 0', 'chairman' ),
			),
		)
	) );
	
	
	//Rotating tweets
	vc_map( array(
		'name' => esc_html__( 'Rotating tweets', 'chairman' ),
		'base' => 'rotatingtweets',
		'class' => '',
		'category' => esc_html__( 'Theme', 'chairman'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Twitter user name', 'chairman' ),
				'param_name' => 'screen_name',
				'value' => '',
			),
		)
	) );
	
	//Google map
	vc_map( array(
		'name' => esc_html__( 'Google map', 'chairman' ),
		'base' => 'chairman_map',
		'class' => '',
		'category' => esc_html__( 'Theme', 'chairman'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Map Height', 'chairman' ),
				'param_name' => 'map_height',
				'value' => esc_html__( '400', 'chairman' ),
				'description' => esc_html__( 'Map height in pixels. Default is 400', 'chairman' ),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Map Zoom', 'chairman' ),
				'param_name' => 'map_zoom',
				'value' => esc_html__( '17', 'chairman' ),
				'description' => esc_html__( 'Map zoom level, min 0, max 21. Default is 17', 'chairman' ),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Latitude', 'chairman' ),
				'param_name' => 'lat1',
				'value' => '',
				'group' => 'Marker 1'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Longtitude', 'chairman' ),
				'param_name' => 'long1',
				'value' => '',
				'group' => 'Marker 1'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Address', 'chairman' ),
				'param_name' => 'address1',
				'value' => '',
				'description' => esc_html__( 'If you donot enter coordinate, enter address here', 'chairman' ),
				'group' => 'Marker 1'
			),
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Marker image', 'chairman' ),
				'param_name' => 'marker1',
				'value' => '',
				'description' => esc_html__( 'Upload marker image, image size: 40x46 px', 'chairman' ),
				'group' => 'Marker 1'
			),
			array(
				'type' => 'textarea',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Description', 'chairman' ),
				'param_name' => 'description1',
				'value' => '',
				'description' => esc_html__( 'Allowed HTML tags: a, i, em, br, strong, h1, h2, h3', 'chairman' ),
				'group' => 'Marker 1'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Latitude', 'chairman' ),
				'param_name' => 'lat2',
				'value' => '',
				'group' => 'Marker 2'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Longtitude', 'chairman' ),
				'param_name' => 'long2',
				'value' => '',
				'group' => 'Marker 2'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Address', 'chairman' ),
				'param_name' => 'address2',
				'value' => '',
				'description' => esc_html__( 'If you donot enter coordinate, enter address here', 'chairman' ),
				'group' => 'Marker 2'
			),
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Marker image', 'chairman' ),
				'param_name' => 'marker2',
				'value' => '',
				'description' => esc_html__( 'Upload marker image', 'chairman' ),
				'group' => 'Marker 2'
			),
			array(
				'type' => 'textarea',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Description', 'chairman' ),
				'param_name' => 'description2',
				'value' => '',
				'description' => esc_html__( 'Allowed HTML tags: a, i, em, br, strong, p, h2, h2, h3', 'chairman' ),
				'group' => 'Marker 2'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Latitude', 'chairman' ),
				'param_name' => 'lat3',
				'value' => '',
				'group' => 'Marker 3'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Longtitude', 'chairman' ),
				'param_name' => 'long3',
				'value' => '',
				'group' => 'Marker 3'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Address', 'chairman' ),
				'param_name' => 'address3',
				'value' => '',
				'description' => esc_html__( 'If you donot enter coordinate, enter address here', 'chairman' ),
				'group' => 'Marker 3'
			),
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Marker image', 'chairman' ),
				'param_name' => 'marker3',
				'value' => '',
				'description' => esc_html__( 'Upload marker image', 'chairman' ),
				'group' => 'Marker 3'
			),
			array(
				'type' => 'textarea',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Description', 'chairman' ),
				'param_name' => 'description3',
				'value' => '',
				'description' => esc_html__( 'Allowed HTML tags: a, i, em, br, strong, p, h3, h3, h3', 'chairman' ),
				'group' => 'Marker 3'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Latitude', 'chairman' ),
				'param_name' => 'lat4',
				'value' => '',
				'group' => 'Marker 4'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Longtitude', 'chairman' ),
				'param_name' => 'long4',
				'value' => '',
				'group' => 'Marker 4'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Address', 'chairman' ),
				'param_name' => 'address4',
				'value' => '',
				'description' => esc_html__( 'If you donot enter coordinate, enter address here', 'chairman' ),
				'group' => 'Marker 4'
			),
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Marker image', 'chairman' ),
				'param_name' => 'marker4',
				'value' => '',
				'description' => esc_html__( 'Upload marker image', 'chairman' ),
				'group' => 'Marker 4'
			),
			array(
				'type' => 'textarea',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Description', 'chairman' ),
				'param_name' => 'description4',
				'value' => '',
				'description' => esc_html__( 'Allowed HTML tags: a, i, em, br, strong, p, h4, h4, h4', 'chairman' ),
				'group' => 'Marker 4'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Latitude', 'chairman' ),
				'param_name' => 'lat5',
				'value' => '',
				'group' => 'Marker 5'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Longtitude', 'chairman' ),
				'param_name' => 'long5',
				'value' => '',
				'group' => 'Marker 5'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Address', 'chairman' ),
				'param_name' => 'address5',
				'value' => '',
				'description' => esc_html__( 'If you donot enter coordinate, enter address here', 'chairman' ),
				'group' => 'Marker 5'
			),
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Marker image', 'chairman' ),
				'param_name' => 'marker5',
				'value' => '',
				'description' => esc_html__( 'Upload marker image', 'chairman' ),
				'group' => 'Marker 5'
			),
			array(
				'type' => 'textarea',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Description', 'chairman' ),
				'param_name' => 'description5',
				'value' => '',
				'description' => esc_html__( 'Allowed HTML tags: a, i, em, br, strong, p, h5, h5, h5', 'chairman' ),
				'group' => 'Marker 5'
			),
		)
	) );
	
	//Counter
	vc_map( array(
		'name' => esc_html__( 'Counter', 'chairman' ),
		'base' => 'chairman_counter',
		'class' => '',
		'category' => esc_html__( 'Theme', 'chairman'),
		'params' => array(
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Image icon', 'chairman' ),
				'param_name' => 'image',
				'value' => '',
				'description' => esc_html__( 'Upload icon image', 'chairman' ),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number', 'chairman' ),
				'param_name' => 'number',
				'value' => '',
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Text', 'chairman' ),
				'param_name' => 'text',
				'value' => '',
			),
		)
	) );
}
?>