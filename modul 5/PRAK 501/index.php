<?php
require("Style.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        .button{
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h2 class="card-panel indigo lighten-2">Dashboard</h2>
    </div>
    <div class="button">
        <a href="Member.php" class="waves-effect waves-light blue btn-large"><i class="material-icons left">people</i>Data Member</a>
        <a href="Peminjaman.php" class="waves-effect waves-light red btn-large"><i class="material-icons left">pan_tool</i>Data Peminjaman</a>
        <a href="Buku.php" class="waves-effect waves-light green btn-large"><i class="material-icons left">book</i>Data Buku</a>
    </div>
</body>
</html>