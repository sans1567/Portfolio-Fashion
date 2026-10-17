/*
header
⚪︎・ハンバーガボタンクリック後ハンバーガーメニューの表示/非表示
⚪︎・ハンバーガーメニューの３本線からバツに変わる
⚪︎・ハンバーメニュー内inputタグの検索ヒット後テキスト表示
⚪︎・スクロールしたらヘッダーのロゴが消える

single-collection
⚪︎・mainImageに追従カーソル
⚪︎・subImageクリックでmainImageに反映

contact
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

    const singleCollectionMainImage = document.querySelector('.main-singleCollection__image--primary img');
    const singleCollectionSubImages = document.querySelectorAll('.main-singleCollection__image--secondary img');

    singleCollectionSubImages.forEach((singleCollectionSubImage)=> {

        singleCollectionSubImage.addEventListener('click', () => {

            singleCollectionMainImage.src = singleCollectionSubImage.src;

        });

    });

    const mouseStalker = document.querySelector('.mouseStalker');
    const mainSingleCollectionInner = document.querySelector('.main-singleCollection__inner');

    let currentX = 0;
    let currentY = 0;

    let mouseX = 0;
    let mouseY = 0;

    mainSingleCollectionInner.addEventListener('mousemove', (e) => {

        let mouseX = e.clientX;
        let mouseY = e.clientY;

    });

    function animate() {

        currentX += (mouseX - currentX) * 0.4;
        currentY += (mouseY - currentY) * 0.4;

        mouseStalker.style.transform = `translate(${currentX}px,${currentY}px)`;

        requestAnimationFrame(animate);

    }

    animate();


    mainSingleCollectionInner.addEventListener('mouseenter', () => {

        mouseStalker.classList.add('is-show');

    });

    mainSingleCollectionInner.addEventListener('mouseleave', () => {

        mouseStalker.classList.remove('is-show');

    });

    const inputCheckbox = document.querySelector('.input-checkbox');
    const checkMark = document.querySelector('.checkMark');

    console.log(inputCheckbox,checkMark);

    inputCheckbox.addEventListener('click', () => {

        checkMark.classList.toggle('is-show');
        
    });
});