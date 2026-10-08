<?php get_header();?>

<main class="main">
    <section class="main-archiveNews">
        <div class="main-archiveNews__inner">
            <h2 class="main-archiveNews__title">
                NEWS
            </h2>
            <p class="main-archiveNews__text">
                最新ニュースと更新情報
            </p>
            <div class="main-archiveNews__list">
                <a href="<?php echo esc_url(get_permalink(17));?>" class="main-archiveNews__card">
                    <div class="main-archiveNews__image">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/news1.jpg"?>" alt="3人の女性が街中を歩いている">
                    </div>
                    <p class="main-archiveNews__date">
                        2026.06.01
                    </p>
                    <p class="main-archiveNews__newsTitle">
                        SPRING COLLECTiON 2026
                    </p>  
                </a>

                <a href="#" class="main-archiveNews__card">
                    <div class="main-archiveNews__image">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/news2.jpg"?>" alt="白シャツであぐらを描いている女性">
                    </div>
                    <p class="main-archiveNews__date">
                        2026.05.25
                    </p>
                    <p class="main-archiveNews__newsTitle">
                        NEW OUTER ARRIVALS (Coming Soon)
                    </p>  
                </a>

                <a href="#" class="main-archiveNews__card">
                    <div class="main-archiveNews__image">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/news3.jpg"?>" alt="棒にたくさんの服がかかっている">
                    </div>
                    <p class="main-archiveNews__date">
                        2026.05.20
                    </p>
                    <p class="main-archiveNews__newsTitle">
                        SUMMER ESSENTIALS (Coming Soon)
                    </p>  
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer();?>