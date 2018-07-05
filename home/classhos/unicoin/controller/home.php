<?php
session_start();
if(!isset($_SESSION['token'])){
  header('location:/login');
  exit();
}

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

$payoutfile = file_get_contents('https://unicoin-api.appspot.com/api/payout', false, $context);
$payouts=json_decode( $payoutfile, true);


$newsfile = file_get_contents('https://unicoin-api.appspot.com/api/news', false, $context);
$news=json_decode( $newsfile, true);
?>
