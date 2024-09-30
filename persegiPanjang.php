<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Persegi Panjang</title>
</head>
<body>
    <h1>Hitung Persegi Panjang</h1>
    <h2>Isi Data :</h2>
    <form action="persegiPanjang.php" method="POST">
        Panjang : <input type="text" name="panjang">
        Lebar : <input type="text" name="lebar">
                <input type="submit" name="submit" value="hitung">

    </form>
</body>
</html>

<?php
        if(isset($_POST['panjang'])) {     
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];

            //menghitung luas lingkaran
            $luasPersegiP = $panjang * $lebar;
            $keliling = 2 * ($panjang + $lebar);

            echo "Diketahui : <br>";
            echo "Panjang = $panjang <br>";
            echo "Lebar = $lebar<br>";
            echo "Maka luas Lingkaran adalah [$panjang x $lebar] = ".round($luasPersegiP)."<br>"; 
            echo "Maka Keliling lingkaran adalah [2 x ($panjang + $lebar)] = ".round($keliling);    
        }

    ?>