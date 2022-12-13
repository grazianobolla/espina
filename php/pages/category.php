<!-- Get category info -->
<?php
if ($WHERE_AM_I != 'category')
    return;

$categoryKey = $url->slug();
$category = new Category($categoryKey);
?>

<!-- Category info -->
<div>
    <p class="m-0 h2">Showing posts in: <?php echo $category->name(); ?></p>
    <p class="m-0 mb-3 text-muted"><?php echo $category->description(); ?></p>
</div>

<!-- Post list -->
<?php include(THEME_DIR_PHP . 'list.php'); ?>