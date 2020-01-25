<?php
session_start();
include('../conf/db.php');

class data_r{}
$data_res = new data_r();


if(!ISSET($_POST['username']) && !ISSET($_POST['password'])){
  $data_res -> status = 'error';
  echo json_encode($data_res);
  die();
}else{
  
}

$username = $_POST['username'];
$password = md5($_POST['password']);

$k_cek_user = $link -> query("SELECT id FROM tbl_user WHERE username='$username' AND password='$password';");
$j_user = mysqli_num_rows($k_cek_user);

if($j_user < 1){
    $data_res -> status = 'fail';
}else{
    $data_res -> status = 'success';
    $_SESSION['username'] = $username;
}

echo json_encode($data_res);


?>