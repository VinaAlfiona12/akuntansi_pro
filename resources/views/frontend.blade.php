<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel & Reservasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
/* About Me Section */
.about-me {
  background-color: var(--light-text);
  color: var(--dark-text);
  padding: 80px 20px;
}
.about-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 40px;
}
.about-photo {
  flex: 1 1 300px;
  text-align: center;
}
.about-photo img {
  width: 250px;
  height: 380px;
  object-fit: cover;
  border-radius: 12px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.15);
}
.about-content {
  flex: 1 1 500px;
}
.about-content h3.discover-text {
  color: var(--accent-color);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-bottom: 10px;
}
.about-content h2 {
  color: var(--primary-color);
  font-size: 2.2em;
  margin-bottom: 20px;
}
.about-content p {
  font-size: 1.05em;
  color: #333;
  margin-bottom: 15px;
}
.about-details {
  background-color: var(--light-bg);
  padding: 20px;
  border-radius: 10px;
  margin-bottom: 25px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}
.about-details p {
  margin: 6px 0;
  font-size: 0.95em;
  color: #444;
}
.about-me .btn {
  background-color: var(--accent-color);
  color: var(--light-text);
  font-weight: 600;
}
.about-me .btn:hover {
  background-color: var(--primary-color);
}

/* Responsive */
@media (max-width: 768px) {
  .about-container {
    flex-direction: column;
    text-align: center;
  }
  .about-details {
    text-align: left;
  }
  .about-photo img {
    width: 220px;
    height: 220px;
  }
}

/* ========================================================= */
/* 🎨 Variabel Warna - Tema Perhotelan Elegan & Mewah */
/* ========================================================= */
:root {
  --primary-color: #2C3E50; /* Navy gelap elegan */
  --accent-color: #C5A46D;  /* Emas klasik */
  --light-bg: #F8F5F0;      /* Krem lembut */
  --dark-text: #2E2E2E;     /* Abu tua */
  --light-text: #FFFFFF;    /* Putih bersih */
  --gray-text: #A09B8C;     /* Abu keemasan lembut */
  --danger-color: #C0392B;  /* Merah elegan */
}

/* Base Styles */
body {
  font-family: 'Roboto', sans-serif;
  line-height: 1.6;
  color: var(--dark-text);
  background-color: var(--light-bg);
  margin: 0;
  padding: 0;
}
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

/* Typography */
h1, h2, h3, h4, h5, h6 {
  color: var(--primary-color);
  margin-bottom: 0.8em;
}
h1 { font-size: 2.8em; }
h2 { font-size: 2.2em; }
h3 { font-size: 1.8em; }
p { margin-bottom: 1em; }

a {
  color: var(--accent-color);
  text-decoration: none;
  transition: color 0.3s ease;
}
a:hover {
  color: var(--primary-color);
}

/* Buttons */
.btn {
  display: inline-block;
  padding: 12px 25px;
  border-radius: 5px;
  font-weight: bold;
  text-align: center;
  transition: background-color 0.3s ease, color 0.3s ease;
  cursor: pointer;
  border: none;
}
.btn-primary {
  background-color: var(--accent-color);
  color: var(--light-text);
}
.btn-primary:hover {
  background-color: #b89559; /* sedikit lebih gelap dari emas */
}
.btn-secondary {
  background-color: var(--primary-color);
  color: var(--light-text);
}
.btn-secondary:hover {
  background-color: #1B2631; /* lebih gelap untuk efek hover */
}
.btn-outline-primary {
  background-color: transparent;
  color: var(--accent-color);
  border: 2px solid var(--accent-color);
}
.btn-outline-primary:hover {
  background-color: var(--accent-color);
  color: var(--light-text);
}
.btn-large {
  padding: 15px 30px;
  font-size: 1.1em;
}
.btn-danger {
  background-color: var(--danger-color);
  color: var(--light-text);
}
.btn-danger:hover {
  background-color: #A93226;
}

