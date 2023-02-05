// Function Expressiom menggunakan Arrow Function
// let tampilPesan = (nama) => {
//     alert('halo ' + nama);
// }

// tampilPesan('Siti Robiah');


// const tampilNama = (nama) => {return `Halo, ${nama}`;}
// console.log(tampilNama('Siti Robiah'));

// Implisit Return
// const tampilNama = nama => `Halo ${nama}`;
// console.log(tampilNama('Siti Robiah','Malam'));

let mahasiswa = ['Qolbi','Kamal','Ashabi'];

// let jumlahHuruf = mahasiswa.map(function (nama) {
//     return nama.length;
// })
// console.log(jumlahHuruf);

let jumlahhrf = mahasiswa.map(nama => ({ nama, jumlahhrf: nama.length}));
console.table(jumlahhrf)