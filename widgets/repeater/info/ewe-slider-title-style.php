<?php
    $this->add_control(
        'title_style',
        [
            'label' => esc_html__( 'Title', 'elementor-ewe-slider' ),
            'type' => \Elementor\Controls_Manager::HEADING,
            'separator' => 'before',
        ]
    );

    $this->add_control(
        'title_color',
        [
            'label' => esc_html__( 'Color', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .ewe-slider-title' => 'color: {{VALUE}}',
            ],
        ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'title_typography',
            'label' => 'Typography',
            'selector' => '{{WRAPPER}} .ewe-slider-title',
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Text_Shadow::get_type(),
        [
            'name' => 'title_shadow',
            'label' => esc_html__( 'Text Shadow', 'plugin-name' ),
            'selector' => '{{WRAPPER}} .ewe-slider-title',
        ]
    );

?>