<?php require_once('../view/parts/header.php');?>


<div class="main">
  <h4>Payment INVOICE <span class="invoice">#<?php echo $_SESSION['invoicenumber'];?></span></h4>
  <div class="invoice-box">
    <div class="row">
      <div class="col-4">
        <div class="invoice-location">
          <strong>From</strong>
          <p>PT. Unicoin Indonesia Inv PIK Avenue Mall DI Unit 6FI-C1 Jl. Pantai Indah Barat No. 1 Kamal Muara, Penjaringan Jakarta Utara DKI Jakarta 14470 Indonesia
          </p>
          <strong>Email: info@unicoin-mining.com</strong>
        </div>
      </div>
      <div class="col-4">
        <div class="invoice-location">
          <p><strong>To</strong></p>
          <span style="text-transform: capitalize;"><?php echo $_SESSION['memberName'];?></span>
          <p><strong>Email:</strong> <?php echo $_SESSION['memberEmail'];?></p>
          <!-- Button trigger modal -->


          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">CLOUD MINING SERVICE LEVEL AGREEMENT (SLA)</h5>
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
        </div>
      </div>
      <div class="col-4">
        <strong>Invoice #<?php echo $_SESSION['invoicenumber'];?></strong>
        <br>

        <strong>Order ID: <?php echo $_SESSION['ordernumber'];?></strong>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Qty</th>
              <th>Product</th>
              <th>Description</th>
              <th>Contract Start</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <form action="/payment" method="post">

                  <select  name="qty" class="form-qty">
                    <?php for($i=1;$i<=$_SESSION['maximumThreshold'];$i++){?>
  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php }?>
</select>
                  <input type="hidden" class="stockavailable" value="<?php echo $_SESSION['maximumThreshold'];?>" >
                  <p class="text-danger stocknotify" ></p>
              </td>
              <td>
                <?php echo $_SESSION['productname']?>
              </td>
              <td>
                <?php echo $_SESSION['productdesc']?>
              </td>
              <td>
                <?php echo $_SESSION['contractstart']?>
              </td>
              <td class="subtotalprice">
                <?php echo $_SESSION['miningprice']?>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
        <p class="lead">Payment Methods:</p>
        <p><strong>Manual Transfer to BCA</strong></p>
        <p>6351.9999.91 a/n PT. Unicoin Indonesia Inv.</p>

      </div>
      <!-- /.col -->
      <div class="col-6">
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td class="subtotalt" count="<?php echo $_SESSION['miningprice']?>">
                  <?php echo $_SESSION['miningprice']?>
                </td>
              </tr>
              <tr>
                <th>Unique </th>
                <td class="uniquet" count="<?php echo $_SESSION['unique'];?>"><span class="text-success">Rp. <?php echo $_SESSION['unique'];?></span></td>
              </tr>
              <tr>
                <th>Tax </th>
                <td>Rp. 0</td>
              </tr>

              <tr>
                <th>Total:</th>
                <td class="totalt">
                  <?php echo $_SESSION['miningprice'];?>
                </td>

              </tr>

            </tbody>
          </table>
        </div>
        <div class="text-right">


          <input type="hidden" name="totalhidden" class="totalhidden" value="">
          <input type="hidden" name="subtotalhidden" class="subtotalhidden" value="">
          <button class="btn-info btn-sm" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="width:150px;">Term Of Service</button>
          <button type="submit" class="btn-success btn-sm disabled" name="submitpayment" style="width:150px;" id="payaction">Pay</button>
          </form>

<?php if(isset($paymentfailed)){
  ?>
<br>
<br>
<p class="text-danger"><strong><?php echo str_replace("spSalesOrderCreate:","",$paymentfailed);?></strong></p>

  <?php
}?>

        </div>

      </div>
      <!-- /.col -->
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
<script>
  $(document).ready(function() {
    var subtotal = $('.subtotalt').attr('count');
    var unique = $('.uniquet').attr('count');
    subtotals = subtotal.replace(",00", "");
    subtotala = subtotals.replace(/\./g, "");
    subtotalb = subtotala.replace('Rp ', "");
    var qty = 1;
    subtotalc = (subtotalb * qty) - unique;
    subtotald = (subtotalb * qty);


    function rupiah(bilangan) {
      var number_string = bilangan.toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{1,3}/gi);

      if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
      }
      return rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    }

    $('.totalhidden').attr('value', subtotalc);
    $('.totalt').text("Rp. " + rupiah(subtotalc) + ",00");
    $('.form-qty').change(function() {
      var qty = $(this).val();
      stock=$('.stockavailable').val();
      if(qty>stock){
        $('#payaction').prop('disabled',true);
        $('.stocknotify').text('Stock Tidak Tersedia');

      }else{
        $('#payaction').prop('disabled',false);
        $('.stocknotify').text('');
      }
      subtotalc = (subtotalb * qty) - unique;
      subtotald = (subtotalb * qty);

      $('.subtotalhidden').attr('value', subtotald);
      $('.totalhidden').attr('value', subtotalc);
      $('.totalt').text("Rp. " + rupiah(subtotalc) + ",00");
      $('.subtotalprice').text("Rp. " + rupiah(subtotald) + ",00");
      $('.subtotalt').text("Rp. " + rupiah(subtotald) + ",00");

    });

    $('.totalhidden').attr('value', subtotalc);
    $('.subtotalhidden').attr('value', subtotald);

  });


</script>

</body>

</html>
