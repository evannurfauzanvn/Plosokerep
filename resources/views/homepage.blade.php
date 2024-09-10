<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnH1z6B8+Zt1Z7gL8b9LaE6A5+aF6rrgh/s3Rqs8pPv1gxd5F2Zwx+wRT7OoXtY/8PeAqTxw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">



    <title>Desa Plosokerep</title>
</head>

<body>
    @include('layout.navbar')

    <br>
    <br>
    <br>
    <div class="container mt-3">
    <div class="info-container shadow p-1 mb-5 rounded">
      <div class="info-text">
        <marquee behavior="" direction="">
          <b>Selamat Datang di Website Informasi Desa Plosokerep</b>
        </marquee>
      </div>
    </div>
  </div>
    <div class="container mt-4 ">
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

            <div class="col-12 col-md-8 mt-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">JADWAL SHOLAT</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <h5 class="text-center"><i class="bi bi-geo-alt-fill"></i> Indramayu</h5>
                        </ul>
                    </div>
                    <div class="card-footer text-body-secondary">
                        Tanggal: <span id="current-date"></span>
                    </div>
                </div>
                <br>
                <div class="card shadow p-0 mb-3 bg-body rounded">
                    <div class="card-body p-0">
                        <h5 class="card-title text-center py-2 m-0 " style="background-color: #00D1FF;">Berita
                            Ter-update</h5>
                    </div>
                    <br>
                    <div class="container-fluid">
                        <div class="row row-cols-1 row-cols-md-4 g-4">
                            @foreach ($latest_post as $item)
                                <div class="col-4">
                                    <div class="card card-custom shadow p-0 bg-body rounded h-100">
                                        <div class="card-img-top-wrapper" style="height: 200px; overflow: hidden;">
                                            <img src="{{ asset('storage/gambar/berita/' . $item->img) }}"
                                                class="card-img-top h-100 w-100 object-fit-cover" alt="...">
                                        </div>
                                        <div class="card-body d-flex flex-column">
                                            <div class="small text-muted">{{ $item->created_at->format('d-m-y') }}
                                            </div>
                                            <h5 class="card-title">{{ $item->title }}</h5>
                                            <p class="card-text flex-grow-1">
                                                {{ Str::limit(strip_tags($item->desc), 30, '...') }}
                                            </p>
                                            <a href="{{ route('beritaklik', ['id' => $item->id]) }}"
                                                class="btn btn-primary mt-auto">Baca</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layout/copyright')

    <script>
        // Ambil data dari API Aladhan
        fetch('https://api.aladhan.com/v1/calendar?latitude=-6.3264&longitude=108.32&method=2')
            .then(response => response.json())
            .then(data => {
                // Ambil data jadwal sholat untuk hari ini
                const today = new Date();
                const hijriDate = data.data[0].date.hijri;
                const gregorianDate = data.data[0].date.gregorian;

                const imsak = data.data[0].timings.Imsak.substring(0, 5);
                const fajr = data.data[0].timings.Fajr.substring(0, 5);
                const dhuhr = data.data[0].timings.Dhuhr.substring(0, 5);
                const asr = data.data[0].timings.Asr.substring(0, 5);
                const maghrib = data.data[0].timings.Maghrib.substring(0, 5);
                const isha = data.data[0].timings.Isha.substring(0, 5);

                // Tampilkan data jadwal sholat dalam elemen HTML
                document.querySelector('.list-group').innerHTML += `
          <li class="list-group-item text-light bg-success d-flex justify-content-between align-items-center">
            Imsak
            <span class="badge text-bg-primary rounded-pill">${imsak}</span>
          </li>
          <li class="list-group-item text-light d-flex bg-primary justify-content-between align-items-center">
            Shubuh
            <span class="badge text-bg-primary rounded-pill">${fajr}</span>
          </li>
          <li class="list-group-item text-light d-flex bg-success justify-content-between align-items-center">
            Dzuhur
            <span class="badge text-bg-primary rounded-pill">${dhuhr}</span>
          </li>
          <li class="list-group-item text-light d-flex bg-primary justify-content-between align-items-center">
            Ashar
            <span class="badge text-bg-primary rounded-pill">${asr}</span>
          </li>
          <li class="list-group-item text-light d-flex  bg-success justify-content-between align-items-center">
            Maghrib
            <span class="badge text-bg-primary rounded-pill">${maghrib}</span>
          </li>
          <li class="list-group-item text-light d-flex bg-primary justify-content-between align-items-center">
            Isya
            <span class="badge text-bg-primary rounded-pill">${isha}</span>
          </li>
        `;

                // Format tanggal Gregorian untuk ditampilkan
                const formattedDate = new Date(gregorianDate).toLocaleDateString('id-ID', {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                });

                // Tampilkan tanggal Gregorian di footer
                document.getElementById('current-date').textContent = formattedDate;
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"
        integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp0RSK9sB0UGaAcVEOl8SKSTBSkT8wCHd1/6hsLoRF4XsF06HUETeKRWPL5Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>