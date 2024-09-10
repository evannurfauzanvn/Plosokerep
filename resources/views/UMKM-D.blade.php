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
    <link rel="stylesheet" href="css/UMKM-D.css">

  <title>Desa Plosokerep</title>
</head>
<body>
  @include('layout.navbar')
  <br>
  <br>
  <br>
  <br>

  <div class="container mt-2 ">
    <div class="info-container shadow p-1 mb-5 rounded">
      <i class="bi bi-megaphone-fill info-icon "></i>
      <span class="fw-bold text-dark">Sekilas Info</span>
      <div class="info-text">
        <marquee behavior="" direction="">
          <b>Selamat datang di Website Resmi UMKM Desa Plosokerep</b>
        </marquee>
      </div>
    </div>
  </div>
  <div class="container py-3">
    <div class="container py-3">
      <img src="{{URL ('gambar/tubnail.png')}}" class="img-fluid" alt="">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-4 g-5 py-5">
          @foreach ($product as $item)  
          <div class="col mb-3">
            <div class="card custom-card">
              <img src="{{asset('storage/gambar/Product/'.$item->img_produk)}}" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">{{ $item->nama_produk }}</h5>
              </div>
              <div class="d-flex justify-content-around mb-3">
                <h5>Rp. {{$item->harga}}</h5>
                <a href="{{ route('umkm_ea', ['id' => $item->id]) }}" class="btn btn-primary">Lihat Produk</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  @include('layout/copyright')


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp0RSK9sB0UGaAcVEOl8SKSTBSkT8wCHd1/6hsLoRF4XsF06HUETeKRWPL5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
