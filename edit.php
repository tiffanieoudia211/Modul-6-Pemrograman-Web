<?php

include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($koneksi,"SELECT * FROM produk WHERE id_produk='$id'");

$d = mysqli_fetch_array($data);

if(isset($_POST['update'])){

    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    mysqli_query($koneksi,"UPDATE produk SET
    nama_produk='$nama',
    harga='$harga',
    stok='$stok'
    WHERE id_produk='$id'");

    header("location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>

<h2>Edit Produk</h2>

<form method="post">

<table>

<tr>
    <td>Nama Produk</td>
    <td>
        <input type="text" name="nama_produk"
        value="<?php echo $d['nama_produk']; ?>">
    </td>
</tr>

<tr>
    <td>Harga</td>
    <td>
        <input type="number" name="harga"
        value="<?php echo $d['harga']; ?>">
    </td>
</tr>

<tr>
    <td>Stok</td>
    <td>
        <input type="number" name="stok"
        value="<?php echo $d['stok']; ?>">
    </td>
</tr>

<tr>
    <td></td>
    <td>
        <input type="submit" name="update" value="Update">
        <a href="index.php">Kembali</a>
    </td>
</tr>

</table>

</form>

</body>
</html>
