<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kendaraan</title>
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
<body class="bg-secondary">

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
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Daftar Kendaraan</div>

                    <div class="card-body">
                        <a href="{{ route('kendaraan.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">No Polisi</th>
                                    <th scope="col">No Mesin</th>
                                    <th scope="col">Merek</th>
                                    <th scope="col">Warna</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kendaraans as $kendaraan)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $kendaraan->no_pol }}</td>
                                        <td>{{ $kendaraan->no_mesin }}</td>
                                        <td>{{ ucfirst($kendaraan->merek) }}</td>
                                        <td>{{ ucfirst($kendaraan->warna) }}</td>
                                        <td>
                                            <a href="{{ route('kendaraan.edit', $kendaraan->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('kendaraan.destroy', $kendaraan->id) }}" method="POST" style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Belum ada data untuk saat ini.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
