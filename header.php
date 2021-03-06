<!DOCTYPE html>
<meta charset="utf-8">

<head>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="~/lib/Font-Awesome/css/solid.min.css">
    <script src="https://use.fontawesome.com/d697109582.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>
        <?php bloginfo('name'); ?><?php echo get_the_title() !== '' ? ' - ' . get_the_title() : ' - ' . single_cat_title(); ?>
    </title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<header id="home">
    <div class="header_container">
        <div class="navbar_container">
            <div class="navbar">
                <div class="logo" id="home">
                    <a href="#">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="300.000000pt" height="97.000000pt"
                            viewBox="0 0 300.000000 97.000000" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,97.000000) scale(0.100000,-0.100000)" fill="#fff"
                                stroke="none">
                                <path d="M1582 948 c-17 -17 -17 -909 0 -926 31 -31 61 -14 185 110 l123 123
                            123 -123 c81 -81 130 -122 144 -122 26 0 53 25 53 48 0 10 -56 73 -125 142
                            l-125 125 127 127 c121 121 127 129 117 155 -7 20 -17 29 -38 31 -25 3 -55
                            -23 -259 -225 l-232 -228 -5 375 c-3 206 -9 381 -13 388 -10 15 -59 16 -75 0z" />
                                <path fill="#990000" d="M295 506 c-148 -73 -276 -140 -283 -149 -8 -9 -12 -26 -10 -39 2 -19
                            49 -46 288 -165 157 -79 294 -143 305 -143 29 0 45 19 45 52 0 26 -13 34 -237
                            147 l-238 119 223 110 c122 60 229 115 237 122 18 15 20 51 3 68 -7 7 -23 12
                            -37 11 -15 0 -147 -60 -296 -133z" />
                                <path d="M997 626 c-84 -30 -149 -93 -188 -181 -28 -64 -28 -176 2 -244 30
                            -71 122 -155 191 -176 102 -30 213 -14 285 41 29 22 33 23 33 7 0 -55 65 -83
                            94 -41 22 31 22 289 1 373 -27 103 -117 198 -213 225 -52 14 -160 12 -205 -4z
                            m201 -105 c46 -24 97 -76 111 -114 13 -35 14 -127 2 -160 -16 -40 -73 -99
                            -116 -118 -49 -23 -123 -24 -173 -3 -174 72 -176 323 -2 398 50 22 133 20 178
                            -3z" />
                                <path fill="#990000" d="M2360 620 c-23 -44 -5 -57 231 -175 126 -63 229 -117 229 -119 0 -2
                            -101 -54 -224 -114 -240 -117 -260 -133 -231 -178 9 -14 25 -24 38 -24 12 1
                            148 65 302 143 274 139 280 143 283 174 l3 32 -280 141 c-289 144 -330 158
                            -351 120z" />
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="nav-container">
                <div class="lang-container">
                    <a href="#">LV</a>
                    <a href="#">EN</a>
                </div>
                <nav>
                    <?php
                        include('classes/PrimaryMenu.php');
                        wp_nav_menu(
                            [
                                'theme_location' => 'primary_menu',
                                'container' => '',
                                'container_id' => '',
                                'depth' => 1,
                                'items_wrap' => '%3$s',
                                'walker' => new PrimaryMenuWalker
                            ]
                        );
                    ?>
                </nav>
                </div>
                <div class="hamburger_icon">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
        <?php $main_title = get_field('main_title'); ?>
        <div class="home_content">
            <p><?php echo $main_title['first_row']; ?></p>
            <h1><?php echo $main_title['second_row']; ?></h1>
            <h3><?php echo $main_title['third_row']; ?><span><?php echo $main_title['profession']; ?></span></h3>
        </div>
    </div>
</header>