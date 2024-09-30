<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Persegi</title>
</head>
<body>
    <h1>Hitung Persegi </h1>
    <h2>Isi Data :</h2>
    <form action="persegi.php" method="POST">
        Sisi : <input type="text" name="sisi">
                <input type="submit" name="submit" value="hitung">

    </form>
</body>
</html>

<?php
        if(isset($_POST['sisi'])) {     
            $sisi = $_POST['sisi'];


            //menghitung luas lingkaran
            $luasPersegi = $sisi * $sisi;
            $keliling = 4 * $sisi;

            echo "Diketahui : <br>";
            echo "Sisi = $sisi<br>";
            echo "Maka luas Lingkaran adalah [$sisi x $sisi] = ".round($luasPersegi)."<br>"; 
            echo "Maka Keliling lingkaran adalah [4 x $sisi] = ".round($keliling);
        }

    ?>