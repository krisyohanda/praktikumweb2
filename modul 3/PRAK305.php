<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 305</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="string">
        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $string = $_POST['string'];
    echo "<h2>Input:</h2>";
    echo $string;
    echo "<h2>Output:</h2>";
    $panjangString = strlen($string);
    $split = str_split($string);
    for($i = 0; $i < $panjangString; $i++){
        echo strtoupper($split[$i]);
        for($j = 1; $j < $panjangString; $j++){
            echo strtolower($split[$i]);
        }
    }
}
?>
