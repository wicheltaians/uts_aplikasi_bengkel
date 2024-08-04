<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Kendaraan</title>
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
                    <div class="card-header">Edit Kendaraan</div>

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
                        <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="no_pol">No. Polisi:</label>
                                <input type="text" name="no_pol" id="no_pol" class="form-control" value="{{ old('no_pol', $kendaraan->no_pol) }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="no_mesin">No. Mesin:</label>
                                <input type="text" name="no_mesin" id="no_mesin" class="form-control" value="{{ $kendaraan->no_mesin }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="merek">Merek:</label>
                                <select name="merek" id="merek" class="form-select" required>
                                    <option value="Honda" {{ $kendaraan->merek == 'Honda' ? 'selected' : '' }}>Honda</option>
                                    <option value="Yamaha" {{ $kendaraan->merek == 'Yamaha' ? 'selected' : '' }}>Yamaha</option>
                                    <option value="Suzuki" {{ $kendaraan->merek == 'Suzuki' ? 'selected' : '' }}>Suzuki</option>
                                    <option value="Kawasaki" {{ $kendaraan->merek == 'Kawasaki' ? 'selected' : '' }}>Kawasaki</option>
                                    <option value="Lain" {{ $kendaraan->merek == 'Lain' ? 'selected' : '' }}>Lain</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="warna">Warna:</label>
                                <select name="warna" id="warna" class="form-select" required>
                                    <option value="Putih" {{ $kendaraan->warna == 'Putih' ? 'selected' : '' }}>Putih</option>
                                    <option value="Hitam" {{ $kendaraan->warna == 'Hitam' ? 'selected' : '' }}>Hitam</option>
                                    <option value="Hijau" {{ $kendaraan->warna == 'Hijau' ? 'selected' : '' }}>Hijau</option>
                                    <option value="Biru" {{ $kendaraan->warna == 'Biru' ? 'selected' : '' }}>Biru</option>
                                    <option value="Merah" {{ $kendaraan->warna == 'Merah' ? 'selected' : '' }}>Merah</option>
                                    <option value="Lain" {{ $kendaraan->warna == 'Lain' ? 'selected' : '' }}>Lain</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
