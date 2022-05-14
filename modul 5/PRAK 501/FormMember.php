<?php
require("Model.php");
require("Style.php");
$id_member = !empty($_GET['id_member']) ? $_GET['id_member'] : '';
//memeriksa apakah tombol sudah ditekan atau belum
if (isset($_POST["submit"])) {
    if (insertDataMember($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'Member.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal ditambahkan');
        document.location.href = 'Member.php';
        </script>
        ";
    }
}
if (isset($_POST["ubah"])) {
    if (updateDataMember($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil diubah');
        document.location.href = 'Member.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal diubah');
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
        <title>Form Member</title>
    </head>
    
    <body>
        <?php if (empty($id_member)) : ?>
            <section class="container blue-text">
                
                <h4 class="center">Form Member</h4>
                
                <form action="" method="post">
                    <label class="black-text" for="nama_member">Nama Member : </label>
                    <input type="text" name="nama_member" id="nama_member" required>
                    <label class="black-text" for="nomor_member">Nomor Member : </label>
                    <input type="text" name="nomor_member" id="nomor_member" required>
                    <label class="black-text" for="alamat">Alamat : </label>
                    <input type="text" name="alamat" id="alamat" required>
                    <label class="black-text" for="tgl_mendaftar">Tanggal Mendaftar : </label>
                    <input type="datetime-local" name="tgl_mendaftar" id="tgl_mendaftar" required>
                    <label class="black-text" for="tgl_terakhir_bayar">Tanggal Terakhir Bayar : </label>
                    <input type="date" name="tgl_terakhir_bayar" id="tgl_terakhir_bayar" required>
                    <div class="center">
                        <button class="waves-effect waves-light blue btn-small" type="submit" name="submit"><i class="material-icons left">send</i>Submit</button>
                        <a href="Member.php" class="waves-effect waves-light grey btn-small"><i class="material-icons left">close</i>Kembali</a>
                    </div>
                </form>
            </section>
            <?php endif; ?>
            <?php if (!empty($id_member)) : ?>
            <?php $member = getData("member WHERE id_member = $id_member")[0];?>    
                <section class="container blue-text">
                    
                    <h4 class="center">Form Member</h4>
                    
                    <form action="" method="post">
                        <input type="hidden" name="id_member" value="<?= $member["id_member"]?>">
                        <label class="black-text" for="nama_member">Nama Member : </label>
                        <input type="text" name="nama_member" id="nama_member" required value="<?= $member["nama_member"]?>">
                        <label class="black-text" for="nomor_member">Nomor Member : </label>
                        <input type="text" name="nomor_member" id="nomor_member" required value="<?= $member["nomor_member"]?>">
                        <label class="black-text" for="alamat">Alamat : </label>
                        <input type="text" name="alamat" id="alamat" required value="<?= $member["alamat"]?>">
                        <label class="black-text" for="tgl_mendaftar">Tanggal Mendaftar : </label>
                        <input type="datetime-local" name="tgl_mendaftar" id="tgl_mendaftar" required value="<?= $member["tgl_mendaftar"]?>">
                        <label class="black-text" for="tgl_terakhir_bayar">Tanggal Terakhir Bayar : </label>
                        <input type="date" name="tgl_terakhir_bayar" id="tgl_terakhir_bayar" required value="<?= $member["tgl_terakhir_bayar"]?>">
                        
                <div class="center">
                    <button class="waves-effect waves-light blue btn-small" type="submit" name="ubah"><i class="material-icons left">send</i>Ubah</button>
                    <a href="Member.php" class="waves-effect waves-light grey btn-small"><i class="material-icons left">close</i>Kembali</a>
                </div>
            </form>
        </section>
    <?php endif; ?>
</body>

</html>