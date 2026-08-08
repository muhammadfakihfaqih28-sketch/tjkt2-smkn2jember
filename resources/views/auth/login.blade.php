<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - TJKT 2 SMKN 2 Jember</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body class="bg-dark d-flex align-items-center justify-content-center vh-100">

    <div class="card shadow-lg p-4 style="max-width: 400px; width: 100%;">
        <div class="text-center mb-4">
            <i class="bi bi-shield-lock-fill text-primary display-4"></i>
            <h4 class="fw-bold mt-2">Login Admin TJKT 2</h4>
            <small class="text-muted">SMK Negeri 2 Jember</small>
        </div>

        @if($errors->any())
            <div class="alert alert-danger py-2">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label fw-semibold">Email / Username Admin</label>
                <input type="email" name="email" class="form-control" placeholder="admintejekatedua@gmail.com" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-semibold">Password</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 fw-semibold">Masuk System</button>
        </form>

        <div class="text-center mt-3">
            <a href="{{ route('home') }}" class="text-decoration-none text-muted small"><i class="bi bi-arrow-left"></i> Kembali ke Beranda</a>
        </div>
    </div>

</body>
</html>