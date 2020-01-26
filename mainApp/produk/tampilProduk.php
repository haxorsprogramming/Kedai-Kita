<?php


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

</tbody>
</table>
</div>

<script>
$(document).ready(function(){
    $('#tblProduk').DataTable();
});
</script>