<!-- Page -->
<div class="page">
	<!-- Load Bludit Plugins: Page Begin -->
	<?php Theme::plugins('pageBegin'); ?>

	<!-- Cover image -->
	<?php if ($page->coverImage()): ?>
	<img class="mb-3 cover" alt="Cover Image" src="<?php echo $page->coverImage(); ?>" />
	<?php endif ?>

	<!-- Title -->
	<h1 class="title text-primary h3">
		<?php echo $page->title(); ?>

		<!-- Title icons -->
		<?php include(THEME_DIR_PHP . 'indicators.php'); ?>
	</h1>

	<?php if (!$page->isStatic() && !$url->notFound()): ?>
	<!-- Creation date -->
	<h6 class="text-muted mb-3">
		<?php echo $page->date(); ?> ~
		<?php echo $page->relativeTime(); ?>
	</h6>
	<?php endif ?>

	<!-- Full content -->
	<?php echo $page->content(); ?>

	<!-- Load Bludit Plugins: Page End -->
	<?php Theme::plugins('pageEnd'); ?>
</div>