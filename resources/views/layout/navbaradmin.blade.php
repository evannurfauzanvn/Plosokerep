<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    .navbar .nav-link {
    color: white !important;
}
</style>


<nav class="navbar navbar-expand-lg navbar-dark fixed-top"
    style="background: rgb(9, 9, 117); background: linear-gradient(122deg, rgba(9, 9, 117, 1) 10%, rgba(0, 212, 255, 1) 63%); z-index: 1050;">
    <div class="container-fluid">
        <a class="navbar-brand logo" href={{ route('homepage') }}>
            <img src="{{ URL('gambar/LOGO1.png') }}" alt="Logo" style="width:150px; height: 40px;" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto" id="navbar">
                <li class="nav-item" style="margin-right: 20px;">
                    <a class="nav-link text-light" href={{ route('homepageadmin') }}><i class="bi bi-house-door-fill"></i> Beranda</a>
                </li>
                <li class="nav-item" style="margin-right: 20px;">
                    <a class="nav-link text-light" href={{ route('pengaduanadmin') }}><i class="bi-megaphone-fill"></i> Pengaduan</a>
                </li>
                <li class="nav-item" style="margin-right: 20px;">
                    <a class="nav-link text-light" href={{ route('surata') }}><i class="bi-file-text-fill"></i> Pengajuan</a>
                </li>
                <li class="nav-item" style="margin-right: 20px;" >
                    <a class="nav-link text-light" href={{ route('umkm_da') }}><i class="bi bi-basket3-fill"></i> UMKM</a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{-- <img src="{{ Auth::user()->foto ? asset('storage/foto/' . Auth::user()->foto) : asset('storage/foto/default_avatar.jpg') }}" alt="Profile Picture" class="rounded-circle" style="width: 40px; height: 40px;"> --}}
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('profile') }}">Profil</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a></li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link login btn text-light" href="{{ route('login') }}" style="background-color: blue;">
                            Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
