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
                            COLOR:Camel
                        </p>
                        <select class="main-singleCollection__size" name="size">
                            <option value="">サイズを選択してください</option>
                            <option value="xs">XS</option>
                            <option value="s">S</option>
                            <option value="m">M</option>
                            <option value="l">L</option>
                            <option value="xl">XL</option>
                        </select>
                        <p class="main-singleCollection__description">
                            都会的なミニマルデザインが魅力のロングテーラードコート。<br>
                            程よくゆとりのあるシルエットで、ニットやスウェットの
                            上からでも快適に羽織れます。<br>
                            上質なウールライク素材を採用し、軽やかな着心地と上品な風合いを両立。<br>
                            カジュアルからビジネスカジュアルまで
                            幅広いスタイリングに馴染み、長く愛用できる一着です。
                        </p>
                        <a href="#" class="main-singleCollection__link">
                            SOLD OUT
                        </a>
                    </div>
                </div>

                <div class="main-main-singleCollection__related">
                    <div class="main-main-singleCollection__related-inner">
                        <h2 class="main-main-singleCollection__related-title">
                            RELARED
                        </h2>
                        <p class="main-main-singleCollection__related-text">
                            関連商品
                        </p>
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