export default function faqHandle(){
    if (document.querySelector('.faq')){
        import(/* webpackChunkName: "print" */ './faq').then(module => {
            const faq = module.default;
            faq();
        });
    }
}