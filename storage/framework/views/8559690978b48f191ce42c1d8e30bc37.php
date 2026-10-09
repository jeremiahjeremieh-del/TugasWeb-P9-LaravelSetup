
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-white min-h-screen flex items-center justify-center p-6">
    <main class="bg-slate-900 p-8 rounded-2xl max-w-xl w-full">
        <h1 class="text-3xl font-bold mb-6">Tentang Saya</h1>
        <p class="mb-3">Nama: <?php echo e($tentang['nama']); ?></p>
        <p class="mb-3">Jurusan: <?php echo e($tentang['jurusan']); ?></p>
        <p class="mb-6"><?php echo e($tentang['deskripsi']); ?></p>
        <a href="/" class="text-sky-400">Kembali ke Beranda</a>
    </main>
</body>
</html><?php /**PATH D:\TugasWeb-P9-LaravelSetup\resources\views/about.blade.php ENDPATH**/ ?>