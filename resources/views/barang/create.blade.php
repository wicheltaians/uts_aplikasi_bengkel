<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            display: flex-col;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                Bengkel
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('barang.index') }}">Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('supplier.index') }}">Supplier</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Barang</div>

                    <div class="card-body">
                        <form action="{{ route('barang.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="nama_barang">Nama Barang:</label>
                                <input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="merek">Merek:</label>
                                <input type="text" name="merek" id="merek" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="harga">Harga:</label>
                                <input type="number" name="harga" id="harga" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="stok">Stok:</label>
                                <input type="number" name="stok" id="stok" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="satuan">Satuan:</label>
                                <input type="text" name="satuan" id="satuan" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>



