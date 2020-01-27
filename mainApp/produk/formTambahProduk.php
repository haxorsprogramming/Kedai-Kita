<?php
session_start();
if(!ISSET($_SESSION['username'])){
    header('location:../');
    die();
}else{

}
$user = $_SESSION['username'];
include('../../conf/db.php');

//kueri ambil kode akhir produk 
$lastKodeProduk = $link -> query("SELECT kd_produk FROM tbl_produk ORDER BY id DESC LIMIT 0, 1;");
$fLastProduk = $lastKodeProduk -> fetch_object();
$kProduk = $fLastProduk -> kd_produk;
$exProduk = explode("_",$kProduk);
$kodeProduk = $exProduk[1] + 1;
$capKode = "P_".$kodeProduk;

//kueri tampil kategori
$kKategori = $link -> query("SELECT * FROM tbl_kategori;");


?>
<div class="card-body">
Tambah produk
<hr/>
<div class='col-12 col-md-6 col-lg-6'>

     <div class="form-group">
        <label>Kode Produk</label>
        <input type="text" class="form-control" value='<?=$capKode; ?>' readonly>
     </div>
     <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" class="form-control">
     </div>
     <div class="form-group">
        <label>Kategori</label>
        <select class='form-control'>
    <?php
    while($fKat = $kKategori -> fetch_object()){
        $nama = $fKat -> nama;
        ?>
        <option><?=$nama; ?></option>
        <?php
    }
    ?>
        </select>
     </div>
</div>
</div>
