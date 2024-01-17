<?php
session_start();
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

    .nilai-container {
      text-align: center;
    }

    .nilai-title {
      color: #7363bd;
      font-size: 2.5rem;
      margin-bottom: 2rem;
    }

    .nilai {
      font-size: 6rem;
      font-weight: 700;
      padding: 2rem;
    }

    .yeay {
      background: url('gambar/yeay.gif') no-repeat;
      background-size: contain;
      background-position: center;
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
    <div class="nilai-container">
      <h1 class="nilai-title">Nilai Kamu</h1>
      <span class="nilai <?= $_SESSION['score'] > 60 ? 'yeay' : ''; ?>"><?= $_SESSION['score']; ?></span>
      <?php $_SESSION['score'] = 0; ?>
    </div>
  </main>
</body>

</html>