<?php

$repeater->add_control(
        'image_title',
        [
            'label' => esc_html__( 'Image', 'elementor-ewe-slider' ),
            'type' => \Elementor\Controls_Manager::HEADING,
            'separator' => 'before',
        ]
    );

    
    $repeater->add_control(
        'slider_image',
        [
            //'label' => esc_html__( 'Escoje la imagen', 'elementor-ewe-slider' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
            'dynamic' => [
                'active' => true,
            ],
        ]
    );
    $repeater->add_group_control(
        \Elementor\Group_Control_Image_Size::get_type(),
        [
            'name' => 'thumbnail',
            'exclude' => [ 'custom' ],
            'include' => [],
            'default' => 'large',
        ]
    );
    $repeater->add_control(
        'website_link',
        [
            'label' => esc_html__( 'Link', 'elementor-ewe-slider' ),
            'type' => \Elementor\Controls_Manager::URL,
            'placeholder' => esc_html__( 'https://your-link.com', 'elementor-ewe-slider' ),
            'default' => [
                'url' => '',
                'is_external' => true,
                'nofollow' => true,
                'custom_attributes' => '',
            ],
            'dynamic' => [
                'active' => true,
            ],
        ]
    );

?>

