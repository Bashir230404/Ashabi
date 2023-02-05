const ubahObjek = document.querySelector('#targetObject');
const ubahHexa = document.querySelector('#inputHexa');


function ubahLatar(warna){
    let color = warna
    ubahObjek.style.backgroundColor = `${color}`;
}

