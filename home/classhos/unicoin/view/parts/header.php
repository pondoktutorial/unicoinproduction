<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://206.189.148.189/css/newsticker.css">
    <link rel="stylesheet"  type="text/css" href="http://206.189.148.189/css/style.css">

    <title>Welcome To Unicoin Member Page</title>
  </head>
  <body>

    <div class="navigation">

        <div class="logo">
          <img src="https://unicoin-mining.com/wp-content/uploads/2018/04/Logo-Registration.png" alt="" height="60">
        </div>
        <div class="menu">
          <ul>
            <li><a href="">Welcome, <strong><?php echo $_SESSION['memberName'];?></strong></a></li>
            <li><a href="/logout"><img src="images/logout.svg" alt="" width="18"> Logout</a></li>
          </ul>
        </div>

    </div>
    <!-- Sidebar -->
    <div class="sidebar">
      <div class="sidebar-menu">
        <ul>
          <li><a href="/"><img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/images/dashboard.svg" alt="" width="20"> Dashboard</a></li>
          <li><a href="/payout"><img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/images/bitcoin.svg" alt="" width="20"> Payout</a></li>
          <li><a href="/orders"><img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/images/cart.svg" alt="" width="20"> Buy Hash Power</a></li>
          <li><a href="/wallet"><img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/images/wallet.svg" alt="" width="20"> Wallet</a></li>
          <li><a href="/changepassword"><img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/images/locked.svg" alt="" width="20"> Change Password</a></li>
          <li><a href="/setting"><img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/images/settings.svg" alt="" width="20"> Setting</a></li>
        </ul>
      </div>
    </div>
    <!-- End Sidebar -->
