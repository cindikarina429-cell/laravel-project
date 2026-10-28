<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Toko Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">📚 Toko Buku</a>
        <ul class="navbar-nav ms-auto flex-row gap-3">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/buku">Buku</a></li>
            <li class="nav-item"><a class="nav-link" href="/kontak">Kontak</a></li>
            <li class="nav-item"><a class="nav-link" href="/tentang">Tentang</a></li>
            <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
        </ul>
    </div>
</nav>

<main class="container py-5">
    @yield('content')
</main>

<footer class="text-center text-muted py-4">
    &copy; 2026 Toko Buku - Praktikum PAW
</footer>

</body>
</html>