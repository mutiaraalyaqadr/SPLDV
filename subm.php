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
        width: min(calc(100% - 2rem), 1150px);
        margin-inline: auto;
    }

    .materi {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 2rem;
    }

    .materi-title {
        color: #4B4D59;
        font-size: 2rem;
        text-shadow:
            -2px -2px 0 #F4F1DE,
            0 -2px 0 #F4F1DE,
            2px -2px 0 #F4F1DE,
            2px 0 0 #F4F1DE,
            2px 2px 0 #F4F1DE,
            0 2px 0 #F4F1DE,
            -2px 2px 0 #F4F1DE,
            -2px 0 0 #F4F1DE;
    }

    .materi-content {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .materi-btn {
        transition: 0.2s ease;
        padding: 5px 15px;
        background-color: #7363BD;
        color: #F4F1DE;
        font-weight: 600;
        border: none;
        border-radius: 42px;
        box-shadow: 2px 0px 4px rgba(0, 0, 0, 0.25);
        text-align: center;
    }

    .materi-btn:hover {
        transform: scale(1.1);
    }

    .materi-img {
        text-align: center;
    }

    .materi-img img {
        height: 300px;
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

    .modal {
        width: min(calc(100% - 2rem), 850px);
        height: 540px;
        border: solid 4px #7363BD;
        background: #F4F1DE;
        overflow-y: auto;
        padding: 1rem;
    }

    .modal-title {
        text-align: center;
        color: #7363BD;
        margin-bottom: 1rem;
    }

    .modal-text {
        margin-bottom: 1.5rem;
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
        .materi {
            flex-direction: row;
            justify-content: center;
            gap: 4rem;
        }

        .materi-title {
            font-size: 3.5rem;
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

        .materi-btn {
            font-size: 1.25rem;
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
        <div class="materi">
            <h1 class="materi-title">SPLDV</h1>
            <div class="materi-content">
                <a href="#" class="materi-btn" id="petaKonsepBtn">Peta Konsep Sistem Persamaan Linear Dua Variabel</a>
                <a href="mod.php" class="materi-btn">Model dan Sistem Persamaan Linear Dua Variabel</a>
                <a href="pen.php" class="materi-btn">Penyelesaian pada Persamaan Linear Dua Variabel</a>
            </div>
        </div>
        <div class="materi-img">
            <img src="gambar/fly-book.gif" alt="fly book">
        </div>
    </main>
    <div class="backdrop hidden" id="petaKonsep">
        <a href="#" class="close-btn">
            &times;
        </a>
        <div class="modal peta-konsep">
            <h2 class="modal-title">Peta Konsep</h2>
            <img src="gambar/peta.png" alt="peta konsep">
        </div>
    </div>

    <script>
    const petaKonsep = document.getElementById('petaKonsep');
    const petaKonsepBtn = document.getElementById('petaKonsepBtn');
    const closeBtn = document.querySelector('.close-btn');

    petaKonsepBtn.addEventListener('click', () => {
        petaKonsep.classList.remove('hidden');
    });

    closeBtn.addEventListener('click', () => {
        petaKonsep.classList.add('hidden');
    });
    </script>
</body>

</html>