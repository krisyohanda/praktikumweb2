<?php
session_start();
require("Model.php");

//memeriksa user sudah login apa belum, jika sudah login maka akan menampilkan halaman index.php
if(isset($_SESSION["login"])){
header("Location: index.php");
}
//memeriksa tombol submit udah ditekan atau belum
if(isset($_POST["login"])){

    $nomor_member = $_POST["nomor_member"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM member WHERE nomor_member = '$nomor_member'");

    //cek nomor_member
    if(mysqli_num_rows($result) === 1){
        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            //set session
            $_SESSION["login"] = true;
            
            header("Location: index.php");
            exit;
        }
    }

    $error = true;

}
?>

<?php
require("Style.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>
    <h2>Login</h2>

    <?php if(isset($error)):?>
        <h5 style="color: red; font-style:italic; text-align:center;">Nomor Member/Password salah!</h5>
    <?php endif ?>
    <section class="container blue-text">
    <form action="" method="POST">
        <label class="black-text" for="nomor_member">Nomor Member : </label>
        <input type="text" name="nomor_member" id="nomor_member" required>
        <label class="black-text" for="password">Password : </label>
        <input type="password" name="password" id="password" required>
        <div class="center">
        <button class="waves-effect waves-light blue btn" type="submit" name="login">Login</button>
        </div>
    </form>
    </section>
</body>

</html>