<?php
ini_set('display_errors',0);
if (isset($_POST['submit'])) {
    $num1=$_POST['number1'];
    $num2=$_POST['number2'];
    $hasil = 0;
            if(isset($_POST['operator']))
            {
        $operation = $_POST['operator'];
            switch ($operation) {
                case "+":
                    $hasil = $num1 + $num2;
                    break;
                case '-':
                    $hasil = $num1 - $num2;
                    break;
                case '*':
                    $hasil = $num1 * $num2;
                    break;
                case '/':
                    $hasil = $num1 / $num2;
                    break;    
                case '%':
                    $hasil = $num1 % $num2;
                    break;    
                default :
                    $hasil = 0;

            }
} else{
    echo "Please select Operation";
}
}

?>





<!doctype html>
<html lang="en">
  <head>    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Kalkulator BMI!</title>
</head>
<body>
    
    <div class="container d-flex justify-content-center">
        <div class="card mt-4" style="width:18rem">
            <div class="card-header text-center">Kalkulator</div>
            <div class="card-body">
                <form action="kalkulatorV2.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-sm" name="number1" placeholder="Masukkan Bilangan Pertama" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-sm" name="number2"  placeholder="Masukkan Bilangan Kedua" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <select name="operator" style="width: 180px;">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                            <option value="%">%</option>
                        </select>                        
                        <button type="submit" name="submit" class="btn btn-danger btn-sm" value="hasil">Hitung</button>            
                    </div>
                    <div class="mt-3 p-2 border border-black rounded"><?php echo $hasil; ?></div>
                </form>
            </div>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>


