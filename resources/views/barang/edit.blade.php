<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Barang</title>
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
           
            <div class="navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('barang.index') }}">Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('supplier.index') }}">Supplier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kendaraan.index') }}">Kendaraan</a>
                    </li>
		            <li class="nav-item">
                        <a class="nav-link" href="{{ route('customers.index') }}">Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pegawai.index') }}">Pegawai</a>
                    </li>
		            <li class="nav-item">
                        <a class="nav-link" href="{{ route('keluhan.index') }}">Keluhan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Barang</div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('barang.update', $barang->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="nama_barang">Nama Barang:</label>
                                <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="{{ $barang->nama_barang }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="merek">Merek:</label>
                                <input type="text" name="merek" id="merek" class="form-control" value="{{ $barang->merek }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="harga">Harga:</label>
                                <input type="number" name="harga" id="harga" class="form-control" value="{{ $barang->harga }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="stok">Stok:</label>
                                <input type="number" name="stok" id="stok" class="form-control" value="{{ $barang->stok }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="satuan">Satuan:</label>
                                <input type="text" name="satuan" id="satuan" class="form-control" value="{{ $barang->satuan }}" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('barang.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>