/* Header & Navbar */
.main-header {
  background-color: var(--light-text);
  box-shadow: 0 2px 5px rgba(0,0,0,0.05);
  padding: 15px 0;
}
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.navbar-brand img {
  height: 40px;
}
.nav-links {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}
.nav-links li {
  margin-left: 30px;
  position: relative;
}
.nav-links a {
  color: var(--primary-color);
  font-weight: 500;
  padding: 10px 0;
  display: block;
}
.nav-links a:hover {
  color: var(--accent-color);
}
.dropdown-menu {
  display: none;
  position: absolute;
  background-color: var(--light-text);
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  min-width: 180px;
  z-index: 10;
  border-radius: 5px;
  overflow: hidden;
  padding: 10px 0;
}
.dropdown:hover .dropdown-menu {
  display: block;
}
.dropdown-menu a {
  color: var(--dark-text);
  padding: 10px 20px;
  display: block;
}
.dropdown-menu a:hover {
  background-color: var(--light-bg);
  color: var(--accent-color);
}

/* Hero Section */
.hero-section {
  background: linear-gradient(to bottom, rgba(44,62,80,0.3), rgba(44,62,80,0.7)),
  url('/img/Kinay.jpg') no-repeat center center/cover;
  color: var(--light-text);
  text-align: center;
  padding: 100px 20px;
  border-bottom-left-radius: 20px;
  border-bottom-right-radius: 20px;
}
.hero-section h1 {
  color: var(--light-text);
  font-size: 3.5em;
  margin-bottom: 0.5em;
}
.hero-section p {
  font-size: 1.3em;
  margin-bottom: 2em;
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
}
.hero-buttons .btn {
  margin: 0 10px;
}

/* Services Overview */
.services-overview {
  padding: 80px 0;
  background-color: var(--light-bg);
  text-align: center;
}
.services-overview h2 {
  margin-bottom: 40px;
}
.service-cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
  margin-bottom: 50px;
}
.service-card {
  background-color: var(--light-text);
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.08);
  text-align: center;
  transition: transform 0.3s ease;
}
.service-card:hover {
  transform: translateY(-5px);
}
.service-card .icon {
  font-size: 3em;
  color: var(--accent-color);
  margin-bottom: 20px;
}
.service-card h3 {
  margin-bottom: 15px;
  color: var(--primary-color);
}

/* Why Choose Us */
.why-choose-us {
  padding: 80px 0;
  background-color: var(--light-text);
  text-align: center;
}
.why-choose-us h2 {
  margin-bottom: 40px;
}
.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
}
.feature-item {
  padding: 30px;
  border: 1px solid #E0E0E0;
  border-radius: 8px;
  text-align: center;
}
.feature-item i {
  font-size: 2.5em;
  color: var(--accent-color);
  margin-bottom: 15px;
}
.feature-item h3 {
  color: var(--primary-color);
  margin-bottom: 10px;
}

/* Call to Action Section */
.call-to-action {
  background-color: var(--primary-color);
  color: var(--light-text);
  padding: 60px 20px;
  text-align: center;
  border-top-left-radius: 20px;
  border-top-right-radius: 20px;
}
.call-to-action h2 {
  color: var(--light-text);
  margin-bottom: 20px;
}
.call-to-action p {
  font-size: 1.1em;
  margin-bottom: 30px;
}

/* Footer */
.main-footer {
  background-color: var(--primary-color);
  color: var(--light-text);
  padding: 60px 0 20px;
  font-size: 0.9em;
}
.footer-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 30px;
  margin-bottom: 40px;
}
.footer-col h4 {
  color: var(--light-text);
  margin-bottom: 20px;
  font-size: 1.2em;
}
.footer-col ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.footer-col ul li {
  margin-bottom: 10px;
}
.footer-col ul li a {
  color: var(--light-text);
  opacity: 0.8;
}
.footer-col ul li a:hover {
  opacity: 1;
  color: var(--accent-color);
}
.footer-col p {
  margin-bottom: 10px;
  opacity: 0.8;
}
.footer-col i {
  margin-right: 8px;
  color: var(--accent-color);
}
.social-icons a {
  color: var(--light-text);
  font-size: 1.5em;
  margin-right: 15px;
  opacity: 0.8;
}
.social-icons a:hover {
  color: var(--accent-color);
  opacity: 1;
}
.footer-bottom {
  text-align: center;
  border-top: 1px solid rgba(255,255,255,0.1);
  padding-top: 20px;
  margin-top: 20px;
  opacity: 0.7;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .navbar {
    flex-direction: column;
    align-items: flex-start;
  }
  .nav-links {
    flex-direction: column;
    width: 100%;
    margin-top: 15px;
    display: none;
  }
  .nav-links.active {
    display: flex;
  }
  .nav-links li {
    margin: 0;
    width: 100%;
    text-align: center;
  }
  .nav-links li a {
    padding: 15px 0;
    border-top: 1px solid #eee;
  }
  .dropdown-menu {
    position: static;
    box-shadow: none;
    width: 100%;
    padding: 0;
  }
  .dropdown-menu a {
    padding-left: 40px;
  }
  .hero-section h1 {
    font-size: 2.5em;
  }
  .hero-section p {
    font-size: 1em;
  }
  .hero-buttons {
    flex-direction: column;
  }
  .hero-buttons .btn {
    margin: 10px 0;
    width: 80%;
    max-width: 300px;
  }
  .service-cards, .features-grid, .footer-grid {
    grid-template-columns: 1fr;
  }
  .mobile-menu-toggle {
    display: block;
  }
}

