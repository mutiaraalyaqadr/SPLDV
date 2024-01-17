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

        .actions {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .keluar-btn {
            display: grid;
            place-items: center;
            transition: 0.2s ease;
        }

        .keluar-btn:hover {
            transform: scale(1.1);
        }

        .keluar-btn img {
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
            padding: 2rem 0;
        }

        .title-container {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .burung-burung {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: -1;
            height: 100px;
        }

        .info-btn {
            transition: 0.2s ease;
            padding: 0 1rem;
            background-color: #ffdafa;
            color: #7363BD;
            font-size: 1.85rem;
            font-weight: bold;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 2px 0px 4px rgba(0, 0, 0, 0.25);
        }

        .info-btn:hover {
            transform: scale(1.1);
        }

        .title {
            font-size: 2.5rem;
            text-align: center;
            color: #4B4D59;
            text-shadow: 5px -5px 0 #F4F1DE
        }

        .menu-container {
            display: grid;
            grid-template-columns: 1fr;
            place-items: center;
            gap: 1rem;
            margin-top: 2rem;
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
                padding-right: 3rem;
            }

            .menu-container {
                margin-top: 4rem;
                grid-template-columns: repeat(3, 1fr);
            }

            .menu-item img {
                height: 130px;
                transition: 0.2s ease;
            }

            .menu-item:hover {
                transform: scale(1.1);
            }
        }

        @media screen and (min-width: 1024px) {}
    </style>
</head>

<body>
    <header class="header">
        <div class="actions">
            <a href="cover.php" class="keluar-btn">
                <img src="gambar/door" alt="pintu">
            </a>
            <a href="info.php" class="info-btn">
                !
            </a>
        </div>
        <a href="" class="logo">
            <img src="gambar/logo.png" alt="logo" class="logo-img">
        </a>
    </header>
    <main class="container">
        <div class="title-container">
            <img src="gambar/burung-burung.gif" alt="burung-burung" class="burung-burung">
            <h1 class="title">SPLDV</h1>
        </div>
        <section class="menu-container">
            <a href="petunjuk.php" class="menu-item">
                <img src="gambar/pet1.png" alt="gambar petunjuk">
            </a>
            <a href="subm.php" class="menu-item">
                <img src="gambar/mat1.png" alt="gambar materi">
            </a>
            <a href="latihandepan.php" class="menu-item">
                <img src="gambar/lat1.png" alt="gambar latihan">
            </a>
            <a href="games.php" class="menu-item">
                <img src="gambar/gam1.png" alt="gambar games">
            </a>
            <a href="evaluasidepan.php" class="menu-item">
                <img src="gambar/uji1.png" alt="gambar ujian">
            </a>
            <a href="https://chat.whatsapp.com/JP0SmAtzYL2Jhb59XKMdz2" class="menu-item" target="_blank">
                <img src="gambar/diskusi1.png" alt="gambar diskusi">
            </a>
        </section>
    </main>
</body>

</html>