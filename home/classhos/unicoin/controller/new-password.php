<?php
session_start();
if(isset($_POST['submitReset'])){
  $password=$_POST['password'];
  $data=['username'=>'UnicoinMining','password'=>'c9d2f646a1c6a0bc954713826002502671d533429c60b7a616c256a08a4ba1b2'];
  $data_string = json_encode($data);

  $ch = curl_init('https://unicoin-api.appspot.com/api/auth');
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Content-Length: ' . strlen($data_string))
  );

  $result = curl_exec($ch);
  curl_close($ch);
  $tokenauth=json_decode( $result, true );
  $tokenlogin=$tokenauth['message']['token'];
  $datareset=['memberId'=>$_SESSION['verifiedid'],'password'=>$password,'token'=>$tokenlogin];
  $data_reset = json_encode($datareset);
  $resetch = curl_init('https://unicoin-api.appspot.com/api/newpassword');
  curl_setopt($resetch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($resetch, CURLOPT_POSTFIELDS, $data_reset);
  curl_setopt($resetch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($resetch, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Content-Length: ' . strlen($data_reset))
  );
  $resetresult = curl_exec($resetch);
  curl_close($resetch);
  $reset=json_decode( $resetresult, true);
  if($reset['status']==200){

    header('location:/success-password');
    exit();
  }else{
    header('location:/failed-reset');
    exit();
  }
}


?>
