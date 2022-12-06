<li class="post">
    <div class="d-md-flex justify-content-between align-items-center">
        <a href="<?php echo $page->permalink(); ?>">
            <h5 class="title headline">
                <?php echo $page->title(); ?>
            </h5>
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