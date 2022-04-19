<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 401</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid #000;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        Panjang : <input type="string" name="panjang">
        <br>
        Lebar : <input type="string" name="lebar">
        <br>
        Nilai : <input type="string" name="str">
        <br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <table>
        <br>
    <?php
    if(isset($_POST['submit'])){
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $str = $_POST['str'];
    $hasil = explode(" ", $str);
    $loop=0;
    $length=$panjang*$lebar;
    if($length == count($hasil)){
        for($i=0; $i<$panjang; $i++){
            echo "<tr>";
            for($j=0; $j<$lebar; $j++){
                echo "<td>";
                echo $hasil[$loop];
                $loop++;
                echo "</td>";
            }
            echo "</tr>";
        }
        }
        else{
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        }
    }
?>
    </table>
</body>
</html>