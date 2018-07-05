<?php require_once('../view/parts/header.php');?>



<div class="main">
  <h4>Orders</h4>
  <div class="order-list">
    <div class="row">
      <?php

      $orderslist=$orders['message']['data'];
      $num=1;
      if(isset($_POST['submitOrder'])){
        session_start();
        function incrementalHash($len = 6){
          $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
          $base = strlen($charset);
          $result = '';

          $now = explode(' ', microtime())[1];
          while ($now >= $base){
            $i = $now % $base;
            $result = $charset[$i] . $result;
            $now /= $base;
          }
          return substr($result, -$len);
        }
        function assign_rand_value($num) {

          // accepts 1 - 36
          switch($num) {
            case "1"  : $rand_value = "a"; break;
            case "2"  : $rand_value = "b"; break;
            case "3"  : $rand_value = "c"; break;
            case "4"  : $rand_value = "d"; break;
            case "5"  : $rand_value = "e"; break;
            case "6"  : $rand_value = "f"; break;
            case "7"  : $rand_value = "g"; break;
            case "8"  : $rand_value = "h"; break;
            case "9"  : $rand_value = "i"; break;
            case "10" : $rand_value = "j"; break;
            case "11" : $rand_value = "k"; break;
            case "12" : $rand_value = "l"; break;
            case "13" : $rand_value = "m"; break;
            case "14" : $rand_value = "n"; break;
            case "15" : $rand_value = "o"; break;
            case "16" : $rand_value = "p"; break;
            case "17" : $rand_value = "q"; break;
            case "18" : $rand_value = "r"; break;
            case "19" : $rand_value = "s"; break;
            case "20" : $rand_value = "t"; break;
            case "21" : $rand_value = "u"; break;
            case "22" : $rand_value = "v"; break;
            case "23" : $rand_value = "w"; break;
            case "24" : $rand_value = "x"; break;
            case "25" : $rand_value = "y"; break;
            case "26" : $rand_value = "z"; break;
            case "27" : $rand_value = "0"; break;
            case "28" : $rand_value = "1"; break;
            case "29" : $rand_value = "2"; break;
            case "30" : $rand_value = "3"; break;
            case "31" : $rand_value = "4"; break;
            case "32" : $rand_value = "5"; break;
            case "33" : $rand_value = "6"; break;
            case "34" : $rand_value = "7"; break;
            case "35" : $rand_value = "8"; break;
            case "36" : $rand_value = "9"; break;
          }
          return $rand_value;
        }

        function get_rand_alphanumeric($length) {
          if ($length>0) {
            $rand_id="";
            for ($i=1; $i<=$length; $i++) {
              mt_srand((double)microtime() * 1000000);
              $num = mt_rand(1,36);
              $rand_id .= assign_rand_value($num);
            }
          }
          return $rand_id;
        }

        function get_rand_numbers($length) {
          if ($length>0) {
            $rand_id="";
            for($i=1; $i<=$length; $i++) {
              mt_srand((double)microtime() * 1000000);
              $num = mt_rand(27,36);
              $rand_id .= assign_rand_value($num);
            }
          }
          return $rand_id;
        }

        function get_rand_letters($length) {
          if ($length>0) {
            $rand_id="";
            for($i=1; $i<=$length; $i++) {
              mt_srand((double)microtime() * 1000000);
              $num = mt_rand(1,26);
              $rand_id .= assign_rand_value($num);
            }
          }
          return $rand_id;
        }
        $_SESSION['productname']=$_POST['productname'];
        $_SESSION['productdesc']=$_POST['productdesc'];
        $_SESSION['contractstart']=$_POST['contractstart'];
        $_SESSION['miningprice']=$_POST['miningprice'];
        $_SESSION['miningpower']=$_POST['miningpower'];
        $_SESSION['maximumThreshold']=$_POST['maximumThreshold'];
        $_SESSION['ordernumber']=mt_rand(10000, 99999);
        $_SESSION['invoicenumber']=strtoupper(get_rand_alphanumeric(6));
        $_SESSION['productid']=$_POST['submitOrder'];


        $uniquenumber=(int)substr($_SESSION['ordernumber'], -3);
        $_SESSION['unique']=$uniquenumber;
        header('location:/payment');
        exit();
      }
      foreach ($orderslist as $orderitem) {
        // code...

        ?>

        <div class="col-3">

          <div class="order-item">
            <h3><?php echo $orderitem['productName'];?></h3>
            <ul>
              <li><?php echo $orderitem['productDescription'];?></li>
              <li><?php echo $orderitem['contractExpired'];?></li>
              <li><?php echo $orderitem['contractStart'];?></li>
            </ul>
            <div class="speed">
              <h3><?php echo $orderitem['miningPower'];?></h3>
            </div>
            <div class="price">
              <h3><?php echo $orderitem['miningPrice'];?></h3>
            </div>
            <div class="price">
              <h3><?php echo $orderitem['stock'];?></h3>
              <?php $_SESSION['stock']=$orderitem['maximumThreshold'];?>
            </div>
            <ul>
              <li>Maximum Orders <?php echo $orderitem['maximumThreshold'];?></li>
            </ul>
            <form class="" action="/orders" method="post">
              <input type="hidden" name="productid" value="<?php echo $orderitem['productId'];?>">
              <input type="hidden" name="productname" value="<?php echo $orderitem['productName'];?>">
              <input type="hidden" name="productdesc" value="<?php echo $orderitem['productDescription'];?>">
              <input type="hidden" name="contractstart" value="<?php echo $orderitem['contractStart'];?>">
              <input type="hidden" name="miningpower" value="<?php echo $orderitem['miningPower'];?>">
              <input type="hidden" name="miningprice" value="<?php echo $orderitem['miningPrice'];?>">
              <input type="hidden" name="maximumThreshold" value="<?php echo $orderitem['maximumThreshold'];?>">

              <button type="submit" name="submitOrder" value="<?php echo $orderitem['productId'];?>" class="btn btn-success btn-block" <?php if($orderitem['maximumThreshold']==0){echo 'disabled';}?>>Buy Hash Power</button>
            </form>

          </div>
        </div>
      <?php }?>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">SYARAT DAN KETENTUAN UMUM</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12">

                <p>Saya (selaku sebagai <strong>"pelanggan"</strong>) sepakat dengan syarat dan kondisi kontrak (<strong>"perjanjian"</strong>) ini tertanggal <?php echo date("d/m/Y");?> antara:<br>
                                                            PT Unicoin Indonesia Inv, PIK Avenue Level 6. Jl Pantai Indah Barat No. 1 RT 001 RW 006 Kel Kamal Muara, Kec. Penjaringan, Jakarta Utara (sebagai <strong>pemberi jasa</strong>); dan <br>
                                                            saya, sebagai pelanggan.</p>
                                                            <p>
                                                            Pemberi jasa dan pelanggan secara bersama-sama untuk selanjutnya disebut sebagai <strong>para pihak</strong><br></p>
                                                            <p>
                                                            Pemberi jasa akan menyewakan kepada pelanggan perangkat komputer dengan detail yang dijelaskan dibawah.</p>

                <h4>1. Jasa</h4>
                <p>Pemberi jasa sepakat untuk memberikan pelanggan kapasitas perangkat komputer sebagai berikut:</p>
                <p>
                                                                            <span style="display:inline-block;width:150px;">Tipe kontrak:</span> Menambang bitcoin<br>
                                                                            <span style="display:inline-block;width:150px;">Jenis algoritma:</span> SHA-256<br>
                                                                            <span style="display:inline-block;width:150px;">Tanggal Mulai:</span><?php echo $_SESSION['contractstart'];?><br>
                                                                            <span style="display:inline-block;width:150px;">Tenaga menambang:</span><?php echo   $_SESSION['miningpower'];?>
                                                                        </p>
                  <h6>Kontrak berakhir</h6>
                  <p>Berakhirnya kontrak akan terjadi jika biaya pemeliharaan lebih besar dari aset digital yang didapat selama lebih dari 14 hari kalender. Jika pada suatu hari hasil dari penambangan kripto tidak mencukupi untuk membayar biaya pemeliharaan, pemberi jasa berhak untuk memotong hasil dari penjualan aset digital pada hari berikutnya.</p>

                  <h6>Jenis Algoritma</h6>
                  <p>Algoritma adalah bahasa pemrograman yang digunakan untuk mendapatkan Aset digital.</p>
                  <h6>Tenaga Menambang</h6>
            <p>Tenaga menambang adalah jumlah kapasitas (dengan satuan hash) komputer yang disewakan untuk menambang.

            </p>

                <h6>Mutu Layanan</h6>
                <p>Pelanggan mengetahui jasa yang diberikan merupakan upaya terbaik dari pemberi jasa. Hasil dari penambangan dapat bervariasi sekitar 5%. Pemberi jasa akan mempertahankan seluruh fasilitas dan peralatan pendukung dapat bekerja dengan baik.</p>
                <h6>Pembayaran Hasil Penambangan</h6>
            <p>Pelanggan akan mendapat aset digital sesuai dengan pilihan pelanggan.</p>

                <h4>2. Biaya</h4>
                <p>Pelanggan setuju untuk membayar kepada pemberi jasa, sebesar:</p>
                <p>a. Rp. 5 per GH/s akan dikurangi setiap harinya sebagai biaya untuk mendapatkan aset digital, dan selanjutnya disebut "biaya pemeliharaan".</p>

                  <h4>3. Pembatasan kewajiban</h4>
                <p>Pemberi jasa tidak bertanggung jawab atas kerugian yang disebabkan oleh termasuk dan tidak terbatas oleh kesalahan memasukan alamat tujuan dompet digital, kesalahan memasukan jenis mata uang, penurunan harga aset digital, perubahan algoritma, kejadian alam, kerusuhan, kebakaran, gempa bumi, perubahan peraturan pemerintah dan sebagainya.</p>

                <h4>4. Syarat - syarat</h4>
                  <p>
                    Perjanjian ini tidak dapat dibatalkan. Perjanjian ini akan berakhir sesuai dengan (1).
                  </p>

                <h4>5. Komunikasi</h4>
                <p>Semua komunikasi antara pelanggan dan pemberi jasa harus dilakukan secara tertulis melalui email.

            </p>

                <h4>6. Penyediaan data</h4>
            <p>Pelanggan menyetujui untuk menyediakan data pribadinya yang disediakan untuk keperluan perjanjian ini.</p>
                  <h4>7. Representasi dan Jaminan</h4>
                  <p>
                    Pelanggan menyatakan dan memberikan jaminan kepada pemberi jasa bahwa pelanggan mengetahui tentang penambangan aset digital dan aset digital (contoh bitcoin).
            Pelanggan mengerti kewajibannya untuk mendapatkan aset digital hasil penambangan (contoh menyediakan dompet elektronik).
                  </p>
            <p>Pemberi jasa tidak menjamin tingkat profitabilitas dari jasa yang diberikan. Pelanggan tidak akan mengklaim pemberi jasa atas aset digital yang diterima.
            Pelanggan mengetahui akan resiko aset digital (contoh penurunan nilai tukar aset digital ke mata uang tertentu [contoh rupiah]).</p>
                  <h4>8. Pajak</h4>
                  <p>
                    Segala biaya perpajakan dari penjualan dan/atau keuntungan aset digital ditanggung oleh pelanggan.
                  </p>

                  <h4>9. Batas minimum penarikan</h4>
                  <p>
                    Batas minimum penarikan bitcoin sebesar 0.01 bitcoin (BTC).
            Pemberi jasa dapat sewaktu waktu merubah batas minimum penarikan dengan pemberitahuan 7 hari kalender sebelumnya.
                  </p>

                  <h4>10. Hukum, Bahasa dan lain-lain</h4>
                  <p>
                      Perjanjian ini tunduk pada hukum yang berlaku di Republik Indonesia. Dalam hal terjadi perbedaan pendapat mengenai pengertian atau pelaksanaan ketentuan dalam Perjanjian ini, perselisihan atau perbedaan pendapat yang timbul atas Perjanjian ini, maka Para Pihak sepakat untuk menyelesaikannya terlebih dahulu secara musyawarah untuk mufakat.
                  </p>

                  <p>Apabila para pihak tidak dapat menyelesaikan permasalahan dalam jangka waktu tiga puluh (30) hari kalender setelah tanggal perbedaan pendapat pertama kali timbul, maka para pihak setuju untuk meneruskan permasalahan yang ada untuk diselesaikan melalui Pengadilan negeri Jakarta Selatan.</p>
                  <p>Dalam hal perjanjian ini diterjemahkan dalam bahasa lain selain bahasa indonesia dan terdapat perbedaan penafsiran, para pihak sepakat bahwa versi Bahasa Indonesia yang berlaku.</p>
              </div>
