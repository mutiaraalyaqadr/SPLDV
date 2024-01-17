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
      background: url('gambar/nomor.gif') no-repeat;
      background-size: contain;
      background-position: center;
      margin-bottom: 1rem;
    }

    .title {
      color: #7363bd;
      text-align: center;
      line-height: 1.2;
      margin-top: 1rem;
    }

    .soal-container {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      margin-bottom: 3rem;
      width: min(100%, 1024px);
      margin-inline: auto;
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
    }

    .penjelasan-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1rem;
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
    }

    .benar {
      background-color: #4ade80;
    }

    .salah {
      background-color: #f43f5e;
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
      }

      .jawaban-container {
        justify-content: space-between;
        padding: 1rem 0;
        gap: 1rem;
        width: 50%;
      }

      .penjelasan-img {
        max-height: 300px;
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
    <a href="latihandepan.php" class="back-btn">
      <img src="gambar/balik.png" alt="back">
    </a>
    <a href="" class="logo">
      <img src="gambar/logo.png" alt="logo" class="logo-img">
    </a>
  </header>
  <main class="container">
    <div class="title-container">
      <h1 class="title">Soal<br>2</h1>
    </div>
    <div class="soal-container">
      <img src="gambar/soal2.png" alt="" class="soal-img">
      <div class="jawaban-container">
        <button class="jawaban-btn" data-benar="salah">I</button>
        <button class="jawaban-btn" data-benar="benar">II</button>
        <button class="jawaban-btn" data-benar="salah">III</button>
        <button class="jawaban-btn" data-benar="salah">IV</button>
      </div>
    </div>
    <div class="penjelasan-container hidden">
      <img src="gambar/jaw2.png" alt="penjelasan" class="penjelasan-img">
      <a href="soal-3.php" class="lanjut-btn">Lanjut</a>
    </div>
  </main>

  <script>
    const jawabanBtn = document.querySelectorAll('.jawaban-btn');
    const soalContainer = document.querySelector('.soal-container');
    const penjelasanContainer = document.querySelector('.penjelasan-container');

    jawabanBtn.forEach(btn => {
      btn.addEventListener('click', () => {
        if (btn.dataset.benar === 'benar') {
          btn.classList.add('benar');
          setTimeout(() => {
            penjelasanContainer.classList.remove('hidden');
            soalContainer.classList.add('hidden');
          }, 400);
        } else {
          btn.classList.add('salah');
          setTimeout(() => {
            penjelasanContainer.classList.remove('hidden');
            soalContainer.classList.add('hidden');
          }, 400);
        }
      })
    })
  </script>
</body>

</html>