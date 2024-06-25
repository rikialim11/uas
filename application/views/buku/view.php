<!DOCTYPE html>
<html>
<head>
    <title>Detail Buku</title>
</head>
<body>
    <h1><?php echo $buku['judul_buku']; ?></h1>
    <p>Kode Buku: <?php echo $buku['kode_buku']; ?></p>
    <p>ISBN: <?php echo $buku['isbn']; ?></p>
    <p>Pengarang: <?php echo $buku['pengarang']; ?></p>
    <p>Sekilas Isi: <?php echo $buku['sekilas_isi']; ?></p>
    <p>Tanggal Masuk: <?php echo $buku['tanggal_masuk']; ?></p>
    <p>Stok: <?php echo $buku['stok']; ?></p>
    <p>Foto: <?php echo $buku['foto']; ?></p>
    <a href="<?php echo site_url('buku'); ?>">Kembali ke daftar</a>
</body>
</html>