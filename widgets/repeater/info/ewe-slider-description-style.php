<?php
    $this->add_control(
        'description_style',
        [
            'label' => esc_html__( 'Description', 'elementor-ewe-slider' ),
            'type' => \Elementor\Controls_Manager::HEADING,
            'separator' => 'before',
        ]
    );

    $this->add_control(
        'description_color',
        [
            'label' => esc_html__( 'Color', 'elementor-ewe-slider' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .ewe-slider-description' => 'color: {{VALUE}}',
            ],
        ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'description_typography',
            'label' => 'Typography',
            'selector' => '{{WRAPPER}} .ewe-slider-description',
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Text_Shadow::get_type(),
        [
            'name' => 'description_shadow',
            'label' => esc_html__( 'Text Shadow', 'elementor-ewe-slider' ),
            'selector' => '{{WRAPPER}} .ewe-slider-description',
        ]
    );
?>