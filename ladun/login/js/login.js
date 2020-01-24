$(document).ready(function(){

  $('#btnMasuk').click(function(){
    $.post('http://api.haxors.or.id/kedai-kita/auth/login.php',function(data){
      let obj = JSON.parse(data);
      console.log(obj);
    });
  });

});