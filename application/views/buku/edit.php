<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('buku/edit/'.$buku['id']); ?>
    <label for="kode_buku">Kode Buku</label>
    <input type="text" name="kode_buku" value="<?php echo $buku['kode_buku']; ?>" /><br />
    <label for="isbn">ISBN</label>
    <input type="text" name="isbn" value="<?php echo $buku['isbn']; ?>" /><br />
    <label for="judul_buku">Judul Buku</label>
    <input type="text" name="judul_buku" value="<?php echo $buku['judul_buku']; ?>" /><br />
    <label for="pengarang">Pengarang</label>
    <input type="text" name="pengarang" value="<?php echo $buku['pengarang']; ?>" /><br />
    <label for="sekilas_isi">Sekilas Isi</label>
    <textarea name="sekilas_isi"><?php echo $buku['sekilas_isi']; ?></textarea><br />
    <label for="tanggal_masuk">Tanggal Masuk</label>
    <input type="date" name="tanggal_masuk" value="<?php echo $buku['tanggal_masuk']; ?>" /><br />
    <label for="stok">Stok</label>
    <input type="number" name="stok" value="<?php echo $buku['stok']; ?>" /><br />
    <label for="foto">Foto</label>
    <input type="text" name="foto" value="<?php echo $buku['foto']; ?>" /><br />
    <input type="submit" name="submit" value="Edit Buku" />
    </form>
</body>
</html>
