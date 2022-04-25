<?php

$repeater->add_control(
    'social_media_title',
    [
        'label' => esc_html__( 'Social Media', 'elementor-ewe-slider' ),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
$repeater->add_control(
    'facebook_link',
    [
        'label' => esc_html__( 'Facebook', 'elementor-ewe-slider' ),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => esc_html__( 'https://facebook.com', 'elementor-ewe-slider' ),
        'default' => [
            'url' => '',
            'is_external' => true,
            'nofollow' => true,
            'custom_attributes' => '',
        ],
    ]
);
$repeater->add_control(
    'twitter_link',
    [
        'label' => esc_html__( 'Twitter', 'elementor-ewe-slider' ),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => esc_html__( 'https://twitter.com', 'elementor-ewe-slider' ),
        'default' => [
            'url' => '',
            'is_external' => true,
            'nofollow' => true,
            'custom_attributes' => '',
        ],
    ]
);
$repeater->add_control(
    'linkedin_link',
    [
        'label' => esc_html__( 'Linkedin', 'elementor-ewe-slider' ),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => esc_html__( 'https://linkedin.com', 'elementor-ewe-slider' ),
        'default' => [
            'url' => '',
            'is_external' => true,
            'nofollow' => true,
            'custom_attributes' => '',
        ],
    ]
);
$repeater->add_control(
    'pinterest_link',
    [
        'label' => esc_html__( 'Pinterest', 'elementor-ewe-slider' ),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => esc_html__( 'https://pinterest.com', 'elementor-ewe-slider' ),
        'default' => [
            'url' => '',
            'is_external' => true,
            'nofollow' => true,
            'custom_attributes' => '',
        ],
    ]
);
$repeater->add_control(
    'instagram_link',
    [
        'label' => esc_html__( 'Instagram', 'elementor-ewe-slider' ),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => esc_html__( 'https://instagram.com', 'elementor-ewe-slider' ),
        'default' => [
            'url' => '',
            'is_external' => true,
            'nofollow' => true,
            'custom_attributes' => '',
        ],
    ]
);

?>