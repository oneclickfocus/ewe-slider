<?php 

$repeater->add_control(
    'info_title',
    [
        'label' => esc_html__( 'Info', 'elementor-ewe-slider' ),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
$repeater->add_control(
    'slider_name', [
        'label' => esc_html__( 'Title', 'elementor-ewe-slider' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Slider' , 'elementor-ewe-slider' ),
        'label_block' => true,
        'dynamic' => [
            'active' => true,
        ],
        'selector' => [
            '{{WRAPPER}} .silder_name' => 'color: {{VALUE}};',
        ],
    ]
);
$repeater->add_control(
    'slider_profession', [
        'label' => esc_html__( 'Subtitle', 'elementor-ewe-slider' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => esc_html__( 'Full Stack' , 'elementor-ewe-slider' ),
        'label_block' => true,
        'dynamic' => [
            'active' => true,
        ],
    ]
);

$repeater->add_control(
    'slider_description', [
        'label' => esc_html__( 'Description', 'elementor-ewe-slider' ),
        'type' => \Elementor\Controls_Manager::WYSIWYG,
        'default' => esc_html__( 'Text...' , 'elementor-ewe-slider' ),
        'show_label' => false,
        
    ]
);

$repeater->add_control(
    'contact_title',
    [
        'label' => esc_html__( 'Contact', 'elementor-ewe-slider' ),
        'type' => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);
$repeater->add_control(
    'telephone_link',
    [
        'label' => esc_html__( 'Telephone', 'elementor-ewe-slider' ),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => esc_html__( '+57 123 45 6789', 'elementor-ewe-slider' ),
        'default' => [
            'url' => '',
            'is_external' => true,
            'nofollow' => true,
            'custom_attributes' => '',
        ],
    ]
);
$repeater->add_control(
    'email_link',
    [
        'label' => esc_html__( 'E-mail', 'elementor-ewe-slider' ),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => esc_html__( 'correo@email.com', 'elementor-ewe-slider' ),
        'default' => [
            'url' => '',
            'is_external' => true,
            'nofollow' => true,
            'custom_attributes' => '',
        ],
    ]
);

?>