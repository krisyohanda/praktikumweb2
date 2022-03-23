<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 204</title>
</head>
<body>
        <?php
        if(isset($_POST['submit'])){
            $nilai=$_POST['nilai'];
        }
        ?>
    <form action="" method="post">
        Nilai : <input type="number" name="nilai" value="<?php echo $nilai;?>"><br>
        <input type="submit" name="submit" value="Konversi">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    if($nilai == 0){
        echo "<h2>Hasil: Nol</h2>";
    }
    else if($nilai > 0 and $nilai <= 9){
        echo "<h2>Hasil: Satuan</h2>";
    }
    else if($nilai > 10 and $nilai <= 19){
        echo "<h2>Hasil: Belasan<h2>";
    }
    else if($nilai == 10 or $nilai > 19 and $nilai <=99){
        echo "<h2>Hasil: Puluhan</h2>";
    }
    else if($nilai >= 100 and $nilai <= 999){
        echo "<h2>Hasil: Ratusan</h2>";
    }
    else{
        echo "Anda Menginput Melebihi Limit Bilangan";
    }
}
?>