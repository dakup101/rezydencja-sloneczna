export default function apartamentTableSort() {
    // Props
    let sortTrigger = document.querySelector('[data-meters_trigger]') as HTMLElement;
    let table = document.querySelector('[data-sort_table]');
    let rows = document.querySelectorAll('[data-sort_table_row]');
    let i : number, shouldSwitch : boolean, dir ='asc';

    // Event Listener
    sortTrigger.addEventListener('click', e => {
        e.preventDefault();
        sortTable();
        if (dir == "asc"){
            dir = "desc";
            sortTrigger.dataset.type = "1";
        }
        else {
            sortTrigger.dataset.type = "0";
            dir = "asc";
        }

        console.log(dir)
    })
    // Methods
    function sortTable() {
        let switching = true;
        console.log('--- Table Sort ---');
        while (switching) {
            rows = document.querySelectorAll('[data-sort_table_row]')
            switching = false;
            for (i = 0; i < rows.length-1; i++) {
                shouldSwitch = false;
                let x = parseFloat((rows[i].querySelector('[data-meters]') as HTMLElement).dataset.meters.replace(',', '.'))
                let y = parseFloat((rows[i+1].querySelector('[data-meters]') as HTMLElement).dataset.meters.replace(',', '.'))
                console.log ('- '+dir + ': ' + x + ' ? ' +y)
                shouldSwitch = false;
                if (dir == "asc" && x > y) {
                    shouldSwitch =true;
                    break;
                }
                if (dir == "desc" && x < y) {
                    shouldSwitch =true;
                    break;
                }
            }
            if (shouldSwitch) {
                table.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }

            console.log('- Sort End')
        }
    }
}