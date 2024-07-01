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
    <link rel="stylesheet" href="css/map.css">

    <title>Desa Plosokerep</title>
</head>

<body>
    @include('layout/navbar')
    <br>
    <br>
    <div class="card text-center cardl">
        <div class="card-header">
            <b>MAP WILAYAH DESA PLOSOKEREP</b>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col">
              <div class="responsive-map-container">
              <iframe class="responsive-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31714.880030170756!2d108.12779004999999!3d-6.47600405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ecbc254f159e7%3A0x5a1bd9656311b724!2sPlosokerep%2C%20Kec.%20Terisi%2C%20Kabupaten%20Indramayu%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1719541754809!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div>
            <div class="col">
              <div class="info-container bg-white p-3">
                <h2>Informasi Lokasi</h2>
                <p><strong>Negara:</strong> Indonesia</p>
                <p><strong>Provinsi:</strong> Jawa Barat</p>
                <p><strong>Kabupaten:</strong> Indramayu</p>
                <p><strong>Kecamatan:</strong> Terisi</p>
                <p><strong>Kode Kemendagri:</strong> 32.12.26.2004</p>
                <p><strong>Luas:</strong> 7,61 km²</p>
                <p><strong>Jumlah penduduk:</strong> 5.595 jiwa</p>
                <p><strong>Kepadatan:</strong> 735,27 jiwa/km²</p>
            </div>
            </div>
          </div>
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
