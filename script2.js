const buttonLingkaran = document.querySelector('#button-lingkaran');
const hasil = document.querySelector('#hasil');

function hitungLuasLingkaran(e) {
    // alert('sini');
    e.preventDefault();
    const jari = document.querySelector('#jari');
    const angka = 3.14 * jari.value * jari.value;
    hasil.innerText = angka;
}
buttonLingkaran.addEventListener('click', hitungLuasLingkaran);
