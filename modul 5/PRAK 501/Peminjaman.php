<?php
require("Model.php");
require("Style.php");
$peminjaman = getData("peminjaman");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Peminjaman</title>
</head>

<body>
    <h1 class="card-panel red darken-4">Daftar Peminjaman</h1>
    <div class="buttonadd">
        <a href="FormPeminjaman.php" class="waves-effect waves-light blue btn-large"><i class="material-icons left">add</i>Add Data Peminjaman</a>
        <a href="index.php" class="waves-effect waves-light orange btn-large"><i class="material-icons left">home</i>Kembali ke dashboard</a>
    </div>
    <table>
        <tr class="card-panel red darken-3" >
            <th>No.</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($peminjaman as $row) : 
            $tgl_pinjam = date_create($row["tgl_pinjam"]);
            $tgl_kembali = date_create($row["tgl_kembali"]);?>
            <tr class="card-panel red lighten-4">
                <td><?= $i; ?></td>
                <td><?= date_format($tgl_pinjam, 'd-m-Y') ?></td>
                <td><?= date_format($tgl_kembali, 'd-m-Y') ?></td>
                <td>
                    <a href="FormPeminjaman.php?id_peminjaman=<?= $row["id_peminjaman"]; ?>" class="waves-effect waves-light green btn-small"><i class="material-icons left">edit</i>Edit</a>
                    <a href="HapusDataPeminjaman.php?id_peminjaman=<?= $row["id_peminjaman"]; ?>" class="waves-effect waves-light red btn-small" onclick="return confirm('Apakah yakin data akan dihapus?')"><i class="material-icons left">delete</i>Delete</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach ?>
    </table>
</body>

</html>