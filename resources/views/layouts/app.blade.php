<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title', 'Reservasi Hotel')</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- AOS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
    /* Tema: Reservasi Hotel - Elegan, Mewah, dan Hangat */
    body {
        background: linear-gradient(135deg, #2C3E50, #3A506B, #2C3E50); /* gradasi navy gelap */
        min-height: 100vh;
        font-family: 'Poppins', sans-serif;
        color: #fdfdfd;
    }

    nav.navbar {
        transition: all .25s ease;
        background: rgba(255, 255, 255, .15);
        backdrop-filter: blur(8px);
    }

    nav.navbar.scrolled {
        background: rgba(255, 255, 255, .9) !important;
        box-shadow: 0 6px 24px rgba(0, 0, 0, 0.25);
    }

    nav.navbar.scrolled .nav-link,
    nav.navbar.scrolled .navbar-brand {
        color: #2C3E50 !important; /* warna teks gelap elegan */
    }

    .hero-section {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        color: #FDFBF6;
        padding: 70px 18px;
        border-radius: 14px;
        margin-top: 1.6rem;
    }

    .hero-title {
        font-weight: 700;
        color: #C5A46D; /* emas lembut */
        text-shadow: 0 0 12px rgba(197, 164, 109, 0.6);
        letter-spacing: 2px;
    }

    main.main-content {
        padding-top: 5rem;
    }

    main.main-content > .container {
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(8px);
        border-radius: 12px;
        padding: 22px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    }

    .card {
        background: rgba(255, 255, 255, 0.15);
        color: #FDFBF6;
        border-radius: 12px;
        border: 1px solid rgba(197, 164, 109, 0.3);
    }

    .card h5, .card-title {
        color: #E9D8A6; /* emas lebih terang */
    }

    footer {
        color: #FDFBF6;
        background: rgba(0, 0, 0, 0.2);
        padding: 12px 0;
        text-align: center;
        border-top: 1px solid rgba(255,255,255,0.1);
        margin-top: 1.5rem;
    }

    /* Tombol utama */
    .btn-primary {
        background: #C5A46D; /* emas lembut */
        border: none;
        color: #fff;
        border-radius: 50px;
        padding: 10px 25px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background: #B28E57;
        transform: translateY(-2px);
    }

    /* Tombol terang */
    .btn-light {
        background: #fff;
        color: #2C3E50;
        font-weight: 500;
        border-radius: 50px;
        padding: 10px 25px;
        transition: all 0.3s ease;
    }

    .btn-light:hover {
        background: #f0e6d2; /* krem lembut */
        color: #2C3E50;
    }

    /* Efek saat layar kecil */
    @media (max-width:767px) {
        .hero-section { padding: 40px 12px; }
        .hero-title { font-size: 1.6rem; }
        nav.navbar { padding: .4rem 1rem; }
    }
</style>

    @stack('styles')
</head>
<body>
    <!-- NAVBAR (lengkap + aman) -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/dashboard') }}" data-aos="fade-right" data-aos-duration="700">
                <i class="bi bi-building-fill"></i> Reservasi Hotel
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
                    aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    {{-- Dashboard --}}
                    <li class="nav-item"></li>

                    {{-- TRANSAKSI --}}
                    @if(Route::has('penjualan.index') || Route::has('pembelian.index') || Route::has('pembayaran.index') || Route::has('journals.index') || Route::has('ledger.index') || Route::has('cashbank.index'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuTransaksi" role="button" data-bs-toggle="dropdown">Transaksi</a>
                        <ul class="dropdown-menu" aria-labelledby="menuTransaksi">
                            @if(Route::has('penjualan.index'))<li><a class="dropdown-item" href="{{ route('penjualan.index') }}">Penjualan</a></li>@endif
                            @if(Route::has('pembelian.index'))<li><a class="dropdown-item" href="{{ route('pembelian.index') }}">Pembelian</a></li>@endif
                            @if(Route::has('pembayaran.index'))<li><a class="dropdown-item" href="{{ route('pembayaran.index') }}">Pembayaran & Penerimaan</a></li>@endif
                            @if(Route::has('journals.index'))<li><a class="dropdown-item" href="{{ route('journals.index') }}">Jurnal Umum</a></li>@endif
                            @if(Route::has('journals.penyesuaian'))<li><a class="dropdown-item" href="{{ route('journals.penyesuaian') }}">Jurnal Penyesuaian</a></li>@endif
                            @if(Route::has('journals.penutup'))<li><a class="dropdown-item" href="{{ route('journals.penutup') }}">Jurnal Penutup</a></li>@endif
                            @if(Route::has('ledger.index'))<li><a class="dropdown-item" href="{{ route('ledger.index') }}">Buku Besar</a></li>@elseif(Route::has('buku-besar.index'))<li><a class="dropdown-item" href="{{ route('buku-besar.index') }}">Buku Besar</a></li>@endif
                            @if(Route::has('cashbank.index'))<li><a class="dropdown-item" href="{{ route('cashbank.index') }}">Kas & Bank</a></li>@endif
                        </ul>
                    </li>
                    @endif

                    {{-- DATA MASTER --}}
                    @if(Route::has('tamu.index') ||Route::has('kamar.index')|| Route::has('pegawai.index') || Route::has('pegawai.index'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuMaster" role="button" data-bs-toggle="dropdown">Data Master</a>
                        <ul class="dropdown-menu" aria-labelledby="menuMaster">
                            @if(Route::has('tamu.index'))<li><a class="dropdown-item" href="{{ route('tamu.index') }}">Daftar Tamu</a></li>@endif
                            @if(Route::has('kamar.index'))<li><a class="dropdown-item" href="{{ route('kamar.index') }}">Daftar Kamar</a></li>@endif
                            @if(Route::has('promo.index'))<li><a class="dropdown-item" href="{{ route('promo.index') }}">Daftar Promo</a></li>@endif
                            @if(Route::has('layanan.index'))<li><a class="dropdown-item" href="{{ route('layanan.index') }}">Daftar Layanan</a></li>@endif
                            @if(Route::has('pegawai.index'))<li><a class="dropdown-item" href="{{ route('pegawai.index') }}">Daftar Pegawai</a></li>@elseif(Route::has('pegawai.index'))<li><a class="dropdown-item" href="{{ route('pegawai.index') }}">Daftar Pegawai</a></li>@endif
                        </ul>
                    </li>
                    @endif


                    {{-- DATA SISTEM--}} 
                    @if(Route::has('akses.index'))  
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuDataSistem" role="button" data-bs-toggle="dropdown">Data Sistem</a>
                        <ul class="dropdown-menu" aria-labelledby="menuDataSistem">
                            @if(Route::has('akses.index'))<li><a class="dropdown-item" href="{{ route('akses.index') }}">Akses</a></li>@endif
                            @if(Route::has('reservasi.index'))<li><a class="dropdown-item" href="{{ route('reservasi.index') }}">Reservasi</a></li>@endif
                            @if(Route::has('servis.index'))<li><a class="dropdown-item" href="{{ route('servis.index') }}">Servis</a></li>@endif
                            @if(Route::has('checkin.index'))<li><a class="dropdown-item" href="{{ route('checkin.index') }}">Checkin</a></li>@endif
                            @if(Route::has('checkout.index'))<li><a class="dropdown-item" href="{{ route('checkout.index') }}">Checkout</a></li>@endif
                           
                           
                           
                        </ul>
                    </li>
                    @endif

                    {{-- LAPORAN --}}
                    @if(Route::has('laporan.jurnal-umum') || Route::has('laporan.neraca-saldo') || Route::has('laporan.laba-rugi') || Route::has('laporan.neraca') || Route::has('laporan.perubahan-modal') || Route::has('laporan.arus-kas') || Route::has('laporan.keuangan'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuLaporan" role="button" data-bs-toggle="dropdown">Laporan</a>
                        <ul class="dropdown-menu" aria-labelledby="menuLaporan">
                            @if(Route::has('laporan.jurnal-umum'))<li><a class="dropdown-item" href="{{ route('laporan.jurnal-umum') }}">Jurnal Umum</a></li>@endif
                            @if(Route::has('laporan.neraca-saldo'))<li><a class="dropdown-item" href="{{ route('laporan.neraca-saldo') }}">Neraca Saldo</a></li>@endif
                            @if(Route::has('laporan.laba-rugi'))<li><a class="dropdown-item" href="{{ route('laporan.laba-rugi') }}">Laba Rugi</a></li>@endif
                            @if(Route::has('laporan.neraca'))<li><a class="dropdown-item" href="{{ route('laporan.neraca') }}">Neraca</a></li>@endif
                            @if(Route::has('laporan.perubahan-modal'))<li><a class="dropdown-item" href="{{ route('laporan.perubahan-modal') }}">Perubahan Modal</a></li>@endif
                            @if(Route::has('laporan.arus-kas'))<li><a class="dropdown-item" href="{{ route('laporan.arus-kas') }}">Arus Kas</a></li>@endif
                            @if(Route::has('laporan.keuangan'))<li><a class="dropdown-item" href="{{ route('laporan.keuangan') }}">Laporan Keuangan</a></li>@endif
                        </ul>
                    </li>
                    @endif

                    {{-- PENGATURAN --}}
                    @if(Route::has('transaksi.reset') || Route::has('user.index'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuPengaturan" role="button" data-bs-toggle="dropdown">Pengaturan</a>
                        <ul class="dropdown-menu" aria-labelledby="menuPengaturan">
                            @if(Route::has('user.index'))<li><a class="dropdown-item" href="{{ route('user.index') }}">Manajemen User</a></li>@endif
                            @if(Route::has('transaksi.reset'))
                                <li>
                                    <form action="{{ route('transaksi.reset') }}" method="POST" onsubmit="return confirm('Yakin ingin mengosongkan semua data transaksi? Semua data akan dihapus secara permanen!')">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger">Kosongkan Transaksi</button>
                                    </form>
                                </li>
                            @endif
                        </ul>
                    </li>
                    @endif
                </ul>

                {{-- User/Auth menu --}}
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle me-1"></i> {{ Auth::user()->name ?? 'User' }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                @if(Route::has('profile'))<li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>@endif
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        @if(Route::has('login'))<li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>@endif
                        @if(Route::has('register'))<li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Daftar</a></li>@endif
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    @if(Request::is('/') || Request::is('dashboard'))
    <section class="container">
        <div class="hero-section text-center" data-aos="fade-up" data-aos-duration="900">
            <h1 class="display-5 mb-3 hero-title" data-aos="zoom-in" data-aos-duration="1200">
                Selamat Datang di Reservasi Hotel
            </h1>
            <p class="lead mb-4">Nikmati kenyamanan dan kemewahan hotel terbaik kami, pesan kamar dengan mudah dan cepat.</p>

            <div class="d-flex justify-content-center gap-2 flex-wrap">
                <a href="{{ url('/dashboard') }}" class="btn btn-light btn-lg">Lihat Ketersediaan Kamar</a>
            </div>
        </div>
    </section>
    @endif

    <!-- MAIN CONTENT -->
    <main class="main-content" data-aos="fade-up" data-aos-duration="700">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="text-center py-3 mt-4" data-aos="fade-up" data-aos-duration="700">
        <small>&copy; {{ date('Y') }} Reservasi Hotel — Semua Hak Dilindungi.</small>
    </footer>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({ once: true });

        const nav = document.querySelector('nav.navbar');
        const onScroll = () => {
            if(window.scrollY > 40){ nav.classList.add('scrolled'); }
            else{ nav.classList.remove('scrolled'); }
        };
        window.addEventListener('scroll', onScroll);
    </script>
    @stack('scripts')
</body>
</html>
