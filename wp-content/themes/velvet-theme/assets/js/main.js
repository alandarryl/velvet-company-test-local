document.addEventListener('DOMContentLoaded', () => {
    const burger = document.querySelector('.menu-burger');
    const mobileNav = document.querySelector('.mobile-nav');

    if (!burger || !mobileNav) return;

    burger.addEventListener('click', () => {
        mobileNav.classList.toggle('open');
        console.log('burger clicked');
    });
});
