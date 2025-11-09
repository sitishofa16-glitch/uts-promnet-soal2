let keranjang = [];
let totalHarga = 0;

function updateKeranjang() {
  const list = document.getElementById("keranjang-list");
  const totalElement = document.getElementById("total-harga");
  list.innerHTML = "";

  if (keranjang.length === 0) {
    list.innerHTML = "<tr><td colspan='3' class='text-muted'>Keranjang masih kosong 🍃</td></tr>";
    totalElement.innerText = "Rp 0";
    return;
  }

  let nomor = 1;
  keranjang.forEach(item => {
    const row = `
      <tr>
        <td>${nomor++}</td>
        <td>${item.nama}</td>
        <td>Rp ${item.harga.toLocaleString("id-ID")}</td>
      </tr>
    `;
    list.innerHTML += row;
  });

  totalElement.innerText = "Rp " + totalHarga.toLocaleString("id-ID");
}

function tambahKeranjang(namaProduk, hargaProduk) {
  if (keranjang.find(item => item.nama === namaProduk)) {
    Swal.fire({
      icon: "warning",
      title: "Sudah Ada 🌸",
      text: "Produk healing ini sudah ada dalam keranjangmu!",
      confirmButtonColor: "#7ac79d"
    });
  } else {
    keranjang.push({ nama: namaProduk, harga: hargaProduk });
    totalHarga += hargaProduk;
    updateKeranjang();
    Swal.fire({
      icon: "success",
      title: "Ditambahkan 🌿",
      text: `${namaProduk} berhasil masuk ke keranjang healing.`,
      confirmButtonColor: "#7ac79d"
    });
  }
}

function hapusProduk(namaProduk) {
  Swal.fire({
    title: "Batalkan produk ini?",
    text: `${namaProduk} akan dihapus dari daftar healing.`,
    icon: "question",
    showCancelButton: true,
    confirmButtonText: "Ya, hapus 🍂",
    cancelButtonText: "Tidak",
    confirmButtonColor: "#e57373"
  }).then((result) => {
    if (result.isConfirmed) {
      const index = keranjang.findIndex(item => item.nama === namaProduk);
      if (index !== -1) {
        totalHarga -= keranjang[index].harga;
        keranjang.splice(index, 1);
      }
      updateKeranjang();
      Swal.fire("Dihapus ☁️", `${namaProduk} berhasil dihapus.`, "success");
    }
  });
}
