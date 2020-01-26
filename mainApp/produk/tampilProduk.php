<?php
session_start();
if(!ISSET($_SESSION['username'])){
    header('location:../');
    die();
}else{

}
$user = $_SESSION['username'];
include('../../conf/db.php');

//kueri menampilkan produk
$kProduk = $link -> query("SELECT * FROM tbl_produk;");

?>

<div class="container">
<div class='row mb-3'>
<a href='#!' class='btn btn-success'>Tambah Produk</a>
</div>
<table class='table' id='tblProduk'>
<thead>
<tr>
<td>No</td><td>Produk</td><td>Deks</td><td>Harga Jual - Beli</td><td>Stock</td><td>Aksi</td>
</tr>
</thead>
<tbody>
<?php
$no = 1;
while($fProd = $kProduk -> fetch_object()){
    $kd = $fProd -> kd_produk;
    $nama = $fProd -> nama;
    $deks = $fProd -> deks;
    $kategori = $fProd -> kategori;
    $satuan = $fProd -> satuan;
    $hargaBeli = $fProd -> harga_beli;
?>
<tr>
<td><?=$no; ?></td>
<td><b><?=$kd; ?></b><br/><?=$nama;?></td>
<td><?=$deks; ?></td><td>Harga Jual - Beli</td><td>Stock</td><td>Aksi</td>
</tr>
<?php
$no++;
}
?>
</tbody>
</table>
</div>

<script>
$(document).ready(function(){
    $('#tblProduk').DataTable();
});
</script>