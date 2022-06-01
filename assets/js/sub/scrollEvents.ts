export default function scrollEvents(){
    console.log('--- Scroll Events loaded ---')
    document.addEventListener('scroll', function(e) {
        // Site Header
        let siteHeader = document.querySelector('[data-site_header]');
        let scrollPosition = window.scrollY;
        if (scrollPosition >= 30) siteHeader.classList.add('scrolled')
        else siteHeader.classList.remove('scrolled');
        // Banner Arrow
        let banerArrow = document.querySelector('[data-baner_arrow]');
        let banerArrowHidden = false;
        if (banerArrow && !banerArrowHidden){
            banerArrow.classList.add('homepage-baner__arrow--hidden');
            banerArrowHidden = true;
        }
    });
}