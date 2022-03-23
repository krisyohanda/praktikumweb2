<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 203</title>
</head>
<body>
    <?php
    error_reporting(0);
    $nilai=$_POST['nilai'];
    $dari=$ke="";
    ?>
    <form action="" method="post">
        Nilai : <input type="number" name="nilai" value="<?php if(isset($nilai)) echo $nilai;?>"><br>
        Dari : <br>
        <input type="radio" name="dari" value="Celcius" <?php if (isset($dari) and $dari=="Celcius") echo "checked";?>>Celcius<br>
        <input type="radio" name="dari" value="Fahrenheit" <?php if (isset($dari) and $dari=="Fahrenheit") echo "checked";?>>Fahrenheit<br>
        <input type="radio" name="dari" value="Rheamur" <?php if (isset($dari) and $dari=="Rheamur") echo "checked";?>>Rheamur<br>
        <input type="radio" name="dari" value="Kelvin" <?php if (isset($dari) and $dari=="Kelvin") echo "checked";?>>Kelvin<br>
        Ke : <br>
        <input type="radio" name="ke" value="Celcius" <?php if (isset($ke) and $ke=="Celcius") echo "checked";?>>Celcius<br>
        <input type="radio" name="ke" value="Fahrenheit" <?php if (isset($ke) and $ke=="Fahrenheit") echo "checked";?>>Fahrenheit<br>
        <input type="radio" name="ke" value="Rheamur" <?php if (isset($ke) and $ke=="Rheamur") echo "checked";?>>Rheamur<br>
        <input type="radio" name="ke" value="Kelvin" <?php if (isset($ke) and $ke=="Kelvin") echo "checked";?>>Kelvin<br>
        <button type="submit" name="submit">Konversi</button><br>

        <?php
        if(isset($_POST['submit'])){
            $dari=$_POST['dari'];
            $ke=$_POST['ke'];
            if($dari == "Celcius" and $ke == "Fahrenheit"){
                echo "<h2>Hasil Konversi: ",(9/5*$nilai)+32," &degF";
            }
            else if($dari == "Celcius" and $ke == "Rheamur"){
                echo "<h2>Hasil Konversi: ",(4/5*$nilai)," &degR";
            }
            else if($dari == "Celcius" and $ke == "Kelvin"){
                echo "<h2>Hasil Konversi: ",(273.15+$nilai)," K";
            }
            else if($dari == "Fahrenheit" and $ke == "Celcius"){
                echo "<h2>Hasil Konversi: ",($nilai-32)*5/9," &degC";
            }
            else if($dari == "Fahrenheit" and $ke == "Rheamur"){
                echo "<h2>Hasil Konversi: ",($nilai-32)*4/9," &degR";
                
            }
            else if($dari == "Fahrenheit" and $ke == "Kelvin"){
                echo "<h2>Hasil Konversi: ",($nilai-32)*5/9+273.15," K";
                
            }
            else if($dari == "Rheamur" and $ke == "Celcius"){
                echo "<h2>Hasil Konversi: ",$nilai*5/4," &degC";
            }
            else if($dari == "Rheamur" and $ke == "Fahrenheit"){
                echo "<h2>Hasil Konversi: ",(9/4*$nilai)+32," &degF";
            }
            else if($dari == "Rheamur" and $ke == "Kelvin"){
                echo "<h2>Hasil Konversi: ",(5/4*$nilai)+273.15," K";
            }
            else if($dari == "Kelvin" and $ke == "Celcius"){
                echo "<h2>Hasil Konversi: ",$nilai-273.15," &degC";
            }
            else if($dari == "Kelvin" and $ke == "Fahrenheit"){
                echo "<h2>Hasil Konversi: ",($nilai-273.15)*9/5+32," &degF";
            }
            else if($dari == "Kelvin" and $ke == "Rheamur"){
                echo "<h2>Hasil Konversi: ",($nilai-273.15)*4/5," &degR";
            }
            else{
                echo "<h2>Konversi tidak bisa dilakukan</h2>";
            }
        }
        ?>
    </form>
</body>
</html>
