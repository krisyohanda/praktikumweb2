<?php
require("Model.php");

$id_member = $_GET["id_member"];

if(hapusDataMember($id_member)> 0 ){
    echo "
    <script>
    alert('Data berhasil dihapus');
    document.location.href = 'Member.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Data gagal dihapus');
    document.location.href = 'Member.php';
    </script>
    ";
}
?>