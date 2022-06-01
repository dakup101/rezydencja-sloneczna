export default function introAnimationHandle(){
    let introSession = sessionStorage.getItem('evrwhr_rezydencja_intro');
    if (!introSession){
        import(/* webpackChunkName: "print" */ './introAnimation').then(module => {
            const introAnimation = module.default;
            introAnimation();
        });
    }
    else document.querySelector('[data-intro]').remove();
}