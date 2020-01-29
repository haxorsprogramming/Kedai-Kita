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
<div class='row'>
<div class='col-12 col-md-6 col-lg-6'>

     <div class="form-group">
        <label>Kode Produk</label>
        <input type="text" class="form-control" value='<?=$capKode; ?>' readonly id='txtKodeProduk'>
     </div>
     <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" class="form-control" id='txtNamaProduk'>
     </div>
     <div class="form-group">
        <label>Kategori</label>
        <select class='form-control' id='txtKategori'>
    <?php
    while($fKat = $kKategori -> fetch_object()){
        $nama = $fKat -> nama;
        $id = $fKat -> id;
        ?>
        <option value='<?=$id; ?>'><?=$nama; ?></option>
        <?php
    }
    ?>
        </select>
     </div>
     <div class="form-group">
        <label>Satuan</label>
        <select id="txtSatuan" class="form-control">
            <option value="">Pcs</option>
            <option value="">Liter</option>
            <option value="">Dus</option>
            <option value="">Kg</option>
            <option value="">Sachet</option>
        </select>
     </div>
</div>

<div class='col-12 col-md-6 col-lg-6'>
<div class="form-group">
        <label>Deksripsi Produk</label>
        <input type="text" class="form-control" id='txtDeks'>
</div>
<div class="form-group">
        <label>Harga Beli</label>
        <input type="text" class="form-control" id='txtHargaBeli'>
</div>
<div class="form-group">
        <label>Harga Jual</label>
        <input type="text" class="form-control" id='txtHargaJual'>
</div>
</div>
</div>
<button class='btn btn-success btn-ijo' id='btnSimpan'>Simpan</button>
</div>

<script>
$(document).ready(function(){
    $('#txtNamaProduk').focus();

    $('#btnSimpan').click(function(){

    });

});
</script>