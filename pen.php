<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boommath</title>
    <link rel="icon" type="image/png" href="gambar/logotab.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        overflow-x: hidden;
        background: linear-gradient(to top, #f4f1de 0%, #5dceff 100%);
        min-height: 100vh;
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1rem 0rem;
        width: calc(100% - 2rem);
        max-width: 1150px;
        margin-inline: auto;
        z-index: 1000;
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

    .parallax {
        position: relative;
        display: flex;
        justify-content: center;
        height: 100vh;
    }

    .parallax img {
        position: absolute;
        height: 100%;
        object-fit: cover;
        pointer-events: none;
    }

    .parallax #sun {
        top: 0;
        left: 0;
    }

    .parallax #aw1 {
        top: 0;
        right: 0;
    }

    .parallax #aw11 {
        top: 0;
        left: 0;
    }

    .parallax #aw2 {
        bottom: 0;
        width: 100%;
        height: calc(100% - 100px);
    }

    .parallax #shad {
        width: 100%;
    }

    #text {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 2.5rem;
        text-align: center;
        color: #7363bd;
    }

    .sec {
        position: relative;
        padding: 100px 1rem;
        background: linear-gradient(to top, #5dceff 0%, #ffffff 100%);
        width: 100%;
    }

    .sec h3 {
        font-size: 3rem;
        color: black;
        margin-bottom: 10px;
    }

    .sec p {
        font-size: 1rem;
        color: black;
        font-weight: 300;
    }

    .penting {
        border: 2px solid #7363bd;
        background-color: #f4f1de;
        color: #f4f1de;
        padding: 10px;
    }

    .penting p {
        color: #7363bd;
    }

    .ss-img {
        display: grid;
        place-items: center;
    }

    .ss-img img {
        max-width: 100%;
        max-height: 350px;
    }

    .tabel p {
        color: black;
        text-align: center;
    }

    .video-frame {
        position: relative;
        max-width: 560px;
    }

    .video-frame iframe {
        position: absolute;
        top: 5.3%;
        left: 17.7%;
        width: 64.5%;
        height: 41.5%;
        border-radius: 4px;
    }

    .video-frame img {
        width: 100%;
        height: auto;
    }

    @media screen and (min-width: 1024px) {
        .sec {
            padding: 100px 100px;
        }
    }
    </style>
</head>

<body>
    <header>
        <a href="subm.php" class="back-btn">
            <img src="gambar/balik.png" alt="">
        </a>
        <a href="" class="logo">
            <img src="gambar/logo.png" alt="logo" class="logo-img">
        </a>
    </header>
    <section class="parallax">
        <h3 id="text">Penyelesaian Persamaan Linear Dua Variabel</h3>
        <img src="gambar/sunpl.png" id="sun">
        <img src="gambar/awanpl1.png" id="aw1">
        <img src="gambar/awanpl11.png" id="aw11">
        <img src="gambar/awanpl2.png" id="aw2">
        <img src="gambar/shadowpl.png" id="shad">
    </section>
    <section class="sec">
        <h2>Menentukan Selesaian Persamaan Linear Dua Variabel</h2>
        <br>
        <p>Bu Retno bertanggung jawab atas koperasi
            sekolah. Koperasi sekolah dibuka setiap hari dan
            menjual segala kebutuhan siswa. Namun, karena
            mengajar, Bu Retno tidak setiap waktu menjaga
            koperasi sekolah. Oleh karena itu, Bu Retno
            memberlakukan “Sistem Kejujuran” setiap siswa
            yang ingin membeli pensil dan penghapus.
        </p>
        <p>
            Siswa hanya tinggal meletakkan uangnya ke dalam
            “kotak kejujuran” yang disediakan. Di koperasi
            sekolah, harga setiap pensil adalah Rp2.500,00
            dan harga setiap penghapus Rp1.500,00.
        </p>
        <p>
            Suatu hari, Bu Retno mendapatkan Rp10.500,00 dalam kotak kejujuran. Beliau merasa kebingungan
            ketika menentukan harga pensil dan penghapus yang terjual. Supaya lebih mudah, Bu Retno membuat
            dua daftar harga: satu untuk harga pensil dan satu lagi untuk harga penghapus.
        </p>
        <br>
        <div class="tabel">
            <p>Tabel. Daftar harga pensil dan penghapus</p>
        </div>
        <div class="ss-img">
            <img src="gambar/tabpen.png" alt="Penyelesaian">
        </div>
        <br>
        <p>
            Bu Retno mengira bahwa barang yang terjual adalah 3 pensil dan 2 penghapus. Apakah ada
            kemungkinan lainnya?
            Di hari yang lain terdapat Rp15.000,00 dalam kotak kejujuran. Bu Retno tidak dapat menentukan apa
            saja yang terjual. Bisakah kalian membantu Bu Retno?
            Nah, banyak pensil dan penghapus yang kalian tentukan merupakan selesaian persamaan linear dua
            variabel jika menghasilkan jumlah yang sama dengan jumlah uang yang ada dalam kotak.
        </p>
        <br><br>
        <h2>Video Penyelesaian Persamaan Linear Dua Variabel</h2>
        <div class="video-frame" data-video-id="VIDEO_ID">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Qt6kwpgZiK8"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            <img src="gambar/laptop.png" alt="Laptop Frame">
        </div>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/ScrollTrigger.min.js"></script>
    <script>
    gsap.from("#sun", {
        scrollTrigger: {
            scrub: true
        },
        x: 0,
        y: 200,
    })
    gsap.from("#aw1", {
        scrollTrigger: {
            scrub: true
        },
        x: 200,
        y: 30,
    })
    gsap.from("#aw11", {
        scrollTrigger: {
            scrub: true
        },
        x: -200,
        y: 80,
    })
    gsap.from("#aw2", {
        scrollTrigger: {
            scrub: true,
            end: '+=400'
        },
        y: 200,
    })
    gsap.from("#shad", {
        scrollTrigger: {
            scrub: true
        },
        y: 0,
    })
    gsap.from("#text", {
        scrollTrigger: {
            scrub: true
        },
        y: 50,
    })
    </script>

    <script>
    function playVideo() {
        var frame = document.querySelector('.video-frame');
        var videoId = frame.dataset.videoId;
        var embedUrl = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1';
        frame.innerHTML = '<iframe width="100%" height="100%" src="' + embedUrl +
            '" frameborder="0" allowfullscreen></iframe>';
    }

    document.querySelector('.play-button').addEventListener('click', playVideo);
    </script>
</body>

</html>