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
            <option value="pcs">Pcs</option>
            <option value="liter">Liter</option>
            <option value="dus">Dus</option>
            <option value="kg">Kg</option>
            <option value="sct">Sachet</option>
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
        <input type="number" class="form-control" id='txtHargaBeli'>
</div>
<div class="form-group">
        <label>Harga Jual</label>
        <input type="number" class="form-control" id='txtHargaJual'>
</div>
</div>
</div>
<button class='btn btn-success btn-ijo' id='btnSimpan'>Simpan</button>
</div>

<script>
$(document).ready(function(){
    $('#txtNamaProduk').focus();

    $('#btnSimpan').click(function(){
        let kdProduk = $('#txtKodeProduk').val();
        let namaProduk = $('#txtNamaProduk').val();
        let kategori = $('#txtKategori').val();
        let satuan = $('#txtSatuan').val();
        let deks = $('#txtDeks').val();
        let hargaBeli = $('#txtHargaBeli').val();
        let hargaJual = $('#txtHargaJual').val();
        let dataSend = {'kdProduk':kdProduk,'namaProduk':namaProduk,'kategori':kategori,'satuan':satuan,'deks':deks,'hargaBeli':hargaBeli,'hargaJual':hargaJual}
        $.post('produk/proTambahProduk.php',dataSend,function(data){
            let obj = JSON.parse(data);
            if(obj.status == 'error'){
                aksi_gagal();
            }else{
                aksi_sukses();
            }
        });
    });

    function aksi_sukses(){
        iziToast.show({
            title: 'Sukses',
            message: 'Produk baru berhasil ditambahkan',
            position: 'topCenter',
            timeout: 1000,
            pauseOnHover : false,
            onClosed: function () {$('#divUtama').load('produk/tampilProduk.php');} 
          });
    }
    function aksi_gagal(){
        iziToast.show({
            title: 'Error!!',
            message: 'Terdapat kesahalah input data',
            position: 'topCenter',
            timeout: 1000,
            pauseOnHover : false,
            onClosed: function () {$('#divUtama').load('produk/formTambahProduk.php');} 
          });
    }

});
</script>