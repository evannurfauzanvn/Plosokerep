<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="icon" type="image/x-icon" href="{{ URL('gambar/LOGO1.png') }}"> --}}
    <link rel="stylesheet" href="css/aparatur.css">
    <title>Desa Plosokerep</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('layout.navbar')

    <br>
    <br>
    <br>

    <div class="container mt-4 shadow p-3 mb-5 bg-info rounded ">
        <div class="row">
            <h1 class="text-center fw-normal">Aparatur Desa Plosokerep</h1>
            <div class="col-md-3">
                <div class="card ketua-card shadow p-3 mb-5 bg-info rounded">
                    <img src="{{ URL('Struktur/kuwu.jpeg') }}" class="card-img-top img-fluid rounded-2" alt="Foto">
                    <div class="card-body">
                        <h5 class="card-title text-light fw-light">Sadani</h5>
                        <p class="card-text">Kepala Desa Plosokerep</p>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="container-fluid p-0 bg-info">
                    <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($aparaturChunks as $key => $chunk)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <div class="row align-items-center">
                                    @foreach ($chunk as $item)
                                    <div class="col-md-3">
                                        <div class="card bg-info">
                                            <img src="{{ asset('storage/photo-aparatur/' . $item->gambar) }}" class="card-img-top img-fluid" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title text-light fw-light">{{ $item->nama }}</h5>
                                                <p class="card-text">{{ $item->jabatan }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layout.copyright')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
