<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa TJKT 2 - SMKN 2 JEMBER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body class="bg-light py-4">

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
            <div>
                <h2 class="fw-bold mb-0 text-dark"><i class="bi bi-people-fill text-primary me-2"></i>Daftar Siswa TJKT 2</h2>
                <small class="text-muted">SMK Negeri 2 Jember</small>
            </div>
            <div>
                <a href="{{ route('home') }}" class="btn btn-outline-secondary me-2"><i class="bi bi-arrow-left"></i> Beranda</a>
                <a href="{{ route('login') }}" class="btn btn-primary"><i class="bi bi-shield-lock"></i> Login Admin</a>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-header bg-dark text-white font-weight-bold">
                <i class="bi bi-table me-1"></i> Anggota Kelas TJKT 2
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>NISN</th>
                                <th>Nama Lengkap</th>
                                <th>L/P</th>
                                <th>Jabatan / Peran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($siswas as $siswa)
                                <tr>
                                    <td class="fw-semibold text-primary">{{ $siswa->nisn }}</td>
                                    <td>{{ $siswa->nama }}</td>
                                    <td>
                                        @if($siswa->jenis_kelamin == 'L')
                                            <span class="badge bg-primary">L</span>
                                        @else
                                            <span class="badge bg-danger">P</span>
                                        @endif
                                    </td>
                                    <td><span class="badge bg-info text-dark">{{ $siswa->jabatan }}</span></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-4 text-muted">Belum ada data siswa.Silakan hubungi Admin/Pengurus Kelas.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>