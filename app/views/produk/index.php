<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<title>Daftar Produk</title>
</head>
<body>
	<h2>Daftar Produk</h2>
	<a href="index.php?page=produk&action=create">Tambah Data</a>
	<table border="1" cellpadding="8" cellspacing="0">
		<tr>
			<th>Nama</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Aksi</th>
		</tr>
		<?php foreach ($produk as $p): ?>
			<tr>
				<td><?= htmlspecialchars($p['nama']) ?></td>
				<td><?= htmlspecialchars($p['harga']) ?></td>
				<td><?= htmlspecialchars($p['stok']) ?></td>
				<td>
					<a href="index.php?page=produk&action=edit&id=<?= $p['id'] ?>">Edit</a>
					<form method="post"
                            action="index.php?page=produk&action=delete"
                            style="display:inline"
                            onsubmit="return confirm('Hapus data ini?')">
						<input type="hidden" name="id" value="<?= $p['id'] ?>">
						<button type="submit">Hapus</button>
					</form>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>