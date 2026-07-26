<?php
include "koneksi.php";

if(isset($_POST['simpan'])){

    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    mysqli_query($koneksi,"INSERT INTO produk VALUES('', '$nama','$harga','$stok')");

    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>

<h2>Tambah Produk</h2>

<form method="post">

<table>

<tr>
    <td>Nama Produk</td>
    <td><input type="text" name="nama_produk"></td>
</tr>

<tr>
    <td>Harga</td>
    <td><input type="number" name="harga"></td>
</tr>

<tr>
    <td>Stok</td>
    <td><input type="number" name="stok"></td>
</tr>

<tr>
    <td></td>
    <td>
        <input type="submit" name="simpan" value="Simpan">
        <a href="index.php">Kembali</a>
    </td>
</tr>

</table>

</form>

</body>
</html>
