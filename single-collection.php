<?php get_header()?>

<main class="main">
    <?php if(have_posts()): ?>
        <?php while(have_posts()) : the_post(); ?>
            <section class="main-singleCollection">
                <div class="main-singleCollection__inner">
                    <!--画像-->
                    <div class="main-singleCollection__ImageItem">
                        <div class="main-singleCollection__image--primary">
                            <img src="<?php  echo get_template_directory_uri() . "/assets/images/scm1.jpg"?>" alt="ベージュのコート前">
                        </div>
                        <div class="main-singleCollection__image--secondary">
                            <!--サブの画像2枚-->
                            <img src="<?php  echo get_template_directory_uri() . "/assets/images/scm1.jpg"?>" alt="ベージュのコート前">
                            <img src="<?php  echo get_template_directory_uri() . "/assets/images/scm2.jpg"?>" alt="ベージュのコート後">
                        </div>
                    </div>
                    <!-- 商品詳細 -->
                    <div class="main-singleCollection__data">
                        <p class="main-singleCollection__category">
                            Outer
                        </p>
                        <h2 class="main-singleCollection__title">
                            Relaxed Tailored Coat
                        </h2>
                        <p class="main-singleCollection__price">
                            ¥24,800
                        </p>
                        <p class="main-singleCollection__color">
                            Color:Camel
                        </p>
                        <p class="main-singleCollection__size">
                            XS/S/M/L/XL
                        </p>
                        <div class="main-singleCollection__description">
                            都会的なミニマルデザインが魅力のロングテーラードコート。
                            程よくゆとりのあるシルエットで、ニットやスウェットの
                            上からでも快適に羽織れます。
                            上質なウールライク素材を採用し、軽やかな着心地と上品な風合いを両立。
                            カジュアルからビジネスカジュアルまで
                            幅広いスタイリングに馴染み、長く愛用できる一着です。
                        </div>
                        <button class="collection-detail__button" disabled>
                            SOLD OUT
                        </button>
                    </div>
                </div>

                <div class="main-main-singleCollection__related">
                    <h2 class="main-main-singleCollection__related-title">
                        RELARED
                    </h2>
                    <div class="main-main-singleCollection__related-list">
                        <div class="main-main-singleCollection__related-list">
                            <a href="#" class="main-main-singleCollection__related-list__card">
                                <div class="main-main-singleCollection__related-list__image">
                                    <img src="<?php  echo get_template_directory_uri() . "/assets/images/scr1.jpg"?>" alt="黒のダブルのライダース">
                                </div>
                                <p class="main-main-singleCollection__related-list__prodactName">
                                    Minimal Leather Jacket
                                </p>
                                <p class="main-main-singleCollection__related-list__prodactPrice">
                                    ¥19,800
                                </p>
                            </a>
                            <a href="#" class="main-main-singleCollection__related-list__card">
                                <div class="main-main-singleCollection__related-list__image">
                                    <img src="<?php  echo get_template_directory_uri() . "/assets/images/scr2.jpg"?>" alt="肌色のスラックス">
                                </div>
                                <p class="main-main-singleCollection__related-list__prodactName">
                                    Relax Wide Slacks
                                </p>
                                <p class="main-main-singleCollection__related-list__prodactPrice">
                                    ¥9,800
                                </p>
                            </a>
                            <a href="#" class="main-main-singleCollection__related-list__card">
                                <div class="main-main-singleCollection__related-list__image">
                                    <img src="<?php  echo get_template_directory_uri() . "/assets/images/scr3.jpg"?>" alt="黒のボンバージャケット">
                                </div>
                                <p class="main-main-singleCollection__related-list__prodactName">
                                    Minimal Bomber Jacket
                                </p>
                                <p class="main-main-singleCollection__related-list__prodactPrice">
                                    ¥16,800
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        <?endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer()?>