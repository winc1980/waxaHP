<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>早稲田大学天文同好会WAXA</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" media="all">
        <?php wp_head(); ?>
    </head>

    <body>
    <div id="page">
        <!-- ヘッダーここから -->
        <header id="header">
            <div class="header_wrapper">
                <div class="header_logoandtitle">
                    <a href="./"><img src="<?php echo get_theme_file_uri('src/WAXA_logo.svg'); ?>" alt="WAXA_logo" id="header_waxa_logo" /></a>
                    <a href="./">
                        <h1>
                            早稲田大学天文同好会 <span>WAXA</span>
                        </h1>
                    </a>
                </div>

                <div class="header_menu-content-pc">
                    <ul>
                        <li>
                            <a href="#activity">活動内容</a>
                        </li>
                        <li>
                            <a href="#history">歴史</a>
                        </li>
                        <li>
                            <a href="#place">活動場所</a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/waxa_tenmon/"><img src="<?php echo get_theme_file_uri('src/instagram-logo.svg'); ?>" alt="instagram link"></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/waxa_souten"><img src="<?php echo get_theme_file_uri('src/twitter-logo.svg'); ?>" alt="Twitter link"></a>
                        </li>
                        <li>
                            <a href="#contact" id="header_application-btn">本入会はこちら</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header_hamburger-menu">
                <input type="checkbox" id="header_menu-btn-check" />
                <label for="header_menu-btn-check" class="header_menu-btn"><span></span></label>
                <!-- ここからメニュー -->
                <div class="header_menu-content">
                    <ul>
                        <li>
                            <label for="header_menu-btn-check" onclick="location.href='#activity'">活動内容</label>
                        </li>
                        <li>
                            <label for="header_menu-btn-check" onclick="location.href='#history'">歴史</label>
                        </li>
                        <li>
                            <label for="header_menu-btn-check" onclick="location.href='#place'">活動場所</label>
                        </li>
                        <li>
                            <label for="header_menu-btn-check" onclick="location.href='https://www.instagram.com/waxa_tenmon/'">Instagram</label>
                        </li>
                        <li>
                            <label for="header_menu-btn-check" onclick="location.href='https://twitter.com/waxa_souten'">Twitter</label>
                        </li>
                        <li>
                            <label for="header_menu-btn-check" onclick="location.href='#contact'">お問い合わせ</label>
                        </li>
                    </ul>
                </div>
                <!--ここまでメニュー-->
            </div>

        </header>
        <!-- ヘッダーここまで -->