/* Mobile Menu Toggle */
.mobile-menu-toggle {
  display: none;
  background: none;
  border: none;
  font-size: 1.8em;
  color: var(--primary-color);
  cursor: pointer;
  padding: 5px 10px;
}
</style>

</head>
<body>
    <header class="main-header">
     <nav class="navbar">
        <div class="container">
            <!-- <a href="{{ url('/') }}" class="navbar-brand">
                <img src="{{ asset('img/Kinay.jpg') }}" alt="Nama Perusahaan Logo">
            </a> -->
            <button class="mobile-menu-toggle" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-links">
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li class="dropdown">
                    <a href="#">Layanan <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-menu">
                        <a href="{{ url('/layanan/kamar') }}">Kamar</a>
                        <a href="{{ url('/layanan/fasilitas') }}">Fasilitas</a>
                        <a href="{{ url('/layanan/promo') }}">Promo & Paket</a>
                        </div>
                </li>
                <li><a href="{{ url('/tentang-kami') }}">Tentang Kami</a></li>
                <li><a href="{{ url('/blog') }}">Artikel</a></li>
                <li><a href="{{ url('/kontak') }}">Hubungi Kami</a></li>

                {{-- Bagian Autentikasi Laravel --}}
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" >Register</a></li>
                    @endif
                @else
                    <li class="dropdown">
                        <a href="#">{{ Auth::user()->name }} <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-menu">
                            <a href="{{ url('/dashboard') }}">Dashboard</a> {{-- Asumsi ada halaman dashboard --}}
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="btn-danger-link">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                {{-- Akhir Bagian Autentikasi --}}

            </ul>
            {{-- Tombol CTA utama (non-auth) --}}
            @guest
                @endguest
        </div>
    </nav>
    </header>

    <main class="content-wrapper">
        <section class="hero-section">
            <div class="container">
                <h1>Reservasi Hotel Mewah & Nyaman</h1>
                <p>Nikmati pengalaman menginap terbaik dengan pelayanan eksklusif, fasilitas modern, dan suasana yang menenangkan untuk setiap tamu kami.</p>
                <div class="hero-buttons">
                    <a href="{{ url('/reservasi') }}" class="btn btn-primary btn-large">Pesan Kamar Sekarang</a>
                    <a href="{{ url('/layanan') }}" class="btn btn-secondary btn-large">Lihat Fasilitas Kami</a>
                </div>
            </div>
        </section>

        <section class="services-overview">
            <div class="container">
                <h2>Layanan Unggulan Kami</h2>
                <div class="service-cards">
                    <div class="service-card">
                        <i class="fas fa-chart-line icon"></i>
                        <h3>Fasilitas Lengkap</h3>
                        <p>Dari kolam renang, spa, gym, hingga restoran bintang lima — semua untuk kenyamanan Anda.</p>
                    </div>
                    <div class="service-card">
                        <i class="fas fa-book icon"></i>
                        <h3>Paket & Promo Spesial</h3>
                        <p>Manfaatkan berbagai promo menarik untuk liburan hemat namun tetap berkelas.</p>
                    </div>
                    <div class="service-card">
                        <i class="fas fa-magnifying-glass-dollar icon"></i>
                        <h3>Audit Independen</h3>
                        <p>Memastikan transparansi dan kepatuhan finansial perusahaan Anda.</p>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ url('/layanan') }}" class="btn btn-outline-primary">Lihat Semua Layanan Kami</a>
                </div>
            </div>
        </section>

        <section class="why-choose-us">
            <div class="container">
                <h2>Mengapa Memilih Hotel Kami?</h2>
                <div class="features-grid">
                    <div class="feature-item">
                        <i class="fas fa-award"></i>
                        <h3>Kenyamanan Premium</h3>
                        <p>Setiap kamar dirancang dengan kemewahan dan kenyamanan sebagai prioritas utama.</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-shield-alt"></i>
                        <h3>Integritas & Kepercayaan</h3>
                        <p>Menjaga kerahasiaan dan integritas data keuangan Anda adalah prioritas kami.</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-lightbulb"></i>
                        <h3>Keamanan Terjamin</h3>
                        <p>>Sistem keamanan 24 jam untuk memastikan ketenangan selama Anda menginap.</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-lightbulb"></i>
                        <h3>Layanan 24 Jam</h3>
                        <p>>Staf kami siap membantu Anda kapan pun Anda membutuhkan pelayanan.</p>
                    </div>
                </div>
            </div>
        </section>
                <!-- Profil Section -->
        <section class="about-me">
            <div class="container about-container">
                <div class="about-photo">
                    <img src="/img/Viona.jpeg" alt="Foto Profil">
                </div>
                <div class="about-content">
                    <h2>Profil</h2>
                    <p>
                        Halo! Saya <strong>Vina Alfiona</strong>, mahasiswa <strong>Universitas Hang Tuah Pekanbaru</strong>.
                        Saya mengembangkan proyek web ini sebagai simulasi sistem <strong>reservasi hotel modern</strong>
                        dengan fitur interaktif, tampilan profesional, dan pengalaman pengguna yang nyaman.
                    </p>

                    <div class="about-details">
                        <p><strong>Name:</strong> Vina Alfiona</p>
                        <p><strong>Phone:</strong> +6283283840866</p>
                        <p><strong>Experience:</strong> 3 Years</p>
                        <p><strong>Age:</strong> 20</p>
                        <p><strong>Address:</strong> Pekanbaru, Riau</p>
                    </div>
        </section>

        <section class="call-to-action">
            <div class="container">
                <h2>Siap Menginap di Hotel Impian Anda?</h2>
                <p>Hubungi kami untuk pemesanan dan nikmati pelayanan hotel terbaik dengan harga spesial.</p>
                <a href="{{ url('/kontak') }}" class="btn btn-primary btn-large">Hubungi Kami Sekarang</a>
            </div>
        </section>
    </main>

    <footer class="main-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>Hotel Muara</h4>
                    <p>Tempat menginap terbaik dengan pelayanan berkelas dan suasana yang nyaman.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Link Cepat</h4>
                    <ul>
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li><a href="{{ url('/layanan') }}">Reservasi</a></li>
                        <li><a href="{{ url('/tentang-kami') }}">Tentang Kami</a></li>
                        <li><a href="{{ url('/blog') }}">Artikel</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Hubungi Kami</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Jl. Muara Setingkai, Lipatkain Selatan</p>
                    <p><i class="fas fa-phone"></i> +62 832 8384 8066</p>
                    <p><i class="fas fa-envelope"></i> @hotelmuara.com</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Universitas Hang Tuah Pekanbaru.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
            const navLinks = document.querySelector('.nav-links');

            if (mobileMenuToggle && navLinks) {
                mobileMenuToggle.addEventListener('click', function () {
                    navLinks.classList.toggle('active');
                });
            }

            // Untuk dropdown menu di desktop
            const dropdowns = document.querySelectorAll('.dropdown');
            dropdowns.forEach(dropdown => {
                dropdown.addEventListener('mouseenter', () => {
                    const dropdownMenu = dropdown.querySelector('.dropdown-menu');
                    if (dropdownMenu) {
                        dropdownMenu.style.display = 'block';
                    }
                });
                dropdown.addEventListener('mouseleave', () => {
                    const dropdownMenu = dropdown.querySelector('.dropdown-menu');
                    if (dropdownMenu) {
                        dropdownMenu.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>