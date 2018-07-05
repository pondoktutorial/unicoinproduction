<?php
session_start();
if(!isset($_SESSION['token'])){
  header('location:/login');
  exit();
}


$orderid=(int)$url[1];
$_SESSION['orderid']=$orderid;


$sessions= $_SESSION['token'];
$opts = [
  "http" => [
      "method" => "GET",
      "header" => "Content-Type: application/json\r\n" .
          "Authorization: Bearer {$sessions}\r\n"
  ]
];

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$ordersfile = file_get_contents('https://unicoin-api.appspot.com/api/product', false, $context);
$orders=json_decode( $ordersfile, true);
$ordershistoryfile = file_get_contents('https://unicoin-api.appspot.com/api/orders/'.$_SESSION['orderid'], false, $context);
$ordershistory=json_decode( $ordershistoryfile, true);
if(isset($_POST['submitupload'])){

$target_dir="/home/classhos/unicoin/public/";
$target_file = $target_dir . basename($_FILES["imageconfirm"]["name"]);
     $uploadOk=1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $check = getimagesize($_FILES["imageconfirm"]["tmp_name"]);
  if($check !== false) {

       $uploadOk = 1;
   } else {

       $uploadOk = 0;
   }


// Check if file already exists
if (file_exists($target_file)) {

    $uploadOk = 0;
}
if ($_FILES["imageconfirm"]["size"] > 5000000) {

    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {

    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imageconfirm"]["tmp_name"], $target_dir."uploads/".$_SESSION['orderid']."_".basename($_FILES["imageconfirm"]["name"]))) {
      $urlconfirm="http://206.189.148.189/uploads/".$_SESSION['orderid']."_".basename($_FILES["imageconfirm"]["name"]);
      $date = date('Y-m-d H:i:s');

      $dataconfirm=['orderId'=>$_SESSION['orderid'],'paymentUpload'=>$urlconfirm,'paymentDate'=>$date];
      $data_confirm = json_encode($dataconfirm);

      $confirmch = curl_init('https://unicoin-api.appspot.com/api/ordersverify');
      curl_setopt($confirmch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($confirmch, CURLOPT_POSTFIELDS, $data_confirm);
      curl_setopt($confirmch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($confirmch, CURLOPT_HTTPHEADER, array(
          'Content-Type: application/json',
          'Content-Length: ' . strlen($data_confirm),
          'Authorization: Bearer '.$_SESSION['token']
        )
      );
      $confirmresult = curl_exec($confirmch);
      curl_close($confirmch);
      $confirmdone=json_decode( $confirmresult, true);
      if($confirmdone['status']==200){
        $confirmnotify="You Have Success Uploaded Your Payment Receive";
      }else{
        $confirmnotify="There is an error in upload your document";
      }


    } else {

    }
}
}
?>
