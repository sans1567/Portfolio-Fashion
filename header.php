<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Portfolio-Fashion</title>
        <?php wp_head();?>
    </head>
    <body <?php body_class();?>>
        <?php wp_body_open();?>

        <header class="header">
            <div class="header-inner">
                <div class="search-icon">
                    <?php //検索アイコン//?>
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
            </div>
        </header>
    </body>
</html>