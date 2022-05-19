<?php
require("Model.php");
require("Style.php");
$buku = getData("buku");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Buku</title>
</head>

<body>
    <h1 class="card-panel green darken-4">Daftar Buku</h1>
    <div class="buttonadd">
        <a href="FormBuku.php" class="waves-effect waves-light blue btn-large"><i class="material-icons left">add</i>Add Data Buku</a>
        <a href="index.php" class="waves-effect waves-light orange btn-large"><i class="material-icons left">home</i>Kembali ke dashboard</a>
    </div>
    <table>
        <tr class="card-panel green darken-3" >
            <th>No.</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($buku as $row) : ?>
            <tr class="card-panel green lighten-4">
                <td><?= $i; ?></td>
                <td><?= $row["judul_buku"] ?></td>
                <td><?= $row["penulis"] ?></td>
                <td><?= $row["penerbit"] ?></td>
                <td><?= $row["tahun_terbit"] ?></td>
                <td>
                    <a href="FormBuku.php?id_buku=<?= $row["id_buku"]; ?>" class="waves-effect waves-light green btn-small"><i class="material-icons left">edit</i>Edit</a>
                    <a href="HapusDataBuku.php?id_buku=<?= $row["id_buku"]; ?>" class="waves-effect waves-light red btn-small" onclick="return confirm('Apakah yakin data akan dihapus?')"><i class="material-icons left">delete</i>Delete</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach ?>
    </table>
</body>

</html>