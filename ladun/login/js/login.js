$(document).ready(function(){

  $('#txtUsername').focus();

  $('#btnMasuk').click(function(){
    let username = $('#txtUsername').val();
    let password = $('#txtPassword').val();
    let data_send = {'username':username, 'password':password}

    if(username == '' || password == ''){
      pesan('Isi field!!','Harap isi username & password','warning','Ok');
    }else{
      $.post('api/login_proses.php',{'username':username, 'password':password},function(data){
        let obj = JSON.parse(data);
        let status = obj.status;
        console.log(obj);
        if(status == 'success'){
         window.location.assign('mainApp/');
        }else{
          pesan('Login gagal','Username / Password salah, periksa kembali','error','Ok');
          $('#txtUsername').focus();
          $('#txtPassword').val("");          
        }
      });
    }

    
  });

  function pesan(title, isi, icon, btn){
    Swal.fire({title: title,text: isi,icon: icon,confirmButtonText: btn })
  }

});