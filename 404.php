<?php get_header()?>

<main class="main">
    <section class="main-404">
        <div class="main-404__inner">
            <h1 class="main-404__errorMessage">
                404
            </h1>
            <h2 class="main-404__text--primary">
                PAGE NOT FOUND
            </h2>
            <p class="main-404__text--secondary">
                お探しのページは見つかりませんでした。<br>
                ページが削除または移動された可能性があります。
            </p>
            <a href="<?php echo home_url('/');?>" class="main-404__link">
                TOP
            </a>
        </div>
    </section>
</main>

<?php get_footer()?>