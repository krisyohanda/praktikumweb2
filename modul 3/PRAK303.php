<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 303</title>
    <style>
        img{
            width: 15px;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_POST['cetak'])){
        $batasBawah = $_POST['batasBawah'];
        $batasAtas = $_POST['batasAtas'];
    }
    ?>
    <form action="" method="post">
        Batas Bawah: <input type="number" name="batasBawah">
        <br>
        Batas Atas: <input type="number" name="batasAtas">
        <br>
        <button type="submit" name="cetak">Cetak</button>
        <br>
        <br>
    </form>
    
</body>
</html>

<?php
if(isset($_POST['cetak'])){
    $i = $batasBawah;
    do{
        if(($i+7)%5 == 0){
            echo "<img src='star.png'> ";
        }
        else{
            echo "$i ";
        }
        $i++;
    }while($i <= $batasAtas);
}
?>