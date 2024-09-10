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
  {{-- <link rel="stylesheet" href="css/UMKM-e.css"> --}}

  <title>Desa Plosokerep</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
    }
    .content {
      flex: 1;
    }
    .footer-custom {
      background-color: blue;
      color: white;
      text-align: center;
      padding: 10px 0;
      width: 100%;
    }
  </style>
</head>
<body>
  @include('layout.navbaradmin')

  <div class="container mt-2 content">
    <div class="info-container shadow p-1 mb-5 rounded">
      <span class="fw-bold text-dark"><i class="bi bi-megaphone-fill info-icon"></i> Sekilas Info</span>
      <div class="info-text">
        <marquee behavior="" direction="">
          <b>Selamat datang di Website Resmi UMKM Desa Plosokerep</b>
        </marquee>
      </div>
    </div>
  </div>
  
  <div class="container content">
    <div class="row">
      <div class="col-md-4">
        <img id="mainImage" src="{{ asset('storage/gambar/Product/' . $Product->img_produk) }}" class="img-fluid" alt="">
      </div>
      <div class="col-md-8">
        <h3>{{$Product->nama_produk}}</h3>
        <p><b>Rp. {{$Product->harga}}</b></p>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Deskripsi Produk</h5>
            <p class="card-text">
              {!! $Product->desc_produk !!}
            </p>

            <a href={{route('umkm_da')}} class="btn btn-warning">Kembali</a>
            <a href="https://wa.me/628976562320" class="btn btn-info">Hubungi Penjual</a>
            <a href="{{ route('umkm_ca', ['id' => $Product->id]) }}" class="btn btn-success">Pesan</a>
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
      const mainImage = document.getElementById("mainImage");
      const clickableImages = document.querySelectorAll(".clickable-image");

      clickableImages.forEach(image => {
        image.addEventListener("click", function() {
          mainImage.src = this.src;
        });
      });
    });
  </script>
</body>
</html>
