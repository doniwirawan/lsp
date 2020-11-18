const buttonSegitiga = document.querySelector('#button-segitiga');

const hasil = document.querySelector('#hasil');


function hitungLuasSegitiga(e) {
    e.preventDefault();
    const alas = document.querySelector('#alas');
    const tinggi = document.querySelector('#tinggi');
    const angka = 0.5 * alas.value * tinggi.value;
    hasil.innerText = angka;
}





buttonSegitiga.addEventListener('click', hitungLuasSegitiga);