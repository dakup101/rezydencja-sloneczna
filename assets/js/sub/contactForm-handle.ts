export default function contactFormHandle(){
    const contactFormWrapper = document.querySelector('[data-contact_form]');
    if (contactFormWrapper){
        import(/* webpackChunkName: "print" */ './contactForm').then(module => {
            const contactForm = module.default;
            contactForm();
        });
    }
}