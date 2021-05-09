<div id="features" class="features-section">
    <div class="container text-center">
        <h2 class="section-title"><?php the_sub_field('title');?></h2>
        <p class="intro"><?php the_sub_field('intro'); ?></p>

        <div class="tabbed-area row">

            <!-- Nav tabs -->
            <ul class="feature-nav nav nav-pill nav-stacked text-left col-md-4 col-sm-6 col-xs-12 col-md-push-8 col-sm-push-6 col-xs-push-0" role="tablist">
                <?php $features = get_sub_field('features');?>
                <?php foreach ($features as $key => $feature): ?>
                <li role="presentation" <?= $key == 0 ? 'class="active"': ''; ?>><a href="#feature-<?= ++$key; ?>" aria-controls="feature-<?= $key; ?>" role="tab" data-toggle="tab"><i class="<?= $feature['icon']; ?>"></i><?= $feature['presentation']; ?></a></li>
                <?php endforeach; ?>
            </ul>

            <!-- Tab panes -->
            <div class="feature-content tab-content col-md-8 col-sm-6 col-xs-12 col-md-pull-4 col-sm-pull-6 col-xs-pull-0">
                <?php foreach ($features as $key => $feature): ?>
                <div role="tabpanel" class="tab-pane fade <?= $key == 0 ? 'in active': '';?>" id="feature-<?= ++$key;?>">
                    <a href="<?= $feature['link'] ?>" target="_blank"><img class="img-responsive" src="<?= $feature['image']['url'] ;?>" alt="screenshot" ></a>
                </div>
                <?php endforeach; ?>
            </div><!--//feature-content-->


        </div><!--//tabbed-area-->

    </div><!--//container-->
</div><!--//features-->
