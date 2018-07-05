<?php
session_start();
if(!isset($_SESSION['token'])){
  header('location:/login');
  exit();
}
if(isset($_POST['submitSetting'])){
  $dataprofile=array("fullname"=>$_POST['fullname'],"phone"=>$_POST['phone']);
  $data_profile=json_encode($dataprofile);;
  $profilech = curl_init('https://unicoin-api.appspot.com/api/setting');
  curl_setopt($profilech, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($profilech, CURLOPT_POSTFIELDS, $data_profile);
  curl_setopt($profilech, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($profilech, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Content-Length: ' . strlen($data_profile),
      'Authorization: Bearer '.$_SESSION['token']
    )
  );
  $profileresult = curl_exec($profilech);
  curl_close($profilech);
  $profiledone=json_decode( $profileresult, true);
  $_SESSION['memberName']=$_POST['fullname'];
    $_SESSION['memberPhone']=$_POST['phone'];
}

?>
