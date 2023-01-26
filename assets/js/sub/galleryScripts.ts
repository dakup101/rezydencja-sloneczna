export default function galleryScripts(){
    let imgThumbs = document.querySelectorAll('[data-gallery_image]');
    let imgAmount = imgThumbs.length;
    let imgAmountWrapper = document.querySelector('[data-gallery_counter]');
    let lightbox = document.querySelector('[data-lightbox]') as HTMLElement;
    let lightboxImg = document.querySelector('[data-lightbox_img]') as HTMLImageElement;
    let currentImg = 0;
    let nextBtn = document.querySelector('[data-gallery_next]') as HTMLElement;
    let prevBtn = document.querySelector('[ data-gallety_prev]') as HTMLElement;
    let closeBtn = document.querySelector('[data-lightbox_close]') as HTMLElement;

    for(let img of imgThumbs){
        img.addEventListener('click', e => {
            e.preventDefault()
            let target = e.currentTarget as HTMLElement;
            currentImg = parseInt(target.dataset.gallery_image);
            console.log(currentImg);
            lightboxImg.src = (target.children[0] as HTMLImageElement).src;
            lightbox.classList.add('show');
            imgAmountWrapper.innerHTML = (currentImg+1) + ' / '+imgAmount;
        })
    }

    nextBtn.addEventListener('click', e=>{
        e.preventDefault();
        nextBtn.classList.remove('disabled')
        prevBtn.classList.remove('disabled');
        if (currentImg < imgAmount-1) {
            currentImg++;
            console.log(currentImg);
            lightboxImg.src = (imgThumbs[currentImg].children[0] as HTMLImageElement).src;
        }
        else nextBtn.classList.add('disabled');
        imgAmountWrapper.innerHTML = (currentImg+1) + ' / '+imgAmount;
    })

    prevBtn.addEventListener('click', e=>{
        e.preventDefault();
        nextBtn.classList.remove('disabled')
        prevBtn.classList.remove('disabled');
        prevBtn.classList.remove('disabled');
        if (currentImg > 0){
            currentImg--;
            console.log(currentImg);
            lightboxImg.src = (imgThumbs[currentImg].children[0] as HTMLImageElement).src;
        }
        else prevBtn.classList.add('disabled');
        imgAmountWrapper.innerHTML = (currentImg+1) + ' / '+imgAmount;
    })

    closeBtn.addEventListener('click', e => {
        e.preventDefault();
        lightbox.classList.remove('show');
    })
}