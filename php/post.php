<!-- Homepage post -->
<li class="post">
    <!-- Title and time -->
    <div class="d-md-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <!-- Title hyperlink -->
            <a href="<?php echo $page->permalink(); ?>">
                <h5 class="title headline">
                    <?php echo $page->title(); ?>
                </h5>
            </a>

            <!-- Pin icon if the page is sticky -->
            <?php if ($page->sticky()): ?>
            <i class="fa fa-thumb-tack text-muted pin" aria-hidden="true"></i>
            <?php endif ?>
        </div>
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