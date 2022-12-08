<?php if (empty($content)): ?>
<div class="mt-4">
	<?php $language->p('No pages found') ?>
</div>
<?php endif ?>

<ul class="post-list">
	<?php foreach ($content as $page)
	    include(THEME_DIR_PHP . 'post.php');
    ?>
</ul>

<!-- Pagination -->
<?php if (Paginator::numberOfPages() > 1): ?>
<div class="pag d-flex justify-content-center">
	<!-- Previous button -->
	<a class="pag-link <?php if (!Paginator::showPrev())
		echo 'disabled text-muted' ?>" href="<?php echo Paginator::previousPageUrl() ?>">
		Newer
	</a>

	<!-- Next button -->
	<a class="pag-link <?php if (!Paginator::showNext())
		echo 'disabled text-muted' ?>" href="<?php echo Paginator::nextPageUrl() ?>">
		Older
	</a>
</div>
<?php endif ?>