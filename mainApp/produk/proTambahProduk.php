<?php
session_start();
if(!ISSET($_SESSION['username'])){
    header('location:../');
    die();
}else{

}
$user = $_SESSION['username'];
include('../../conf/db.php');

class dataRes{}

$dr = new dataRes();

$waktu = date("Y-m-d H:i:s");
$kdProduk = $_POST['kdProduk'];
$namaProduk = $_POST['namaProduk'];
$deks = $_POST['deks'];
$kategori = $_POST['kategori'];
$satuan = $_POST['satuan'];
$hargaBeli = $_POST['hargaBeli'];
$hargaJual = $_POST['hargaJual'];
//cek apakah kd produk sudah ada
$kCekProduk = $link -> query("SELECT id FROM tbl_produk WHERE kd_produk='$kdProduk';");
$jKode = mysqli_num_rows($kCekProduk);
if($jKode < 1){
    $dr -> status = 'success';
    $link -> query("INSERT INTO tbl_produk VALUES(null,'$kdProduk','$namaProduk','$deks','$kategori','$satuan','$hargaBeli','$hargaJual','0','$waktu');");
}else{
    $dr -> status = 'error';
    
}

// {'kdProduk':kdProduk,'namaProduk':namaProduk,'kategori':kategori,
    // 'satuan':satuan,'deks':deks,'hargaBeli':hargaBeli,'hargaJual':hargaJual}
echo json_encode($dr);
?>