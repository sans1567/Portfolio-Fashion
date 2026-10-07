<?php get_header()?>

<main class="main">
    <?php if(have_posts()): ?>
        <?php while(have_posts()) : the_post(); ?>
            <section class="main-singleNews">
                <div class="main-singleNews__inner">
                    <p class="main-singleNews__date">
                        2026.09.15
                    </p>
                    <h2 class="main-singleNews__title">
                        2026 Autumn Collection Launch
                    </h2>
                    <div class="main-singleNews__image">
                        <img src="<?php echo get_template_directory_uri() . "/assets/images/news1.jpg"?>" alt="３人の女性が街中を歩いている">
                    </div>
                    <p class="main-singleNews__dsc">
                        今シーズンのコレクションでは、<br>
                        都会的なシルエットと快適な着心地を両立した
                        アイテムを展開します。<br><br>

                        ミニマルなデザインをベースに、<br>
                        上質な素材と洗練されたディテールを取り入れ、<br>
                        日常に自然と馴染むスタイルを提案しています。<br><br>

                        アウターからボトムスまで幅広いラインナップを揃え、<br>
                        シーズンを通して活躍するアイテムを展開。<br>
                        ぜひ新作コレクションをご覧ください。
                    </p>
                    <div class="main-singleNews__navigation">
                        <a href="#" class="main-singleNews__navigation-button main-singleNews__navigation--prev">
                            <span>←</span>
                        </a>
                        <a href="#" class="main-singleNews__navigation-button main-singleNews__navigation--next">
                            <span>→</span>
                        </a>
                    </div>
                </div>
            </section>
        <?endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer()?>