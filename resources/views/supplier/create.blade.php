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
                    <div class="card-header">Tambah Supplier</div>

                    <div class="card-body">
                        <form action="{{ route('supplier.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="nama_supplier">Nama Supplier:</label>
                                <input type="text" name="nama_supplier" id="nama_supplier" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat">Alamat:</label>
                                <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="no_hp">No. HP:</label>
                                <input type="number" name="no_hp" id="no_hp" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="id_barang">Barang:</label>
                                <select class="form-select" id="id_barang" name="id_barang" required>
                                    <option value="">---</option>
                                    @foreach($dataBarang as $barang)
                                        <option value="{{ $barang->id }}" {{ old('id_barang') == $barang->id ? 'selected' : '' }}>
                                            {{ $barang->nama_barang . ' - ' . $barang->merek }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="{{ route('supplier.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>



