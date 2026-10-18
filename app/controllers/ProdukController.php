<?php
class ProdukController
{
	public function __construct(private Produk $model)
	{
	}

	public function index(): void
	{
		$produk = $this->model->getAll();
		require __DIR__ . '/../views/produk/index.php';
	}

	public function create(): void
	{
		require __DIR__ . '/../views/produk/create.php';
	}

	public function store(): void
	{
		$data = $this->validateInput($_POST);
		$this->model->insert($data);
		header('Location: index.php?page=produk');
		exit;
	}

	public function edit(): void
	{
		$id = (int) ($_GET['id'] ?? 0);
		$produk = $this->model->findById($id);

		if (!$produk) {
			http_response_code(404);
			exit('Data produk tidak ditemukan.');
		}

		require __DIR__ . '/../views/produk/edit.php';
	}

	public function update(): void
	{
		$id = (int) ($_POST['id'] ?? 0);
		$data = $this->validateInput($_POST);
		$this->model->update($id, $data);
		header('Location: index.php?page=produk');
		exit;
	}

	public function delete(): void
	{
		$id = (int) ($_POST['id'] ?? 0);
		$this->model->delete($id);
		header('Location: index.php?page=produk');
		exit;
	}

	private function validateInput(array $input): array
	{
		$data = [
			'kode_produk' => trim($input['kode_produk'] ?? ''),
			'nama_produk' => trim($input['nama_produk'] ?? ''),
			'kategori' => trim($input['kategori'] ?? ''),
			'harga' => trim($input['harga'] ?? ''),
			'stok' => trim($input['stok'] ?? ''),
		];

		if (
			$data['kode_produk'] === ''
			|| $data['nama_produk'] === ''
			|| $data['kategori'] === ''
			|| $data['harga'] === ''
			|| $data['stok'] === ''
		) {
			exit('Kode produk, nama produk, kategori, harga, dan stok wajib diisi.');
		}

		$stok = filter_var($data['stok'], FILTER_VALIDATE_INT);
		if ($stok === false || $stok < 0 || $stok > 2147483647) {
			exit('Stok harus berupa bilangan bulat antara 0 dan 2147483647.');
		}
		$data['stok'] = $stok;

		return $data;
	}
}