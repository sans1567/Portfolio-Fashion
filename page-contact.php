<?php get_header(); ?>

<main class="main">
    <section class="contact">
        <div class="contact__inner">
            <p class="contact__text">
                当社の製品についてご質問がございましたら、お気軽にお問い合わせください。
            </p>

            <form class="contact__form" action="" method="">
                <div class="contact__field contact__nameField">
                    <label><span>お名前(性)*</span><input class="input-lastName" type="text" name="lastName"></label>
                    <label><span>お名前(性)*</span><input class="input-firstName" type="text" name="firstName"></label></label>
                </div>

                <div class="contact__field contact__telField">
                    <label><span>電話番号*</span><input class="input-tel" type="tel" name="tel"></label>
                </div>

                <div class="contact__field contact__emailField">
                    <label><span>Eメール*</span><input class="input-email" type="email" name="email"></label>
                </div>

                <div class="contact__field contact__messageField">
                    <label><span>メッセージ*</span><textarea class="textArea-message" name="message"></textarea></label>
                </div>

                <div class="contact__field contact__checkboxField">
                    <div class="contact__checkboxField-container">
                        <label>
                            <input class="input-checkbox" type="checkbox" name="privacy">
                            <span class="checkMark"></span>
                            <span>プライバシーポリシーに同意します</span>
                        </label>
                    </div>
                </div>

                <input class="contact__form-submit input-submit" type="submit" value="送信" disabled>
            </form>

        </div>
    </section>
</main>

<?php get_footer(); ?>