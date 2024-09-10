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

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/UMKM-c.css">

  <title>Desa Plosokerep</title>
</head>
<body>
  @include('layout.navbar')
  <br>
  <br>
  <br>
  <div class="container mt-2 ">
    <div class="info-container shadow p-1 mb-5 rounded">
      <span class="fw-bold text-dark"><i class="bi bi-megaphone-fill info-icon "></i> Sekilas Info</span>
      <div class="info-text">
        <marquee behavior="" direction="">
          <b>Selamat datang di Website Resmi UMKM Desa Plosokerep</b>
        </marquee>
      </div>
    </div>
  </div>
  
  <div class="container mt-2">
    <div class="row">
        <div class="col-md-4">
            <img id="mainImage" src="{{ asset('storage/gambar/Product/' . $Product->img_produk) }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-8">
            <h3>{{ $Product->nama_produk }}</h3>
            <h3>Rp. {{ number_format($Product->harga, 0, ',', '.') }}</h3>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">BUAT PESANAN</h5>
                    <form action="{{ route('checkout', $Product->id) }}" method="POST">
                      @csrf
                      <div class="mb-3">
                          <label for="nama" class="form-label">Nama</label>
                          <input type="text" class="form-control" id="nama" name="name" required>
                      </div>
                      {{--  --}}
                      <div class="mb-3">
                          <label for="noTelepon" class="form-label">No Telepon</label>
                          <input type="tel" class="form-control" id="noTelepon" name="phone" required>
                      </div>
                      <div class="mb-3">
                          <label for="alamat" class="form-label">Alamat</label>
                          <textarea class="form-control" id="alamat" name="address" rows="3" required></textarea>
                      </div>
                      <div class="mb-3">
                          <label for="jumlahBarang" class="form-label">Jumlah Barang</label>
                          <div class="input-group jumlah-barang-group">
                              <button type="button" class="btn btn-outline-secondary" id="kurang">-</button>
                              <input type="number" class="form-control text-center jumlah-barang-input" id="jumlahBarang" name="qty" value="1" min="1" readonly>
                              <button type="button" class="btn btn-outline-secondary" id="tambah">+</button>
                          </div>
                      </div>
                      <button type="submit" class="btn btn-info mt-3">Masukkan Keranjang</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layout/copyright')  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp0RSK9sB0UGaAcVEOl8SKSTBSkT8wCHd1/6hsLoRF4XsF06HUET6hK6y/pw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Custom JS -->
  <script>
   document.addEventListener("DOMContentLoaded", function() {
    const hargaSatuan = parseFloat('{{ $Product->harga }}');
    const jumlahBarang = document.getElementById('jumlahBarang');
    const totalHarga = document.getElementById('totalHarga');
    const kurang = document.getElementById('kurang');
    const tambah = document.getElementById('tambah');

    kurang.addEventListener('click', function() {
        if (parseInt(jumlahBarang.value) > 1) {
            jumlahBarang.value = parseInt(jumlahBarang.value) - 1;
            totalHarga.value = hargaSatuan * parseInt(jumlahBarang.value);
        }
    });

    tambah.addEventListener('click', function() {
        jumlahBarang.value = parseInt(jumlahBarang.value) + 1;
        totalHarga.value = hargaSatuan * parseInt(jumlahBarang.value);
    });
});

    document.addEventListener("DOMContentLoaded", function() {
    const mainImage = document.getElementById("mainImage");
    const clickableImages = document.querySelectorAll(".clickable-image");
    const hargaSatuan = 28000;
    const jumlahBarang = document.getElementById('jumlahBarang');
    const totalHarga = document.getElementById('totalHarga');
    const kurang = document.getElementById('kurang');
    const tambah = document.getElementById('tambah');
    const addToCartButton = document.getElementById('add-to-cart');
    const cartCount = document.getElementById('cart-count');
    
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cartCount.textContent = cart.length;

    clickableImages.forEach(image => {
      image.addEventListener("click", function() {
        mainImage.src = this.src;
      });
    });

    kurang.addEventListener('click', function() {
      if (parseInt(jumlahBarang.value) > 1) {
        jumlahBarang.value = parseInt(jumlahBarang.value) - 1;
        totalHarga.value = hargaSatuan * parseInt(jumlahBarang.value);
      }
    });

    tambah.addEventListener('click', function() {
      jumlahBarang.value = parseInt(jumlahBarang.value) + 1;
      totalHarga.value = hargaSatuan * parseInt(jumlahBarang.value);
    });

    addToCartButton.addEventListener('click', function() {
      const product = {
        name: 'Susu Kedelai',
        price: hargaSatuan,
        quantity: parseInt(jumlahBarang.value),
        total: hargaSatuan * parseInt(jumlahBarang.value)
      };
      cart.push(product);
      localStorage.setItem('cart', JSON.stringify(cart));
      cartCount.textContent = cart.length;
    });
  });
  </script>
</body>
</html>
