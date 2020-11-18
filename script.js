const buttonPersegi = document.querySelector('#button-persegi');

const hasil = document.querySelector('#hasil');
// const hasilku = document.querySelector('#hasilku');


function hitungLuasPersegi(e) {
    const sisi = document.querySelector('#sisi');
    e.preventDefault();
    const angka = sisi.value * sisi.value;
    hasil.innerText = angka;
}





buttonPersegi.addEventListener('click', hitungLuasPersegi);