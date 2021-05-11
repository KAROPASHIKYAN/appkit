<?php
$image = get_sub_field ('image');
$items = get_sub_field('items');
?>
<div id="hero" class="hero-section">

    <div id="hero-carousel" class="hero-carousel carousel carousel-fade slide" data-ride="carousel"
         data-interval="10000">

        <div class="figure-holder-wrapper">
            <div class="container">
                <div class="row">
                    <div class="figure-holder">

                                    <img class="figure-image img-responsive" src="<?php echo $image['url']; ?>" alt="image"/>


                    </div><!--//figure-holder-->
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//figure-holder-wrapper-->


        <!-- Indicators -->
        <?php if (!empty($items)): ?>
            <ol class="carousel-indicators">
                <?php foreach ($items as $key => $item): ?>
                    <li class="<?= $key == 0 ? 'active' : ''; ?>" data-slide-to="<?= $key; ?>"
                        data-target="#hero-carousel"></li>
                <?php endforeach; ?>
            </ol>
        <?php endif; ?>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php if (!empty($items)): ?>
            <?php foreach ($items as $key=>$item): ?>
            <div class="item item-<?= ++$key;?> <?= $key == 1 ?  'active' : '' ; ?>">
                <div class="item-content container">
                    <div class="item-content-inner">
                        <h2 class="heading"><?= $item['head']; ?></h2>
                        <p class="intro"><?= $item['content']; ?></p>
                        <a class="btn btn-primary btn-cta" href="<?= $item['button']['url']; ?>"
                           target="_blank"><?php echo $item['button']['title']; ?></a>
                    </div><!--//item-content-inner-->
                </div><!--//item-content-->
            </div><!--//item-->
            <?php endforeach; ?>
            <?php endif; ?>
        </div><!--//carousel-inner-->

    </div><!--//carousel-->
</div><!--//hero-->

