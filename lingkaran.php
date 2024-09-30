<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Lingkaran</title>
</head>
<body>
    <h1>Hitung Luas Lingkaran</h1>
    <h2>Isi Data :</h2>
    <form action="lingkaran.php" method="POST">
        Jari-Jari : <input type="text" name="jari-jari">
                    <input type="submit" name="submit" value="hitung">
    </form>
</body>
</html>

<?php
        if(isset($_POST["jari-jari"])) {     
            $jari = $_POST["jari-jari"];
            $phi = 3.14;

            //menghitung luas lingkaran
            $luas = $phi*($jari*$jari);

            echo "Diketahui : <br>";
            echo "Jari-Jari = $jari <br>";
            echo "Phi = $phi<br>";
            echo "Maka luas Lingkaran adalah [$phi x $jari x $jari] = ".round($luas);
        }

    ?>