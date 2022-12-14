<!-- Get tag info -->
<?php
if ($WHERE_AM_I != 'tag')
    return;

$tagKey = $url->slug();
$tag = new Tag($tagKey);
?>

<!-- Tag info -->
<div class="mb-3">
    <p class="m-0 h2">Filtering by tag: <?php echo $tag->name(); ?></p>
    <p class="m-0 text-muted">Only showing posts that cointain the selected tag</p>
</div>

<!-- Post list -->
<?php include(THEME_DIR_PHP . 'list.php'); ?>