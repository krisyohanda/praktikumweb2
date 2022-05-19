<?php
require("Model.php");

$id_peminjaman = $_GET["id_peminjaman"];

if(hapusDataPeminjaman($id_peminjaman)> 0 ){
    echo "
    <script>
    alert('Data berhasil dihapus');
    document.location.href = 'Peminjaman.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Data gagal dihapus');
    document.location.href = 'Peminjaman.php';
    </script>
    ";
}
?>