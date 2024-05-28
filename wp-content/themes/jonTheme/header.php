<!-- Header -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header__top">
        <div class="container">
        <?php the_custom_logo(); ?>
        <a class="phone" href="tel:+<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
        </div>
    </header>

