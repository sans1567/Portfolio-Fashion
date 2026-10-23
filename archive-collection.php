<?php get_header();?>

<main class="main">

    <?php
        $price = get_field('price', 13);
    ?>

    <section class="main-archiveCollection">
        <div class="main-archiveCollection__inner">
            <h2 class="main-archiveCollection__title">
                SPLING/SUMMER 2026
            </h2>
            <p class="main-archiveCollection__text">
                最新のコレクション
            </p>
            <div class="main-archiveCollection__list">
                <?php while(have_posts()) : the_post();?>
                <a href="<?php echo esc_url(get_permalink(13));?>" class="main-archiveCollection__card">
                    <div class="main-archiveCollection__image">
                        <?php the_post_thumbnail(13,'large');?>
                    </div>
                    <p class="main-archiveCollection__productName">
                        <?php echo esc_html(get_the_title(13));?>
                    </p>
                    <?php if($price !== null && $price !== ''): ?>
                        <p class="main-archiveCollection__productPrice">
                            ¥<?php echo esc_html($price)?>
                        </p>  
                    <?php endif;?>
                </a>
                <?php endwhile;?>

                <a href="#" class="main-archiveCollection__card">
                    <div class="main-archiveCollection__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/ac2.jpg")?>" alt="黒いジャケットとハットを被った女性">
                    </div>
                    <p class="main-archiveCollection__productName">
                        Minimal Wool Jacket
                    </p>
                    <p class="main-archiveCollection__productPrice">
                        ¥19,800 (SOLD OUT)
                    </p>  
                </a>

                <a href="#" class="main-archiveCollection__card">
                    <div class="main-archiveCollection__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/ac3.jpg")?>" alt="ブレザーを着てバッグを持った女性">
                    </div>
                    <p class="main-archiveCollection__productName">
                        Oversized Blazer
                    </p>
                    <p class="main-archiveCollection__productPrice">
                        ¥21,800 (SOLD OUT)
                    </p>  
                </a>

                <a href="#" class="main-archiveCollection__card">
                    <div class="main-archiveCollection__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/ac4.jpg")?>" alt="トレンチコートを着た女性">
                    </div>
                    <p class="main-archiveCollection__productName">
                        Lightweight Trench Coat
                    </p>
                    <p class="main-archiveCollection__productPrice">
                        ¥26,400 (SOLD OUT)
                    </p>  
                </a>

                <a href="#" class="main-archiveCollection__card">
                    <div class="main-archiveCollection__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/ac5.jpg")?>" alt="ジャケットを着て本を読む女性">
                    </div>
                    <p class="main-archiveCollection__productName">
                        Short Tailored Jacket
                    </p>
                    <p class="main-archiveCollection__productPrice">
                        ¥18,700 (SOLD OUT)
                    </p>  
                </a>

                <a href="#" class="main-archiveCollection__card">
                    <div class="main-archiveCollection__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/ac6.jpg")?>" alt="白のジャケットを着た女性">
                    </div>
                    <p class="main-archiveCollection__productName">
                        Sheer Layered Jacket
                    </p>
                    <p class="main-archiveCollection__productPrice">
                        ¥16,500 (SOLD OUT)
                    </p>  
                </a>

                <a href="#" class="main-archiveCollection__card">
                    <div class="main-archiveCollection__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/ac7.jpg")?>" alt="ブレザーを着て紺色のスラックスを履いた女性">
                    </div>
                    <p class="main-archiveCollection__productName">
                        Linen Blend Blazer
                    </p>
                    <p class="main-archiveCollection__productPrice">
                        ¥22,000 (SOLD OUT)
                    </p>  
                </a>

                <a href="#" class="main-archiveCollection__card">
                    <div class="main-archiveCollection__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/ac8.jpg")?>" alt="ジャケットを着てサングラスをかけた女性">
                    </div>
                    <p class="main-archiveCollection__productName">
                        Linen Blend Blazer
                    </p>
                    <p class="main-archiveCollection__productPrice">
                        ¥22,000 (SOLD OUT)
                    </p>  
                </a>

                <a href="#" class="main-archiveCollection__card">
                    <div class="main-archiveCollection__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/ac9.jpg")?>" alt="ロングコートを着て白スニーカーを履いてる後ろ姿の女性">
                    </div>
                    <p class="main-archiveCollection__productName">
                        Relaxed Long Coat
                    </p>
                    <p class="main-archiveCollection__productPrice">
                        ¥27,500 (SOLD OUT)
                    </p>  
                </a>

                <a href="#" class="main-archiveCollection__card">
                    <div class="main-archiveCollection__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/ac10.jpg")?>" alt="白いブルゾンを着てサングラスをかけた女性">
                    </div>
                    <p class="main-archiveCollection__productName">
                        Minimal Zip Blouson
                    </p>
                    <p class="main-archiveCollection__productPrice">
                        ¥19,250 (SOLD OUT)
                    </p>  
                </a>

                <a href="#" class="main-archiveCollection__card">
                    <div class="main-archiveCollection__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/ac11.jpg")?>" alt="ベージュのダブルのブレザーを着た女性">
                    </div>
                    <p class="main-archiveCollection__productName">
                        Double Breasted Blazer
                    </p>
                    <p class="main-archiveCollection__productPrice">
                        ¥23,100 (SOLD OUT)
                    </p>  
                </a>

                <a href="#" class="main-archiveCollection__card">
                    <div class="main-archiveCollection__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/ac12.jpg")?>" alt="ベージュのコートを着て黒いシューズを履いた女性">
                    </div>
                    <p class="main-archiveCollection__productName">
                        Light Hooded Coat
                    </p>
                    <p class="main-archiveCollection__productPrice">
                        ¥20,900 (SOLD OUT)
                    </p>  
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer();?>