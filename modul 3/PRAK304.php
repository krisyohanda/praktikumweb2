<?php
$jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
    if(isset($_POST['submit'])){
        $jumlah = $_POST['jumlah'];
    }
    if(isset($_POST['tambah'])){
        $jumlah += 1;
    }
    if(isset($_POST['kurang'])){
        $jumlah -= 1;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 304</title>
    <style>
        img{
            width: 80px;
        }
    </style>
</head>
<body>
    <?php
    if($jumlah == NULL): ?>
    <form action="" method="post">
        Jumlah bintang <input type="number" name="jumlah">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    endif;
    if($jumlah != NULL):
    ?>
        Jumlah bintang <?= $jumlah; ?>
        <br>
        <br>
        <br>
        <?php
        for($i = 1; $i <= $jumlah; $i++){
            echo "<img src='star.png'> ";
        }
        ?>
        <form action="" method="post">
        <input type="text" name="jumlah" value="<?= $jumlah ?>" hidden>   
        <button type="submit" name="tambah">Tambah</button>
        <button type="submit" name="kurang">Kurang</button>
        </form>
    <?php
    endif;
    ?>
</body>
</html>