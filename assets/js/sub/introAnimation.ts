export default function introAnimation() {
    console.log('--- Intro Animation Loaded ---')
    // Props
    let introTexts = document.querySelectorAll('[data-slide_text]');
    let introImages = document.querySelectorAll('[data-slide_img]');
    let wrapper: HTMLElement = document.querySelector('[data-intro]');

    //Actions
    introTexts[0].classList.add('active');
    introImages[0].classList.add('active');
    wrapper.classList.add('stage__0')
    setTimeout(()=>{
        introTexts[0].classList.add('remove');
        introImages[0].classList.add('remove-top');
        introTexts[1].classList.add('active');
        introImages[1].classList.add('active');
        wrapper.classList.add('stage__1')
        setTimeout(()=>{
            introTexts[1].classList.add('remove');
            introImages[1].classList.add('remove-top');
            introTexts[2].classList.add('active');
            introImages[2].classList.add('active');
            wrapper.classList.add('stage__2')
            setTimeout(()=>{
                wrapper.style.transform=('translateY(-100%)');
                wrapper.classList.add('stage__3');
            },1000)
        }, 1000)
    }, 1000)

    sessionStorage.setItem('evrwhr_rezydencja_intro', 'seen')
}
