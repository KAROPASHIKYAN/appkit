<div id="contact" class="contact-section">
    <div class="container text-center">
        <h2 class="section-title"><?the_sub_field ('title');?></h2>
        <div class="contact-content">
            <p><?the_sub_field ('content');?></p>
        </div>
        <?php $button = get_sub_field ('button');?>
        <a class="btn btn-cta btn-primary" href="<?= $button['url'] ;?>"><?= $button['title'] ;?></a>
    </div><!--//container-->
</div><!--//contact-section-->
