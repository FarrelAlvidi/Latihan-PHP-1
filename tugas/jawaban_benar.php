<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kuis</title>
</head>
<body>
    <h2>Hasil Kuis</h2>

    <?php
    // Jawaban yag benar
    $jawabanBenar = ["4", "Hypertext Markup Languange"];

    // Ambil jawaban dari formulir
    $jawaban1 = $_POST["jawaban1"];
    $jawaban2 = $_POST["jawaban2"];

    // Inisialisasi jumlah jawaban yang benar
    $jumlahBenar = 0;
    $salah = 0;

    // Memeriksa jawaban Pertama
    if ($jawaban1 == $jawabanBenar[0]) {
        $jumlahBenar++;
    }

    // Memeriksa jawaban kedua
    if (($jawaban2) == $jawabanBenar[1]) {
        $jumlahBenar++;
    }

    $salah= 12-$jumlahBenar;


    // Menampilkan Hasil
    echo "<p>Jawaban Anda:</p>";
    echo "<p>Pertanyaan 1 :</p>";
    echo "<p>Pertanyaan 2 :</p>";

    echo "<p>Jumlah jawaban yang benar : $jumlahBenar</p>";
    echo "<p>Jumlah jawaban yang salah : $salah</p>";

    ?>
</body>
</html>