<?php
class Produk
{
	public function __construct(private PDO $db) {}

	public function getAll(): array
	{
		$stmt = $this->db->query(
			'SELECT id, nama, harga, stok FROM produk ORDER BY nama'
		);

		return $stmt->fetchAll();
	}

	public function findById(int $id): array|false
	{
		$stmt = $this->db->prepare(
			'SELECT id, nama, harga, stok FROM produk WHERE id = :id'
		);
		$stmt->execute([':id' => $id]);

		return $stmt->fetch();
	}

	public function insert(array $data): bool
	{
		$sql = 'INSERT INTO produk (nama, harga, stok)
			VALUES (:nama, :harga, :stok)';
		$stmt = $this->db->prepare($sql);

		return $stmt->execute([
			':nama' => $data['nama'],
			':harga' => $data['harga'],
			':stok' => $data['stok'],
		]);
	}

	public function update(int $id, array $data): bool
	{
		$sql = 'UPDATE produk
			SET nama = :nama, harga = :harga, stok = :stok
			WHERE id = :id';
		$stmt = $this->db->prepare($sql);

		return $stmt->execute([
			':id' => $id,
			':nama' => $data['nama'],
			':harga' => $data['harga'],
			':stok' => $data['stok'],
		]);
	}

	public function delete(int $id): bool
	{
		$stmt = $this->db->prepare(
			'DELETE FROM produk WHERE id = :id'
		);

		return $stmt->execute([':id' => $id]);
	}
}
