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
    <link rel="stylesheet" href="css/beritaklik.css">

  <title>Desa Plosokerep</title>
</head>
<body>
  @include('layout.navbar')
  
  <div class="container">
    <div class="container-fluid " >
      <div class="shadow-sm p-3 mb-5 bg-body rounded">
        <i class="bi bi-megaphone-fill" style="background-color: red; width: 50px; height: 50px;"></i>
    <marquee behavior="" direction="">hallo temen</marquee>
    </div>
    </div>
  </div>

  
  <div class="container">
    <div class="row shadow-sm p-3 mb-5 bg-body-tertiary rounded bg-primary text-light">
      <h3 class="text-center"><i class="bi bi-newspaper"></i> BERITA DESA PLOSOKEREP</h3>
    </div>
<br>
    <div class="row "> 
      <div class="col-8">
        <h3 class="card-title">{{ $berita->title }}</h3>
        <div class="small text-muted">
          <i class="bi bi-calendar"></i> {{$berita->created_at->format('d-m-y')}} &nbsp;
          <i class="bi bi-eye"></i> {{$berita->views}}
        </div>
        <p class="card-text" >
          {!! $berita->desc !!}
        </p>
      </div>
      <div class="col-4">
        <h5 class="mt-4">MENU KATEGORI</h5>
        <ul class="list-group">
          <li class="list-group-item bg-primary text-white">
            <a href="#" class="text-white">Berita Desa</a>
          </li>
          <li class="list-group-item bg-light">
            <ul class="list-unstyled">
              <li><a href="/umkm_d" class="text-success d-block"><i class="bi bi-caret-right-fill"></i> UMKM</a></li>
              <li><a href="/berita" class="text-success d-block"><i class="bi bi-caret-right-fill"></i> Berita</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
  </div>
  @include('layout/copyright')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp0RSK9sB0UGaAcVEOl8SKSTBSkT8wCHd1/6hsLoRF4XsF06HUETeKRWPL5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
