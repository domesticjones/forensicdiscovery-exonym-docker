<?php
	/* ======
		 FIELDS
		 ====== */

  if (!defined('WPINC')) { die; }

  if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
  	'key' => 'group_59f25e78a6b04',
  	'title' => 'Exonym - Business',
  	'fields' => array(
  		array(
  			'key' => 'field_59f2c1714133f',
  			'label' => 'Branding',
  			'name' => '',
  			'type' => 'tab',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'placement' => 'top',
  			'endpoint' => 0,
  		),
  		array(
  			'key' => 'field_59f2c993450d3',
  			'label' => 'Business Name',
  			'name' => 'business_name',
  			'type' => 'text',
  			'instructions' => '<code>ex_brand();</code><br />Omit things like "llc" or "inc" if it\'s not used in the common mention of your business.',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  			'maxlength' => '',
  		),
  		array(
  			'key' => 'field_59f2cad6450d4',
  			'label' => 'Legal Name',
  			'name' => 'legal_name',
  			'type' => 'text',
  			'instructions' => '<code>ex_brand(\'legal\');</code><br />Official, legal name of the business. Most commonly used in the "Copyright" section in the site\'s footer.',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'prepend' => '',
  			'append' => '',
  			'maxlength' => '',
  		),
  		array(
  			'key' => 'field_59f2c17f41340',
  			'label' => 'Logo',
  			'name' => 'logo',
  			'type' => 'group',
  			'instructions' => '<code>ex_logo($style, $color, $size);</code><br />Upload different versions of your business\' logo.',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'layout' => 'block',
  			'sub_fields' => array(
  				array(
  					'key' => 'field_59f2c20441341',
  					'label' => 'Primary',
  					'name' => 'primary',
  					'type' => 'group',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'layout' => 'table',
  					'sub_fields' => array(
  						array(
  							'key' => 'field_59f2c24141342',
  							'label' => 'Full Color',
  							'name' => 'full_color',
  							'type' => 'image',
  							'instructions' => '',
  							'required' => 0,
  							'conditional_logic' => 0,
  							'wrapper' => array(
  								'width' => '',
  								'class' => '',
  								'id' => '',
  							),
  							'return_format' => 'array',
  							'preview_size' => 'small',
  							'library' => 'all',
  							'min_width' => '',
  							'min_height' => '',
  							'min_size' => '',
  							'max_width' => '',
  							'max_height' => '',
  							'max_size' => '',
  							'mime_types' => '',
  						),
  						array(
  							'key' => 'field_59f2c6e141343',
  							'label' => 'Light',
  							'name' => 'light',
  							'type' => 'image',
  							'instructions' => '',
  							'required' => 0,
  							'conditional_logic' => 0,
  							'wrapper' => array(
  								'width' => '',
  								'class' => '',
  								'id' => '',
  							),
  							'return_format' => 'array',
  							'preview_size' => 'small',
  							'library' => 'all',
  							'min_width' => '',
  							'min_height' => '',
  							'min_size' => '',
  							'max_width' => '',
  							'max_height' => '',
  							'max_size' => '',
  							'mime_types' => '',
  						),
  						array(
  							'key' => 'field_59f2c7aa709ba',
  							'label' => 'Dark',
  							'name' => 'dark',
  							'type' => 'image',
  							'instructions' => '',
  							'required' => 0,
  							'conditional_logic' => 0,
  							'wrapper' => array(
  								'width' => '',
  								'class' => '',
  								'id' => '',
  							),
  							'return_format' => 'array',
  							'preview_size' => 'small',
  							'library' => 'all',
  							'min_width' => '',
  							'min_height' => '',
  							'min_size' => '',
  							'max_width' => '',
  							'max_height' => '',
  							'max_size' => '',
  							'mime_types' => '',
  						),
  					),
  				),
  				array(
  					'key' => 'field_59f2c7d9709bb',
  					'label' => 'Alternate',
  					'name' => 'alternate',
  					'type' => 'group',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'layout' => 'table',
  					'sub_fields' => array(
  						array(
  							'key' => 'field_59f2c7d9709bc',
  							'label' => 'Full Color',
  							'name' => 'full_color',
  							'type' => 'image',
  							'instructions' => '',
  							'required' => 0,
  							'conditional_logic' => 0,
  							'wrapper' => array(
  								'width' => '',
  								'class' => '',
  								'id' => '',
  							),
  							'return_format' => 'array',
  							'preview_size' => 'small',
  							'library' => 'all',
  							'min_width' => '',
  							'min_height' => '',
  							'min_size' => '',
  							'max_width' => '',
  							'max_height' => '',
  							'max_size' => '',
  							'mime_types' => '',
  						),
  						array(
  							'key' => 'field_59f2c7d9709bd',
  							'label' => 'Light',
  							'name' => 'light',
  							'type' => 'image',
  							'instructions' => '',
  							'required' => 0,
  							'conditional_logic' => 0,
  							'wrapper' => array(
  								'width' => '',
  								'class' => '',
  								'id' => '',
  							),
  							'return_format' => 'array',
  							'preview_size' => 'small',
  							'library' => 'all',
  							'min_width' => '',
  							'min_height' => '',
  							'min_size' => '',
  							'max_width' => '',
  							'max_height' => '',
  							'max_size' => '',
  							'mime_types' => '',
  						),
  						array(
  							'key' => 'field_59f2c7d9709be',
  							'label' => 'Dark',
  							'name' => 'dark',
  							'type' => 'image',
  							'instructions' => '',
  							'required' => 0,
  							'conditional_logic' => 0,
  							'wrapper' => array(
  								'width' => '',
  								'class' => '',
  								'id' => '',
  							),
  							'return_format' => 'array',
  							'preview_size' => 'small',
  							'library' => 'all',
  							'min_width' => '',
  							'min_height' => '',
  							'min_size' => '',
  							'max_width' => '',
  							'max_height' => '',
  							'max_size' => '',
  							'mime_types' => '',
  						),
  					),
  				),
  			),
  		),
  		array(
  			'key' => 'field_59f2d73bcf583',
  			'label' => 'Contact',
  			'name' => '',
  			'type' => 'tab',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'placement' => 'top',
  			'endpoint' => 0,
  		),
  		array(
  			'key' => 'field_59f2d79bcf584',
  			'label' => 'Email Addresses',
  			'name' => 'email_addresses',
  			'type' => 'repeater',
  			'instructions' => '<code>ex_contact(\'email\', $link, \'all/global\');</code><br />General email contacts. Use the Staff plugin to create a directory.',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'collapsed' => '',
  			'min' => 0,
  			'max' => 0,
  			'layout' => 'table',
  			'button_label' => 'Add Email Address',
  			'sub_fields' => array(
  				array(
  					'key' => 'field_59f2da0ccf585',
  					'label' => 'Address',
  					'name' => 'address',
  					'type' => 'email',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'default_value' => '',
  					'placeholder' => '',
  					'prepend' => '',
  					'append' => '',
  				),
  				array(
  					'key' => 'field_59f2da1acf586',
  					'label' => 'Name',
  					'name' => 'name',
  					'type' => 'text',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'default_value' => '',
  					'placeholder' => '',
  					'prepend' => '',
  					'append' => '',
  					'maxlength' => '',
  				),
  				array(
  					'key' => 'field_59f2da28cf587',
  					'label' => 'Global',
  					'name' => 'global',
  					'type' => 'true_false',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'message' => 'Display this globally',
  					'default_value' => 0,
  					'ui' => 0,
  					'ui_on_text' => '',
  					'ui_off_text' => '',
  				),
  			),
  		),
  		array(
  			'key' => 'field_59f2dad4cf588',
  			'label' => 'Phone Numbers',
  			'name' => 'phone_numbers',
  			'type' => 'repeater',
  			'instructions' => '<code>ex_contact(\'phone\', $link, \'all/global\');</code><br />General phone numbers. Use the Staff plugin to create a directory.',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'collapsed' => '',
  			'min' => 0,
  			'max' => 0,
  			'layout' => 'table',
  			'button_label' => 'Add Phone Number',
  			'sub_fields' => array(
  				array(
  					'key' => 'field_59f2dad4cf589',
  					'label' => 'Number',
  					'name' => 'number',
  					'type' => 'text',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'default_value' => '',
  					'placeholder' => '',
  					'prepend' => '',
  					'append' => '',
  					'maxlength' => '',
  				),
  				array(
  					'key' => 'field_59f2dad4cf58a',
  					'label' => 'Name',
  					'name' => 'name',
  					'type' => 'text',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'default_value' => '',
  					'placeholder' => '',
  					'prepend' => '',
  					'append' => '',
  					'maxlength' => '',
  				),
  				array(
  					'key' => 'field_59f2dad4cf58b',
  					'label' => 'Global',
  					'name' => 'global',
  					'type' => 'true_false',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'message' => 'Display this globally',
  					'default_value' => 0,
  					'ui' => 0,
  					'ui_on_text' => '',
  					'ui_off_text' => '',
  				),
  			),
  		),
  		array(
  			'key' => 'field_5a1cf3e8a1b47',
  			'label' => 'Address',
  			'name' => 'address',
  			'type' => 'textarea',
  			'instructions' => '<code>ex_contact(\'address\');</code><br />Address of single location.',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'default_value' => '',
  			'placeholder' => '',
  			'maxlength' => '',
  			'rows' => 4,
  			'new_lines' => '',
  		),
  		array(
  			'key' => 'field_59f2e3d0960b2',
  			'label' => 'Social Media',
  			'name' => '',
  			'type' => 'tab',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'placement' => 'top',
  			'endpoint' => 0,
  		),
  		array(
  			'key' => 'field_59f2e4c9960b3',
  			'label' => 'Social Networks',
  			'name' => 'social_networks',
  			'type' => 'repeater',
  			'instructions' => '<code>ex_social();</code><br />Find free SVG icons at <a href="https://www.flaticon.com/" target="_blank">Flaticon</a>.',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '',
  				'class' => '',
  				'id' => '',
  			),
  			'collapsed' => '',
  			'min' => 0,
  			'max' => 0,
  			'layout' => 'table',
  			'button_label' => 'Add Social Network',
  			'sub_fields' => array(
  				array(
  					'key' => 'field_59f2e588960b4',
  					'label' => 'Icon',
  					'name' => 'icon',
  					'type' => 'image',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'return_format' => 'array',
  					'preview_size' => 'thumbnail',
  					'library' => 'all',
  					'min_width' => '',
  					'min_height' => '',
  					'min_size' => '',
  					'max_width' => '',
  					'max_height' => '',
  					'max_size' => '',
  					'mime_types' => '',
  				),
  				array(
  					'key' => 'field_59f2e5a9960b5',
  					'label' => 'URL',
  					'name' => 'url',
  					'type' => 'url',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'default_value' => '',
  					'placeholder' => '',
  				),
  				array(
  					'key' => 'field_59f2e5e5960b6',
  					'label' => 'Description',
  					'name' => 'description',
  					'type' => 'text',
  					'instructions' => '',
  					'required' => 0,
  					'conditional_logic' => 0,
  					'wrapper' => array(
  						'width' => '',
  						'class' => '',
  						'id' => '',
  					),
  					'default_value' => '',
  					'placeholder' => '',
  					'prepend' => '',
  					'append' => '',
  					'maxlength' => '',
  				),
  			),
  		),
  	),
  	'location' => array(
  		array(
  			array(
  				'param' => 'options_page',
  				'operator' => '==',
  				'value' => 'ex-business',
  			),
  		),
  	),
  	'menu_order' => 0,
  	'position' => 'normal',
  	'style' => 'seamless',
  	'label_placement' => 'left',
  	'instruction_placement' => 'label',
  	'hide_on_screen' => '',
  	'active' => 1,
  	'description' => '',
  ));

  endif;
