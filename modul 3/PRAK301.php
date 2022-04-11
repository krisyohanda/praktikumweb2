<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 301</title>
    <style>
        .ganjil {color: red;}
        .genap {color: green;}
    </style>
</head>
<body>
    <?php
    if(isset($_POST["cetak"])){
        $jumlah = $_POST["jumlah"];
    }
    ?>
    <form action="" method="post">
        Jumlah Peserta : <input type="number" name="jumlah">
        <br>
        <button type="submit" name="cetak">Cetak</button>
    </form>
</body>
</html>

<?php
    if(isset($_POST["cetak"])){
        $i = 1;
        while($i <= $jumlah){
            if($i % 2 != 0){
                echo "<h2><span class='ganjil'>Peserta ke-$i<br></span><h2>";
            }
            else{
                echo "<h2><span class='genap'>Peserta ke-$i<br></span><h2>";
            }
            $i++;
        }
    }
?>