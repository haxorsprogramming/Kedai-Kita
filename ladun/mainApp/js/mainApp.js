$(document).ready(function(){

    load_page('dashboard/beranda');

    $('.btnDashboard').click(function(){
        load_page('dashboard/beranda');   
        gantiJudulForm("Dashboard"); 
    });

    $('.btnProduk').click(function(){
        load_page('produk/tampilProduk');
        gantiJudulForm("Produk");
    });

    $('.btnLogOut').click(function(){
        iziToast.show({
            title: 'Log Out!',
            message: 'Anda telah keluar dari aplikasi',
            position: 'topCenter',
            timeout: 2000,
            pauseOnHover : false,
            onClosed: function () {window.location.assign('log_out.php');} 
          });
    });

    function gantiJudulForm(isi){
        $('#capUtama').html(isi);
    }

    function load_page(page){
        $('#divUtama').html("Memuat ...");
        $('#divUtama').load(page+'.php');
    }

});