</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>
    <div class="orderHistory">
      <h4>ORDER HISTORY</h4>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Order Created</th>
              <th>Product</th>
              <th>Hash Power</th>
              <th>Term</th>
              <th>Contract Start</th>
              <th>Contract End</th>
              <th>Total</th>
              <th>Payment Status</th>
              <th>Confirm Payment</th>
            </tr>
          </thead>
          <tbody>
            <?php   $ordershistorylist=$ordershistory['message']['data'];
            foreach ($ordershistorylist as $orderhistoryitem) {
              // code...
              ?>

              <tr>
                <td><?php echo $orderhistoryitem['orderCreated']?></td>
                <td><?php echo $orderhistoryitem['name']?></td>
                <td><?php echo $orderhistoryitem['hashPower']?></td>
                <td><a href="#" data-toggle="modal" data-target="#exampleModal">Lifetime</a></td>
                <td><?php echo $orderhistoryitem['contractStart']?></td>
                <td><?php echo $orderhistoryitem['contractEnd']?></td>
                <td><?php echo $orderhistoryitem['total']?></td>
                <td><span class="badge <?php
                if($orderhistoryitem['paymentStatus']=='Paid'){
                  echo 'badge-success';
                }elseif($orderhistoryitem['paymentStatus']=='Waiting Confirmation'){
                  echo 'badge-warning';
                }else{
                  echo 'badge-danger';
                }

                ?>"><?php echo $orderhistoryitem['paymentStatus']?></span></td>
                <td><a href="/confirm/<?php echo $orderhistoryitem['id']?>" class="btn btn-sm btn-info btn-upload <?php if($orderhistoryitem['paymentStatus']=='Waiting for payment'){echo '';}else{ echo 'disabled';}?>" >Upload Receipt</a></td>


              </tr>
              <?php
            }
            ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="js/jquery.ticker.js"></script>


</body>
</html>
