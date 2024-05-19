<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bengkel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .centered-content {
            text-align: center;
            background: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .title-icon {
            font-size: 50px;
            color: #ff5733;
        }
        .title-text {
            font-size: 40px;
            margin-top: 20px;
            margin-bottom: 30px;
        }
        .btn-start {
            font-size: 20px;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <div class="centered-content">
        <i class="fas fa-tools title-icon"></i>
        <div class="title-text">Aplikasi Pemesanan Bengkel</div>
        <a href="{{ url('/barang') }}" class="btn btn-primary btn-start">
            Mulai <i class="fas fa-arrow-right"></i>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
