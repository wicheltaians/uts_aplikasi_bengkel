<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Keluhan</title>
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
                    <div class="card-header">Edit Keluhan</div>

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
                        <form action="{{ route('keluhan.update', $keluhan->id_keluhan) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="nama_keluhan">Nama Keluhan:</label>
                                <input type="text" name="nama_keluhan" id="nama_keluhan" class="form-control" value="{{ old('nama_keluhan', $keluhan->nama_keluhan) }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="ongkos">Ongkos:</label>
                                <input type="number" name="ongkos" id="ongkos" class="form-control" value="{{ old('ongkos', $keluhan->ongkos) }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="no_pol">No. Polisi:</label>
                                <select name="no_pol" id="no_pol" class="form-select" required>
                                    @foreach ($kendaraans as $kendaraan)
                                        <option value="{{ $kendaraan->no_pol }}" {{ old('no_pol', $keluhan->no_pol) == $kendaraan->no_pol ? 'selected' : '' }}>
                                            {{ $kendaraan->no_pol }} - {{ $kendaraan->merek }} - {{ $kendaraan->warna }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="customer_id">Customer:</label>
                                <select name="customer_id" id="customer_id" class="form-control" required>
                                    @foreach($customers as $customer)
                                        <option value="{{ $customer->id_customer }}" {{ $customer->id_customer == $keluhan->id_customer ? 'selected' : '' }}>
                                            {{ $customer->nama_customer}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="id_pegawai">Pegawai:</label>
                                <select name="id_pegawai" id="id_pegawai" class="form-control" required>
                                    @foreach($pegawais as $pegawai)
                                        <option value="{{ $pegawai->id_pegawai }}" {{ $pegawai->id_pegawai == $keluhan->id_pegawai ? 'selected' : '' }}>
                                            {{ $pegawai->nama_pegawai }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('keluhan.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
