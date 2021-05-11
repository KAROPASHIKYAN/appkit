<?php
$about = get_sub_field ('about');
$galery = get_sub_field ('gallery');
$items = get_sub_field('items');
?>
<div id="about" class="about-section">
    <div class="container text-center">
        <h2 class="section-title"><?php the_sub_field('title') ;?></h2>
        <p class="intro"><?php the_sub_field('intro') ;?></p>
        <ul class="technologies list-inline">
            <?php if (!empty($galery)): ?>
                <?php foreach ($galery as $logo): ?>
                    <li><img src="<?= $logo['url']; ?>" alt="<?=$logo['alt']; ?>"></li>
                 <?php endforeach; ?>
            <?php endif; ?>
        </ul>

        <div class="items-wrapper row">
            <?php if (!empty($items)): ?>
                <?php foreach ($items as $item): ?>
                 <div class="item col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="<?= $item['image']['url']; ?>" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title"><?= $item['title']; ?></h3>
                        <div class="item-desc">
                            <?= $item['desc']; ?>
                        </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <?php endforeach; ?>
            <?php endif;?>
        </div><!--//items-wrapper-->
    </div><!--//container-->
</div><!--//about-section-->
