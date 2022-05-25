<?php
require("Koneksi.php");

//fungsi untuk menampilkan data
function getData($tabel)
{
    //digunakan untuk mengacu atau merujuk ke global variable
    global $koneksi;
    $result = mysqli_query($koneksi, "SELECT * FROM $tabel");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//fungsi untuk menambah data buku
function insertDataBuku($data)
{
    //digunakan untuk mengacu atau merujuk ke global variable
    global $koneksi;
    //Mengambil data dari tiap elemen dalam form
    $judul_buku = htmlspecialchars($data["judul_buku"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $tahun_terbit = htmlspecialchars($data["tahun_terbit"]);

    //query insert data
    $query = "INSERT INTO buku 
    VALUES 
    ('', '$judul_buku', '$penulis', '$penerbit', '$tahun_terbit')
    ";
    $result = mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

//fungsi untuk menghapus data buku
function hapusDataBuku($id_buku)
{
    //digunakan untuk mengacu atau merujuk ke global variable
    global $koneksi;
    $result = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku = $id_buku");
    return mysqli_affected_rows($koneksi);
}

//fungsi untuk mengedit data buku
function updateDataBuku($data)
{
    //digunakan untuk mengacu atau merujuk ke global variable
    global $koneksi;
    //Mengambil data dari tiap elemen dalam form
    $id_buku = $data["id_buku"];
    $judul_buku = htmlspecialchars($data["judul_buku"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $tahun_terbit = htmlspecialchars($data["tahun_terbit"]);

    //query insert data
    $query = "UPDATE buku SET 
            judul_buku='$judul_buku',
            penulis='$penulis', 
            penerbit='$penerbit', 
            tahun_terbit=$tahun_terbit 
            WHERE id_buku = $id_buku
            ";
    $result = mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

//fungsi untuk menambah data peminjaman
function insertDataPeminjaman($data){

    global $koneksi;

    $tgl_pinjam = htmlspecialchars($data["tgl_pinjam"]);
    $tgl_kembali = htmlspecialchars($data["tgl_kembali"]);

    $query = "INSERT INTO peminjaman 
    VALUES 
    ('', '$tgl_pinjam', '$tgl_kembali')
    ";
    $result = mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

//fungsi untuk menghapus data peminjaman
function hapusDataPeminjaman($id_peminjaman){
    global $koneksi;
    $result = mysqli_query($koneksi, "DELETE FROM peminjaman WHERE id_peminjaman = $id_peminjaman");
    return mysqli_affected_rows($koneksi);
}

//fungsi untuk mengedit data peminjaman
function updateDataPeminjaman($data){
    global $koneksi;

    $id_peminjaman = $data["id_peminjaman"];
    $tgl_pinjam = htmlspecialchars($data["tgl_pinjam"]);
    $tgl_kembali = htmlspecialchars($data["tgl_kembali"]);

    $query = "UPDATE peminjaman SET 
            tgl_pinjam='$tgl_pinjam',
            tgl_kembali='$tgl_kembali'
            WHERE id_peminjaman = $id_peminjaman
            ";
    $result = mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

//fungsi untuk menambah data member
function insertDataMember($data){

    global $koneksi;

    $nama_member = htmlspecialchars($data["nama_member"]);
    $nomor_member = htmlspecialchars($data["nomor_member"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $tgl_mendaftar = htmlspecialchars($data["tgl_mendaftar"]);
    $tgl_terakhir_bayar = htmlspecialchars($data["tgl_terakhir_bayar"]);
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    //cek password
    if($password !== $password2){
        echo "<script> alert('Password tidak sama!) </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO member 
    VALUES 
    ('', '$nama_member', '$nomor_member', '$alamat', '$tgl_mendaftar', '$tgl_terakhir_bayar', '$password')
    ";
    $result = mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

//fungsi untuk menghapus data member
function hapusDataMember($id_member){
    global $koneksi;
    $result = mysqli_query($koneksi, "DELETE FROM member WHERE id_member = $id_member");
    return mysqli_affected_rows($koneksi);
}

//fungsi untuk mengedit data member
function updateDataMember($data){
    global $koneksi;

    $id_member = $data["id_member"];
    $nama_member = htmlspecialchars($data["nama_member"]);
    $nomor_member = htmlspecialchars($data["nomor_member"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $tgl_mendaftar = $data["tgl_mendaftar"];
    $tgl_terakhir_bayar = htmlspecialchars($data["tgl_terakhir_bayar"]);
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    //cek nomor member
    $ceknomor = mysqli_query($koneksi, "SELECT nomor_member FROM member WHERE nomor_member = '$nomor_member");
    if(mysqli_fetch_assoc($ceknomor)){
        return false;
    }

    //cek password
    if($password !== $password2){
        return false;
    }
    
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE member SET 
            nama_member='$nama_member',
            nomor_member='$nomor_member',
            alamat = '$alamat',
            tgl_mendaftar = '$tgl_mendaftar',
            tgl_terakhir_bayar = '$tgl_terakhir_bayar',
            password = '$password'
            WHERE id_member = $id_member
            ";
    $result = mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}