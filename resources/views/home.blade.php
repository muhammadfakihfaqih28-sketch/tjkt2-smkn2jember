<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJKT 2 - SMKN 2 Jember</title>
    <!-- Bootstrap 5 & Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #0d6efd 0%, #051937 100%);
        }
        .tech-card {
            transition: transform 0.3s ease;
            border-top: 4px solid #0d6efd;
        }
        .tech-card:hover {
            transform: translateY(-5px);
        }
        /* Style Logo Bulat */
        .logo-brand-round {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #fff;
        }
        .logo-hero-round {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid rgba(255, 255, 255, 0.85);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }
        /* Style Galeri Foto Bersama */
        .photo-gallery-img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            transition: transform 0.3s ease;
        }
        .photo-gallery-img:hover {
            transform: scale(1.02);
        }
    </style>
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ route('home') }}">
                <!-- Logo SMKN 2 Jember & Logo TJKT -->
                <img src="{{ asset('img/logo-smkn2.jpg') }}" alt="Logo SMKN 2 Jember" class="logo-brand-round">
                <img src="{{ asset('img/logo-tjkt.jpg') }}" alt="Logo TJKT" class="logo-brand-round">
                <span>TJKT 2 <span class="badge bg-primary fs-6">SMKN 2 JEMBER</span></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fw-semibold align-items-lg-center gap-2">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}"><i class="bi bi-house-door me-1"></i> Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('siswa.public') }}"><i class="bi bi-people me-1"></i> Data Siswa</a></li>
                    
                    @auth
                        <!-- Jika Admin Sudah Login -->
                        <li class="nav-item">
                            <a class="btn btn-warning btn-sm fw-bold px-3" href="{{ route('siswa.index') }}"><i class="bi bi-speedometer2 me-1"></i> Panel Admin</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btn-sm fw-bold"><i class="bi bi-box-arrow-right me-1"></i> Logout</button>
                            </form>
                        </li>
                    @else
                        <!-- Jika Belum Login -->
                        <li class="nav-item">
                            <a class="btn btn-outline-info btn-sm fw-bold px-3" href="{{ route('login') }}"><i class="bi bi-shield-lock me-1"></i> Login Admin</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section text-white text-center py-5">
        <div class="container py-4">
            <!-- Dua Logo Besar Berdampingan -->
            <div class="d-flex justify-content-center align-items-center gap-3 mb-3">
                <img src="{{ asset('img/logo-smkn2.jpg') }}" alt="Logo SMKN 2 Jember" class="logo-hero-round">
                <i class="bi bi-x-lg text-light fs-3 opacity-75"></i>
                <img src="{{ asset('img/logo-tjkt.jpg') }}" alt="Logo TJKT Large" class="logo-hero-round">
            </div>
            <span class="badge bg-info text-dark mb-2 px-3 py-2 fw-bold">PORTAL KELAS RESMI</span>
            <h1 class="display-4 fw-bold">Teknik Jaringan Komputer & Telekomunikasi 2</h1>
            <p class="lead text-light mb-4">SMK Negeri 2 Jember — Center of Excellence</p>
            <div class="d-flex justify-content-center gap-2">
                <a href="{{ route('siswa.public') }}" class="btn btn-warning btn-lg fw-bold px-4"><i class="bi bi-people-fill me-2"></i> Lihat Anggota Kelas</a>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container my-5">
        <div class="row g-4 justify-content-center">
            
            <!-- Card Data Siswa -->
            <div class="col-md-5">
                <div class="card shadow-sm border-0 tech-card h-100">
                    <div class="card-body text-center p-4">
                        <div class="text-primary mb-3">
                            <i class="bi bi-people-fill fs-1"></i>
                        </div>
                        <h4 class="card-title fw-bold">Data Siswa TJKT 2</h4>
                        <p class="card-text text-muted">Daftar lengkap anggota kelas, NISN, serta struktur pengurus kelas TJKT 2.</p>
                        <a href="{{ route('siswa.public') }}" class="btn btn-outline-primary fw-semibold px-4">Lihat Detail Siswa</a>
                    </div>
                </div>
            </div>

            <!-- Card Profil Jurusan -->
            <div class="col-md-5">
                <div class="card shadow-sm border-0 tech-card h-100">
                    <div class="card-body text-center p-4">
                        <div class="text-info mb-3">
                            <i class="bi bi-cpu-fill fs-1"></i>
                        </div>
                        <h4 class="card-title fw-bold">Fokus Keahlian</h4>
                        <p class="card-text text-muted">Jaringan Komputer, Server, Fiber Optik, Mikrotik, Cisco, & Administrasi Telekomunikasi.</p>
                        <span class="badge bg-secondary">Cisco & Mikrotik Ready</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Foto Bersama Section -->
    <div class="container my-5 pb-4">
        <div class="row justify-content-center text-center mb-4">
            <div class="col-lg-8">
                <h2 class="fw-bold"><i class="bi bi-camera-fill text-danger me-2"></i>Keluarga Besar TJKT 2</h2>
                <p class="text-muted lead">Momen kebersamaan siswa-siswi Teknik Jaringan Komputer & Telekomunikasi 2 SMKN 2 Jember.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <img src="{{ asset('img/foto-bersama-tjkt2.jpg') }}" alt="Foto Bersama TJKT 2" class="photo-gallery-img img-fluid">
                <div class="mt-3 p-3 bg-white shadow-sm rounded-pill d-inline-block border">
                    <span class="fw-bold text-dark"><i class="bi bi-tag-fill text-primary me-1"></i> Angkatan 2026</span>
                    <span class="mx-2 text-muted">|</span>
                    <span class="text-muted">Teknik Komputer & Jaringan</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">&copy; 2026 TJKT 2 — SMKN 2 Jember. Make By Fakih27.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>