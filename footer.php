<?php global $dizzency_options; ?>

<footer id="gtco-footer" class="gtco-section" role="contentinfo">
	<div class="gtco-container">
		<div class="row row-pb-md">
			<div class="col-md-8 col-md-offset-2 gtco-cta text-center">
				<h3><?php echo $dizzency_options['dizzency_ftat'] ?></h3>
				<p><a href="<?php echo $dizzency_options['dizzency_ftabl'] ?>" class="btn btn-white btn-outline"><?php echo $dizzency_options['dizzency_ftabt'] ?></a></p>
			</div>
		</div>



		<div class="row row-pb-md">



			<div class="col-md-4">
				<?php wp_nav_menu([
					'theme_location'		=> 'footer_menu',
					'container'				=> '',
					'menu_class'			=> 'gtco-list-link text-left list-style-nono',
					'menu_id'				=> ''
				]) ?>
			</div>





			<div class="col-md-4 gtco-widget gtco-footer-paragraph text-center">
				<h3><?php echo $dizzency_options['dizzency_fdan'] ?></h3>
				<p><?php echo $dizzency_options['dizzency_fdad'] ?></p>
			</div>




			<div class="col-md-4 text-right">
				<p>
					<a href="<?php echo $dizzency_options['dizzency_fcaf1l'] ?>"><?php echo $dizzency_options['dizzency_fcaf1'] ?></a> <br>
					<a href="<?php echo $dizzency_options['dizzency_fcaf2l'] ?>"><?php echo $dizzency_options['dizzency_fcaf2'] ?></a> <br>
					<a href="<?php echo $dizzency_options['dizzency_fcaf3l'] ?>"><?php echo $dizzency_options['dizzency_fcaf3'] ?></a> <br>
					<a href="<?php echo $dizzency_options['dizzency_fcaf4l'] ?>"><?php echo $dizzency_options['dizzency_fcaf4'] ?></a> <br>
					<a href="<?php echo $dizzency_options['dizzency_fcaf5l'] ?>"><?php echo $dizzency_options['dizzency_fcaf5'] ?></a>
				</p>
			</div>

		</div>
	</div>
	<div class="gtco-copyright">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-6 text-left">
					<p>&copy All Right Reserved @ Dizzency</p>
				</div>
				<div class="col-md-6 text-right">
					Developed By <i class="fa fa-love"></i><a href="#">Pro_Corp</a>

				</div>
			</div>
		</div>
	</div>
</footer>

</div>

<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<?php wp_footer() ?>

</body>

</html>


<style>
	.gtco-list-link li a {
		color: <?php echo $dizzency_options['dizzency_fmtc'] ?>;
		font-size: <?php echo $dizzency_options['dizzency_fmtfs'] ?>px;
	}

	.gtco-footer-paragraph {
		color: <?php echo $dizzency_options['dizzency_fdatc'] ?>;
	}

	.gtco-footer-paragraph h3 {
		color: <?php echo $dizzency_options['dizzency_fdatic'] ?> !important;
	}

	.gtco-cta h3 {
		color: <?php echo $dizzency_options['dizzency_fttc'] ?> !important
	}

	.gtco-cta .btn-white {
		color: <?php echo $dizzency_options['dizzency_fbtc'] ?> !important;
		border-color: <?php echo $dizzency_options['dizzency_fbbc'] ?> !important;
	}

	.gtco-cta .btn-white:hover {
		background-color: <?php echo $dizzency_options['dizzency_fbbhc'] ?> !important;
	}
</style>