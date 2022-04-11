<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 302</title>
    <style>
        img{
            width: 25px;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_POST['cetak'])){
        $tinggi = $_POST['tinggi'];
        $url = $_POST['url'];
    }
    ?>
    <form action="" method="post">
        Tinggi : <input type="number" name="tinggi">
        <br>
        Alamat Gambar : <input type="url" name="url">
        <br>
        <button type="submit" name="cetak">Cetak</button>
        <br>
        <br>
    </form>
</body>
</html>

<?php
if(isset($_POST['cetak'])){
    if($tinggi>0){
        $i = 1;
        while($i <= $tinggi){
            $j = 1;
            while($j < $i){
                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; 
                $j++;
            }
            $j = $i;
            while($j<=$tinggi){
                echo '<img src="'.$url.'"/>';
                $j++;
            }
            $i++;
            echo "<br>";
        }
    }
}

?>