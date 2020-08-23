<?php global $dizzency_options; ?>

<!DOCTYPE HTML>

<html <?php language_attributes() ?>>

<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />



	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>


	<div id="page">


		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">

				<div class="row">
					<div class="col-sm-2 col-xs-12">


						<div id="gtco-logo">
							<?php

							if (has_custom_logo()) {
								the_custom_logo();
							} else {

							?>

								<a href="<?php the_permalink() ?>"><img src="<?php the_custom_logo() ?>" alt="<?php echo get_bloginfo('name') ?>"></a>


							<?php } ?>

						</div>


					</div>
					<div class="col-xs-10 text-right menu-1">

						<?php wp_nav_menu([
							'theme_location'		=> 'top_menu',
							'container'				=> '',
							'menu_class'			=> '',
							'menu_id'				=> ''
						]) ?>

					</div>
				</div>

			</div>
		</nav>



		<style>
			.gtco-nav {
				background-color: <?php echo $dizzency_options['dizz_mabc'] ?>
			}

			.gtco-nav ul li a {
				color: <?php echo $dizzency_options['dizz_mtc'] ?>
			}
		</style>