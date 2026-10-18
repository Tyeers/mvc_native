<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<title>Tambah Produk</title>
</head>
<body>
	<h2>Tambah Produk</h2>
	<form method="post" action="index.php?page=produk&action=store">
		<label>Kode Produk</label><br>
		<input type="text" name="kode_produk" required><br><br>
		<label>Nama Produk</label><br>
		<input type="text" name="nama_produk" required><br><br>
		<label>Kategori</label><br>
		<input type="text" name="kategori" required><br><br>
		<label>Harga</label><br>
		<input type="number" name="harga" required><br><br>
		<button type="submit">Simpan</button>
		<a href="index.php?page=produk">Kembali</a>
	</form>
</body>
</html>