<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Unicoin Member Area</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="css/form.css">
</head>
<body class="form_body">

  <!-- Form Login -->
  <form class="form" method="post" action="/new-password">
   <div class="form-Logo">
     <img src="https://unicoin-mining.com/wp-content/uploads/2018/04/Logo-Registration.png" alt="" height="60">
   </div>
   <div class="form-header">
     <h3>Enter Your New Password</h3>
     <p>Please don't be fall in the same hole</p>

   </div>

   <div class="form-label-group">
     <input type="password" id="inputPassword" class="form-control" placeholder="New Password" name="password">
     <label for="inputPassword">New Password</label>

   </div>


   <!-- <div class="checkbox mb-3">
     <label>
       <input type="checkbox" value="remember-me"> Remember me
     </label>
   </div> -->

   <?php if(isset($errors['fromapi'])){?>
   <div class="alert alert-warning" role="alert">
<?php echo $errors['fromapi'];?>
</div>
<?php }?>
<?php print_r($reset);?>
   <button class="btn btn-lg btn-primary btn-block" type="submit" name="submitReset">Reset Password</button>
   <p class="mt-5 mb-3 text-muted text-center">Unicoin Mining &copy; 2017-2018</p>
 </form>
  <!-- End Form Login -->
</body>
</html>
