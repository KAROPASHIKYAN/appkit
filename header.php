<?php
$sections = get_field('sections');
$str = get_bloginfo();
$st = logo($str);
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 website landing page for developers and startups">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="<?= get_stylesheet_directory_uri()?>/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>

<body>
<!-- ******HEADER****** -->
<header id="header" class="header">
    <div class="container">
        <h1 class="logo">
            <?php if (!empty($sections)): ?>
                <?php foreach ($sections as $key => $section): ?>
                 <a class="scrollto" href="#<?= $section['acf_fc_layout']; ?>">
                <?php endforeach; ?>
            <?php endif; ?>
                <span class="logo-icon-wrapper"><img class="logo-icon" src="<?= get_stylesheet_directory_uri()?>/assets/images/logo-icon.svg" alt="icon"></span>
                <span class="text"><span class="highlight"><?= $st[0];?></span><?= $st[1];?></span></a>
        </h1><!--//logo-->
        <nav class="main-nav navbar-right" role="navigation">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><!--//nav-toggle-->
            </div><!--//navbar-header-->
            <div id="navbar-collapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <?php foreach ($sections as $key => $section): ?>
                        <li class="<?= $key == 0? 'active':'';?> nav-item"><a class="scrollto" href="#<?= $section['acf_fc_layout']; ?>"><?= $section['section_name']; ?></a></li>
                    <?php endforeach; ?>
                </ul><!--//nav-->
            </div><!--//navabr-collapse-->
        </nav><!--//main-nav-->
    </div><!--//container-->
</header><!--//header-->