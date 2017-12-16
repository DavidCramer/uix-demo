<?php
/**
 * Example settings page
 *
 * @package   uix
 * @author    David Cramer
 * @license   GPL-2.0+
 * @link
 * @copyright 2017 David Cramer
 */

// This array is for the Admin Pages.
$page = [
	'uixdemo' => [
		'page_title'  => __( 'UIX Demo Page', 'text-domain' ),
		'menu_title'  => __( 'UIX Demo', 'text-domain' ),
		'save_button' => __( 'Save Changes', 'text-domain' ),
		'capability'  => 'manage_options',
		'icon'        => 'dashicons-welcome-learn-more',
		'base_color'  => '#27ae60',
		'header'      => [
			[
				'label'   => __( 'UIX Demo Settings Page', 'text-domain' ),
				'control' => [
					[
						'type' => 'separator',
					],
					[
						'label'      => __( 'Save Changes', 'text-domain' ),
						'type'       => 'button',
						'attributes' => [
							'type'  => 'submit',
							'class' => 'page-title-action',
						],
					],
				],
			],
		],
		'section'     => [
			'general'  => [
				'label'       => __( 'First Page', 'text-domain' ),
				'description' => __( 'An example page with some controls.', 'text-domain' ),
				'control'     => [
					'title'       => [
						'label'             => __( 'Title', 'text-domain' ),
						'description'       => __( 'A single text field control', 'text-domain' ),
						'type'              => 'text',
						'sanitize_callback' => 'sanitize_text_field',
					],
					'options'     => [
						'label'       => __( 'Options', 'text-domain' ),
						'description' => __( 'A select fields with some options', 'text-domain' ),
						'type'        => 'select',
						'choices'     => [
							'first_option'  => __( 'The first option', 'text-domain' ),
							'second_option' => __( 'Second choice', 'text-domain' ),
							'third_option'  => __( 'Choice no 3', 'text-domain' ),
							'fourth_option' => __( '4th and Last', 'text-domain' ),
						],
					],
					'description' => [
						'label'       => __( 'Description', 'text-domain' ),
						'description' => __( 'A textarea description block.', 'text-domain' ),
						'type'        => 'textarea',
					],
				],

			],
			'tabs'     => [
				'label'       => __( 'Tabbed Panels', 'text-domain' ),
				'description' => __( 'Nested panels and sections.', 'text-domain' ),
				'panel'       => [
					'first_nested' => [
						'section' => [
							'settings'      => [
								'label'       => __( 'Settings', 'text-domain' ),
								'description' => __( 'Control settings with an icon.', 'text-domain' ),
								'icon'        => 'dashicons-admin-settings',
								'control'     => [
									'background' => [
										'label'       => __( 'Background Color', 'text-domain' ),
										'description' => __( 'Select a color.', 'text-domain' ),
										'type'        => 'color',
										'value'       => '#e74c3c',
									],
									'text_color' => [
										'label'       => __( 'Text Color', 'text-domain' ),
										'description' => __( 'Select a color for text.', 'text-domain' ),
										'type'        => 'color',
										'value'       => '#333333',
									],
								],
							],
							'notifications' => [
								'label'       => __( 'Notifications', 'text-domain' ),
								'description' => __( 'Another nested panel with an icon', 'text-domain' ),
								'icon'        => 'dashicons-format-chat',
								'control'     => [
									'notice_subject' => [
										'label'       => __( 'Subject', 'text-domain' ),
										'description' => __( 'Set a subject line.', 'text-domain' ),
										'type'        => 'text',
									],
								],
							],
							'extended'      => [
								'label' => __( 'Nested', 'text-domain' ),
								'icon'  => 'dashicons-menu',
								'panel' => [
									'extended_panel' => [
										'top_tabs'   => true,
										'base_color' => '#e67e22',
										'section'    => [
											'nested_section' => [
												'label'       => __( 'Section One', 'text-domain' ),
												'description' => __( 'A Nested section in a panel.', 'text-domain' ),
												'control'     => [
													'nested_editor' => [
														'type' => 'editor',
													],
												],
											],

											'third_nested'  => [
												'label'       => __( 'Section Three', 'text-domain' ),
												'description' => __( 'A Three Nested Section.', 'text-domain' ),
												'control'     => [
													'third_bio' => [
														'label' => __( 'Bio', 'text-domain' ),
														'type'  => 'textarea',
													],
												],
											],
											'fourth_nested' => [
												'label'       => __( 'Section Four', 'text-domain' ),
												'description' => __( 'A Four Nested Section.', 'text-domain' ),
												'control'     => [
													'fourth_name' => [
														'label'             => __( 'Name', 'text-domain' ),
														'type'              => 'text',
														'sanitize_callback' => 'sanitize_text_field',
													],
												],
											],
										],
									],
								],
							],
						],
					],
				],
			],
			'controls' => [
				'label'       => __( 'Controls', 'text-domain' ),
				'description' => __( 'An example of types of controls.', 'text-domain' ),
				'panel'       => [
					'id'         => 'control-inputs',
					'top_tabs'   => true,
					'base_color' => '#673AB7',
					'section'    => [
						'standard' => [
							'label'   => __( 'Standard', 'text-domain' ),
							'control' => [
								'ctrl_text'     => [
									'label'       => __( 'Text', 'text-domain' ),
									'description' => __( 'Text input.', 'text-domain' ),
									'type'        => 'text',
								],
								'ctrl_checkbox' => [
									'label'       => __( 'Checkbox', 'text-domain' ),
									'description' => __( 'Checkbox input.', 'text-domain' ),
									'type'        => 'checkbox',
									'choices'     => [
										'one'   => 'One',
										'two'   => 'Two',
										'three' => 'Three',
									],
								],
								'ctrl_radio'    => [
									'label'       => __( 'Radio', 'text-domain' ),
									'description' => __( 'Radio input.', 'text-domain' ),
									'type'        => 'radio',
									'choices'     => [
										'one'   => 'One',
										'two'   => 'Two',
										'three' => 'Three',
									],
								],
								'ctrl_select'   => [
									'label'       => __( 'Select', 'text-domain' ),
									'description' => __( 'Select input.', 'text-domain' ),
									'type'        => 'select',
									'choices'     => [
										'one'   => 'One',
										'two'   => 'Two',
										'three' => 'Three',
									],
								],
								'ctrl_button'   => [
									'label'       => __( 'Button', 'text-domain' ),
									'description' => __( 'Button input.', 'text-domain' ),
									'type'        => 'button',
								],
							],
						],
						'special'  => [
							'label'   => __( 'Special', 'text-domain' ),
							'control' => [
								'ctrl_image'         => [
									'label'       => __( 'Image', 'text-domain' ),
									'description' => __( 'Image input.', 'text-domain' ),
									'type'        => 'image',
								],
								'ctrl_date'          => [
									'label'       => __( 'Date', 'text-domain' ),
									'description' => __( 'Date input.', 'text-domain' ),
									'type'        => 'date',
								],
								'ctrl_slider'        => [
									'label'       => __( 'Slider', 'text-domain' ),
									'description' => __( 'Slider input.', 'text-domain' ),
									'type'        => 'slider',
								],
								'ctrl_post_relation' => [
									'label'       => __( 'Post Relation', 'text-domain' ),
									'description' => __( 'Post Relation input.', 'text-domain' ),
									'type'        => 'post_relation',
								],
								'ctrl_color'         => [
									'label'       => __( 'Color', 'text-domain' ),
									'description' => __( 'Color input.', 'text-domain' ),
									'type'        => 'color',
								],
								'ctrl_toggle'        => [
									'description' => __( 'Toggle input.', 'text-domain' ),
									'type'        => 'toggle',
								],
								'ctrl_toggle_second' => [
									'description' => __( 'Toggle input again.', 'text-domain' ),
									'on_icon'     => 'dashicons-visibility',
									'off_icon'    => 'dashicons-hidden',
									'type'        => 'toggle',
									'base_color'  => '#4CAF50',
									'off_color'   => '#F44336',
								],
								'ctrl_sep'           => [
									'type'       => 'separator',
									'base_color' => '#E91E63',
								],
								'ctrl_toggle_all'    => [
									'description' => __( 'Toggle All.', 'text-domain' ),
									'type'        => 'toggle',
									'base_color'  => '#FF5722',
									'toggle_all'  => true,
								],
							],
						],
					],
				],
			],
		],
	],
];

return $page;
