<?php
if(isset($url[1])){
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
  $dataverify=['code'=>$url[1],'token'=>$tokenlogin];
  $data_verify = json_encode($dataverify);
  $verifych = curl_init('https://unicoin-api.appspot.com/api/verification');
  curl_setopt($verifych, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($verifych, CURLOPT_POSTFIELDS, $data_verify);
  curl_setopt($verifych, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($verifych, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Content-Length: ' . strlen($data_verify))
  );
  $verifyresult = curl_exec($verifych);
  curl_close($verifych);
  $verify=json_decode( $verifyresult, true);
  if($verify['status']==200){
    session_start();
    $_SESSION['verifiedid']=$verify['message']['memberId'];
    header('location:/success-verify');
    exit();
  }else{
    header('location:/failed-verify');
    exit();
  }
}

?>
