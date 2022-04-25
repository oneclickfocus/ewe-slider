<?php
    $this->add_control(
        'subtitle_style',
        [
            'label' => esc_html__( 'Subtitle', 'elementor-ewe-slider' ),
            'type' => \Elementor\Controls_Manager::HEADING,
            'separator' => 'before',
        ]
    );

    $this->add_control(
        'subtitle_color',
        [
            'label' => esc_html__( 'Color', 'elementor-ewe-slider' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .ewe-slider-profession' => 'color: {{VALUE}}',
            ],
        ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'subtitle_typography',
            'label' => 'Typography',
            'selector' => '{{WRAPPER}} .ewe-slider-profession',
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Text_Shadow::get_type(),
        [
            'name' => 'subtitle_shadow',
            'label' => esc_html__( 'Text Shadow', 'elementor-ewe-slider' ),
            'selector' => '{{WRAPPER}} .ewe-slider-profession',
        ]
    );

?>