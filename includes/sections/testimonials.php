<div id="testimonials" class="testimonials-section">
    <div class="container">
        <h2 class="section-title text-center"><? the_sub_field('title');?></h2>
        <?php $comments = get_sub_field('comments'); ?>
        <?php foreach ($comments as $key => $comment): ?>
        <div class="item <?= $key == 0 || $key % 2 == 0 ? '': 'item-reversed';?> center-block">
            <div class="profile-holder">
                <img class="profile-image" src="<?= $comment['ava']['url']; ?>" alt="profile">
            </div>
            <div class="quote-holder">
                <blockquote class="quote">
                    <p><?= $comment['quote']; ?></p>
                    <div class="quote-source">
                        <span class="name">@<?= $comment['name'];?>,</span>
                        <span class="meta"><?= $comment['location'];?></span>
                    </div><!--//quote-source-->
                </blockquote>
            </div><!--//quote-holder-->
        </div><!--//item-->
        <?php endforeach; ?>
    </div><!--//container-->
</div><!--//testimonials-->
