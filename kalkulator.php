<?php
ini_set("display_errors", "0");
if (isset($_POST["number1"]) && ($_POST["number2"]) && ($_POST["operator"])) {
    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];
    $operator = $_POST["operator"];

        switch ($operator) {
            case '+':
                $hasil = $num1 + $num2;
                break;
            
            case '-':
                $num1 - $num2;
                break;
            
            case '+':
                $num1 + $num2;
                break;
            
            case '+':
                $num1 + $num2;
                break;
            
            case '+':
                $num1 + $num2;
                break;
            

        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <form action="kalkulator.php" method="post"  >
        Bilangan 1:
        <input type="number" name="number1" > <br><br>
        Bilangan 2:
        <input type="number" name="number2" > <br><br>

        Select Operation : <br><br>
        <input type="radio" name="operator" value="+"> Tambah <br>
        <input type="radio" name="operator" value="-"> Kurang <br>
        <input type="radio" name="operator" value="*"> Kali <br>
        <input type="radio" name="operator" value="/"> Bagi <br>
        <input type="radio" name="operator" value="%"> Modulo <br>
        <input type="submit" name="submit" value="hasil"> <br><br>
        <h2 style="color:blue">Output <?php echo $hasil; ?></h2>


    </form>
</body>
</html>