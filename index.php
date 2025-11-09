<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Self Healing Dream</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #35524a;">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#"> ✨SELF HEALING DREAM✨</a>
  </div>
</nav>

<!-- Hero Section -->
<header class="hero d-flex align-items-center justify-content-center text-center text-dark">
  <div>
    <h1 class="display-5 fw-bold">☁️🍃Welcome to Self-Healing Dream☁️🍃</h1>
    <p class="lead">"Healing isn't loud, it's quiet, slow, and deeply personal."</p>
  </div>
</header>

<!-- Menu Healing -->
<div class="container my-5">
  <h2 class="text-center mb-4 text-success">🍵 Menu Healing: Makanan & Minuman Serba 10K🍰</h2>
  </div>
  <div class="row">
    <?php
      $produk = [
        [
          "nama" => "🍪 Soft Cookie Energy",
          "harga" => 10000,
          "gambar" => "cookies.jpg",
          "deskripsi" => "Cookies empuk yang manisnya kayak yang bikinnya wkwk, ibaratnya reminder kecil kalau hidup itu nggak harus keras terus. hemmm 🍪💫"
        ],
        [
          "nama" => "☕ Calm Coffee Latte",
          "harga" => 10000,
          "gambar" => "Coffee.jpg",
          "deskripsi" => "Kopi halus dengan aroma vanilla, cocok buat healing di pagi hari apalagi kalo lagi hujan. Bikin tenang tanpa urusan perdramaan hidup. wawww☁️☕"
        ],
        [
          "nama" => "🥪 Cheesy Chili Toast",
          "harga" => 10000,
          "gambar" => "Toast.jpg",
          "deskripsi" => "Roti panggang isi keju meleleh dan saus sambal lembut. Pedasnya pas, nyantol di hati yaa bukan di tenggorokan. upsss🧀🌶️"
        ],
        [
          "nama" => "🌶️ Spicy Ramen Hug",
          "harga" => 10000,
          "gambar" => "Ramen.jpg",
          "deskripsi" => "Ramen kuah pedas yang rasanya kayak pelukan hangat tapi agak nyelekit, kayak rasa mantan yaaa🔥"
        ],
        [
          "nama" => "🍰 Tiramisu Dessert Dream",
          "harga" => 10000,
          "gambar" => "Tiramisu.jpg",
          "deskripsi" => "Tiramisu lembut dengan aroma kopi dan krim manis, pas banget buat self-healing sore hari sambil overthinking manja 😭☕🍰"
        ]
      ];

      foreach ($produk as $p) {
        echo "
        <div class='col-md-4 mb-4'>
          <div class='card h-100 border-0 shadow healing-card'>
            <img src='img/{$p['gambar']}' class='card-img-top' alt='{$p['nama']}'>
            <div class='card-body d-flex flex-column justify-content-between'>
              <div>
                <h5 class='card-title text-success'>{$p['nama']}</h5>
                <p class='card-text text-muted'>{$p['deskripsi']}</p>
                <p class='fw-semibold text-primary'>Rp " . number_format($p['harga'], 0, ',', '.') . "</p>
              </div>
              <div>
                <button class='btn btn-success w-100 mb-2' onclick='tambahKeranjang(\"{$p['nama']}\", {$p['harga']})'>Tambah ke Keranjang</button>
                <button class='btn btn-outline-danger w-100' onclick='hapusProduk(\"{$p['nama']}\")'>Batalkan</button>
              </div>
            </div>
          </div>
        </div>
        ";
      }
    ?>
  </div>
</div>

<!-- Bagian Self-Healing -->
<section class="healing-section py-5">
  <div class="container text-center">
    <h2 class="mb-4 text-success">🌿 My Self-Healing Space 🌿</h2>
    <p class="lead text-muted mb-5">
       Ini versi healing menurut gua sendiri yaa, kalian boleh coba lakuin kegiatan ini saat lagi butuh hiburan 😋💫
    </p>

    <div class="row justify-content-center">
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100 border-0 healing-card">
          <img src="img/Ngedrakor.jpg" class="card-img-top" alt="Ngedrakor">
          <div class="card-body">
            <h5>🎬 Ngedrakor / Nonton Film</h5>
            <p>Menurut gua maraton drakor atau film rame bisa jadi cara healing paling jujur. Ketawa, nangis, terus lupa bentar sama dunia. 🍿😭</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100 border-0 healing-card">
          <img src="img/jalan-jalan.jpg" class="card-img-top" alt="jalan-jalan">
          <div class="card-body">
            <h5>🚶‍♀️ Jalan-jalan</h5>
            <p>Keluar rumah, motoran sore-sore, sambil dengerin playlist mellow. Kadang angin sore lebih jujur dari notifikasi WA. 🌇🎧</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100 border-0 healing-card">
          <img src="img/jajan.jpg" class="card-img-top" alt="jajan">
          <div class="card-body">
            <h5>🍰 Jajan Enak</h5>
            <p>Boba, seblak, atau martabak, semuanya sah kalau tujuannya buat nyenengin diri sendiri wkwk. Healing lewat perut itu sangat valid guyss. 😋💖</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bagian Keranjang -->
<section class="py-5 bg-light" id="keranjang-section">
  <div class="container">
    <h2 class="text-center text-success mb-4">🛒 Keranjang Healing Kamu</h2>
    <div class="table-responsive">
      <table class="table table-bordered align-middle text-center">
        <thead class="table-success">
          <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Harga (Rp)</th>
          </tr>
        </thead>
        <tbody id="keranjang-list">
          <tr><td colspan="3" class="text-muted">Keranjang masih kosong 🍃</td></tr>
        </tbody>
        <tfoot class="table-light">
          <tr>
            <td colspan="2" class="fw-bold text-end">Total:</td>
            <td id="total-harga" class="fw-bold text-success">Rp 0</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="text-center text-white py-4" style="background-color: #35524a;">
  <p class="mb-1">🍃“Made with calmness and love by fafaaa.”🍃</p>
  <p class="mb-0">Self-Healing Dream</p>
</footer>

<script src="script.js"></script>
</body>
</html>
