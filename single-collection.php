<?php get_header()?>

<main class="main">

    <?php if(have_posts()): ?>
        <?php while(have_posts()) : the_post(); ?>

            <?php
                $price = get_field('price');
                $color = get_field('color');
            ?>

            <section class="main-singleCollection">
                <div class="main-singleCollection__inner">
                    <div class="main-singleCollection__ImageItem">
                        <div class="main-singleCollection__image--primary">
                            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/scm1.png")?>" alt="ベージュのコート前">
                        </div>
                        <div class="main-singleCollection__image--secondary">
                            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/scm1.png")?>" alt="ベージュのコート前">
                            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/scm2.png")?>" alt="ベージュのコート後">
                            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/scm3.png")?>" alt="ベージュのコート着た女性">
                        </div>
                        <div class="mouseStalker"></div>
                    </div>
                    <div class="main-singleCollection__data">
                        <h2 class="main-singleCollection__title">
                            <?php echo esc_html(get_the_title());?>
                        </h2>
                        <p class="main-singleCollection__category">
                            CATEGORY:Outer
                        </p>
                        <?php if($price !== null && $price !== '') : ?>
                            <p class="main-singleCollection__price">
                                PRICE:<?php  echo esc_html($price);?>
                            </p>
                        <?php endif;?>
                        <?php if($color !== null && $color !== '') : ?>
                            <p class="main-singleCollection__color">
                                COLOR:<?php echo esc_html($color);?>
                            </p>
                        <?php endif;?>
                        <div class="main-singleCollection__size">
                            <select id="size" name="size">
                                <option value="">サイズを選択してください</option>
                                <option value="xs">XS</option>
                                <option value="s">S</option>
                                <option value="m">M</option>
                                <option value="l">L</option>
                                <option value="xl">XL</option>
                            </select>
                        </div>
                        <div class="main-singleCollection__description">
                            <?php the_content();?>
                        </div>
                        <a href="#" class="main-singleCollection__link">
                            SOLD OUT
                        </a>
                    </div>
                </div>

                <div class="main-singleCollection__related">
                    <div class="main-singleCollection__related-inner">
                        <h2 class="main-singleCollection__related-title">
                            RELARED
                        </h2>
                        <p class="main-singleCollection__related-text">
                            関連商品
                        </p>
                        <div class="main-singleCollection__related-list">
                            <a href="#" class="main-singleCollection__related-card">
                                <div class="main-singleCollection__related-image">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/scr1.jpg")?>" alt="黒のダブルのライダース">
                                </div>
                                <p class="main-singleCollection__related-prodactName">
                                    Minimal Leather Jacket
                                </p>
                                <p class="main-singleCollection__related-prodactPrice">
                                    ¥19,800 (SOLD OUT)
                                </p>
                            </a>
                            <a href="#" class="main-singleCollection__related-card">
                                <div class="main-singleCollection__related-image">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/scr2.jpg")?>" alt="肌色のスラックス">
                                </div>
                                <p class="main-singleCollection__related-prodactName">
                                    Relax Wide Slacks
                                </p>
                                <p class="main-singleCollection__related-prodactPrice">
                                    ¥9,800 (SOLD OUT)
                                </p>
                            </a>
                            <a href="#" class="main-singleCollection__related-card">
                                <div class="main-singleCollection__related-image">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/scr3.jpg")?>" alt="黒のボンバージャケット">
                                </div>
                                <p class="main-singleCollection__related-prodactName">
                                    Minimal Bomber Jacket
                                </p>
                                <p class="main-singleCollection__related-prodactPrice">
                                    ¥16,800 (SOLD OUT)
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