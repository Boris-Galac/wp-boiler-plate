<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lorem ipsum dolor sit amet.">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="lorem, ipsum, dolor, sit, amet">
    <?php wp_head() ?>
</head>

<body <?php body_class()?>>
    <header class="header">
        <div class="header__logo">
            <h1>Logo</h1>
        </div>
        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item"><a href="#" class="nav__link">Home</a></li>
                <li class="nav__item"><a href="#" class="nav__link">About</a></li>
                <li class="nav__item"><a href="#" class="nav__link">Contact</a></li>
            </ul>
        </nav>
    </header>