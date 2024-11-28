<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tambah Produk</h1>
        <div class="text-center mb-3">
            <a href="show.php" class="btn btn-info">Lihat Data Produk</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="./backend/create.php" method="post" enctype="multipart/form-data" class="shadow p-4 rounded">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Input nama produk" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga Produk</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Input harga produk" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Produk</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" name="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
