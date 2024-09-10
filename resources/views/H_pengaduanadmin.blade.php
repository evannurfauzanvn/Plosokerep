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
  <link rel="stylesheet" href="css/pengaduan.css">
  <title>Desa Plosokerep</title>
</head>

<body>
    @include('layout.navbaradmin')

    <br>
    <br>
    <br>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <img src="{{ URL('gambar/logo.png') }}" class="center-image" width="200px" height="250px"
                        alt="">
                </div>
                <h2 class="card-title text-center mb-4">PENGADUAN MASYARAKAT</h2>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('simpan_pengaduan') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="namaLengkap" class="form-label">Nama Lengkap:</label>
                        <input type="text" class="form-control" id="namaLengkap" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="kontak" class="form-label">Kontak yang dapat dihubungi:</label>
                        <input type="text" class="form-control" id="kontak" name="no_tlp" required>
                    </div>
                    <div class="mb-3">
                        <label for="rincianPengaduan" class="form-label">Rincian Pengaduan:</label>
                        <textarea class="form-control" id="rincianPengaduan" name="rincian_pengaduan" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Kirim</button>
                </form>
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
