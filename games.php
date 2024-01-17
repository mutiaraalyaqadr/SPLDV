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
            width: min(calc(100% - 1rem), 1150px);
            margin-inline: auto;
            padding-bottom: 2rem;
            margin-left: 5%;
        }

        .title {
            font-size: 3.5rem;
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
            margin-bottom: 2rem;
        }

        .games {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 3rem;
        }

        .games-img {
            text-align: center;
        }

        .games-img img {
            max-height: 300px;
        }

        .games-content {
            display: grid;
            gap: 2rem;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: auto 1fr;
            place-items: start;
        }

        .games-btn {
            transition: 0.2s ease;
            padding: 10px 20px;
            background-color: #7363BD;
            color: #F4F1DE;
            font-weight: bold;
            font-size: 20px;
            border: none;
            border-radius: 42px;
            box-shadow: 2px 0px 4px rgba(0, 0, 0, 0.25);
            text-align: center;
        }

        .games-btn:hover {
            transform: scale(1.1);
        }

        .backdrop {
            position: fixed;
            z-index: 100;
            background: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            display: grid;
            place-items: center;
        }

        .game-frame {
            width: min(calc(100% - 2rem), 850px);
            height: 500px;
            border: solid 4px #7363BD;
        }

        .close-btn {
            position: absolute;
            top: 1rem;
            right: 1rem;
            padding: 0 .75rem;
            background-color: #ffdafa;
            color: #7363BD;
            font-size: 1.85rem;
            font-weight: bold;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 2px 0px 4px rgba(0, 0, 0, 0.25);
        }

        .hidden {
            display: none;
        }

        @media screen and (min-width: 768px) {
            .games {
                flex-direction: row;
                justify-content: center;
            }

            .games-img {
                text-align: right;
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
        <h1 class="title">Games</h1>
        <section class="games">
            <div class="games-img">
                <img src="gambar/stickps.png" alt="stick ps">
            </div>
            <div class="games-content">
                <a href="#" class="games-btn" id="game1">Burung Terbang</a>
                <a href="#" class="games-btn" id="game2">Mobil Pantai</a>
                <a href="#" class="games-btn" id="game3">Tumpukan Balok</a>
                <a href="#" class="games-btn" id="game4">Tebak Kata</a>
            </div>
        </section>
    </main>
    <div class="backdrop hidden">
        <a href="#" class="close-btn">
            &times;
        </a>
        <iframe src="" class="game-frame"></iframe>
    </div>

    <script>
        const game1 = document.getElementById('game1');
        const game2 = document.getElementById('game2');
        const game3 = document.getElementById('game3');
        const game4 = document.getElementById('game4');
        const gameFrame = document.querySelector('.game-frame');
        const backdrop = document.querySelector('.backdrop');
        const closeBtn = document.querySelector('.close-btn');

        game1.addEventListener('click', () => {
            gameFrame.src = 'burung.php';
            backdrop.classList.remove('hidden');
        });

        game2.addEventListener('click', () => {
            gameFrame.src = 'car.php';
            backdrop.classList.remove('hidden');
        });

        game3.addEventListener('click', () => {
            gameFrame.src = '3dcube.php';
            backdrop.classList.remove('hidden');
        });

        game4.addEventListener('click', () => {
            gameFrame.src = 'tebakkata.php';
            backdrop.classList.remove('hidden');
        });

        closeBtn.addEventListener('click', () => {
            backdrop.classList.add('hidden');
        });
    </script>
</body>

</html>