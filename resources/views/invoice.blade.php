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

  <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
  <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key={{env('MIDTRANS_CLIENT_KEY')}}></script>

  <title>Desa Plosokerep</title>
  <style>
    .body-content {
      display: flex;
      flex-direction: column;
      min-height: 100vh; /* Menggunakan 100vh untuk tinggi minimum halaman */
    }

    .main-content {
      flex: 1; /* Biarkan konten utama memenuhi sisa ruang */
    }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">
  <main class="flex-grow-1">
    @include('layout.navbaradmin')
    <br>
    <br>
    <br>
    <br>
    <div class="container body-content">
      <h2 class="mb-4">Transaksi</h2>
    
      <div class="row">
        <div class="col-12">
          <div class="card shadow mb-4">
            <div class="card-header">
              <h5 class="card-title">Detail Transaksi</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Tanggal Pesan</th>
                      <th>Nama Pemesan</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>Nama Produk</th>
                      <th>Jumlah Barang</th>
                      <th>Total Harga</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ $order->created_at->format('d-m-y') }}</td>
                      <td>{{ $order->name }}</td>
                      <td>{{ $order->address }}</td>
                      <td>{{ $order->phone }}</td>
                      <td>{{ $order->product->nama_produk ?? 'Nama Produk Tidak Tersedia' }}</td>
                      <td>{{ $order->qty }}</td>
                      <td>Rp. {{ number_format($order->total_price, 0, ',', '.') }}</td>
                      <td>{{ $order->status }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <a href="{{ route('history') }}" class="btn btn-primary mt-4">Lihat History Transaksi</a>
    </div>
  </main>

  @include('layout/copyright')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp0RSK9sB0UGaAcVEOl8SKSTBSkT8wCHd1/6hsLoRF4XsF06HUET6hK6y/pw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Custom JS -->
</body>
</html>
