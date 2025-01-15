<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            max-width: 350px;
            padding: 2%px;
            text-align: center;
        }

        .container h1 {
            text-align: left; /* Atur teks menjadi left align */
        }

        .container button, .container a {
            width: 100%;
            padding: 4% 2%;
            margin: 1%;
            cursor: pointer;
            font-family: 'Urbanist', sans-serif;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .container h1 {
            color: #1D681B;
            margin-top: 3.5rem;
        }

        .btn-primary {
            background-color: #1D681B; /* Warna latar belakang */
            color: #fff; /* Warna teks (foreground) */
         }
        .btn-visitor {
            border: none;
        }

        .btn-primary:hover {
            background-color: #506B6A; /* Warna latar belakang saat dihover */
            color: #fff; /* Warna teks (foreground) saat dihover */
        }

        .btn-admin {
            background-color: #fff; /* Warna latar belakang */
            border-color: #1D681B; /* Warna border */
            border-width: 3px; /* Lebar border */
            color: #1D681B; /* Warna teks (foreground) */
        }
    </style>
</head>
<body background="User/img/background.jpg">
    <div class="container">
        <h1>Selamat datang di Kebun Binatang <br>
             Nusantara!</h1>
        <div class="buttons">
            <a class="btn btn-primary btn-visitor" href="{{ url('/login_pengunjung') }}">Masuk sebagai Pengunjung</a>
        </div>
    </div>
</body>
</html>
