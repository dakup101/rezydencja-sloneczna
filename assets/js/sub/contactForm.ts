export default function contactForm(){
    console.log('--- Contact Form loaded ---')
    let inputs = document.getElementsByClassName('cf-input');

    for (let input of inputs){
        input.addEventListener("keyup", e =>{
            let target = (e.currentTarget as HTMLInputElement)
            let value = target.value;
            if (value.length>0){
                target.classList.add('marked');
                target.classList.remove('wpcf7-not-valid');
            }
            else target.classList.remove('marked');
        })
    }
}