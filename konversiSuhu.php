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
    <form action="konversiSuhu.php" method="POST">
        Celcius : <input type="text" name="celcius">
                <input type="submit" name="submit" value="hitung">

    </form>
</body>
</html>

<?php
        if(isset($_POST['celcius'])) {     
            $C = $_POST['celcius'];


            //menghitung luas lingkaran
            $R = (4 / 5)*$C;
            $K = $C + 273 ;
            $F = (9 / 5)* $C + 273;

            echo "Diketahui : <br>";
            echo "Celcius = $C<br>";
            echo "Reamur [ (4 / 5) x $C ] = ".round($R)."<br>"; 
            echo "Kelvin [ $C + 273 ]= ".round($K)."<br>"; 
            echo "Fahrenreit [ (9 / 5)* $C + 273 ] = ".round($F)."<br>"; 
        }

    ?>