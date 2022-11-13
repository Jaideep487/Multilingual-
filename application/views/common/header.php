<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="<?= $pageDesc ?>" />
        <meta name="author" content="Jaideep Singh" />
        <title><?= $pageTitle ?> | Tourist Attraction</title>
        
        <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/favicon.ico" />
        
        <link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet" />
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Tourist Attraction</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php foreach ($menus as $menu) { 
				$slug = 'slug_' . $langCode;
				if (empty($menu[$slug]) && $langCode == 'en') {?>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>"><?= $menu['name_' . $langCode] ?></a></li>
				<?php } elseif(empty($menu[$slug])) { ?>
			<li class="nav-item"><a class="nav-link" href="<?= base_url() . $langCode ?>"><?= $menu['name_' . $langCode] ?></a></li>
				<?php } elseif($langCode == 'en') { ?>
			<li class="nav-item"><a class="nav-link" href="<?= base_url() . $menu[$slug] ?>"><?= $menu['name_' . $langCode] ?></a></li>
				<?php } else { ?>
			<li class="nav-item"><a class="nav-link" href="<?= base_url() . $langCode . '/' . $menu[$slug] ?>"><?= $menu['name_' . $langCode] ?></a></li>
			<?php } 
			} ?>
			<?php if ($langCode == 'en') {?>
			<li class="nav-item"><a class="nav-link" href="<?= base_url('el') ?>"><img src="<?= base_url('assets/flags/el.png') ?>" alt="Greek" title="Greek" /></a></li>
			<li class="nav-item"><a class="nav-link" href="<?= base_url('ru') ?>"><img src="<?= base_url('assets/flags/ru.png') ?>" alt="Russian" title="Russian" /></a></li>
			<?php }elseif($langCode == 'el') { ?>
			<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>"><img src="<?= base_url('assets/flags/en.png') ?>" alt="English" title="English" /></a></li>
			<li class="nav-item"><a class="nav-link" href="<?= base_url('ru') ?>"><img src="<?= base_url('assets/flags/ru.png') ?>" alt="Russian" title="Russian" /></a></li>
			<?php }else{ ?>
			<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>"><img src="<?= base_url('assets/flags/en.png') ?>" alt="English" title="English" /></a></li>
			<li class="nav-item"><a class="nav-link" href="<?= base_url('el') ?>"><img src="<?= base_url('assets/flags/el.png') ?>" alt="Greek" title="Greek" /></a></li>
			<?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
