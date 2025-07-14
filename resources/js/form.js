document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("whatsappForm");

  form.addEventListener("submit", function (e) {
    e.preventDefault(); // Hentikan submit ke Laravel

    const nama = document.getElementById("nama").value.trim();
    const email = document.getElementById("email").value.trim();
    const brand = document.getElementById("brand").value.trim();
    const telepon = document.getElementById("telepon").value.trim();
    const produk = document.getElementById("produk").value.trim();
    const link = document.getElementById("link").value.trim();
    const paket = document.getElementById("paket").value;

    // Fungsi untuk meratakan label
    const label = (text) => text.padEnd(9, ' ');
const pesan = `*Pesanan Kolhype*\n\n` +
              `Nama    : ${nama}\n` +
              `Email   : ${email}\n` +
              `Brand   : ${brand}\n` +
              `Telepon : ${telepon}\n` +
              `Produk  : ${produk}\n` +
              `Link    : ${link}\n` +
              `Paket   : ${paket}`;

    const nomorTujuan = "6289681902656";
    const whatsappURL = `https://wa.me/${nomorTujuan}?text=${encodeURIComponent(pesan)}`;

    window.open(whatsappURL, '_blank');
  });
});
