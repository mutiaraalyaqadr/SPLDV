<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
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
        }

        a {
            text-decoration: none;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        h1 {
            margin: 0;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 0;
            width: min(calc(100% - 2rem), 1150px);
            margin-inline: auto;
        }

        .menu-btn {
            display: grid;
            place-items: center;
            transition: 0.2s ease;
        }

        .menu-btn:hover {
            transform: scale(1.1);
        }

        .menu-btn img {
            height: 3rem;
            filter: drop-shadow(2px 0px 4px rgba(0, 0, 0, 0.25));
        }

        .logo-img {
            height: 75px;
        }

        .logo {
            cursor: default;
        }

        .container {
            width: min(calc(100% - 2rem), 1024px);
            margin-inline: auto;
            padding: 1rem 0;
        }

        .title-container {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .title {
            font-size: 3rem;
            text-align: center;
            color: #4B4D59;
            text-shadow:
                -3px -3px 0 #F4F1DE,
                0 -3px 0 #F4F1DE,
                3px -3px 0 #F4F1DE,
                3px 0 0 #F4F1DE,
                3px 3px 0 #F4F1DE,
                0 3px 0 #F4F1DE,
                -3px 3px 0 #F4F1DE,
                -3px 0 0 #F4F1DE;
        }

        .menu-container {
            display: grid;
            grid-template-columns: 1fr;
            place-items: center;
            gap: 4rem;
            margin-top: 3rem;
            margin-left: 1.6rem;
            width: 92%;
        }

        @media screen and (min-width: 572px) {
            .menu-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media screen and (min-width: 768px) {
            .logo-img {
                height: 75px;
            }

            .container {
                padding-top: 0;
                padding-right: 1rem;
            }

            .menu-container {
                margin-top: 2rem;
                grid-template-columns: repeat(5, 1fr);
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <a href="beranda.php" class="menu-btn">
            <img src="gambar/rumah.png" alt="rumah">
        </a>
        <a href="" class="logo">
            <img src="gambar/logo.png" alt="logo" class="logo-img">
        </a>
    </header>
    <main class="container">
        <div class="title-container">
            <h1 class="title">Petunjuk</h1>
        </div>
        <section class="menu-container">
            <img src="gambar/pemat.png" alt="pemat">
            <img src="gambar/pelat.png" alt="pemat">
            <img src="gambar/pegimm.png" alt="pemat">
            <img src="gambar/peuj.png" alt="pemat">
            <img src="gambar/pediss.png" alt="pemat">
        </section>
    </main>
</body>

</html>