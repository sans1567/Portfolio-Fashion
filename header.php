<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio-Fashion</title>
        <?php wp_head();?>
    </head>
    <body <?php body_class();?>>
        <?php wp_body_open();?>

        <header class="header">
            <div class="header-inner">
                <div class="search-icon">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/search-icon.svg"?>" alt="検索アイコン">
                </div>
                <h1 class="header-logo">
                    <a href="<?php home_url()?>>">Portfolio-Fashion</a>
                </h1>
                <nav class="header-nav">
                    <ul class="header-nav__list">
                        <li><a href="">COLLECTION</a></li>
                        <li><a href="">NEWS</a></li>
                        <li><a href="">CONTACT</a></li>
                    </ul>
                </nav>
                <?php  //ハンバーガーボタン?>
                <div class="hamburger-button">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <?php  //ハンバーガーメニュークローズアイコン?>
                <div class="close-button">
                    <span></span>
                    <span></span>
                </div>
            </div>
            <?php  //ハンバーガーメニュー?>
            <div class="hamburger-menu">
                <div class="hamburger-menu__inner">
                    <ul class="hamburger-menu__list">
                        <li><img src="<?php echo get_template_directory_uri() . "/assets/images/search-icon.svg"?>" alt="検索アイコン"><input type="text" name="serchItem" placeholder="アイテムを検索する"></li>
                        <li><a href="#">COLLECTION</a></li>
                        <li><a href="#">NEWS</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </header>
    </body>
</html>