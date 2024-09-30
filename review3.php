<?php

// $bilangan1 = 3;
// $bilangan2 = 20;
// $hasil = $bilangan1 + $bilangan2;
// echo "$hasil";

$username = "atmin";
$password = 123;
$user = "pengwal";

if ($username == "atmin" && $password == 123 && $user == "pengawal") {
    echo "Berhasil Lugin";
} else {
    echo "Yaha lupa password";
}
echo "<br><br><br>";
$nilai = 100;

if ($nilai <= 70) {
    echo "C";
} elseif ($nilai <= 80) {
    echo "B";
} elseif ($nilai <= 100) {
    echo "A";
}

echo "<br><br>";
$keterangan = "s";




switch ($keterangan) {
    case 's':
        echo "Siswa Sakit";
        break;
    case 'a':
        echo "Siswa Alpha";
        break;    
    case 'i':
        echo "Siswa Izin";
        break;
    default:
        echo "Value ini Tidak ada";
        break;
}