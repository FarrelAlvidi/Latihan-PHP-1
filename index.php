<?php
ini_set("display_errors", "0");
    if(isset($_POST["kirim"])) {
        $gajiKtr = $_POST["gajiKtr"];
        $status = $_POST["status"];
        $jumlT = $_POST["jumlT"];


        


        if($status == "tdkKawin" && $jumlT == "0" ) {
            $PKTP = 54000000;
        } elseif($status == "tdkKawin" && $jumlT == "1" ) {
            $PKTP = 58500000;
        } elseif($status == "tdkKawin" && $jumlT == "2" ) {
            $PKTP = 63000000;
        } elseif($status == "tdkKawin" && $jumlT == "3" ) {
            $PKTP = 67500000;
        } elseif($status == "kawin" && $jumlT == "0" ) {
            $PKTP = 58500000;
        } elseif($status == "Kawin" && $jumlT == "1" ) {
            $PKTP = 63000000;
        } elseif($status == "Kawin" && $jumlT == "2" ) {
            $PKTP = 67500000;
        } elseif($status == "Kawin" && $jumlT == "3" ) {
            $PKTP = 72000000;
        }
        
        $gajiSthn = $gajiKtr * 12;
        $PKP = $gajiSthn - $PKTP;
        $PPH = (5/100) * $PKP;
        $PPB = $PPH / 12;
        $bpjskesehatan = (1/100) * $gajiKtr;
        $bpjsketenagakerja = (2/100) * $gajiKtr;
        $gajiBersih = $gajiKtr - ($PPB + $bpjskesehatan + $bpjsketenagakerja);
    }




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Gaji</title>
</head>
<body>
    <div class="container mx-auto pt-5">
        <div class="head text-center">
                <h1 class="text-4xl font-semibold">Kalkulator Gaji</h1>
                <p>Kalkulator Gaji membantu kamu menghitung gaji bersih bulanan dengan lebih mudah.</p>
            </div>
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                <form action="index.php" method="POST">
                <label for="formGroupExampleInput" class="form-label">Gaji Kotor Bulanan</label>
                <input type="number" class="form-control" name="gajiKtr" placeholder="Rp.">
                </div>
                <div class="d-flex gap-5">
                    <div class="mb-3">
                    <p>Status Perkawinan</p>
                    <select name="status" id="" class="form-select">
                            <option value="tdkKawin">Tidak Kawin</option>
                            <option value="kawin">Kawin</option>
                    </select>
                    </div>
                    <div class="mb-3">
                    <p>Jumlah Tanggungan</p>
                    <select name="jumlT" id="" class="form-select">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
                
                <input type="submit" name="kirim" value="hasil"></input>
                </form>
            </div>
            <div class="col-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Gaji Bulanan : <?php echo $gajiKtr ?><br>
                Gaji Disetahunkan : <?php echo $gajiSthn ?><br>
                Penghasilan Tidak Kena Pajak (PKTP) : <?= $PKTP ?><br>
                Penghasilan Kena Pajak (PKP) : <?= $PKP ?> <br>
                <hr>
                Pajak Penghasilan Tahunan (PPh 21) : <?= $PPH ?> <br>
                Pajak Penghasilan Bulanan : <?= $PPB ?>  <br>
                BPJS Kesehatan : <?= $bpjskesehatan ?> <br>
                BPJS Ketenagakerjaan : <?= number_format($bpjsketenagakerja,2,',','.'); ?>  <br>
                <hr>
                Gaji Bersih Bulanan (Take Home Pay) :
                <h1><?= number_format($gajiBersih,2,',','.');    ?></h1>
                
                </div>
        </div>
    </div>
    
    




</body>
</html>