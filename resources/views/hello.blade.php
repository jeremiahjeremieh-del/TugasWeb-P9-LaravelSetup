
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-white min-h-screen flex items-center justify-center p-6">
    <main class="bg-slate-900 p-8 rounded-2xl text-center">
        <h1 class="text-3xl font-bold mb-4">Halo, {{ $nama }}!</h1>
        <p class="text-slate-300 mb-6">Selamat datang di website Laravel saya.</p>
        <a href="/" class="text-sky-400">Kembali ke Beranda</a>
    </main>
</body>
</html>