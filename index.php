<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
</head>
<body>

<h2>Data Produk Toko Online</h2>

<a href="tambah.php">Tambah Produk Baru</a>

<br><br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

<?php

$no = 1;

$data = mysqli_query($koneksi,"SELECT * FROM produk");

while($d = mysqli_fetch_array($data)){

?>

<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['nama_produk']; ?></td>
    <td><?php echo $d['harga']; ?></td>
    <td><?php echo $d['stok']; ?></td>
    <td>
        <a href="edit.php?id=<?php echo $d['id_produk']; ?>">Edit</a> |
        <a href="hapus.php?id=<?php echo $d['id_produk']; ?>" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
    </td>
</tr>

<?php
}
?>

</table>

</body>
</html>
