export default function introAnimation() {
    // Props
    let currentSlide: number = 0;
    let waitTime = 1000;
    let wrapper: HTMLElement = document.querySelector('[data-intro]');
    let slides: NodeListOf<HTMLElement> = wrapper.querySelectorAll('[data-intro_slide]');
    console.log(slides);

    // Action
    activate();
    setTimeout(disable, 2000);
    setTimeout(activate, 2200);
    setTimeout(disable, 4200);
    setTimeout(activate, 4400);
    setTimeout(()=>{
        wrapper.classList.add('remove');
    },6400)
    sessionStorage.setItem('evrwhr_rezydencja_intro', 'rendered');

    // Methods
    function activate() {
        wrapper.classList.add('stage__' + (currentSlide))
        console.log(currentSlide);
        slides[currentSlide].classList.add('active');
    }

    function disable(){
        slides[currentSlide].classList.add('remove');
        currentSlide++;
    }
}
