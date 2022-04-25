<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}


class Elementor_EWE_Slider_Widget extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'ewe_slider';
    }

    public function get_title()
    {
        return esc_html__('EWE Slider', 'elementor-ewe-slider');
    }

    public function get_icon()
    {
        return 'eicon-slides';
    }

    public function get_categories()
    {
        return ['general'];
    }

    public function get_keywords()
    {
        return ['ewe', 'slider', 'extra', 'elementor', 'widget'];
    }

    public function get_script_depends()
    {
        // wp_register_script('main', plugins_url('ewe-elementor-slider/widgets/assets/js/main.js', __FILE__));
        // return ['main'];
    }

    public function get_style_depends()
    {
        // wp_register_style('main', plugins_url('ewe-elementor-slider/widgets/assets/main.css', __FILE__));
        // return ['main'];
    }

    protected function register_controls()
    {
        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Content', 'elemetor-ewe-slider'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        include 'repeater/ewe-slider-repeater.php';
        $this->end_controls_section();


        $this->start_controls_section(
            'navigation_section',
            [
                'label' => esc_html__('Navigation', 'elemetor-ewe-slider'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
			'icon_navigation_next',
			[
				'label' => esc_html__( 'Next', 'elemetor-ewe-slider' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-right',
					'library' => 'solid',
				],
			]
		);
        // $this->add_control(
		// 	'icon_navigation_next_style',
		// 	[
		// 		'label' => esc_html__( 'Color', 'elemetor-ewe-slider' ),
		// 		'type' => \Elementor\Controls_Manager::COLOR,
		// 		'selectors' => [
		// 			'{{WRAPPER}} .swiper-button-next .icon-navigation-wrapper i' => 'color: {{VALUE}}',
		// 		],
		// 	]
		// );

        $this->add_control(
			'icon_navigation_prev',
			[
				'label' => esc_html__( 'Prev', 'elemetor-ewe-slider' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-left',
					'library' => 'solid',
				],
			]
		);
        $this->add_control(
			'icon_navigation_style',
			[
				'label' => esc_html__( 'Color', 'elemetor-ewe-slider' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .icon-navigation-wrapper i' => 'color: {{VALUE}}',
				],
			]
		);
        $this->end_controls_section();

        $this->start_controls_section(
            'pagination_section',
            [
                'label' => esc_html__('Pagination', 'elemetor-ewe-slider'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
			'bottom_pagination_prev_style',
			[
				'label' => esc_html__( 'Color', 'elemetor-ewe-slider' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .swiper-pagination span.swiper-pagination-bullet-active' => 'background-color: {{VALUE}}',
				],
			]
		);
        
        $this->end_controls_section();

        $this->start_controls_section(
            'content_section_style',
            [
                'label' => esc_html__('Content', 'elemetor-ewe-slider'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        include 'repeater/image/ewe-slider-image-style.php';

        include 'repeater/info/ewe-slider-title-style.php';

        include 'repeater/info/ewe-slider-subtitle-style.php';

        include 'repeater/info/ewe-slider-description-style.php';

        include 'repeater/social-media/ewe-slider-social-media-style.php';

        include 'repeater/container/ewe-slider-container-style.php';

        $this->end_controls_section();

        $this->start_controls_section(
            'effects_section_style',
            [
                'label' => esc_html__('Effect', 'elemetor-ewe-slider'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'entrance_animation',
            [
                'label' => esc_html__('Entrance Animation', 'elementor-ewe-slider'),
                'type' => \Elementor\Controls_Manager::ANIMATION,
                'prefix_class' => 'animated ',
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        include 'repeater/views/ewe-slider-render.php';

    }
    protected function content_template()
    {
    }
}
