document.addEventListener('DOMContentLoaded', () => {
    const burger = document.querySelector('.menu-burger');
    const mobileNav = document.querySelector('.mobile-nav');

    if (!burger || !mobileNav) return;

    burger.addEventListener('click', () => {
        mobileNav.classList.toggle('open');
        console.log('burger clicked');
    });
});


// Video play on click

document.addEventListener('DOMContentLoaded', () => {
    const videos = document.querySelectorAll('.click-video');
    videos.forEach(video => {
        video.addEventListener('click', () => {
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        });
    });
});



