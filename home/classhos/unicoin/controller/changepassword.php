<?php
session_start();
if(!isset($_SESSION['token'])){
  header('location:/login');
  exit();
}
if(isset($_POST['submitPassword'])){
  $datachange=array('password'=>$_POST['password'],'newPassword'=>$_POST['npassword']);
  $data_change=json_encode($datachange);;
  $changech = curl_init('https://unicoin-api.appspot.com/api/changePassword');
  curl_setopt($changech, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($changech, CURLOPT_POSTFIELDS, $data_change);
  curl_setopt($changech, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($changech, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Content-Length: ' . strlen($data_change),
      'Authorization: Bearer '.$_SESSION['token']
    )
  );
  $changeresult = curl_exec($changech);
  curl_close($changech);
  $changedone=json_decode( $changeresult, true);
}

?>
