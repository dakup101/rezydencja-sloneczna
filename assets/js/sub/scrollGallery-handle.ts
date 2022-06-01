export default function scrollGalleryHandle(){
    let scrollGalleryWrapper = document.querySelector('.scroll-gallery');
    if (scrollGalleryWrapper){
        import(/* webpackChunkName: "print" */ './scrollGallery').then(module => {
            const scrollGallery = module.default;
            scrollGallery();
        });
    }
}