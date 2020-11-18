
const fs = require('fs');
const buttonSegitiga = document.querySelector('#button-segitiga');

const hasil = document.querySelector('#hasil');


function hitungLuasSegitiga(e) {
    e.preventDefault();
    const alas = document.querySelector('#alas');
    const tinggi = document.querySelector('#tinggi');
    const angka = 0.5 * alas.value * tinggi.value;
    hasil.innerText = angka;
    let inputValue = {
        input1: alas,
        input2: tinggi,
        total: angka
    }
    let data = JSON.stringify(inputValue);

    fs.writeFileSync('file.json', data, finished);

    function finished(err) {
        console.log('success');
    }
}





buttonSegitiga.addEventListener('click', hitungLuasSegitiga);