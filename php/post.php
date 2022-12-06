<li class="post">
    <div class="d-md-flex justify-content-between align-items-center">
        <a class="head" href="<?php echo $page->permalink(); ?>">
            <p class="h5 m-0 p-0">
                <?php echo $page->title(); ?>
            </p>
        </a>

        <p class="text-muted date">
            <?php echo $page->relativeTime(); ?>
        </p>
    </div>

    <p class="text-muted m-0">
        <?php echo $page->description(); ?>
    </p>

    <?php foreach ($page->tags(true) as $tag): ?>
    <span class="badge">
        <?php echo $tag ?>
    </span>
    <?php endforeach ?>
</li>