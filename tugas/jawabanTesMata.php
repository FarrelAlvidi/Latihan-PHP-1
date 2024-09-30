<?php 
ini_set("display_errors", 0)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Jawaban Tes Mata</title>
</head>
<body>
<?php 

    $jwbn2 = 0;
    // Jawaban Benar
    $jawabanBenar = ["74", "6", "16","2","29","7"
                    ,"45","5","97","8","42","3"];

    $jwbn1 = $_POST["jwbn1"];
    $jwbn2 = $_POST["jwbn2"]; 
    $jwbn3 = $_POST["jwbn3"];
    $jwbn4 = $_POST["jwbn4"];
    $jwbn5 = $_POST["jwbn5"];
    $jwbn6 = $_POST["jwbn6"];
    $jwbn7 = $_POST["jwbn7"];
    $jwbn8 = $_POST["jwbn8"];
    $jwbn9 = $_POST["jwbn9"];
    $jwbn10 = $_POST["jwb10"];
    $jwbn11 = $_POST["jwbn11"];
    $jwbn12 = $_POST["jwbn12"];


    $benar = 0;
    $salah = 0;

    if ($jwbn1 == $jawabanBenar[0]) {
        $benar++;
    } 
    if ($jwbn2 == $jawabanBenar[1]) {
        $benar++;
    } 
    if ($jwbn3 == $jawabanBenar[2]) {
        $benar++;
    } 
    if ($jwbn4 == $jawabanBenar[3]) {
        $benar++;
    } 
    if ($jwbn5 == $jawabanBenar[4]) {
        $benar++;
    } 
    if ($jwbn6 == $jawabanBenar[5]) {
        $benar++;
    } 
    if ($jwbn7 == $jawabanBenar[6]) {
        $benar++;
    } 
    if ($jwbn8 == $jawabanBenar[7]) {
        $benar++;
    } 
    if ($jwbn9 == $jawabanBenar[8]) {
        $benar++;
    } 
    if ($jwbn10 == $jawabanBenar[9]) {
        $benar++;
    } 
    if ($jwbn11 == $jawabanBenar[10]) {
        $benar++;
    } 
    if ($jwbn12 == $jawabanBenar[11]) {
        $benar++;
    } 

    $salah = 12-$benar;
    $persentase = ($benar / 12) * 100;


?>

    <div class="w-3/5 h-96 bg-orange-300 mx-auto mt-40 border rounded-lg shadow-lg relative">
        <div class=" grid grid-cols-3 text-center text-slate-700 font-semibold text-lg p-5">
            <div class="col">
                Jawaban Yang benar
                <hr class="mt-3">
                <h1 class="text-5xl pt-32"><?= $benar ?></h1>
            </div>
            <div class="col">
                Jawaban Yang salah
                <hr class="mt-3">
                <h1 class="text-5xl pt-32"><?= $salah ?></h1>
            </div>
            <div class="col">
                Persentase
                <hr class="mt-3">
                <h1 class="text-5xl pt-32"><?= round($persentase). "%" ?></h1>
            </div>
                
        </div>
    </div>
    <!-- <div class="w-20 h-20 bg-pink-300 rounded-full absolute flex -top-1"> -->
        <form action="tesButaWarna.php">
        <input type="submit" class="text-2xl m-auto absolute-top-1" value="❌">
        </form>
        
    </div>


    

</body>
</html>