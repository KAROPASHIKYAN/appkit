<?php $button = get_sub_field ('button');?>
<div id="contact" class="contact-section">
    <div class="container text-center">
        <h2 class="section-title"><?the_sub_field ('title');?></h2>
        <div class="contact-content">
            <p><?php the_sub_field ('content');?></p>
        </div>
        <?php if (!empty($button)): ?>
            <a class="btn btn-cta btn-primary" href="<?= $button['url'] ;?>"><?= $button['title'] ;?></a>
        <?php endif; ?>
    </div><!--//container-->
</div><!--//contact-section-->
