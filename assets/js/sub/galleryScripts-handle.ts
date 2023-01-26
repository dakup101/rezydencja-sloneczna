export default function galleryScriptsHandle(){
    if (document.querySelector('.gallery')){
        import(/* webpackChunkName: "print" */ './galleryScripts').then(module => {
            const galleryScripts = module.default;
            galleryScripts();
        });
    }
}