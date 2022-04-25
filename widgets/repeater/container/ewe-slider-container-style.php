<?php
    $this->add_control(
        'container_style',
        [
            'label' => esc_html__( 'Box', 'elementor-ewe-slider' ),
            'type' => \Elementor\Controls_Manager::HEADING,
            'separator' => 'before',
        ]
    );

    $this->add_control(
        'container_color',
        [
            'label' => esc_html__( 'Background Color', 'elementor-ewe-slider' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .ewe-slider-container' => 'background-color: {{VALUE}}',
            ],
        ]
    );
    $this->add_control(
        'container_box_style',
        [
            'label' => esc_html__( 'Box Shadow', 'elementor-ewe-slider' ),
            'type' => \Elementor\Controls_Manager::HEADING,
            'separator' => '',
        ]
    );
    $this->add_control(
        'container_box_shadow',
        [
            'label' => esc_html__( 'Box Shadow', 'elementor-ewe-slider' ),
            'type' => \Elementor\Controls_Manager::BOX_SHADOW,
            'selectors' => [
                '{{WRAPPER}} .ewe-slider-container' => 'box-shadow: {{HORIZONTAL}}px {{VERTICAL}}px {{BLUR}}px {{SPREAD}}px {{COLOR}};',
            ],
        ]
    );