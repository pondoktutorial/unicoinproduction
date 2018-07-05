
<?php require_once('../view/parts/header.php');?>
    <!-- Main -->
    <div class="main">

      <div class="payout">
        <h3>Payout Detail</h3>
        <table class="table table-striped">
    <thead>
      <tr>

        <th>Payout Date</th>
        <th>Currency</th>
        <th>TotalHashPower</th>
        <th>NetPayout</th>
        <th>Balance</th>
        <th>Withdraw</th>
        <th>Wallet</th>
      </tr>
    </thead>
    <tbody>

      <?php $payoutlist=$payouts['message']['data'];?>
      <?php foreach($payoutlist as $payoutitem){?>
  <tr>
  <td>
  <?php echo $payoutitem['payoutDate']?>
</td>
<td>
<?php echo $payoutitem['currency']?>
</td>
<td>
<?php echo $payoutitem['totalHashPower']?>
</td>
<td>
<?php echo number_format($payoutitem['netPayout'], 8);?>
</td>
<td>
<?php echo number_format($payoutitem['balance'],8);?>
</td>
<td>
<?php echo $payoutitem['withdraw']?>
</td>

<td>
<?php echo $payoutitem['wallet']?>
</td>
</tr>
<?php } ?>

    </tbody>
  </table>
      </div>

    </div>
    <!-- End Main -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="js/jquery.ticker.js"></script>
    <script>
    $(function () {
       $('#newsticker').ticker({
         speed: 0.5,

            fadeInSpeed: 600,
            titleText: 'Latest News'
       });
   });
    </script>
  </body>
</html>
