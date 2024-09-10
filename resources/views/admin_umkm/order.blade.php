@extends('layout.umkm_main')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pesanan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap" id="ordersTable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal Pesan</th>
                        <th>Pemesan</th>
                        <th>Alamat</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Gambar</th>
                        <th>Total</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($orders as $order)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td> {{ $order->created_at->format('d-m-y') }}</td>
                          <td> {{ $order->name }}</td>
                          <td>{{ $order->address }}</td>
                          <td>{{ $order->product->nama_produk ?? 'Nama Produk Tidak Tersedia' }}</td> 
                          <td>{{ $order->qty }}</td>
                          <td><img src="{{ asset($order->product->img_produk ? 'storage/gambar/Product/' . $order->product->img_produk : 'path/to/default/image.jpg') }}" width="100"></td>
                          <td> Rp. {{ number_format($order->total_price, 0, ',', '.') }}</td> 
                          <td>{{ $order->status }}</td>
                        </tr>
                        <!-- /.modal -->
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>

    <script>
        $(document).ready( function () {
            $('#ordersTable').DataTable();
        } );
    </script>
    
@endsection
