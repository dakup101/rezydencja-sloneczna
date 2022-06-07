import makeHTMLtableRow from "./makeHTMLtableRow";
import makeHTMLcards from "./makeHTMLcards";

export default function manageFilters() {
    console.log('--- Manage Filters loaded ---')

    const is_prod = false;
    const is_demo = false;

    let loaders = document.querySelectorAll('[data-overlay]');

    let mode = 0;
    let status = 'all';
    let meters = {
        lowerVal: null,
        upperVal: null
    }
    let rooms = {
        lowerVal: null,
        upperVal: null
    }
    let floors = {
        lowerVal: null,
        upperVal: null
    }
    let canvases = document.querySelectorAll('[data-canvas_floor]');
    for(let canvas of canvases){
        canvas.addEventListener('click', e => {
            let target = e.currentTarget as HTMLElement;
            console.log(target);
            let theFloor = parseInt( target.dataset.canvas_floor);
            floors.lowerVal = theFloor;
            floors.upperVal = theFloor;
            console.log(floors)
            makeSearch();
        })
    }

    let statusSwitchers = document.querySelectorAll('[data-status]');
    for(let switcher of statusSwitchers){
        switcher.addEventListener('click', e => {
            e.preventDefault();
            let target = e.currentTarget as HTMLElement;
            status = target.dataset.status
            for(let activeSwitcher of statusSwitchers){
                activeSwitcher.classList.remove('active')
            }
            target.classList.add('active');
            console.log(status);
            makeSearch();
        })
    }

    let modeSwitchers = document.querySelectorAll('[data-mode]');
    for (let switcher of modeSwitchers){
        switcher.addEventListener('click', e => {
            e.preventDefault();
            let target = e.currentTarget as HTMLElement;
            mode = parseInt(target.dataset.mode);
            for(let activeSwitcher of modeSwitchers){
                activeSwitcher.classList.remove('hidden')
            }
            target.classList.add('hidden');
            makeSearch();
        })
    }

    let multiRanges = document.getElementsByClassName('filters__multi-range');

    for (let multiRange of multiRanges) {
        let lower = multiRange.querySelector('[data-lower]') as HTMLInputElement;
        let upper = multiRange.querySelector('[data-upper]') as HTMLInputElement;
        let lefty = multiRange.querySelector('[data-min]') as HTMLElement;
        let righty = multiRange.querySelector('[data-max]') as HTMLElement;
        let lowerValue = parseInt(lower.value);
        let upperValue = parseInt(upper.value);
        let range = upperValue - lowerValue;
        let stepsLeft = 0;
        let stepsRight = 0;
        let thisType = parseInt(upper.dataset.type);
        manageRange(thisType, lowerValue, upperValue);
        // Sliders on mous up
        upper.onmouseup = makeSearch;
        lower.onmouseup = makeSearch;
        // Sliders on input
        upper.oninput = () => {
            if (upperValue < parseInt(upper.value)) stepsRight--;
            else stepsRight++;
            upperValue = parseInt(upper.value);
            stepper(righty, upperValue, 0, stepsRight, range);
            righty.style.right = ((stepsRight / range) * 100) + "%";
            righty.style.transform = "translateX(" + ((stepsRight / range) * 100) + "%)"
            if (upperValue < lowerValue + 1) {
                lower.value = (upperValue - 1).toString();
                lowerValue = parseInt(lower.value);
                if (stepsLeft != 0) stepsLeft--;
                stepper(lefty, lowerValue, 1, stepsLeft, range);
                if (lowerValue == parseInt(lower.min)) {
                    upper.value = (parseInt(upper.min) + 1).toString();
                    upperValue = parseInt(upper.value);
                    stepsRight = range - 1;
                    stepper(righty, upperValue, 0, stepsRight, range);
                }
            }
            manageRange(thisType, lowerValue, upperValue);
        }
        lower.oninput = () => {
            if (parseInt(lower.value) > lowerValue) stepsLeft++;
            else stepsLeft--;
            lowerValue = parseInt(lower.value);
            stepper(lefty, lowerValue, 1, stepsLeft, range);
            if (lowerValue > upperValue - 1) {
                upper.value = (upperValue + 1).toString();
                upperValue = parseInt(upper.value);
                if (stepsRight != 0) stepsRight--;
                stepper(righty, upperValue, 0, stepsRight, range);
                if (upperValue == parseInt(upper.max)) {
                    lower.value = (parseInt(upper.max) - 1).toString();
                    lowerValue = parseInt(lower.value);
                    stepsLeft = range - 1;
                    stepper(lefty, lowerValue, 1, stepsLeft, range);
                }
            }
            manageRange(thisType, lowerValue, upperValue);
        }
    }

    function makeSearch() {
        console.log('--- Search Apartaments ---');

        document.querySelector('[data-sort_table]').innerHTML = '';
        for (let loader of loaders){
            loader.classList.add('active');
        }

        let ajaxUrl = "/rz-prod/wp-admin/admin-ajax.php"
        if (is_prod){
            ajaxUrl="/wp-admin/admin-ajax.php"
            if (is_demo){
                ajaxUrl="/www/rz/wp-admin/admin-ajax.php"
            }
        }
        console.log(ajaxUrl);
        let ajaxNonce = (document.getElementById('nonce') as HTMLInputElement).value;
        const data = new FormData();
        let fethcResult;
        let fetchSuccess = false;
        data.append("action", "search_apartaments");
        data.append("nonce", ajaxNonce)
        data.append("floors_upper", floors.upperVal)
        data.append("floors_lower", floors.lowerVal)
        data.append("rooms_upper", rooms.upperVal)
        data.append("rooms_lower", rooms.lowerVal)
        data.append("meters_upper", meters.upperVal)
        data.append("meters_lower", meters.lowerVal)
        data.append("status", status)
        fetch(ajaxUrl, {
            method: "POST",
            body: data,
            credentials: 'same-origin'
        })
            .then(response => response.json())
            .then(response =>{
                fethcResult = response;
                fetchSuccess = true;
                render_result(fethcResult, fetchSuccess);
                console.log(response)
            })
    }
    document.querySelector('[data-filter_rest]').addEventListener('click', resetData);


    function resetData(){
        for (let multiRange of multiRanges) {
            let lower = multiRange.querySelector('[data-lower]') as HTMLInputElement;
            let upper = multiRange.querySelector('[data-upper]') as HTMLInputElement;
            lower.value = lower.min;
            upper.value = upper.max;
            let lefty = multiRange.querySelector('[data-min]') as HTMLElement;
            let righty = multiRange.querySelector('[data-max]') as HTMLElement;
            let lowerValue = parseInt(lower.value);
            let upperValue = parseInt(upper.value);
            let range = upperValue - lowerValue;
            manageRange(parseInt(lower.dataset.type), lowerValue, upperValue);
            stepper(righty, upperValue, 0, 0, range);
            stepper(lefty, lowerValue, 1, 0, range);
        }
        (document.querySelector('[data-status="all"]') as HTMLAnchorElement).click();
    }


    function render_result(result, success){
        document.querySelector('[data-no_result]').classList.add('hidden');
        document.querySelector('[data-cards]').classList.remove('active');
        document.querySelector('[data-table]').classList.remove('active');
        document.querySelector('[data-cards]').innerHTML='';
        if (success && result.length>0){
            console.log(result);
            document.querySelector('[data-found_amount]').innerHTML = result.length
            if (mode == 0){
                document.querySelector('[data-table]').classList.add('active');
                for (let item of result){
                    document.querySelector('[data-sort_table]').innerHTML+=makeHTMLtableRow(
                        item.meters.toString(),
                        item.rooms.toString(),
                        item.floor.toString(),
                        item.price_meter.toString(),
                        item.price.toString(),
                        item.number.toString(),
                        item.status.toString(),
                        item.file.toString()
                    )
                }
            }
            else{
                document.querySelector('[data-cards]').classList.add('active');
                for (let item of result){
                    document.querySelector('[data-cards]').innerHTML+=makeHTMLcards(
                        item.meters.toString(),
                        item.rooms.toString(),
                        item.floor.toString(),
                        item.price_meter.toString(),
                        item.price.toString(),
                        item.number.toString(),
                        item.status.toString(),
                        item.file.toString(),
                        item.project.toString()
                    )
                }
            }

            setTimeout(()=>{
                for (let loader of loaders){
                    loader.classList.remove('active');
                }
            },1000)
        }
        else{
            document.querySelector('[data-table]').classList.remove('active');
            document.querySelector('[data-cards]').classList.remove('active');
            document.querySelector('[data-no_result]').classList.remove('hidden');
            setTimeout(()=>{
                for (let loader of loaders){
                    loader.classList.remove('active');
                }
            },500)
        }
    }

    function stepper(target: HTMLElement, value: number, direction: number, steps: number, range: number) {
        if (direction == 0) {
            if (steps !== 0) {
                target.style.right = ((steps / range) * 100) + "%";
                target.style.transform = "translateX(" + ((steps / range) * 100) + "%)"
            } else {
                target.style.right = "0%";
                target.style.transform = "translateX(0%)"
            }
        } else {
            if (steps !== 0) {
                target.style.left = ((steps / range) * 100) + "%";
                target.style.transform = "translateX(-" + ((steps / range) * 100) + "%)"
            } else {
                target.style.left = "0%";
                target.style.transform = "translateX(0%)"
            }
        }
        target.innerHTML = value.toString();
        if (target.dataset.for == "meter") target.innerHTML += 'm²';
    }

    function manageRange(type: number, lowerValue: number, upperValue: number) {
        switch (type) {
            case 0:
                meters.upperVal = upperValue;
                meters.lowerVal = lowerValue;
                break;
            case 1:
                rooms.upperVal = upperValue;
                rooms.lowerVal = lowerValue;
                break;
            case 2:
                floors.upperVal = upperValue;
                floors.lowerVal = lowerValue;
                break;
            default :
                console.log('ERR: Range sliders object switch insuficient case')
                break;
        }
    }
}
