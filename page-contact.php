<?php get_header(); ?>

<main class="main">
    <section class="contact">
        <div class="contact__inner">
            <h2 class="contact__title">CONTACT</h2>
            <p class="contact__text">
                当社の製品についてご質問がございましたら、お気軽にお問い合わせください。
            </p>

            <form class="contact__form" action="" method="">
                <div class="contact__field">
                    <label><span>お名前(性)*</span><input type="text" name="lastName"></label>
                    <label><span>お名前(性)*</span><input type="text" name="firstName"></label></label>
                </div>

                <div class="contact__field">
                    <label><span>電話番号*</span><input type="tel" name="tell"></label>
                </div>

                <div class="contact__field">
                    <label><span>Eメール*</span><input type="email" name="email"></label>
                </div>

                <div class="contact__field">
                    <label><span>メッセージ*</span><textarea name="message"></textarea></label>
                </div>

                <div class="contact__field">
                    <label><input type="checkbox" name="privacy"><span>プライバシーポリシーに同意します</span></label>
                </div>

                <input type="submit" value="送信する">
            </form>
            
        </div>
    </section>
</main>

<?php get_footer(); ?>