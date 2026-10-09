
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Laravel P9</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-white min-h-screen flex items-center justify-center p-6">

    <main class="bg-slate-900 border border-slate-700 rounded-2xl p-8 max-w-xl w-full">
        <h1 class="text-3xl font-bold mb-6">Kontak Saya</h1>

        <p class="mb-3">
            Email: <?php echo e($kontak['email']); ?>

        </p>

        <p class="mb-3">
            Telepon: <?php echo e($kontak['telepon']); ?>

        </p>

        <p class="mb-6">
            Alamat: <?php echo e($kontak['alamat']); ?>

        </p>

        <a href="/" class="text-sky-400 hover:underline">
            Kembali ke Beranda
        </a>
    </main>

</body>
</html><?php /**PATH D:\TugasWeb-P9-LaravelSetup\resources\views/contact.blade.php ENDPATH**/ ?>