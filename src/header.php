<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
	<?php wp_head(); ?>

    <title>Washember | javít a szitun</title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url') ?>/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url') ?>/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url') ?>/assets/img/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url') ?>/assets/img/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_url') ?>/assets/img/safari-pinned-tab.svg" color="#df3e3e">
    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/assets/img/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?php bloginfo('template_url') ?>/assets/img/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>
<body>

<header class="bg--white grid grid--header">
    <a href="<?php echo get_home_url(); ?>" class="logo desktop-only"><img src="<?php bloginfo('template_url') ?>/assets/img/logo-desktop.png" alt="Washember"></a>
    <a href="<?php echo get_home_url(); ?>" class="logo-mobile mobile-only"><img src="<?php bloginfo('template_url') ?>/assets/img/logo-mobile.png" alt="Washember"></a>
    <p><strong>washember</strong> <span class="desktop-only">|</span> javít a szitun <span class="desktop-only">|</span></p>
    <div class="marquee-header">
        <?php if ( is_page_template('page-lakossagi.php') ) { ?>
            <div class="marquee1">ha sürgős hívjon <a href="tel:<?php the_field('telefonszam_lakossagi', 'option'); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_url') ?>/assets/img/phone.png" alt="phone icon"></a> és repülünk <a href="tel:<?php the_field('telefonszam_lakossagi', 'option'); ?>"><?php the_field('telefonszam_lakossagi', 'option'); ?></a></div>
            <div class="marquee2">ha sürgős hívjon <a href="tel:<?php the_field('telefonszam_lakossagi', 'option'); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_url') ?>/assets/img/phone.png" alt="phone icon"></a> és repülünk <a href="tel:<?php the_field('telefonszam_lakossagi', 'option'); ?>"><?php the_field('telefonszam_lakossagi', 'option'); ?></a></div>
            <div class="marquee3">ha sürgős hívjon <a href="tel:<?php the_field('telefonszam_lakossagi', 'option'); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_url') ?>/assets/img/phone.png" alt="phone icon"></a> és repülünk <a href="tel:<?php the_field('telefonszam_lakossagi', 'option'); ?>"><?php the_field('telefonszam_lakossagi', 'option'); ?></a></div>         
        <?php } elseif ( is_page_template('page-uzleti.php') ) { ?>
            <div class="marquee1">ha sürgős hívjon <a href="tel:<?php the_field('telefonszam_uzleti', 'option'); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_url') ?>/assets/img/phone.png" alt="phone icon"></a> és repülünk <a href="tel:<?php the_field('telefonszam_uzleti', 'option'); ?>"><?php the_field('telefonszam_uzleti', 'option'); ?></a></div>
            <div class="marquee2">ha sürgős hívjon <a href="tel:<?php the_field('telefonszam_uzleti', 'option'); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_url') ?>/assets/img/phone.png" alt="phone icon"></a> és repülünk <a href="tel:<?php the_field('telefonszam_uzleti', 'option'); ?>"><?php the_field('telefonszam_uzleti', 'option'); ?></a></div>
            <div class="marquee3">ha sürgős hívjon <a href="tel:<?php the_field('telefonszam_uzleti', 'option'); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_url') ?>/assets/img/phone.png" alt="phone icon"></a> és repülünk <a href="tel:<?php the_field('telefonszam_uzleti', 'option'); ?>"><?php the_field('telefonszam_uzleti', 'option'); ?></a></div>         
        <? } else { ?>
            <div class="marquee1">ha sürgős hívjon <a href=""><img src="<?php bloginfo('template_url') ?>/assets/img/phone.png" alt="phone icon"></a> és repülünk</div>
            <div class="marquee2">ha sürgős hívjon <a href=""><img src="<?php bloginfo('template_url') ?>/assets/img/phone.png" alt="phone icon"></a> és repülünk</div>
            <div class="marquee3">ha sürgős hívjon <a href=""><img src="<?php bloginfo('template_url') ?>/assets/img/phone.png" alt="phone icon"></a> és repülünk</div>
        <?php } ?>
    </div>
</header>