<?php
require("Login.php");
cekSessionLogin();
require("Model.php");
require("Style.php");
$member = getData("member");
$id_member = !empty($_POST['id_member']) ? $_POST['id_member'] : '';
if (isset($_POST["submit"])) {
    if (hapusDataMember($id_member) > 0) {
        echo "
        <script>
        alert('Data berhasil dihapus');
        document.location.href = 'Member.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal dihapus');
        document.location.href = 'Member.php';
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
    <title>Halaman Member</title>
</head>

<body>
    <h1 class="card-panel blue darken-4">Daftar Member</h1>
    <div class="buttonadd">
        <a href="FormMember.php" class="waves-effect waves-light blue btn-large"><i class="material-icons left">add</i>Add Data Member</a>
        <a href="index.php" class="waves-effect waves-light orange btn-large"><i class="material-icons left">home</i>Kembali ke dashboard</a>
    </div>
    <div class="tablemargin">
        <table>
            <tr class="card-panel blue darken-3">
                <th>No.</th>
                <th>Nama Member</th>
                <th>Nomor Member</th>
                <th>Alamat</th>
                <th>Tanggal Mendaftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($member as $row) :
                $tgl_mendaftar = date_create($row["tgl_mendaftar"]);
                $tgl_terakhir_bayar = date_create($row["tgl_terakhir_bayar"]); ?>
                <tr class="card-panel blue lighten-4">
                    <td style="text-align: center;"><?= $i; ?></td>
                    <td><?= $row["nama_member"] ?></td>
                    <td><?= $row["nomor_member"] ?></td>
                    <td><?= $row["alamat"] ?></td>
                    <td><?= date_format($tgl_mendaftar, 'd-m-Y H:i:s') ?></td>
                    <td><?= date_format($tgl_terakhir_bayar, 'd-m-Y') ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id_member" value="<?= $row["id_member"] ?>">
                            <a href="FormMember.php?id_member=<?= $row["id_member"]; ?>" class="waves-effect waves-light green btn-small"><i class="material-icons left">edit</i>Edit</a>
                            <button class="waves-effect waves-light red btn-small" type="submit" name="submit" onclick="return confirm('Apakah yakin data akan dihapus?')"><i class="material-icons left">delete</i>Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
        </table>
        <div class="tablemargin">
</body>

</html>