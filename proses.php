<?php
session_start();
require 'koneksi.php';

$idSoal = $_POST['idSoal'];
$jawaban = $_POST['jawaban'];

$result = mysqli_query($link, "SELECT * FROM tb_soal_contoh WHERE no_soal = $idSoal");
$soal = mysqli_fetch_assoc($result);

if ($jawaban == $soal['kunci']) {
  $_SESSION['score'] += 20;
}
