<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="gambar/logotab.png">
    <title>Boommath</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins", sans-serif;
            font-size: 1rem;
            min-height: 100vh;
            background: linear-gradient(to top, #f4f1de 0%, #5dceff 100%);
            color: #4B4D59;
        }

        a {
            text-decoration: none;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        h1,
        p {
            margin: 0;
        }

        .header {
            width: min(calc(100% - 2rem), 1150px);
            display: flex;
            justify-content: end;
            padding: 1rem 0;
            margin-inline: auto;
        }

        .logo-img {
            height: 75px;
        }

        .logo {
            cursor: default;
        }

        .container {
            width: min(calc(100% - 2rem), 1250px);
            margin-inline: auto;
        }

        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
        }

        .hero-img {
            width: 100%;
            order: 1;
            text-align: center;
        }

        .hero-content {
            width: 100%;
            order: 2;
        }

        .title {
            color: #7363BD;
            font-size: 2rem;
        }

        .subtitle {
            font-weight: 600;
            margin: 1rem 0;
        }

        .cta {
            text-align: center;
            margin: 0.5rem 0;
        }

        .mulai-btn {
            background-color: #7363BD;
            color: #f4f1de;
            border: none;
            border-radius: 80px;
            box-shadow: 2px 0px 4px rgba(0, 0, 0, 0.25);
            transition: 0.2s ease;
            padding: 1rem 2rem;
            font-weight: 600;
            cursor: pointer;
            display: inline-block;
            font-size: 1.5rem;
        }

        .mulai-btn:hover {
            transform: scale(1.1);
        }

        @media screen and (min-width: 768px) {
            .logo-img {
                height: 75px;
            }

            .hero {
                flex-direction: row;
            }

            .hero-content {
                order: 1;
                padding-left: 7rem;
            }

            .hero-img {
                order: 2;
            }

            .hero-img img {
                height: 350px;
            }

            .title {
                font-size: 3rem;
            }

            .subtitle {
                font-size: 1.25rem;
            }
        }

        @media screen and (min-width: 1024px) {}
    </style>
</head>

<body>
    <header class="header">
        <a href="cover.php" class="logo">
            <img src="gambar/logo.png" alt="logo" class="logo-img">
        </a>
    </header>
    <main class="container">
        <div class="hero">
            <div class="hero-content">
                <h1 class="title">SELAMAT DATANG!</h1>
                <h3 class="subtitle">Materi SPLDV untuk kelas 8 SMP dengan pembahasan yang detail dan tentunya mudah
                    dipahami.</h3>
                <p class="desc">Belajar SPLDV dengan seru sambil memainkan banyak jenis games yang gak ngebosenin.</p>
            </div>
            <div class="hero-img">
                <img src="gambar/cover1.gif" alt="hero image">
            </div>
        </div>
        <div class="cta">
            <a href="beranda.php" class="mulai-btn">Mulai Belajar</a>
        </div>
    </main>
</body>

</html>