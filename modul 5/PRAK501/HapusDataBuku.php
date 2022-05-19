<?php
require("Model.php");

$id_buku = $_GET["id_buku"];

if(hapusDataBuku($id_buku)> 0 ){
    echo "
    <script>
    alert('Data berhasil dihapus');
    document.location.href = 'Buku.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Data gagal dihapus');
    document.location.href = 'Buku.php';
    </script>
    ";
}
?>