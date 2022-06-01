export default function apartamentTableSortHandle(){
    let tableWrapper = document.querySelector('.apartaments-list')
    if (tableWrapper){
        import(/* webpackChunkName: "print" */ './apartamentTableSort').then(module => {
            const initTableSort = module.default;
            initTableSort();
        });
    }
}