<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Portfolio-Fashion</title>
        <?php wp_footer();?>
    </head>
    <footer class="footer">
        <div class="footer-inner">
            <div class="footer-logo">
                <a href="<?php echo home_url('/')?>">PORTFOLIO-FASHION</a>
            </div>
            <nav class="footer-nav">
                <ul class="footer-nav__list">
                    <li>
                        <p>COLLECTION</p>
                        <a href="#"><span>◻︎OUTER</span></a>
                        <a href="#"><span>◻︎TOPS</span></a>
                        <a href="#"><span>◻︎BOTTOMS</span></a>
                    </li>
                    <li>
                        <p>INFOMATION</p>
                        <a href="<?php echo esc_url(get_post_type_archive_link('news')); ?>"><span>◻︎NEWS</span></a>
                        <a href="<?php echo home_url('/contact/')?>"><span>◻︎CONTACT</span></a>
                    </li>
                    <li>
                        <p>FOLLOW</p>
                        <a href="#"><span>◻︎Instagram</span></a>
                        <a href="#"><span>◻︎X</span></a>
                    </li>
                </ul>
            </nav>
            <p class="copylight"><small>©2026 Asato Sato</small></p>
        </div>
    </footer>
</html>