<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Keluhan</title>
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
                    <div class="card-header">Tambah Keluhan</div>

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
                        <form action="{{ route('keluhan.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="nama_keluhan">Nama Keluhan:</label>
                                <input type="text" name="nama_keluhan" id="nama_keluhan" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="ongkos">Ongkos:</label>
                                <input type="number" name="ongkos" id="ongkos" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="no_pol">No. Polisi:</label>
                                <select name="no_pol" id="no_pol" class="form-select" required>
                                    <option value="">---</option>
                                    @foreach ($kendaraans as $kendaraan)
                                        <option value="{{ $kendaraan->no_pol }}">{{ $kendaraan->no_pol }} - {{ $kendaraan->merek }} - {{ $kendaraan->warna }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="customer_id">Customer:</label>
                                <select name="customer_id" id="customer_id" class="form-control">
                                    <option value="">---</option>
                                    @foreach($customers as $customer)
                                        <option value="{{ $customer->id_customer }}">{{ $customer->nama_customer }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="id_pegawai">Pegawai:</label>
                                <select name="id_pegawai" id="id_pegawai" class="form-control">
                                    <option value="">---</option>
                                    @foreach($pegawais as $peg)
                                        <option value="{{ $peg->id_pegawai }}">{{ $peg->nama_pegawai }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="{{ route('keluhan.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
