<?php

add_shortcode('hero_area', 'dizzency_hero_area');

function dizzency_hero_area($one, $two)
{
	// Shortcode ATTS Starts
	$hero_atts = shortcode_atts([
		'hero_main_image' => '',
		'hero_main_header' => '',
		'hero_sub_header' => '',
		'hero_button_text' => '',
		'hero_button_link' => '',
		'hero_area_background1' => '',
		'hero_area_background2' => '',
		'hero_main_header_color' => '',
		'hero_main_header_font_size' => '',
		'hero_sub_header_color' => '',
		'hero_sub_header_font_size' => '',
		'hero_button_text_color' => '',
		'hero_button_text_size' => '',
		'hero_button_background_color' => '',
		'hero_button_border_color' => '',
		'hero_button_border_size' => '',
	], $one);
	// Shortcode ATTS Ends

	ob_start();
?>
	<!-- Object HTML Markup Starts -->
	<header id="gtco-header" class="gtco-cover dizzency_home_hero_area" role="banner">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="display-t">
						<div class="display-tc">
							<div class="row">
								<div class="col-md-5 text-center header-img ">
									<img src="<?php echo wp_get_attachment_image_url($hero_atts['hero_main_image'], 'full') ?>" class="img-fluid max-width" alt="#">
								</div>
								<div class="col-md-7 copy">
									<h1><?php echo $hero_atts['hero_main_header'] ?></h1>
									<p><?php echo $hero_atts['hero_sub_header'] ?></p>
									<p><a href="<?php echo $hero_atts['hero_button_link'] ?>" target="_blank" class="btn btn-white"><?php echo $hero_atts['hero_button_text'] ?></a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
<!-- Object HTML Markup Ends -->

<!-- Inner HTML Dynamic Styles -->
	<style>
		.dizzency_home_hero_area {

			background: linear-gradient(<?php echo $hero_atts['hero_area_background1'] ?>, <?php echo $hero_atts['hero_area_background2'] ?>) !important;
		}

		.dizzency_home_hero_area h1 {
			color: <?php echo $hero_atts['hero_main_header_color'] ?> !important;
			font-size: <?php echo $hero_atts['hero_main_header_font_size'] ?>px !important;
		}

		.dizzency_home_hero_area p {

			color: <?php echo $hero_atts['hero_sub_header_color'] ?> !important;
			font-size: <?php echo $hero_atts['hero_sub_header_font_size'] ?>px !important;
		}

		.dizzency_home_hero_area img {
			width: 100%
		}

		.dizzency_home_hero_area a {

			font-size: <?php echo $hero_atts['hero_button_text_size'] ?>px !important;
			background-color: <?php echo $hero_atts['hero_button_background_color'] ?> !important;
		}

		.dizzency_home_hero_area .btn {
			color: <?php echo $hero_atts['hero_button_text_color'] ?> !important;
		}

		.dizzency_home_hero_area .btn-white {
			border: <?php echo $hero_atts['hero_button_border_size'] ?>px solid <?php echo $hero_atts['hero_button_border_color'] ?> !important
		}
	</style>
	<!-- Area Ends -->
<?php
	return ob_get_clean();
}
// Visual Composer Fields Starts
vc_map([
	'base'			=> 'hero_area',
	'name'			=> 'Hero Area',
	'category'		=> 'Dizzency Blocks',
	'params'		=> [
		[
			'param_name'	=> 'hero_main_image',
			'type'	=> 'attach_image',
			'heading'	=> 'Main Image',

		],
		[
			'param_name'	=> 'hero_main_header',
			'type'	=> 'textfield',
			'heading'	=> 'Main Header',

		],
		[
			'param_name'	=> 'hero_sub_header',
			'type'	=> 'textfield',
			'heading'	=> 'Sub Header',

		],
		[
			'param_name'	=> 'hero_button_text',
			'type'	=> 'textfield',
			'heading'	=> 'Button Text',

		],

		[
			'param_name'	=> 'hero_button_link',
			'type'	=> 'textfield',
			'heading'	=> 'Button link',

		],

		[
			'param_name'	=> 'hero_area_background1',
			'type'			=> 'colorpicker',
			'heading'		=> 'Area Background Gradient 1st Color',
			'group'			=> 'Design Options',

		],

		[
			'param_name'	=> 'hero_area_background2',
			'type'	=> 'colorpicker',
			'heading'	=> 'Area Background Gradient 2nd Color',
			'group'	=> 'Design Options',

		],

		[
			'param_name'	=> 'hero_main_header_color',
			'type'	=> 'colorpicker',
			'heading'	=> 'Area Main Header Color',
			'group'	=> 'Design Options',

		],

		[
			'param_name'	=> 'hero_main_header_font_size',
			'type'	=> 'textfield',
			'heading'	=> 'Area Main Header Font Size',
			'group'	=> 'Design Options',

		],


		[
			'param_name'	=> 'hero_sub_header_color',
			'type'	=> 'colorpicker',
			'heading'	=> 'Area Sub Header Color',
			'group'	=> 'Design Options',

		],

		[
			'param_name'	=> 'hero_sub_header_font_size',
			'type'	=> 'textfield',
			'heading'	=> 'Area Sub Header Font Size',
			'group'	=> 'Design Options',

		],

		[
			'param_name'	=> 'hero_button_text_color',
			'type'	=> 'colorpicker',
			'heading'	=> 'Area CTA Button Text Color',
			'group'	=> 'Design Options',

		],

		[
			'param_name'	=> 'hero_button_background_color',
			'type'	=> 'colorpicker',
			'heading'	=> 'Area CTA Button Background Color',
			'group'	=> 'Design Options',

		],

		[
			'param_name'	=> 'hero_button_text_size',
			'type'	=> 'textfield',
			'heading'	=> 'Area CTA Button Font Size',
			'group'	=> 'Design Options',

		],

		[
			'param_name'	=> 'hero_button_border_color',
			'type'	=> 'colorpicker',
			'heading'	=> 'Area CTA Button Border Color',
			'group'	=> 'Design Options',

		],

		[
			'param_name'	=> 'hero_button_border_size',
			'type'	=> 'textfield',
			'heading'	=> 'Area CTA Button Border Size',
			'group'	=> 'Design Options',

		],
	],
]);
// Visual Composer Fields Ends

?>