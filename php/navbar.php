<nav class="navbar navbar-expand-md navbar-dark fixed-top">
	<div class="container" id="main-container">
		<!-- Name and slogan -->
		<a class="navbar-brand" href="<?php echo Theme::siteUrl() ?>">
			<span class="text-white">
				<?php echo $site->title() ?>
			</span>
			<div class="vr d-none d-sm-inline-block"></div>
			<span class="text-muted slogan d-none d-sm-inline">
				<?php echo $site->slogan() ?>
			</span>
		</a>

		<!-- Toggler button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
			aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Social media buttons/collaspe -->
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<!-- Social Networks -->
				<?php foreach (Theme::socialNetworks() as $key => $label): ?>
				<li class="nav-item">
					<a class="nav-link d-flex align-items-center" href="<?php echo $site->{$key}(); ?>" target="_blank">
						<i class="fa fa-<?php echo $key ?> fa-lg" aria-hidden="true"></i>
						<span class="d-inline d-md-none">
							<?php echo $label; ?>
						</span>
					</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</nav>