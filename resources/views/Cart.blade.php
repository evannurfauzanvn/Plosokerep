<!-- resources/views/cart.blade.php -->

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
  {{-- <link rel="stylesheet" href="css/UMKM-D.css"> --}}

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
<body>
  @include('layout.navbaradmin')
  <br>
  <br>
  <br>
  <br>
  <div class="container body-content">
    <h2 class="mb-4">Keranjang Belanja</h2>
    @if (session('error'))
      <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    @if (session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif
  
    @if($orders->count() > 0)
      <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($orders as $order)
        @if ($order->status == 'paid')
          @continue
        @endif
        <div class="col mb-4">
            <div class="card shadow">
                <img src="{{ asset($order->product->img_produk ? 'storage/gambar/Product/' . $order->product->img_produk : 'path/to/default/image.jpg') }}" class="card-img-top" alt="{{ $order->product->nama_produk ?? 'Nama Produk Tidak Tersedia' }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $order->product->nama_produk ?? 'Nama Produk Tidak Tersedia' }}</h5>
                    <p class="card-text"><strong>Nama Pemesan:</strong> {{ $order->name }}</p>
                    <p class="card-text"><strong>Alamat:</strong> {{ $order->address }}</p>
                    <p class="card-text"><strong>Telepon:</strong> {{ $order->phone }}</p>
                    <p class="card-text"><strong>Jumlah Barang:</strong> {{ $order->qty }}</p>
                    <p class="card-text"><strong>Total Harga:</strong> Rp. {{ number_format($order->total_price, 0, ',', '.') }}</p>
                    <p class="card-text"><strong>Status:</strong> {{ $order->status }}</p>
                    <p class="card-text"><small class="text-muted">Tanggal Pesan: {{ $order->created_at->format('d-m-y') }}</small></p>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <form action="{{ route('order.delete', $order->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Hapus</button>
                        </form>
                        <button type="button" class="btn btn-success" id="pay-button-{{ $order->id }}"><i class="bi bi-cart-check"></i> Checkout</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
      </div>
    @else
      <p class="mt-3">Keranjang Anda kosong.</p>
    @endif
  
    <a href="{{ route('umkm_da') }}" class="btn btn-primary mt-4">Lanjut Belanja</a>
  </div>

  @include('layout/copyright')

  <!-- Dalam bagian script -->
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) {
        @foreach($orders as $order)
            var payButton = document.getElementById('pay-button-{{ $order->id }}');
            if (payButton) {
                payButton.addEventListener('click', function () {
                    snap.pay('{{ $order->snap_token }}', {
                        onSuccess: function (result) {
                            //alert("Payment success!");
                            window.location.href = '/invoice/{{$order->id}}'
                            console.log(result);
                        },
                        onPending: function (result) {
                            alert("Waiting for payment!");
                            console.log(result);
                        },
                        onError: function (result) {
                            alert("Payment failed!");
                            console.log(result);
                        },
                        onClose: function () {
                            alert('You closed the popup without finishing the payment');
                        }
                    });
                });
            }
        @endforeach
    });
</script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp0RSK9sB0UGaAcVEOl8SKSTBSkT8wCHd1/6hsLoRF4XsF06HUET6hK6y/pw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Custom JS -->


</body>
</html>
