const objek1 = document.getElementById('targeObject2');
const objek2 = document.getElementById('targeObject2');
const selection = document.getElementById('selection');
const input = document.getElementById('inputValue');

function update() {
    const userSelect = selection.options.selectedIndex

    switch (userSelect) { 
        case 1:
            objek1.style.backgroundColor = input.value
            break
        case 2:
            objek2.style.color = input.value
            break
        case 3:
            objek2.style.fontSize = input.value + 'px'
            break
        case 4:
            objek2.style.fontFamily = input.value
            break   
        case 5:
            objek1.style.width = input.value + 'px'
            break
        case 6:
            objek1.style.height = input.value + 'px'
            break
        default:
            break     
    }
    
}
