/*
header
⚪︎・ハンバーガボタンクリック後ハンバーガーメニューの表示/非表示
⚪︎・ハンバーガーメニューの３本線からバツに変わる
⚪︎・ハンバーメニュー内inputタグの検索ヒット後テキスト表示
⚪︎・スクロールしたらヘッダーのロゴが消える

single-collection
・mainImageに追従カーソル
・subImageクリックでmainImageに反映

contact
・それぞれのinputタグに文字制限 正しくしなかったらエラーメッセージ
・プライバシーポリシー チェックマーク　表示/非表示
*/

document.addEventListener('DOMContentLoaded', () => {

    const hamburgerBtn = document.querySelector('.hamburger-button');
    const hamburgerMenu = document.querySelector('.hamburger-menu');

    hamburgerBtn.addEventListener('click', () => {

        hamburgerBtn.classList.toggle('is-active');
        hamburgerMenu.classList.toggle('is-show');

    });

    const searchIcon = document.querySelector('.search-icon');

    searchIcon.addEventListener('click', () => {
        hamburgerBtn.classList.toggle('is-active');
        hamburgerMenu.classList.toggle('is-show');

        if(hamburgerMenu.classList.contains('is-show')) {
            closeBtn.classList.add('is-show');

            closeBtn.addEventListener('click', () => {
                hamburgerBtn.classList.remove('is-active');
                hamburgerMenu.classList.remove('is-show');
            })
        } else {
            closeBtn.classList.remove('is-show');
        }
    });

    const headerMenuSearch = document.querySelector('.header-menu__search');
    const itemUrl = document.querySelector('.itemUrl');

    headerMenuSearch.addEventListener('input', () => {

        const value = headerMenuSearch.value;
        const a = document.createElement('a');

        itemUrl.replaceChildren();

        if(value !== "" && 'spling/summer 2026'.includes(value)) {
            a.setAttribute('href','http://portfolio-fashion.local/collection/');
            a.textContent = 'SPLING/SUMMER 2026';

            itemUrl.appendChild(a);
        }

        if(value !== "" && 'SPLING/SUMMER 2026'.includes(value)) {
            a.setAttribute('href','http://portfolio-fashion.local/collection/');
            a.textContent = 'SPLING/SUMMER 2026';

            itemUrl.appendChild(a);
        }

        if(value !== "" && 'relaxed tailored coat'.includes(value)) {
            a.setAttribute('href','http://portfolio-fashion.local/collection/relaxed-tailored-coat/');
            a.textContent = 'Relaxed Tailored Coat';

            itemUrl.appendChild(a);
        }

        if(value !== "" && 'Relaxed Tailored Coat'.includes(value)) {
            a.setAttribute('href','http://portfolio-fashion.local/collection/relaxed-tailored-coat/');
            a.textContent = 'Relaxed Tailored Coat';

            itemUrl.appendChild(a);
        }

        if(value !== "" && 'RELAXED TAILORED COAT'.includes(value)) {
            a.setAttribute('href','http://portfolio-fashion.local/collection/relaxed-tailored-coat/');
            a.textContent = 'Relaxed Tailored Coat';

            itemUrl.appendChild(a);
        }
    
    })

    const headerLogo = document.querySelector('.header-logo');

    function headerLogoHidden() {

        if(window.scrollY > 1) {
            headerLogo.classList.add('is-hidden');
        } else if(window.scrollY === 0) {
            headerLogo.classList.remove('is-hidden');
        }

    }

    window.addEventListener('scroll', headerLogoHidden);
    
});