<?php
    $repeater = new \Elementor\Repeater();

    include 'image/ewe-slider-image.php';

    include 'image/ewe-slider-image.php';

    include 'info/ewe-slider-info.php';

    include 'social-media/ewe-slider-social-media.php';
    

    $this->add_control(
        'list',
        [
            'label' => esc_html__( 'Sliders', 'elementor-ewe-slider' ),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'default' => [
                [
                    'slider_name' => esc_html__( 'Slider #1', 'elementor-ewe-slider' ),
                    'slider_description' => esc_html__( 'Item content. Click the edit button to change this text.', 'elementor-ewe-slider' ),
                ],
                [
                    'slider_name' => esc_html__( 'Slider #2', 'elementor-ewe-slider' ),
                    'slider_description' => esc_html__( 'Item content. Click the edit button to change this text.', 'elementor-ewe-slider' ),
                ],
                [
                    'slider_name' => esc_html__( 'Slider #2', 'elementor-ewe-slider' ),
                    'slider_description' => esc_html__( 'Item content. Click the edit button to change this text.', 'elementor-ewe-slider' ),
                ],
            ],
            'title_field' => '{{{ slider_name }}}',
        ]
    );
?>