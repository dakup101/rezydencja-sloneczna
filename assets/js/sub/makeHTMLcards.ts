

export default function makeHTMLcards(meters: string, rooms: string, floor: string, price_meter: string, price: string, number: string, status: string, file: string, img : string) {
    return '' +
        '<a href="'+file+'" target="_blank" class="apartaments-cards__item">' +
            '<div class="apartaments-cards__item--left">' +
                '<p class="apartaments-cards__item--title">' + number + '</p>' +
                '<div class="apartaments-list__status apartaments-list__status--' + status + '"><span class="apartaments-list__status--info">'+status+'</span></div>' +
                '<p class="bolder">Cena netto</p>' +
                '<p class="lighter">'+price+' zł</p>' +
                '<p class="bolder">Pokoje</p>' +
                '<p class="lighter">'+rooms+'</p>' +
                '<p class="bolder">Piętro</p>' +
                '<p class="lighter">'+floor+'</p>' +
            '</div>' +
            '<img src="'+img+'">' +
        '</a>'
}