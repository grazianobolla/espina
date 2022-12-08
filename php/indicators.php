<!-- Pin icon if the page is sticky -->
<?php if ($page->sticky()): ?>
<i class="fa fa-thumb-tack text-muted" aria-hidden="true"></i>
<?php endif ?>

<!-- Archive icon if the page is archived -->
<?php if ($page->category() == 'Archive'): ?>
<i class="fa fa-archive text-muted" aria-hidden="true"></i>
<?php endif ?>