<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 201</title>
</head>
<body>
        <?php
        error_reporting(0);
        $nama1=$_POST['nama1'];
        $nama2=$_POST['nama2'];
        $nama3=$_POST['nama3'];
        ?>
    <form action="" method="post">
        Nama: 1 <input type="text" name="nama1"><br>
        Nama: 2 <input type="text" name="nama2"><br>
        Nama: 3 <input type="text" name="nama3"><br>
        <button type="submit" name="submit">Urutkan</button>

        <?php
        if(isset($_POST['submit'])){
            if($nama1 > $nama2 and $nama1 > $nama3){
                if($nama2 > $nama3){
                    echo "<br>$nama3<br>$nama2<br>$nama1";
                }
                else{
                    echo "<br>$nama2<br>$nama3<br>$nama1";
                }
            }
            else if($nama2 > $nama1 and $nama2 > $nama3){
                if($nama1 > $nama3){
                    echo "<br>$nama3<br>$nama1<br>$nama2";
                }
                else{
                    echo "<br>$nama1<br>$nama3<br>$nama2";
                }
            }
            else if($nama3 > $nama1 and $nama3 > $nama2){
                if($nama1 > $nama2){
                    echo "<br>$nama2<br>$nama1<br>$nama3";
                }
                else{
                    echo "<br>$nama1<br>$nama2<br>$nama3";  
                }
            }
        }
        ?>
    </form>
</body>
</html>