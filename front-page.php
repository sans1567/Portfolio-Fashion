<?php get_header();?>

<main class="main">
    <div class="main-inner">

        <section class="main-visual">
            <a href="<?php echo esc_url(get_post_type_archive_link('collection')); ?>" class="main-visual__link">
                最新コレクションを確認する
            </a>
            <div class="main-visual__item--collection">
                <div class="main-visual__image">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/mv1.jpg"?>" alt="黒いスーツの女性の画像">
                </div>
            </div>
            <div class="main-visual__item--essential">
                <div class="main-visual__image">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/mv2.jpg"?>" alt="ベージュのスーツの女性の画像">
                </div>
            </div>
        </section>

        <section class="main-collection">
            <h2 class="main-collection__title">
                COLLECTION
            </h2>
            <p class="main-collection__text"> 
                2026年最新レディースコレクション
            </p>

            <div class="main-collection__newProduct-list">
                <div class="main-collection__newProduct-inner">
                    <div class="main-collection__newProduct-list__card">
                        <div class="main-collection__newProduct-list__image">
                            <img src="<?php  echo get_template_directory_uri() . "/assets/images/mcf1.jpg"?>" alt="ベージュのスーツを着た女性">
                            <a class="main-collection__newProduct-list__link" href="#">Coming Soon</a>
                        </div>
                        <div class="main-collection__newProduct-list__items">
                            <h3 class="main-collection__newProduct-list__title">
                                NEW&nbsp;OUTER
                            </h3>
                            <p class="main-collection__newProduct-list__text">
                                洗練されたシルエットで、<br>
                                装いを引き締める。<br>
                                日常に自然と馴染む、ミニマルなアウターコレクション。
                            </p>
                        </div>
                    </div>
                    <div class="main-collection__newProduct-list__card">
                        <div class="main-collection__newProduct-list__image">
                            <img src="<?php  echo get_template_directory_uri() . "/assets/images/mcf2.jpg"?>" alt="白いTシャツを着た女性">
                            <a class="main-collection__newProduct-list__link" href="#">Coming Soon</a>
                        </div>
                        <div class="main-collection__newProduct-list__items">
                            <h3 class="main-collection__newProduct-list__title">
                                NEW&nbsp;TOPS
                            </h3>
                            <p class="main-collection__newProduct-list__text">
                                シンプルだからこそ、<br>
                                素材とシルエットにこだわる。<br>
                                一枚でスタイルが整う、タイムレスなトップス。
                            </p>
                        </div>
                    </div>
                    <div class="main-collection__newProduct-list__card">
                        <div class="main-collection__newProduct-list__image">
                            <img src="<?php  echo get_template_directory_uri() . "/assets/images/mcf3.jpg"?>" alt="白いTシャツを着た女性">
                            <a class="main-collection__newProduct-list__link" href="#">Coming Soon</a>
                        </div>
                        <div class="main-collection__newProduct-list__items">
                            <h3 class="main-collection__newProduct-list__title">
                                NEW&nbsp;BOTTOMS
                            </h3>
                            <p class="main-collection__newProduct-list__text">
                                美しいラインと心地よさを両立。<br>
                                毎日のスタイリングに寄り添う、<br>
                                洗練されたボトムス。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="main-collection__newProduct-description">
                    <h3>TIMELESS ELEGANCE</h3>
                    <p>
                        シンプルな美しさと、洗練されたシルエット。<br>
                        日常に自然と溶け込む、2026年最新レディースコレクション。<br>
                        飾らない上品さと心地よさを大切に、自分らしいスタイルを提案します。<br>
                    </p>
                </div>
            </div>

            <div class="main-collection__essential-list">
                <h2 class="main-collection__essential-list__title">
                    ESSENTIAL
                </h2>
                <p class="main-collection__essential-list__text">
                    定番コレクション
                </p>

                <div class="main-collection__essential-list__inner">
                    <div class="main-collection__essential-list__card">
                        <div class="main-collection__essential-list__image">
                            <img src="<?php  echo get_template_directory_uri() . "/assets/images/mce1.jpg"?>" alt="ベージュのコート着た女性">
                        </div>
                        <div class="main-collection__essentitle-list__headiing">
                            <h3 class="main-collection__essential-list__card-title">
                                定番アウター
                            </h3>
                            <p class="main-collection__essential-list__card-text">
                                ミニマルなデザインが魅力の定番アウター。<br>
                                シンプルながらも存在感があり、日常のスタイリングに上品さをプラスします。<br>
                            </p>
                            <a class="main-collection__essential-list__link" href="#">
                                Coming Soon
                            </a>
                        </div>
                    </div>
                    <div class="main-collection__essential-list__card">
                        <div class="main-collection__essential-list__image">
                            <img src="<?php  echo get_template_directory_uri() . "/assets/images/mce2.jpg"?>" alt="白シャツを着た女性">
                        </div>
                        <div class="main-collection__essentitle-list__headiing">
                            <h3 class="main-collection__essential-list__card-title">
                                定番トップス
                            </h3>
                            <p class="main-collection__essential-list__card-text">
                                シンプルながらも上品さを感じさせる定番トップス。<br>
                                自然な抜け感が、洗練されたスタイルを演出します。
                            </p>
                            <a class="main-collection__essential-list__link" href="#">
                                Coming Soon
                            </a>
                        </div>
                    </div>
                    <div class="main-collection__essential-list__card">
                        <div class="main-collection__essential-list__image">
                            <img src="<?php  echo get_template_directory_uri() . "/assets/images/mce3.jpg"?>" alt="グレーのパンツとサングラスをかけている女性">
                        </div>
                        <div class="main-collection__essentitle-list__headiing">
                            <h3 class="main-collection__essential-list__card-title">
                                定番ボトムス
                            </h3>
                            <p class="main-collection__essential-list__card-text">
                                美しいシルエットが魅力の定番ボトムス。<br>
                                程よいゆとりが、上品で洗練された着こなしを演出します。
                            </p>
                            <a class="main-collection__essential-list__link" href="#">
                                Coming Soon
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-collection__recommended-list">
                <h2 class="main-collection__recommended-list__title">
                    RECOMMENDED
                </h2>
                <p class="main-collection__recommended-list__text">
                    おすすめ商品
                </p>

                <div class="main-collection__recommended-list__inner">
                    <a href="<?php echo esc_url(get_permalink(13));?>" class="main-collection__recommended-list__card">
                        <div class="main-collection__recommended-list__image">
                            <img src="<?php  echo get_template_directory_uri() . "/assets/images/mcr1.jpg"?>" alt="ベージュのコート着た女性">
                        </div>
                        <p class="main-collection__recommended-list__card-text--primary">Relaxed Tailored Coat</p>
                        <p class="main-collection__recommended-list__card-text--secondary">¥22,800</p>
                    </a>
                    <a href="#" class="main-collection__recommended-list__card">
                        <div class="main-collection__recommended-list__image">
                            <img src="<?php  echo get_template_directory_uri() . "/assets/images/mcr2.jpg"?>" alt="白シャツを着た女性">
                        </div>
                        <p class="main-collection__recommended-list__card-text--primary">Essential Camisole</p>
                        <p class="main-collection__recommended-list__card-text--secondary">¥7,900 (SOLD OUT)</p>
                    </a>
                    <a href="#" class="main-collection__recommended-list__card">
                        <div class="main-collection__recommended-list__image">
                            <img src="<?php  echo get_template_directory_uri() . "/assets/images/mcr3.jpg"?>" alt="グレーのパンツとサングラスをかけている女性">
                        </div>
                        <p class="main-collection__recommended-list__card-text--primary">Wide Tapered Slacks</p>
                        <p class="main-collection__recommended-list__card-text--secondary">¥12,800 (SOLD OUT)</p>
                    </a>
                </div>
            </div>
        </section>

        <section class="main-news">
            <h2 class="main-news__title">
                NEWS
            </h2>
            <p class="main-news__text">
                最新ニュースと更新情報
            </p>
            <div class="main-news__list">
                <a href="<?php echo esc_url(get_permalink(17));?>" class="main-news__card">
                    <div class="main-news__image">
                        <img src="<?php  echo get_template_directory_uri() . "/assets/images/news1.jpg"?>" alt="街中を歩く3人の女性">
                    </div>
                    <p class="main-news__card-text--primary">2026.06.01</p>
                    <p class="main-news__card-text--secondary">SPRING COLLECTION 2026</p>
                </a>
                <a href="#" class="main-news__card">
                    <div class="main-news__image">
                        <img src="<?php  echo get_template_directory_uri() . "/assets/images/news2.jpg"?>" alt="白い服を着た女性があぐらをかいている">
                    </div>
                    <p class="main-news__card-text--primary">2026.05.25</p>
                    <p class="main-news__card-text--secondary">
                        NEW OUTER ARRIVALS<br>
                        (Comming Soon)
                    </p>
                </a>
                <a href="#" class="main-news__card">
                    <div class="main-news__image">
                        <img src="<?php  echo get_template_directory_uri() . "/assets/images/news3.jpg"?>" alt="棒にたくさんの服がかかっている">
                    </div>
                    <p class="main-news__card-text--primary">2026.05.20</p>
                    <p class="main-news__card-text--secondary">
                        SUMMER ESSENTIALS<br>
                        (Comming Soon)
                    </p>
                </a>
            </div>
        </section>

        <section class="main-about" id="main-about">
            <div class="main-about__mainContainer">
                <h2 class="main-about__title">
                    ABOUT
                </h2>
                <p class="main-about__text">
                    このサイトについて
                </p>
                <p class="main-about__mainContainer-text">
                    Simplicity Creates Style<br>
                    シンプルが、個性を作る。
                </p>
            </div>
            <div class="main-about__subContainer">
                <p class="main-about__subContainer-text">
                    20〜30代の女性をターゲットに<br>
                    ミニマルで洗練された世界観を表現した<br>
                    ファッションブランドサイトです。<br>
                    モノトーンを基調に、余白や写真の見せ方を意識し、<br>
                    商品そのものが引き立つシンプルなデザインに仕上げました。
                </p>
            </div>
            <div class="main-about__bar"></div> 
        </section>
    </div> 
</main>

<?php get_footer();?>