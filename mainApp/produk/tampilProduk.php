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
<a href='#!' class='btn btn-sm btn-ijo btn-success' id='btnTambah'>Tambah Produk</a>
</div>
<table class='table' id='tblProduk'>
<thead>
<tr>
<td>No</td><td>Produk</td><td>Deks</td><td>Harga Beli - Jual</td><td>Stock</td><td>Terakhir beli</td>
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
    $hargaJual = $fProd -> harga_jual;
    $stock = $fProd -> stok;
?>
<tr>
<td><?=$no; ?></td>
<td><b><?=$kd; ?></b><br/><?=$nama;?></td>
<td><?=$deks; ?></td>
<td>Rp. <?=number_format($hargaBeli); ?> - Rp. <?=number_format($hargaJual); ?></td>
<td><?=$stock; ?></td>
<td></td>
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

    $('#btnTambah').click(function(){
        $('#divUtama').html("Memuat ...");
        $('#divUtama').load('produk/formTambahProduk.php');
    });

});
</script>