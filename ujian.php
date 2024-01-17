<?php
session_start();
require 'koneksi.php';

$result = mysqli_query($link, "SELECT * FROM tb_soal_contoh");
$soal = [];
while ($row = mysqli_fetch_assoc($result)) {
    $soal[] = $row;
}
shuffle($soal);
?>


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
        background: linear-gradient(to bottom, #f4f1de 0%, #5dceff 100%);
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

    .back-btn {
        display: grid;
        place-items: center;
        transition: 0.2s ease;
    }

    .back-btn:hover {
        transform: scale(1.1);
    }

    .back-btn img {
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

    .title-container {
        display: grid;
        place-items: center;
        background: url('gambar/eval.gif') no-repeat;
        background-size: contain;
        background-position: center;
        padding: 1rem;
    }

    .title {
        color: #7363bd;
        text-align: center;
    }

    .ujian-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .soal-container {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin-bottom: 2rem;
        width: min(100%, 1024px);
        margin-inline: auto;
    }

    .soal-img {
        max-height: 495px;
        max-width: 400px;
    }

    .jawaban-container {
        display: flex;
        flex-direction: column;
        width: 100%;
        gap: .5rem;
    }

    .jawaban-btn {
        width: 100%;
        padding: .5rem;
        cursor: pointer;
        background-color: #fff;
        border: 2px solid #7363bd;
        border-radius: 4px;
        flex-grow: 1;
        font-weight: 600;
        font-size: 1.25rem;
        font-family: "Poppins", sans-serif;
        text-align: center;
    }

    .lanjut-btn {
        font-size: 1.5rem;
        color: #fff;
        font-weight: 600;
        border: 2px solid #fff;
        border-radius: 4px;
        padding: .25rem 3rem;
        background-color: #4B4D59;
        font-family: "Poppins", sans-serif;
        cursor: pointer;
        margin-bottom: 2rem;
    }

    .jawaban-btn:hover,
    .selected {
        background-color: #cbd5e1;
    }

    .hidden {
        display: none;
    }

    @media screen and (min-width: 768px) {
        .soal-container {
            flex-direction: row;
            gap: 2rem;
        }

        .soal-img {
            width: 50%;
            max-height: 300px;
        }

        .jawaban-container {
            justify-content: space-between;
            padding: 1rem 0;
            gap: 1rem;
            width: 50%;
        }
    }

    @media screen and (min-width: 1024px) {
        .soal-container {
            gap: 6rem;
        }
    }
    </style>
</head>

<body>
    <header class="header">
        <a href="evaluasidepan.php" class="back-btn">
            <img src="gambar/balik.png" alt="back">
        </a>
        <a href="" class="logo">
            <img src="gambar/logo.png" alt="logo" class="logo-img">
        </a>
    </header>
    <main class="container">
        <div class="title-container">
            <h1 class="title">Ujian</h1>
        </div>
        <?php for ($i = 0; $i < count($soal); $i++) : ?>
        <div class="ujian-container <?= $i == 0 ? '' : 'hidden'; ?>" id="ujian<?= $i + 1; ?>">
            <div class="soal-container">
                <img src="<?= $soal[$i]['file_gambar']; ?>" alt="" class="soal-img">
                <form id="formJawaban<?= $i + 1; ?>" class="jawaban-container">
                    <input type="hidden" name="idSoal" value="<?= $soal[$i]['no_soal']; ?>">

                    <input type="radio" name="jawaban" id="a<?= $i + 1; ?>" class="hidden" value="A">
                    <label for="a<?= $i + 1; ?>" class="jawaban-btn"><?= $soal[$i]['pilihan_a']; ?></label>

                    <input type="radio" name="jawaban" id="b<?= $i + 1; ?>" class="hidden" value="B">
                    <label for="b<?= $i + 1; ?>" class="jawaban-btn"><?= $soal[$i]['pilihan_b']; ?></label>

                    <input type="radio" name="jawaban" id="c<?= $i + 1; ?>" class="hidden" value="C">
                    <label for="c<?= $i + 1; ?>" class="jawaban-btn"><?= $soal[$i]['pilihan_c']; ?></label>

                    <input type="radio" name="jawaban" id="d<?= $i + 1; ?>" class="hidden" value="D">
                    <label for="d<?= $i + 1; ?>" class="jawaban-btn"><?= $soal[$i]['pilihan_d']; ?></label>
                </form>
            </div>
            <button class="lanjut-btn"
                id="<?= $i == (count($soal) - 1) ? 'selesai' : 'lanjut' . ($i + 2) ?>"><?= $i == (count($soal) - 1) ? 'Selesai' : 'Lanjut'; ?></button>

        </div>
        <?php endfor; ?>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $('.jawaban-btn').click(function() {
        $('.jawaban-btn').removeClass('selected');
        $(this).addClass('selected');
    });

    $('#lanjut2').click(function(e) {
        e.preventDefault();
        $('#ujian1').addClass('hidden');
        $('#ujian2').removeClass('hidden');

        $.ajax({
            url: 'http://localhost:8080/spldv/mutia/proses.php',
            type: 'post',
            data: $('#formJawaban1').serialize(),
            success: function() {
                console.log('jawaban terkirim');
            }
        });
    });

    $('#lanjut3').click(function(e) {
        e.preventDefault();
        $('#ujian2').addClass('hidden');
        $('#ujian3').removeClass('hidden');

        $.ajax({
            url: 'http://localhost:8080/spldv/mutia/proses.php',
            type: 'post',
            data: $('#formJawaban2').serialize(),
            success: function() {
                console.log('jawaban terkirim');
            }
        });
    });

    $('#lanjut4').click(function(e) {
        e.preventDefault();
        $('#ujian3').addClass('hidden');
        $('#ujian4').removeClass('hidden');

        $.ajax({
            url: 'http://localhost:8080/spldv/mutia/proses.php',
            type: 'post',
            data: $('#formJawaban3').serialize(),
            success: function() {
                console.log('jawaban terkirim');
            }
        });
    });

    $('#lanjut5').click(function(e) {
        e.preventDefault();
        $('#ujian4').addClass('hidden');
        $('#ujian5').removeClass('hidden');

        $.ajax({
            url: 'http://localhost:8080/spldv/mutia/proses.php',
            type: 'post',
            data: $('#formJawaban4').serialize(),
            success: function() {
                console.log('jawaban terkirim');
            }
        });
    });

    $('#selesai').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: 'http://localhost:8080/spldv/mutia/proses.php',
            type: 'post',
            data: $('#formJawaban5').serialize(),
            success: function() {
                window.location.href = 'http://localhost:8080/spldv/mutia/hasil.php';
            }
        });
    })
    </script>
</body>

</html>