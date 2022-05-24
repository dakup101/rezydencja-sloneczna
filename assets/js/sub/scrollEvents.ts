export default function scrollEvents(){
    document.addEventListener('scroll', function(e) {
        let banerArrow = document.querySelector('[data-baner_arrow]');
        let banerArrowHidden = false;
        if (banerArrow && !banerArrowHidden){
            banerArrow.classList.add('homepage-baner__arrow--hidden');
            banerArrowHidden = true;
        }
    });
}