<div class="team-section" id="team">
    <div class="container text-center">
        <h2 class="section-title"><?php the_sub_field ('title'); ?></h2>
        <p class="intro"><?php the_sub_field('intro'); ?></p>
        <div class="story">
            <p><?php the_sub_field('story'); ?></p>
        </div>
        <div class="members-wrapper row">
            <?php $members = get_sub_field('members'); ?>
            <?php foreach ($members as $member): ?>
            <div class="item col-md-6 col-sm-6 col-xs-12">
                <div class="item-inner">
                    <div class="profile">
                        <img class="profile-image" src="<?= $member['image']['url'];?>" alt="<?= $member['image']['alt']; ?>" />
                    </div>

                    <div class="member-content">
                        <h3 class="member-name"><?= $member['name']; ?></h3>
                        <div class="member-title"><?= $member['title']; ?></div>
                        <ul class="social list-inline">
                            <?php foreach ($member['social'] as $social): ?>

                            <?php $icon = $social['icon'];?>
                            <li><a <?= $icon !== 'globe'? "class='$icon'" : '';?> href="<?= $social['link']['url'];?>
                           " target="_blank">
                                <i class="fa fa-<?= $social['icon'];?>"></i></a>
                            </li>

                            <?php endforeach; ?>
                        </ul>
                        <div class="member-desc">
                            <p> <?= $member['desc']; ?></p>
                        </div><!--//member-desc-->
                    </div><!--//member-content-->
                </div><!--//item-inner-->
            </div><!--//item-->
            <?php endforeach; ?>
        </div><!--//members-wrapper-->
    </div>
</div><!--//team-section-->
