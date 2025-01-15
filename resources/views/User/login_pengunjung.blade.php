<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengunjung</title>
    <link rel="icon" href="img/logo_putih.png" type="png" sizes="18x18">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700&display=swap">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: rgba(0, 0, 0, 0.75);
            font-family: 'Urbanist', sans-serif;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 350px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.75);
            border-radius: 10px;
            text-align: center;
        }

        .container h2,
        .container p {
            text-align: left;
        }

        .container button {
            margin-top: 10px;
        }

        .container input[type="name"],
        .container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #fff;
            box-sizing: border-box;
            font-family: 'Urbanist', sans-serif;
            background-color: #ececec;
        }

        .container button {
            width: 100%;
            padding: 10px;
            background-color: #1D681B;
            color: #ccc;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Urbanist', sans-serif;
            font-weight: bold;
        }

        .container h2 {
            color: #1D681B;
            margin-top: 60px;
        }

        .container button:active {
            outline: 2px solid #1D681B;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 40px;
            height: 40px;
            background-image: url("img/back.png");
            background-size: cover;
            border: none;
            cursor: pointer;
        }

        .back-button:hover {
            filter: brightness(80%);
        }

        .container button:hover {
            background-color: #155011;
        }
    </style>
</head>
<body background="User/img/background.jpg">
    <div class="container">
        @if($errors->any())
        <div>
            @foreach ($errors->all() as $item)
            <h3 style="color: crimson; margin-left: -25px;">{{ $item }}</h3>
            @endforeach
        </div>
        @endif
        <a href="/" class="back-button"></a>
        <h2>Selamat datang di Kebun <br> Binatang Nusantara!</h2>
        <p>Masukkan Nomor Tiket untuk Memulai Petualangan</p>
        
        <form action="" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Masukkan Nama Anda">
            <input type="text" name="password" placeholder="Masukkan Nomor Tiket" value="{{ old('No_Tiket') }}" required>
            <button type="submit">Login Sebagai Pengunjung</button>
        </form>
    </div>
</body>
</html>
