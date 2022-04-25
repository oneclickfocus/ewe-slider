<?php 
    $this->add_control(
        'icon_style',
        [
            'label' => esc_html__( 'Social Media Icons', 'elementor-ewe-slider' ),
            'type' => \Elementor\Controls_Manager::HEADING,
            'separator' => 'before',
        ]
    );
    $this->add_control(
        'icon_color',
        [
            'label' => esc_html__( 'Color', 'elementor-ewe-slider' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .ewe-slider-icon-color' => 'fill: {{VALUE}}',
            ],
        ]
    );

    $this->add_control(
        'icon_color_bg',
        [
            'label' => esc_html__( 'Backgound Color', 'elementor-ewe-slider' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .ewe-slider-icon-color-bg' => 'background-color: {{VALUE}}',
            ],
        ]
    );

    // $this->add_control(
    //     'hover_icon_animation',
    //     [
    //         'label' => esc_html__( 'Animación hover', 'elementor-ewe-slider' ),
    //         'type' => \Elementor\Controls_Manager::HOVER_ANIMATION,
    //     ]
    // );

?>