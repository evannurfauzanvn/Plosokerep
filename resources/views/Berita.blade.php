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
    <link rel="stylesheet" href="css/berita.css">

    <title>Desa Plosokerep</title>
</head>

<body>
    @include('layout.navbar')

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

    <div class="container">
        <div class="row shadow-sm p-3 mb-5 bg-body-tertiary rounded bg-primary text-light">
            <div class="col-12">
                <h3 class="text-center"><i class="bi bi-newspaper"></i> BERITA DESA PLOSOKEREP</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <br>
        <div class="row">
            <div class="col-lg-9">
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    @foreach ($berita as $item)
                        <div class="col">
                            <div class="card card-custom shadow p-0 bg-body rounded h-100">
                                <div class="card-img-top-wrapper" style="height: 200px; overflow: hidden;">
                                    <img src="{{ asset('storage/gambar/berita/' . $item->img) }}"
                                        class="card-img-top h-100 w-100 object-fit-cover" alt="...">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="small text-muted">{{ $item->created_at->format('d-m-y') }}</div>
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
            <div class="col-lg-3">
                <h5 class="mt-4">MENU KATEGORI</h5>
                <ul class="list-group">
                    <li class="list-group-item bg-primary text-white">
                        <a href="#" class="text-white no-underline">Berita Desa</a>
                    </li>
                    <li class="list-group-item bg-light">
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-success d-block no-underline"><i
                                        class="bi bi-caret-right-fill"></i> Berita Ter-kini</a></li>
                            <li><a href="#" class="text-success d-block no-underline"><i
                                        class="bi bi-caret-right-fill"></i> UMKM DESA</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    @include('layout/copyright')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"
        integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp0RSK9sB0UGaAcVEOl8SKSTBSkT8wCHd1/6hsLoRF4XsF06HUETeKRWPL5Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
