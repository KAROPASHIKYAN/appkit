<div id="pricing" class="pricing-section">
    <div class="container text-center">
        <h2 class="section-title"><?the_sub_field ('title');?></h2>
        <div class="intro"><?the_sub_field ('intro');?></div>
        <div class="pricing-wrapper">
            <?php $items = get_sub_field('items'); ?>
            <?php foreach ($items as $key => $item):?>
            <div class="item item-<?= ++$key;?> col-md-4 col-sm-4 col-xs-12">
                <div class="item-inner">
                    <h3 class="item-heading"><?= $item['head'] ;?></h3>
                    <div class="price-figure">
                        <span class="currency"><?= $item['currency'] ;?></span><span class="number"><?= $item['number'] ;?></span>
                    </div><!--//price-figure-->
                    <div class="price-desc">
                        <p><?= $item['desc'] ;?></p>
                        <a href="<?= $item['details']['url'] ;?>" target="_blank"><?= $item['details']['title'] ;?></a>
                    </div><!--//price-desc-->
                    <a class="btn btn-cta" href="<?= $item['buy']['url'] ;?>"><?= $item['buy']['title'] ;?></a>
                </div><!--//item-inner-->
            </div><!--//item-->
            <?php endforeach;?>
        </div><!--//pricing-wrapper-->
    </div><!--//container-->
</div><!--//pricing-section-->
