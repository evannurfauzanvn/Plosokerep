<!DOCTYPE html>
<html lang="id">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnH1z6B8+Zt1Z7gL8b9LaE6A5+aF6rrgh/s3Rqs8pPv1gxd5F2Zwx+wRT7OoXtY/8PeAqTxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Keranjang Belanja</title>
</head>
<body>
  @include('layout.navbaradmin')
  {{-- <nav class="navbar navbar-expand-lg navbar-dark" style="background: rgb(9, 9, 117); background: linear-gradient(122deg, rgba(9, 9, 117, 1) 10%, rgba(0, 212, 255, 1) 63%); z-index: 1050;">
    <div class="container-fluid">
      <a class="navbar-brand logo" href="#">
        <img src="{{URL ('gambar/LOGO1.png')}}" alt="Logo" style="width:150px; height: 40px;"/>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item" style="margin-right: 20px;">
            <a class="nav-link" href="/disini/index.html"><i class="bi bi-house-door-fill"></i></a>
          </li>
          <li class="nav-item dropdown" style="margin-right: 20px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-houses-fill"></i> Profil Desa </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/sejarah">Sejarah Desa</a></li>
              <li><a class="dropdown-item" href="#">Visi dan Misi</a></li>
              <li><a class="dropdown-item" href="H_aparatur">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown" style="margin-right: 20px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-rolodex"></i> Pelayanan </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Pengaduan</a></li>
              <li><a class="dropdown-item" href="#">Pengajuan serat</a></li>
              <li><a class="dropdown-item" href="#">UMKM</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown" style="margin-right: 20px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-pie-chart-fill"></i> Data Desa </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Data Penduduk</a></li>
              <li><a class="dropdown-item" href="#">Data Wilayah</a></li>
              <li><a class="dropdown-item" href="#">Data Pendidikan</a></li>
            </ul>
          </li>
          <li class="nav-item" style="margin-right: 20px;">
            <a class="nav-link" href="#"><i class="bi bi-geo-alt-fill"></i> Peta</a>
          </li>
          <li class="nav-item" style="margin-right: 20px;">
            <a class="nav-link" href="#"><i class="bi bi-image-fill"></i> Galeri</a>
          </li>
          <li class="nav-item" style="margin-right: 20px;">
            <a class="nav-link" href="#"><i class="bi bi-newspaper text-black"></i></i> Berita</a>
          </li>
          <li class="nav-item" style="margin-right: 20px;">
            <a class="nav-link" href="#"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
          <li class="nav-item" style="margin-right: 20px;">
            <a class="nav-link" href="/UMKM-k"><i class="bi bi-cart4"></i> <span id="cart-count" class="badge bg-danger">0</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav> --}}

  <div class="container mt-5">
    <h3>Keranjang Belanja</h3>
    <div id="cart-items"></div>
    <button id="checkout" class="btn btn-success mt-3">Check Out</button>
  </div>
  @include('layout/copyright')
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const cartItemsContainer = document.getElementById('cart-items');
      const checkoutButton = document.getElementById('checkout');
      let cart = JSON.parse(localStorage.getItem('cart')) || [];

      function renderCart() {
        cartItemsContainer.innerHTML = '';
        if (cart.length === 0) {
          cartItemsContainer.innerHTML = '<p>Keranjang kosong</p>';
        } else {
          cart.forEach((item, index) => {
            cartItemsContainer.innerHTML += `
              <div class="card mb-3">
                <div class="card-body">
                  <h5 class="card-title">${item.name}</h5>
                  <p class="card-text">Harga: Rp. ${item.price}</p>
                  <p class="card-text">Jumlah: ${item.quantity}</p>
                  <p class="card-text">Total: Rp. ${item.total}</p>
                  <button class="btn btn-danger btn-sm remove-item" data-index="${index}">Hapus</button>
                </div>
              </div>
            `;
          });

          document.querySelectorAll('.remove-item').forEach(button => {
            button.addEventListener('click', function() {
              const index = this.getAttribute('data-index');
              cart.splice(index, 1);
              localStorage.setItem('cart', JSON.stringify(cart));
              renderCart();
            });
          });
        }
      }

      checkoutButton.addEventListener('click', function() {
        // Implementasi checkout dapat ditambahkan di sini
        alert('Checkout berhasil!');
        cart = [];
        localStorage.setItem('cart', JSON.stringify(cart));
        renderCart();
      });

      renderCart();
    });
  </script>
</body>
</html>
