<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <a href="<?php echo site_url('buku/create'); ?>">Tambah Buku</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Kode Buku</th>
            <th>ISBN</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Sekilas Isi</th>
            <th>Tanggal Masuk</th>
            <th>Stok</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($buku as $buku_item): ?>
        <tr>
            <td><?php echo $buku_item['id']; ?></td>
            <td><?php echo $buku_item['kode_buku']; ?></td>
            <td><?php echo $buku_item['isbn']; ?></td>
            <td><?php echo $buku_item['judul_buku']; ?></td>
            <td><?php echo $buku_item['pengarang']; ?></td>
            <td><?php echo $buku_item['sekilas_isi']; ?></td>
            <td><?php echo $buku_item['tanggal_masuk']; ?></td>
            <td><?php echo $buku_item['stok']; ?></td>
            <td><?php echo $buku_item['foto']; ?></td>
            <td>
                <a href="<?php echo site_url('buku/view/'.$buku_item['id']); ?>">Lihat</a> |
                <a href="<?php echo site_url('buku/edit/'.$buku_item['id']); ?>">Edit</a> |
                <a href="<?php echo site_url('buku/delete/'.$buku_item['id']); ?>" onclick="return confirm('Apakah Anda yakin?');">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
