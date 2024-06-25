<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('buku/create'); ?>
    <label for="kode_buku">Kode Buku</label>
    <input type="text" name="kode_buku" /><br />
    <label for="isbn">ISBN</label>
    <input type="text" name="isbn" /><br />
    <label for="judul_buku">Judul Buku</label>
    <input type="text" name="judul_buku" /><br />
    <label for="pengarang">Pengarang</label>
    <input type="text" name="pengarang" /><br />
    <label for="sekilas_isi">Sekilas Isi</label>
    <textarea name="sekilas_isi"></textarea><br />
    <label for="tanggal_masuk">Tanggal Masuk</label>
    <input type="date" name="tanggal_masuk" /><br />
    <label for="stok">Stok</label>
    <input type="number" name="stok" /><br />
    <label for="foto">Foto</label>
    <input type="text" name="foto" /><br />
    <input type="submit" name="submit" value="Tambah Buku" />
    </form>
</body>
</html>
