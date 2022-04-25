<?php

/**
 * Plugin Name: Elementor - Extra Widget Elementor Slider
 * Description: A custom plugin to Elementor.
 * Version:     1.0.0
 * Author:      Juan Camilo Santander
 * Text Domain: elementor-ewe-slider-widget
 *
 * Elementor tested up to: 3.5.0
 * Elementor Pro tested up to: 3.5.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

/**
 * Register List Widget.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */
function register_ewe_slider_widget($widgets_manager)
{

	require_once(__DIR__ . '/widgets/ewe-slider-widget.php');

	$widgets_manager->register(new \Elementor_EWE_Slider_Widget());
}
add_action('elementor/widgets/register', 'register_ewe_slider_widget');


function register_head()
{
?>
	<script src="jquery-3.5.1.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Link Swiper's CSS -->
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

	<!-- Demo styles -->
	<link rel="stylesheet" id="elementor-icons-shared-0-css" href="http://demo.oneclickfocus.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3" type="text/css" media="all">

	<link rel="stylesheet" href="/wp-content/plugins/elementor-ewe-slider/widgets/assets/css/main.css" />

<?php
}

add_action('wp_head', 'register_head');


function register_scripts_body()
{
?>
	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<!-- Swiper JS -->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
		var swiper = new Swiper(".mySwiper", {
			slidesPerView: 1,
			spaceBetween: 30,
			loop: true,
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			breakpoints: {

				740: {
					slidesPerView: 2,
				},
				1100: {
					slidesPerView: 3,
				}
			}
		});
	</script>
<?php
}

add_action('wp_footer', 'register_scripts_body');
