<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">

<head>
	<?php include(THEME_DIR_PHP . 'head.php'); ?>
</head>

<body>
	<!-- Load Bludit Plugins: Site Body Begin -->
	<?php Theme::plugins('siteBodyBegin'); ?>

	<!-- Navbar -->
	<?php include(THEME_DIR_PHP . 'navbar.php'); ?>

	<!-- Content -->
	<div class="container my-5" id="main-container">
		<div class="row">
			<div class="col-md-8">
				<?php include(THEME_DIR_PHP . 'pages/' . $WHERE_AM_I . '.php'); ?>
			</div>

			<div class="col-md-4 d-none d-md-block">
				<div class="sidebar sticky-top">
					<?php include(THEME_DIR_PHP . 'sidebar.php'); ?>
				</div>
			</div>
		</div>

		<!-- Javascript -->
		<?php
        // Include Jquery file from Bludit Core
        echo Theme::jquery();

        // Include javascript Bootstrap file from Bludit Core
        echo Theme::jsBootstrap();
		?>

		<!-- Load Bludit Plugins: Site Body End -->
		<?php Theme::plugins('siteBodyEnd'); ?>
</body>

</html>