<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 202</title>
    <style>
    .error {color: #FF0000;}
    </style>
</head>
<body>
<?php
error_reporting(0);
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$namaErr = $nimErr = $jenis_kelaminErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nama"])) {
    $namaErr = "nama tidak boleh kosong";
  }

  if (empty($_POST["nim"])) {
    $nimErr = "nim tidak boleh kosong";
  } 

  if (empty($_POST["jenis_kelamin"])) {
    $jenis_kelaminErr = "jenis kelamin tidak boleh kosong";
  }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >  
  Nama: <input type="text" name="nama" value="<?php if (isset($nama)) echo $nama;?>">
  <span class="error">* <?php echo $namaErr;?></span><br>
  Nim: <input type="text" name="nim" value="<?php if (isset($nim)) echo $nim;?>">
  <span class="error">* <?php echo $nimErr;?></span><br>
  Jenis Kelamin: 
  <span class="error">* <?php echo $jenis_kelaminErr;?></span><br>
  <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if (isset($jenis_kelamin) and $jenis_kelamin=="Laki-laki") echo "checked";?>>Laki-laki<br>
  <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if (isset($jenis_kelamin) and $jenis_kelamin=="Perempuan") echo "checked";?>>Perempuan<br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
if(isset($_POST['submit'])){
    if($nama != NULL and $nim != NULL and $jenis_kelamin != NULL){
        echo "<h2>Output:</h2>";
        echo "$nama<br>$nim<br>$jenis_kelamin";
    }
}
?>

</body>
</html>