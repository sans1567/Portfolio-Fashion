document.addEventListener('DOMContentLoaded', () => {

    const hamburgerBtn = document.querySelector('.hamburger-button');
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const hamburgerMenuModal = document.querySelector('.hamburger-menu__modal');
    const closeBtn = document.querySelector('.close-btn');

    hamburgerBtn.addEventListener('click', () => {

        hamburgerMenu.classList.add('is-slide');
        hamburgerMenuModal.classList.add('is-slide');

    });

    const searchIcon = document.querySelector('.search-icon');

    searchIcon.addEventListener('click', () => {

        hamburgerMenu.classList.add('is-slide');
        hamburgerMenuModal.classList.add('is-slide');

    });

    closeBtn.addEventListener('click', () => {

        if(hamburgerMenu.classList.contains('is-slide') && hamburgerMenuModal.classList.contains('is-slide')) {

            hamburgerMenu.classList.remove('is-slide');
            hamburgerMenuModal.classList.remove('is-slide');

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

    const mainImageArea = document.querySelector('.main-singleCollection__ImageItem');
    const mouseStalker = document.querySelector('.mouseStalker');

    let currentX = 0;
    let currentY = 0;

    let mouseX = 0;
    let mouseY = 0;

    mainImageArea.addEventListener('mousemove', (e) => {

        mouseX = e.clientX;
        mouseY = e.clientY;

    });

    function mouseAnimate() {

        currentX += (mouseX - currentX) * 1;
        currentY += (mouseY - currentY) * 1;

        mouseStalker.style.transform = `translate(${currentX}px, ${currentY}px)`;

        requestAnimationFrame(mouseAnimate);

    };

    mouseAnimate();

    mainImageArea.addEventListener('mouseenter', () => {

        mouseStalker.classList.remove('is-hidden');

    });

    mainImageArea.addEventListener('mouseleave', () => {

        mouseStalker.classList.add('is-hidden');

    });

    const inputCheckbox = document.querySelector('.input-checkbox');
    const checkMark = document.querySelector('.checkMark');

    inputCheckbox.addEventListener('click', () => {

        checkMark.classList.toggle('is-show');

    });

});