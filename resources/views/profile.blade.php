<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <title>Desa Plosokerep</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
    }
    .content {
      flex: 1;
    }
    .footer-custom {
      background-color: blue;
      color: white;
      text-align: center;
      padding: 10px 0;
      width: 100%;
    }
  </style>
</head>
<body>
  @include('layout.navbaradmin')

  <div class="container mt-5 content">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card mt-5">
          <div class="card-header d-flex justify-content-between align-items-center">
            <span>{{ __('Profil Saya') }}</span>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProfileModal">
              <i class="fas fa-edit"></i> Edit Profil
            </button>
          </div>

          <div class="card-body">
            @if(session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
            @endif
            <div class="row mb-3">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
              <div class="col-md-6">
                <p class="form-control-plaintext">{{ $user->name }}</p>
              </div>
            </div>

            <div class="row mb-3">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
              <div class="col-md-6">
                <p class="form-control-plaintext">{{ $user->email }}</p>
              </div>
            </div>

            <div class="row mb-3">
              <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto Profil') }}</label>
              <div class="col-md-6">
                <img src="{{ $user->foto ? asset('storage/foto/' . $user->foto) : asset('storage/foto/default_avatar.jpg') }}" alt="Profile Picture" class="rounded-circle" style="width: 80px; height: 80px;">
              </div>
            </div>
            
            <div class="row mb-3">
              <div class="col-md-6 offset-md-4">
                <a href="{{ route('cart.view') }}" class="btn btn-outline-primary">
                  <i class="fas fa-shopping-cart"></i> Keranjang
                </a>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-6 offset-md-4">
                {{-- <a href="{{ route('invoice', ['id' => $order->id]) }}" class="btn btn-outline-primary"> --}}
                <a href="{{ route('history') }}" class="btn btn-outline-primary">
                  <i class="fas fa-credit-card"></i> History Transaksi
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Profile Modal -->
  <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editProfileModalLabel">Edit Profil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password Baru</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
              <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
              <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
            <div class="mb-3">
              <label for="foto" class="form-label">Foto Profil</label>
              <input type="file" class="form-control" id="foto" name="foto">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @include('layout/copyright')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
