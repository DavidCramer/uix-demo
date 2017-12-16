<?php
/**
 * Example post types
 *
 * @package   uix
 * @author    David Cramer
 * @license   GPL-2.0+
 * @link
 * @copyright 2017 David Cramer
 */

// This array is for the post types.
$post_type = [
	'cars' => [
		'settings' => [
			'label'       => __( 'Car', 'uix-demo' ),
			'description' => __( 'Cars Post Type', 'uix-demo' ),
			'labels'      => [
				'name'           => _x( 'Cars', 'Post Type General Name', 'uix-demo' ),
				'singular_name'  => _x( 'Car', 'Post Type Singular Name', 'uix-demo' ),
				'menu_name'      => __( 'Cars', 'uix-demo' ),
				'name_admin_bar' => __( 'Car', 'uix-demo' ),
			],
			'supports'    => [ 'title', 'editor' ],
			'public'      => true,
			'menu_name'   => __( 'Cars', 'uix-demo' ),
			'menu_icon'   => 'dashicons-category',
		],
		'metabox'  => [
			'details'     => [
				'name'    => __( 'Car Settings', 'uix-demo' ),
				'context' => 'side',
				'control' => [
					'logo'         => [
						'label' => __( 'Logo', 'uix-demo' ),
						'type'  => 'image',
					],
					'manufacturer' => [
						'label' => __( 'Manufacturer', 'uix-demo' ),
						'type'  => 'text',
					],
					'status'       => [
						'description' => __( 'In Production', 'uix-demo' ),
						'type'        => 'toggle',
						'value'       => true,
					],
				],
			],
			'history'     => [
				'name'    => __( 'History', 'uix-demo' ),
				'context' => 'side',
				'repeat'  => [
					'id'      => 'repeat',
					'label'   => __( 'Add History Point', 'uix-demo' ),
					'control' => [
						'logo'      => [
							'label' => __( 'Date', 'uix-demo' ),
							'type'  => 'date',
						],
						'key_point' => [
							'label' => __( 'Key Point', 'uix-demo' ),
							'type'  => 'text',
						],
					],
				],
			],
			'development' => [
				'name' => __( 'Development', 'uix-demo' ),
				'grid' => [
					'id'  => 'grid',
					'row' => [
						'id'     => 'row',
						'column' => [
							'left_col'  => [
								'size'    => 'col-sm-6',
								'control' => [
									'first_release' => [
										'label' => __( 'First Release', 'uix-demo' ),
										'type'  => 'date',
									],
									'notes'         => [
										'label' => __( 'Notes', 'uix-demo' ),
										'type'  => 'textarea',
									],
								],
							],
							'right_col' => [
								'size'    => 'col-sm-6',
								'control' => [
									'designer' => [
										'label' => __( 'Designer', 'uix-demo' ),
										'type'  => 'text',
									],
									'addition' => [
										'label' => __( 'Additional Notes', 'uix-demo' ),
										'type'  => 'textarea',
									],
								],

							],
						],
					],
				],
			],
		],
	],
];

return $post_type;
