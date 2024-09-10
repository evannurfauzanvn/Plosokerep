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
  <link rel="stylesheet" href="css/visi-misi.css">

  <title>Desa Plosokerep</title>
</head>
<body>
  @include('layout/navbar')

  <br>
  <br>
  <div class="container mt-4 pt-5">
    <div class="row">
      <div class="col-12 col-md-4 sidebar bg-primary" id="kiri">
        <img src="{{ URL('gambar/logo.png') }}" alt="logo"
            style="width: 128px; height: 159px; display: block; margin: 0 auto; margin-top:2rem;"
            id="logo1">
        <h1 class="text-center text-light fw-bolder">Desa Plosokerep</h1>
        <p class="text-center text-light fw-bolder">Kec. Terisi, Kabupaten Indramayu, Jawa Barat</p>
        <div class="row">
            <div class="col-4 d-flex justify-content-center mb-2">
                <button type="button" class="btn-success" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop" style="height: 100px; width: 100%;">
                    <i class="bi bi-person-lines-fill"></i>
                    <p style="font-size: 10px; text-align: center;">Kontak Desa</p>
                </button>

                <!-- Modal -->
                <div class="modal fade fw-bolder" id="staticBackdrop" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img src="{{ URL('gambar/avatar.png') }}" alt=""
                                    style="height: 90px; width: 90px; display: block; margin: 0 auto;">
                                <br><br>
                                <button type="button" class="btn"
                                    style="background: rgb(0, 255, 20); background: linear-gradient(135deg, rgba(0, 255, 20, 1) 10%, rgba(0, 195, 32, 1) 62%); width: 100%;">
                                    <i class="bi bi-whatsapp"></i> <b><a href="https://wa.me/628976562320"
                                            style="color: white;">whatsapp</a></b>
                                </button>
                                <button type="button" class="btn mt-2"
                                    style="background: rgb(0,142,255); background: linear-gradient(96deg, rgba(0,142,255,1) 10%, rgba(205,192,68,1) 37%, rgba(195,0,158,1) 62%, rgba(195,0,0,1) 79%);">
                                    <i class="bi bi-instagram"></i> <b><a href="https://instagram.com"
                                            style="color: white;">Instagram</a></b>
                                </button>
                                <button type="button" class="btn mt-2" style="background: rgb(4, 0, 255);">
                                    <i class="bi bi-facebook"></i> <b><a href="https://facebook.com"
                                            style="color: white;">Facebook</a></b>
                                </button>
                                <button type="button" class="btn mt-2" style="background: rgb(255, 0, 0);">
                                    <i class="bi bi-youtube"></i> <b><a href="https://youtube.com"
                                            style="color: white;">Youtube</a></b>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 d-flex justify-content-center mb-2">
              <a href="/H_aparatur" class="btn btn-success" style="height: 100px; width: 100%;">
                  <i class="bi bi-people-fill"></i>
                  <p style="font-size: 14px; text-align: center;">Aparatur Desa</p>
              </a>
          </div>
          
            <div class="col-4 d-flex justify-content-center mb-2">
                <a href="/sejarah" class="btn btn-success" style="height: 100px; width: 100%;">
                    <i class="bi bi-houses-fill"></i>
                    <p style="font-size: 14px; text-align: center;">Tentang Desa</p>
                </a>
            </div>

            <div class="col-4 d-flex justify-content-center mb-2">
                <a href="/berita" class="btn btn-success" style="height: 100px; width: 100%;">
                    <i class="bi bi-newspaper"></i>
                    <p style="font-size: 14px; text-align: center;">berita</p>
                </a>
            </div>

            <div class="col-4 d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#peta"
                    style="height: 100px; width: 100%;">
                    <i class="bi bi-person-lines-fill"></i>
                    <p style="font-size: 10px; text-align: center;">peta desa</p>
                </button>

                <!-- Modal -->
                <div class="modal fade fw-bolder" id="peta" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl"> <!-- Menggunakan modal-xl untuk ukuran ekstra besar -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31714.880030170756!2d108.12779004999999!3d-6.47600405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ecbc254f159e7%3A0x5a1bd9656311b724!2sPlosokerep%2C%20Kec.%20Terisi%2C%20Kabupaten%20Indramayu%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1719541754809!5m2!1sid!2sid"
                                        style="border:0; width: 100%; height: 500px;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 d-flex justify-content-center mb-2">
              <a href="/umkm_d" class="btn btn-success" style="height: 100px; width: 100%;">
                  <i class="bi bi-basket2-fill"></i>
                  <p style="font-size: 14px; text-align: center;">UMKM Desa</p>
              </a>
          </div>
          
        </div>
    </div>

      <div class="col-12 col-md-8">
        <div class="container">
            <div class="card text-break">
                <div class="card-header text-center">
                    <b>Visi & Misi Desa Plosokerep Tahun 2015-2021</b>
                </div>
                <div class="card-body">
                    {!! $pd->visi_misi !!}
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <!-- Optional JavaScript; choose one of the two! -->
  @include('layout/copyright')
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXlUr3aB+Kx4dZPeM6K/A6zt7v/tbB6Z9E+EQ6MofeFB1NXFUOfN8FHwp+" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhG81sKDtZKWpCwrP7f8KpP4YfIvATeFw5PauH526ymkitDv8f0XwRGE8K/9" crossorigin="anonymous"></script>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp0RSK9sB0UGaAcVEOl8SKSTBSkT8wCHd1/6hsLoRF4XsF06HUETeKRWPL5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
