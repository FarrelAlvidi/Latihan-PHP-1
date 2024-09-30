


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="get.php" method="get">
        <label for="">Nama aja : </label>
        <input type="text" name="nama">
        <label for="">Kaki aja : </label>
        <input type="text" name="kaki">
        <input type="submit" name="submit">
    </form>
    <!-- <pre> -->
    <?php
    //isset berfungsi untuk mengecek 
    if(isset($_GET["submit"])) {
        $inputNama = $_GET ["nama"];
        $inputKaki = $_GET ["kaki"];
        echo "Nama nya : " .$inputNama; 
        echo "<br>";
        echo "Kaki nya : " .$inputKaki; 
        echo "<br>";
        

        if( $inputKaki == 4) {
            echo "Hewan ini mamalia";
            
        } else {

            echo "Bukan mamalia";
    }
}
    
    

    ?>
    <!-- </pre> -->
    
</body>
</html>