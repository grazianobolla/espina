<!-- About me -->
<div class="text-center mb-3 d-flex flex-column align-items-center">
    <img src="<?php echo $site->logo(); ?>" class="rounded-circle" style="width:90px;">
    <p class="text-muted mt-1 mb-0 font-italic" style="max-width: 300px">
        <?php echo $site->footer(); ?>
    </p>
</div>

<!-- Post list -->
<?php include(THEME_DIR_PHP . 'list.php'); ?>