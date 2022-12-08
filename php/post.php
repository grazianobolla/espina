<!-- Do not render post if it is archived -->
<?php if ($page->category() == 'Archive' && $WHERE_AM_I != 'category')
    return;
?>

<!-- Homepage post -->
<li class="post">
    <!-- Title and time -->
    <div class="d-md-flex justify-content-between align-items-center">
        <!-- Title hyperlink -->
        <a href="<?php echo $page->permalink(); ?>">
            <h5 class="title headline">
                <?php echo $page->title(); ?>
                <?php include(THEME_DIR_PHP . 'indicators.php'); ?>
            </h5>
        </a>

        <!-- Date -->
        <p class="text-muted date">
            <?php echo $page->relativeTime(); ?>
        </p>
    </div>

    <!-- Decription -->
    <p class="text-muted m-0">
        <?php echo $page->description(); ?>
    </p>

    <!-- Tags -->
    <?php foreach ($page->tags(true) as $tag): ?>
    <span class="badge">
        <?php echo $tag ?>
    </span>
    <?php endforeach ?>
</li>