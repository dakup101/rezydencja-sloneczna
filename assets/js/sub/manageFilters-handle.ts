export default function manageFiltersHandle(){
    if (document.querySelector('.filters')){
        import(/* webpackChunkName: "print" */ './manageFilters').then(module => {
            const manageFilters = module.default;
            manageFilters();
        });
    }
}