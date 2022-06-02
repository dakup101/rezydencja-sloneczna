export default function faq(){
    console.log('--- FAQ loaded ---');
    let faqWrappers = document.querySelectorAll('[data-faq]');
    for (let wrapper of faqWrappers){
       let trigger = wrapper.querySelector('[data-trigger]');
       trigger.addEventListener('click', e=>{
           e.preventDefault();
           let target = e.currentTarget as HTMLElement;
           let content = target.parentNode.querySelector('[data-content]') as HTMLElement;
           if (!target.classList.contains('active')){
               target.classList.add('active');
               content.style.height = content.scrollHeight.toString() + "px";
           }
           else{
               target.classList.remove('active');
               content.style.height = "0px";
           }
       })
    }
}