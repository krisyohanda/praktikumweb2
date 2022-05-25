<?php
require("Login.php");
cekSessionLogin();
require("Model.php");
require("Style.php");
$buku = getData("buku");
$id_buku = !empty($_POST['id_buku']) ? $_POST['id_buku'] : '';
if (isset($_POST["submit"])) {
    if (hapusDataBuku($id_buku) > 0) {
        echo "
        <script>
        alert('Data berhasil dihapus');
        document.location.href = 'Buku.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal dihapus');
        document.location.href = 'Buku.php';
        </script>
        ";
    }
}
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
    <div class="tablemargin">
        <table>
            <tr class="card-panel green darken-3">
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
                    <td style="text-align: center;"><?= $i; ?></td>
                    <td><?= $row["judul_buku"] ?></td>
                    <td><?= $row["penulis"] ?></td>
                    <td><?= $row["penerbit"] ?></td>
                    <td><?= $row["tahun_terbit"] ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id_buku" value="<?= $row["id_buku"] ?>">
                            <a href="FormBuku.php?id_buku=<?= $row["id_buku"]; ?>" class="waves-effect waves-light green btn-small"><i class="material-icons left">edit</i>Edit</a>
                            <button class="waves-effect waves-light red btn-small" type="submit" name="submit" onclick="return confirm('Apakah yakin data akan dihapus?')"><i class="material-icons left">delete</i>Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>