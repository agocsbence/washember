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
</head>
<body>

<div class="userinfo">

<?php $user_info = get_userdata(9);
      echo 'Username: ' . $user_info->user_login . "\n";
      echo 'User roles: ' . implode(', ', $user_info->roles) . "\n";
      echo 'User ID: ' . $user_info->ID . "\n";
?>

</div>

<header class="bg--white grid grid--header">
    <img src="<?php bloginfo('template_url') ?>/assets/img/logo-desktop.png" alt="Washember" class="logo desktop-only">
    <img src="<?php bloginfo('template_url') ?>/assets/img/logo-mobile.png" alt="Washember" class="logo-mobile mobile-only">
    <p><strong>washember</strong> <span class="desktop-only">|</span> javít a szitun <span class="desktop-only">|</span></p>
    <div class="marquee-header">
        <div class="marquee1">ha sürgős hívj <a href="tel:" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_url') ?>/assets/img/phone.png" alt="phone icon"></a> és repülünk <a href="tel:+36301234567">+36 30 123 4567</a></div>
        <div class="marquee2">ha sürgős hívj <a href="tel:" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_url') ?>/assets/img/phone.png" alt="phone icon"></a> és repülünk <a href="tel:+36301234567">+36 30 123 4567</a></div>
        <div class="marquee3">ha sürgős hívj <a href="tel:" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_url') ?>/assets/img/phone.png" alt="phone icon"></a> és repülünk <a href="tel:+36301234567">+36 30 123 4567</a></div>
    </div>
</header>