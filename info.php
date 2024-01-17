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

        .me img {
            display: block;
            margin-inline: auto;
            width: 300px;
            height: 225px;
        }

        .me {
            width: 100%;
            cursor: default;
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

        .title {
            font-size: 2.5rem;
            text-align: center;
            color: #4B4D59;
            text-shadow: 5px -5px 0 #F4F1DE;
            margin-bottom: 4rem;
        }

        .info {
            display: flex;
            flex-direction: column;
            align-items: start;
            gap: 4rem;
        }

        .info-img,
        .info-content {
            width: 100%;
        }

        .info-img {
            text-align: center;
        }

        .info-img img {
            max-height: 350px;
        }

        .info-content {
            display: grid;
            gap: 1rem;
            grid-template-columns: auto 1fr;
            grid-template-rows: auto 1fr;
            place-items: start;
            margin-top: 4rem;
        }

        .info-btn {
            transition: 0.2s ease;
            padding: 10px 20px;
            background-color: #7363BD;
            color: #F4F1DE;
            font-weight: bold;
            font-size: 20px;
            border: none;
            border-radius: 42px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
        }

        .info-btn:hover {
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

        .modal {
            width: min(calc(100% - 2rem), 850px);
            height: 450px;
            border: solid 4px #7363BD;
            background: #F4F1DE;
            overflow-y: auto;
            padding: 1rem;
        }

        .modal-tujuan {
            width: min(calc(100% - 2rem), 900px);
            height: 250px;
            border: solid 4px #7363BD;
            background: #F4F1DE;
            overflow-y: auto;
            padding: 1rem;
        }

        .modal-sumber {
            width: min(calc(100% - 2rem), 900px);
            height: 355px;
            border: solid 4px #7363BD;
            background: #F4F1DE;
            overflow-y: auto;
            padding: 1rem;
        }

        .modal-tentang {
            width: min(calc(100% - 2rem), 900px);
            height: 455px;
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
            color: #4B4D59;
        }

        .contact-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #7363BD;
            width: 50px;
            height: 50px;
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
            .info {
                flex-direction: row;
            }

            .info-img {
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
        <h1 class="title">Informasi</h1>
        <section class="info">
            <div class="info-img">
                <img src="gambar/gerak-roket.gif" alt="roket">
            </div>
            <div class="info-content">
                <a href="#" class="info-btn" id="TUJUANBtn">Tujuan</a>
                <a href="#" class="info-btn" id="KIKDBtn">KI & KD</a>
                <a href="#" class="info-btn" id="SUMBERBtn">Sumber</a>
                <a href="#" class="info-btn" id="TENTANGBtn">Tentang</a>
            </div>
        </section>
    </main>
    <div class="backdrop hidden" id="SUMBER">
        <a href="#" class="close-btn">
            &times;
        </a>
        <div class="modal-sumber">
            <h2 class="modal-title">Sumber</h2>
            <p class="modal-text">Kemendikbud. 2014. Matematika untuk SMP/MTs Kelas VIII Semester 2. Jakarta :
                Kementerian Pendidikan dan Kebudayaan.
            </p>
            <p class="modal-text">https://youtu.be/Y-bBMViJfwg.
            </p>
            <p class="modal-text">https://youtu.be/QU97QS-WfQo.
            </p>
            <p class="modal-text">https://youtu.be/bUxrbDCWZ5E.
            </p>
            <p class="modal-text">https://youtu.be/Qt6kwpgZiK8.
            </p>
        </div>
    </div>
    <div class="backdrop hidden" id="KIKD">
        <a href="#" class="close-btn">
            &times;
        </a>
        <div class="modal ki-kd">
            <h2 class="modal-title">Kompetensi Inti</h2>
            <p class="modal-text">KI-1 dan KI-2: Menghargai dan menghayati ajaran agama yang dianutnya serta Menghargai
                dan menghayati perilaku jujur, disiplin, santun, percaya diri, peduli, dan bertanggung jawab dalam
                berinteraksi secara efektif sesuai dengan perkembangan anak di lingkungan, keluarga, sekolah, masyarakat
                dan lingkungan alam sekitar, bangsa, negara, dan kawasan regional.
            </p>
            <p class="modal-text">KI-3: Memahami dan menerapkan pengetahuan faktual, konseptual, prosedural, dan
                metakognitif pada tingkat teknis dan spesifik sederhana berdasarkan rasa ingin tahunya tentang ilmu
                pengetahuan, teknologi, seni, budaya dengan wawasan kemanusiaan, kebangsaan, dan kenegaraan terkait
                fenomena dan kejadian tampak mata.
            </p>
            <p class="modal-text">KI-4: Menunjukkan keterampilan menalar, mengolah, dan menyaji secara kreatif,
                produktif, kritis, mandiri, kolaboratif, dan komunikatif, dalam ranah konkret dan ranah abstrak sesuai
                dengan yang dipelajari di sekolah dan sumber lain yang sama dalam sudut pandang teori.
            </p>

            <h2 class="modal-title">Kompetensi Dasar</h2>
            <p class="modal-text">3.5 Menjelaskan sistem persamaan linear dua variabel dan penyelesaiannya yang
                dihubungkan dengan masalah kontekstual.
            </p>
            <p class="modal-text">4.5 Menyelesaikan masalah yang berkaitan dengan sistem persamaan linear dua variable
            </p>
        </div>
    </div>
    <div class="backdrop hidden" id="TUJUAN">
        <a href="#" class="close-btn">
            &times;
        </a>
        <div class="modal-tujuan">
            <h2 class="modal-title">Tujuan</h2>
            <p class="modal-text">1. Mengidentifikasi persamaan linear dua variabel dengan benar.
            </p>
            <p class="modal-text">2. Membuat persamaan linear dua variabel sebagai model matematika dari masalah dengan
                benar.
            </p>
            <p class="modal-text">3. Mengidentifikasi selesaian dari persamaan linear dua variabel yang diketahui dengan
                benar.
            </p>
        </div>
    </div>
    <div class="backdrop hidden" id="TENTANG">
        <a href="#" class="close-btn">
            &times;
        </a>
        <div class="modal-tentang">
            <h2 class="modal-title">Tentang dibalik pembuatan situs Boommath</h2>
            <a href="#" class="me">
                <img src="gambar/me.jpg" alt="me">
                <p class="modal-text">Hai, perkenalkan nama saya Mutiara Alya Qadr, seorang mahasiswi semester 4 jurusan
                    Pendidikan Matematika di UIN Syarif Hidayatullah Jakarta. Saya ingin memperkenalkan sebuah situs
                    pembelajaran yang telah saya selesaikan untuk memenuhi tugas akhir mata kuliah Media dan Teknologi
                    Pembelajaran Matematika. Boommath adalah sarana pembelajaran dengan berbasis teknologi yang
                    didalamnya sudah tersedia materi, latihan, ujian, games, serta ruang untuk berdiskusi. Situs ini
                    secara khusus membahas materi Sistem Persamaan Linear Dua Variabel untuk siswa tingkat SMP/MTs kelas
                    VIII.
                </p>
                <p class="modal-text">Saya ingin mengungkapkan rasa terima kasih kepada Bapak Drs. Dindin Sobiruddin,
                    M.Kom, dosen pengampu mata kuliah Media dan Teknologi Pembelajaran Matematika. Beliau memberikan
                    tugas ini kepada kami dan memberikan bimbingan yang berharga dalam proses pengembangan situs ini.
                    Tidak hanya itu, saya juga ingin mengucapkan terima kasih kepada Kak Zulfikar, teman online saya
                    yang ikut membantu saya dalam proses pembuatan situs ini hingga jadi seperti sekarang. Dengan
                    hadirnya Boommath semoga dapat membuat siswa lebih mudah dan menyenangkan dalam mempelajari materi
                    Sistem Persamaan Linear Dua Variabel ini.
                </p>
                <div class="contact-links">
                    <a class="contact-link" href="https://www.instagram.com/mutiaraalyaqadr" target="_blank">
                        <img src="gambar/ig icon.png" alt="Instagram">
                    </a>

                    <a class="contact-link" href="mailto:mutiara.alya09@gmail.com">
                        <img src="gambar/email.png" alt="Email">
                    </a>

                    <a class="contact-link" href="https://wa.me/6289663461201" target="_blank">
                        <img src="gambar/wa icon.png" alt="WhatsApp">
                    </a>
                </div>
        </div>
    </div>

    <script>
        const KIKDBtn = document.getElementById('KIKDBtn');
        const TUJUANBtn = document.getElementById('TUJUANBtn');
        const SUMBERBtn = document.getElementById('SUMBERBtn');
        const TENTANGBtn = document.getElementById('TENTANGBtn');
        const KIKD = document.getElementById('KIKD');
        const TUJUAN = document.getElementById('TUJUAN');
        const SUMBER = document.getElementById('SUMBER');
        const TENTANG = document.getElementById('TENTANG');
        const closeBtn = document.querySelectorAll('.close-btn');

        KIKDBtn.addEventListener('click', () => {
            KIKD.classList.remove('hidden');
        });

        closeBtn.forEach(btn => {
            btn.addEventListener('click', () => {
                KIKD.classList.add('hidden');
            });
        });

        TUJUANBtn.addEventListener('click', () => {
            TUJUAN.classList.remove('hidden');
        });

        closeBtn.forEach(btn => {
            btn.addEventListener('click', () => {
                TUJUAN.classList.add('hidden');
            });
        });

        SUMBERBtn.addEventListener('click', () => {
            SUMBER.classList.remove('hidden');
        });

        closeBtn.forEach(btn => {
            btn.addEventListener('click', () => {
                SUMBER.classList.add('hidden');
            });
        });

        TENTANGBtn.addEventListener('click', () => {
            TENTANG.classList.remove('hidden');
        });

        closeBtn.forEach(btn => {
            btn.addEventListener('click', () => {
                TENTANG.classList.add('hidden');
            });
        });
    </script>
</body>

</html>