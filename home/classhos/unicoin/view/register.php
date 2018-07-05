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
  <form class="form" method="post" action="/register">
   <div class="form-Logo">
     <img src="https://unicoin-mining.com/wp-content/uploads/2018/04/Logo-Registration.png" alt="" height="60">
   </div>
   <div class="form-header">
     <h3>Member Registration</h3>

   </div>

   <div class="form-label-group">
     <input type="text" id="inputEmail" class="form-control" placeholder="Email address" name="email">
     <label for="inputEmail">Email address</label>
     <div class="text-danger"><?php if(isset($errors['email'])){echo $errors['email'];}?></div>
   </div>


   <div class="form-label-group">
     <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
     <label for="inputPassword">Password</label>
     <div class="text-danger"><?php if(isset($errors['password'])){echo $errors['password'];}?></div>
   </div>
   <div class="form-label-group">
     <input type="text" id="inputName" class="form-control" placeholder="Full Name" name="fullname">
     <label for="inputName" >Full Name</label>
     <div class="text-danger"><?php if(isset($errors['fullname'])){echo $errors['fullname'];}?></div>
   </div>
   <div class="form-label-group">
     <input type="text" id="inputPhone" class="form-control" placeholder="Phone Number" name="phone">
     <label for="inputPhone">Phone Number</label>
     <div class="text-danger"><?php if(isset($errors['phone'])){echo $errors['phone'];}?></div>
   </div>




   <div class="checkbox mb-3">
     <label>
       <input type="checkbox"  name="tos" id="tos" value="1"> <small>I Agree with Unicoin <a href="#" data-toggle="modal" data-target="#exampleModal">Term Of Service.</a> </small>
     </label>
      <div class="text-danger"><?php if(isset($errors['tos'])){echo $errors['tos'];}?></div>
   </div>
   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Term Of Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-sm-12">
            <h2 class="mcsa">SYARAT DAN KETENTUAN UMUM</h2>
            <p>Dengan mendaftar menjadi anggota di Platform Unicoin Mining, Anda menyatakan telah <strong>MEMBACA, MEMAHAMI, MENYETUJUI dan MEMATUHI</strong> Ketentuan dan Persyaratan di bawah.
               Anda disarankan membaca semua ketentuan dan persyaratan secara seksama sebelum menggunakan Platform Unicoin Mining atau segala bentuk layanan yang diberikan oleh Platform Unicoin Mining,
               dan bersama dengan ini Anda setuju dan mengikatkan diri terhadap seluruh kegiatan dalam SKU ini. <br>
               Kami mengoperasikan situs <a href="https://wwww.unicoin-mining.com">www.unicoin-mining.com</a>. Untuk menghubungi kami, silakan lihat halaman dukungan pelanggan kami.
            </p>

            <h3 class="mcsa"><span>1.</span> PELAYANAN KAMI</h3>
            <h4 class="mcsa"><span>1.1.</span> Perangkat Keras, Layanan, dan Kolam Penambangan</h4>
            <p>
                Perangkat keras pertambangan Bitcoin (<strong>"Hardware Pertambangan"</strong>) terdiri dari perangkat keras komputasi khusus, program komputer, interkoneksi jaringan dan fasilitas terkait yang menjalankan <strong>"Perangkat Lunak"</strong> penambangan Bitcoin.
                Kami menjual kepada Anda volume spesifik kekuatan pemrosesan (<strong>"Layanan"</strong>) dari Perangkat Keras Pertambangan yang sesuai dengan jumlah kekuatan pemrosesan (diukur dalam miliaran kalkulasi Bitcoin per detik atau <strong>"Hash Power"</strong>) yang ditentukan dalam setiap pesanan untuk kemungkinan, tetapi tidak dijamin peluang untuk menghasilkan.
                Kami menyewakan semua Perangkat Keras Tambang untuk menyediakan Layanan kepada Anda dan pengguna kami yang lain (<strong>"Pengguna"</strong>) dan yang juga kami gunakan sendiri untuk akun kami sendiri.
            </p>

            <h4 class="mcsa"><span>1.2.</span> Kontrak Penambangan</h4>
            <p>
                Anda memasuki Perjanjian ini untuk menawarkan kami hak untuk memberikan Layanan kepada Anda, dan kami menerima tawaran Anda dengan mengirimkan Anda konfirmasi pesanan (<strong>"Konfirmasi Pemesanan"</strong> ) dan kontrak (<strong>"Kontrak Penambangan"</strong>).
                Setelah memulai Layanan, kami akan mengalokasikan sebagian Perangkat Pertambangan yang setara dengan jumlah tertentu daya komputasi komputer penambangan Bitcoin (<strong>"Kapasitas Kontrak Penambangan"</strong>) kepada Anda untuk digunakan dalam penambangan Bitcoin. <br>
                Jenis-jenis Kontrak Pertambangan berpotensi tersedia setiap saat dijelaskan secara rinci di <a href="https://wwww.unicoin-mining.com">www.unicoin-mining.com</a>. Anda harus membeli Kontrak Penambangan agar berhak menggunakan Layanan untuk mendapatkan hak atas Produk (ditentukan di bawah).
            </p>

            <h4 class="mcsa"><span>1.3.</span> Penyewaan Perangkat Pertambangan</h4>
            <p>
                Kami menyewakan Perangkat Pertambangan untuk menyediakan Layanan kepada Anda dan Pengguna lainnya, termasuk pelanggan yang memiliki Kontrak Tambang yang berlaku dan yang berlaku serta juga untuk menggunakan diri kami sendiri untuk akun kami sendiri.
                Anda mengakui bahwa dengan menjalankan Perjanjian ini dan memesan Kontrak Penambangan, dan dengan masuk ke Situs kami dan mengakses akun Anda, Anda melakukan penambangan Bitcoin hanya atas nama Anda, dengan risiko Anda sendiri dan untuk keuntungan Anda sendiri.
                Dalam mengalokasikan kepada Anda Kapasitas Kontrak Penambangan, kami akan menggunakan upaya yang wajar secara komersial atas nama Anda.
            </p>

            <h4 class="mcsa"><span>1.4.</span> Produk Penambangan</h4>
            <p>
                Mining Hardware akan menambang Bitcoin dengan memanfaatkan Hashing Power.
                Bitcoin yang diproduksi oleh Hardware Tambang (<strong>“Produk”</strong>) akan dikumpulkan secara terpusat oleh kami,
                dan kami akan mendistribusikan sebagian Produk kepada Pengguna (<strong>“Bagian Pelanggan”</strong>) berdasarkan
                Kapasitas Kontrak Penambangan yang dialokasikan berdasarkan Kontrak Penambangan yang sah yang dipegang oleh Pengguna
                selama periode efektivitas Kontrak Penambangan Anda (<strong>"Jangka Waktu"</strong>), dengan distribusi seperti itu dikenakan Biaya Pemeliharaan.
            </p>

            <h4 class="mcsa"><span>1.5.</span> Distribusi Porsi Produk</h4>
            <p>
                Bagian Pelanggan akan didistribusikan ke Dompet Bitcoin Anda (ditentukan di bawah).
            </p>

            <h4 class="mcsa"><span>1.6.</span> Biaya Jasa</h4>
            <p>
                Biaya yang Anda bayar untuk Kontrak Penambangan, seperti yang dijelaskan di situs web.
            </p>

            <h4 class="mcsa"><span>1.7.</span> Biaya Pemeliharaan</h4>
            <p>
                Biaya yang kami kenakan setiap hari dari Bagian Pelanggan Anda untuk menutup biaya operasional Perangkat Keras Tambang,
                seperti yang dijelaskan di situs web. Biaya akan dikonversi ke jumlah Bitcoin berdasarkan harga penutupan Bitcoin hari sebelumnya
                dalam Rp dalam Indeks Harga Bitcoin yang dipublikasikan di Indodax.
                Unicoin Mining dapat mengubah biaya pemeliharaan kapan saja dengan pemberitahuan 7 hari kalender.
            </p>

            <h4 class="mcsa"><span>1.8.</span> Penghentian</h4>
            <p>
                Setiap Kapasitas Kontrak Penambangan tertentu akan dihentikan oleh kami (yaitu, tidak lagi efektif dan tidak akan dipulihkan) jika selama 14 hari berturut-turut,
                Bagian Pelanggan terkait dengan Kapasitas Kontrak Penambangan tersebut kurang dari biaya pemeliharaan untuk Kapasitas
                Kontrak Penambangan tersebut.
            </p>

            <h3 class="mcsa"><span>2.</span> AKUN ANDA</h3>
            <h4 class="mcsa"><span>2.1.</span> Kata Sandi</h4>
            <p>
                Sebagai bagian dari proses memilih dan membayar Layanan,
                Anda diminta untuk membuat akun di Situs (<strong>“Akun”</strong>) dan untuk memberikan email Anda (<strong>“Nama Pengguna”</strong>)
                dan kata sandi (<strong>“Kata Sandi”</strong>).
                Untuk melindungi Akun Anda dan untuk mencegah akses tidak sah ke dalamnya, jaga kerahasiaan Kata Sandi Anda.
                Anda bertanggung jawab atas segala aktivitas yang terjadi pada atau melalui Akun Anda.
                Jika Anda mengetahui atau mencurigai adanya penggunaan tidak sah dari Kata Sandi atau Akun Anda,
                harap segera ubah Kata Sandi Anda dan segera beri tahu kami. Jika kami yakin bahwa telah ada akses tidak sah ke Akun Anda,
                kami mencadangkan hak sepihak untuk menangguhkan atau menghentikan setiap dan semua Layanan, Akun Anda,
                di mana kami akan berusaha memberi tahu Anda.
            </p>

            <h4 class="mcsa"><span>2.2.</span> Dompet Bitcoin</h4>
            <p>
                <strong>“Bitcoin Wallet”</strong> Anda adalah alamat Bitcoin yang Anda berikan kepada kami dari waktu ke waktu untuk pembayaran kepada Anda dari Bagian Pelanggan Anda.
                Anda tidak memiliki kepemilikan atas Bitcoin yang dimiliki oleh kami. Kami tidak mengoperasikan Dompet Bitcoin Anda.
                Dengan memasukkan alamat Bitcoin Wallet Anda mengakui kepemilikannya.
                Anda sepenuhnya bertanggung jawab untuk menjaga dan mengendalikan Dompet Bitcoin Anda.
                Pastikan untuk menjaga kredensial akses ke Wallet Bitcoin Anda.
                Setiap Produk hanya seaman kredensial akses rahasia Anda.
                Jika Anda lupa atau salah menempatkan kredensial akses Anda ke Wallet Bitcoin Anda atau
                jika orang lain mendapatkan akses ke Wallet Bitcoin Anda, dengan atau tanpa otorisasi Anda,
                Anda dapat secara permanen kehilangan Bitcoin Anda, termasuk setiap Bagian Pelanggan yang kami transfer ke Wallet Bitcoin Anda.
                Agar jelas, kami tidak bertanggung jawab atas segala operasi atau kegagalan Dompet Bitcoin Anda.
            </p>

            <h3 class="mcsa"><span>3.</span> PENGGUNAAN SITUS</h3>
            <h4 class="mcsa"><span>3.1.</span> Penggunaan Situs</h4>
            <p>
                Penggunaan Anda atas Situs ini diatur oleh Perjanjian ini sebagaimana yang diposting di Situs dari waktu ke waktu.
                Harap luangkan waktu untuk membaca ini dan periksa secara teratur untuk perubahan,
                karena itu termasuk istilah-istilah penting yang berlaku bagi Anda.
            </p>

            <h3 class="mcsa"><span>4.</span> PENGGUNAAN LAYANAN KAMI</h3>
            <h4 class="mcsa"><span>4.1.</span> Persyaratan Akses</h4>
            <p>
                Sebelum Anda dapat menggunakan Layanan kami, Anda harus memiliki Layanan yang valid,
                kami harus menyetujui Layanan tersebut, dan Anda harus memiliki Akun yang valid.
            </p>

            <h4 class="mcsa"><span>4.2.</span> Identifikasi pelanggan</h4>
            <p>
                Karena menyediakan Layanan dapat mengharuskan kami mengambil risiko keuangan atas nama Anda,
                kapan pun Anda memesan Layanan, kami dapat menyelidiki riwayat pribadi Anda di catatan publik atau riwayat kredit atau skor Anda.
                Untuk mendaftar sebagai pelanggan, serta saat dilayani, kami mungkin meminta Anda untuk memberikan kami identifikasi atau
                dokumentasi lain untuk membantu kami mencegah penipuan atau pencucian uang. Ini mungkin termasuk identifikasi fotografi dan bukti alamat terbaru.
                Kami juga dapat melakukan identitas, penipuan, dan pemeriksaan kredit kami sendiri. Anda mengizinkan kami untuk membagikan informasi kredit
                tentang Anda dengan agen pelaporan kredit dan perusahaan afiliasi kami yang lain.
            </p>

            <h4 class="mcsa"><span>4.3.</span> Due Diligence Anda</h4>
            <p>
                Dalam menggunakan Layanan kami, Anda mengakui dan menjamin bahwa Anda telah melakukan uji tuntas yang memadai untuk memahami
                risiko yang terkait dengan penambangan Bitcoin. Anda mengakui bahwa karena kesulitan dalam menyewa Perangkat Keras Pertambangan,
                mungkin ada penundaan yang mempengaruhi tingkat di mana kami dapat membawa Hardware Pertambangan online.
            </p>

            <h4 class="mcsa"><span>4.4.</span> Perangkat Keras / Perangkat Lunak Yang Diperlukan</h4>
            <p>
                Kecuali ditentukan lain, Anda bertanggung jawab untuk menyediakan perangkat keras dan perangkat lunak yang diperlukan untuk mengakses Layanan kami
                dan untuk memastikan perangkat keras dan perangkat lunak tersebut mampu mengakses Situs dan menggunakan Layanan kami,
                dan Anda akan menanggung semua biaya yang terkait dengan perolehan dan pemeliharaan perangkat keras dan perangkat lunak.
                Kami tidak menjamin fungsionalitas Layanan kami atau Situs pada perangkat keras atau perangkat lunak apa pun.
                Kami tidak akan bertanggung jawab atau berkewajiban atas segala kesalahan atau kegagalan dari kerusakan perangkat keras atau perangkat lunak Anda.
            </p>

            <h3 class="mcsa"><span>5.</span> HARGA JASA</h3>
            <h4 class="mcsa"><span>5.1.</span> Harga</h4>
            <p>
                Harga untuk Layanan akan seperti dikutip di Situs dari waktu ke waktu.
                Kami berhati-hati untuk memastikan bahwa harga Layanan benar pada saat informasi yang relevan dimasukkan ke sistem.
                Namun, jika kami menemukan kesalahan dalam harga Layanan yang Anda pesan, pesanan Anda akan direvisi.
            </p>

            <h4 class="mcsa"><span>5.2.</span> Perubahan Harga</h4>
            <p>
                Harga untuk Layanan kami dapat berubah dari waktu ke waktu.
            </p>

            <h4 class="mcsa"><span>5.3.</span> Kartu Kredit</h4>
            <p>
                Pembelian Kartu Kredit mungkin memerlukan bukti kepemilikan metode pembayaran dan permintaan identifikasi.
                Dalam hal pembelian dengan Kartu Kredit kami memiliki hak untuk menunda penarikan dari akun Anda
                (untuk menarik dana yang telah ditambang dari saldo akun Anda) untuk jangka waktu hingga 30 hari kalender sebagai
                tindakan pengamanan terhadap peraturan terkait anti-penipuan dan kebijakan.
            </p>

            <h3 class="mcsa"><span>6.</span> PEMBATASAN PENGGUNAAN</h3>
            <h4 class="mcsa"><span>6.1.</span> Batasan Penggunaan</h4>
            <p>
                Anda tidak akan menggunakan Layanan kami atau konten atau informasi yang disampaikan melalui Layanan kami untuk melakukan bisnis atau
                aktivitas apa pun atau meminta kinerja dari aktivitas apa pun untuk tujuan ilegal, curang, tidak sah, atau tidak pantas.
                Anda akan mematuhi semua undang-undang, undang-undang, tata cara, prinsip hukum umum, kode, peraturan, undang-undang,
                atau perjanjian yang berlaku dan semua perintah, keputusan, instruksi, persyaratan, arahan, atau permintaan yang berlaku dari pengadilan,
                regulator atau otoritas pemerintah lainnya. *) Sehubungan dengan penggunaan Anda atas Layanan kami.
            </p>

            <h4 class="mcsa"><span>6.2.</span> Janji Anda</h4>
            <p>
                Anda setuju bahwa Anda tidak akan berusaha untuk: <br>
                (a) Mengakses Perangkat Lunak apa pun atau bagian dari Layanan kami yang penggunaannya belum diotorisasi; atau <br>
                (b) mengakses atau menggunakan atau mencoba mengakses atau menggunakan akun Pengguna lain; atau <br>
                (c) mengganggu dengan cara apa pun dengan penyediaan Layanan atau Perangkat Lunak kami, keamanan Layanan Perangkat Lunak kami, atau Pengguna lain, atau penyalahgunaan Layanan atau Perangkat Lunak kami.
            </p>

            <h4 class="mcsa"><span>6.3.</span> Tindakan Kami</h4>
            <p>
                Jika kami memiliki alasan untuk meyakini bahwa Anda atau entitas apa pun di bawah kepemilikan atau kontrol bersama Anda telah terlibat dalam aktivitas yang
                dilarang atau tidak sah yang dijelaskan dalam Perjanjian ini, telah melanggar kewajiban Anda berdasarkan Perjanjian ini,
                telah menyalahgunakan rahasia dagang kami atau Informasi Rahasia kami , hak cipta, paten atau hak kekayaan intelektual lainnya,
                maka tanpa permintaan atau pemberitahuan sebelumnya dan tanpa membatasi salah satu solusi lainnya yang tersedia, kami dapat: <br>
                a. mengakhiri, menangguhkan, atau membatasi akses Anda ke atau penggunaan Akun Anda atau Layanan kami;<br>
                b. mengakhiri atau menangguhkan Perjanjian ini atau Layanan apa pun;<br>
                c. menahan distribusi dari setiap Bagian Pelanggan kepada Anda;<br>
                d. memberi tahu penegak hukum, pihak yang berwenang, mempengaruhi pihak ketiga dan pihak lain yang kami anggap tepat;<br>
                e. menolak memberikan Layanan kami kepada Anda di masa mendatang; <br>
                f. mengambil tindakan hukum terhadapmu.
            </p>

            <h3 class="mcsa"><span>7.</span> TEKNOLOGI</h3>
            <h4 class="mcsa"><span>7.1.</span> Definisi</h4>
            <p>
                <strong>"Teknologi"</strong> berarti program komputer Pemasok kami atau kami, karya sastra, karya audiovisual,
                semua karya asli lainnya dari ekspresi, metode, apparati dan proses yang kami publikasikan, distribusikan, gunakan atau
                eksploit untuk memfasilitasi penggunaan Anda atas Layanan kami, dan termasuk tanpa batasan Perangkat Lunak kami,
                desain antarmuka pengguna, dan setiap turunan, peningkatan, penyempurnaan atau perluasannya yang dikembangkan atau disediakan oleh kami atau
                Pemasok kami dan digunakan dalam penyediaan Layanan kami.
            </p>

            <h4 class="mcsa"><span>7.2.</span> Kepemilikan</h4>
            <p>
                Perjanjian ini tidak mentransfer kepada Anda kepemilikan atau hak kepemilikan apa pun dalam Teknologi atau pekerjaan apa pun atau
                bagian apa pun darinya, dan semua hak, kepemilikan, dan kepentingan dalam dan pada Teknologi akan tetap ada hanya dengan kami atau Pemasok kami.
                Anda tidak membeli judul untuk Teknologi apa pun. Jika Anda disetujui untuk menggunakan Layanan kami, Anda diizinkan untuk menggunakan Teknologi
                hanya sebagai diaktifkan dan dihadiri melalui Akun Anda di Situs dan hanya selama Masa Berlaku. Izin itu adalah untuk tujuan tunggal yang
                memungkinkan Anda menggunakan Layanan kami dengan cara yang diizinkan oleh Perjanjian ini. Hak-hak Anda berdasarkan Perjanjian ini tidak dapat
                dipindahtangankan kepada orang lain tanpa izin tertulis sebelumnya dari kami.
            </p>

            <h4 class="mcsa"><span>7.3.</span> Batasan Penggunaan</h4>
            <p>
                Anda tidak akan menyalin Teknologi atau menggunakan Teknologi secara independen selain sebagaimana yang ditetapkan di atas,
                dan kami tidak memberi Anda lisensi, baik tersurat maupun tersirat, dalam hak cipta apa pun, paten atau hak kekayaan intelektual lainnya
                yang terkandung dalam Teknologi.
            </p>

            <h3 class="mcsa"><span>8.</span> BAGAIMANA KITA MENGGUNAKAN INFORMASI PRIBADI ANDA</h3>
            <h4 class="mcsa"><span>8.1.</span> Informasi Pribadi</h4>
            <p>
                Ketika mempertimbangkan penawaran Anda untuk memesan Layanan, demi keamanan kami sendiri, kami berhak untuk menggunakan informasi
                apa pun yang Anda berikan untuk meneliti bonafiditas, kredit dan sejarah hukum Anda, dan informasi lain tentang Anda di sumber yang
                tersedia untuk umum. Anda memberi kami izin penuh untuk meneliti Anda dan latar belakang Anda sebelum menerima tawaran Anda.
            </p>

            <h3 class="mcsa"><span>9.</span> PERUBAHAN PERJANJIAN INI</h3>
            <h4 class="mcsa"><span>9.1.</span> Hak Kami untuk Mengubah Perjanjian ini</h4>
            <p>
                Kami dapat mengubah Perjanjian ini, atau memodifikasi ketentuan penggunaan untuk Layanan kami, atau
                Ketentuan (semua perubahan dan modifikasi tersebut <strong>“Perubahan”</strong>), dari waktu ke waktu,
                termasuk namun tidak terbatas pada keadaan berikut: <br>
                a. perubahan dalam cara kami menerima pembayaran dari Anda;<br>
                b. perubahan dalam cara kami berinteraksi atau berkomunikasi dengan Anda;<br>
                c. perubahan dalam Hukum atau peraturan pemerintah yang berlaku;<br>
                d. terjadinya suatu kejadian di Luar Kendali Kami;<br>
                e. dan perubahan dalam Hukum yang berlaku untuk Layanan.
            </p>

            <h4 class="mcsa"><span>9.2.</span> Pemberitahuan Perubahan</h4>
            <p>
                Kami akan memberi tahu Anda tentang Perubahan apa pun dalam salah satu cara berikut, atas kebijakan kami sendiri: <br>
                (a) mengirim email; atau <br>
                (b) memberikan pemberitahuan ketika Anda masuk ke Akun Anda atau menggunakan Layanan kami. <br><br>
                Pemberitahuan Perubahan apa pun akan dianggap telah diberikan dan diterima oleh Anda pada hari yang sama setelah pemberitahuan tersebut diberikan atau disediakan untuk Anda.
            </p>

            <h4 class="mcsa"><span>9.3.</span> Persetujuan Anda</h4>
            <p>
                Penggunaan Anda yang berkelanjutan atas Layanan kami atau pembelian Anda atas Layanan tambahan setelah tanggal efektif dari
                setiap Perubahan akan merupakan penerimaan Anda terhadap Perubahan tersebut. Sebagai bagian dari Perubahan apa pun,
                Anda mungkin diminta untuk menyetujui Perjanjian yang direvisi untuk terus menggunakan Layanan kami.
            </p>

            <h4 class="mcsa"><span>9.4.</span> Aplikasi Perubahan</h4>
            <p>
                Kecuali ditentukan lain oleh Perjanjian ini atau Hukum yang berlaku, Perubahan hanya akan berlaku setelah tanggal efektif.
            </p>

            <h4 class="mcsa"><span>9.5.</span> Perubahan yang Dibuat untuk Alasan Hukum</h4>
            <p>
                Perubahan yang dibuat karena alasan hukum atau perubahan peraturan pemerintah,
                termasuk namun tidak terbatas pada Perubahan untuk mematuhi Hukum yang relevan, akan segera berlaku.
                Kami akan menghubungi Anda sesegera mungkin untuk memberi tahu Anda tentang Perubahan tersebut.
            </p>

            <h3 class="mcsa"><span>10.</span> PENGHENTIAN</h3>
            <h4 class="mcsa"><span>10.1.</span> Hak Anda untuk Berhenti</h4>
            <p>
                Anda dapat mengakhiri Perjanjian ini dan Layanan apa pun dengan memberikan pemberitahuan penghentian kepada kami.
                Anda tidak berhak untuk menerima pengembalian uang dari Layanan Anda.
            </p>

            <h4 class="mcsa"><span>10.2.</span> Konsekuensi Pengakhiran</h4>
            <p>
                Jika Anda menghentikan Layanan apa pun, atau mengakhiri atau menolak untuk menyetujui ketentuan Perjanjian ini,
                kami akan berhenti menyediakan Layanan apa pun dan Anda tidak lagi berkewajiban untuk membayar biaya yang dikenakan secara rutin.
                Jika Anda mengakhiri Layanan berdasarkan Bagian ini, Biaya Layanan Anda tidak akan dikembalikan.
                Jika Anda mengakhiri Perjanjian ini dan aktivitas salah Anda sendiri atau pelanggaran Perjanjian ini memberikan hak atau berpotensi
                memberikan kami ganti rugi atau Anda memiliki kewajiban yang belum dibayar atau kewajiban potensial kepada kami pada saat pengakhiran,
                di mana acara kami diizinkan untuk mempertahankan jumlah yang terhutang kepada Anda sebagai set off terhadap kerusakan dan kewajiban lainnya.
            </p>

            <h3 class="mcsa"><span>11.</span> TANGGUNG JAWAB KITA UNTUK ANDA TERBATAS PADA BIAYA LAYANAN</h3>
            <h4 class="mcsa"><span>11.1.</span> Pengecualian</h4>
            <p>
                Tidak ada ketentuan dalam Perjanjian ini yang membatasi atau mengecualikan kewajiban kami untuk: <br>
                a. kematian atau cedera pribadi; atau <br>
                b. penipuan.
            </p>

            <h4 class="mcsa"><span>11.2.</span> Supplier Perusahaan</h4>
            <p>
                Kami menggunakan Situs untuk menjual kembali kekuatan hashing yang disediakan oleh Supplier kami.
                Untuk menghindari keraguan, Pemasok tetap bertanggung jawab kepada pengguna akhir dari kekuatan hashing.
            </p>

            <h4 class="mcsa"><span>11.3.</span> Layanan Anda Berisiko, dan Tidak Ada Jaminan Keuntungan</h4>
            <p>
                Kami menggunakan Situs untuk menjual kembali kekuatan hashing yang disediakan oleh Supplier kami.
                Untuk menghindari keraguan, Pemasok tetap bertanggung jawab kepada pengguna akhir dari kekuatan hashing.
            </p>

            <p>
                Dalam menggunakan layanan kami, anda mengakui dan menjamin bahwa anda mengerti risiko yang terkait dengan bitcoin. <br>
                Ketentuan kami dari hash-rate dalam kontrak pertambangan anda, kontrak pertambangan anda mungkin tidak menghasilkan karena berbagai faktor,
                termasuk namun tidak terbatas pada peningkatan kesulitan dalam mendapatkan bitcoin, peningkatan dalam biaya listrik,
                penurunan dalam harga bitcoin, atau penurunan atas hadiah block.
                Anda juga mengakui dan menyatakan dan menjamin bahwa anda telah membuat keputusan independen untuk membeli dan menggunakan
                layanan dari kami berdasarkan informasi yang tersedia bagi anda.
            </p>

            <h3 class="mcsa">WAIVER OF RIGHTS</h3>
            <p>
                Penting bagaimana anda membaca clause arbitrase ini. Anda dibutuhkan untuk mengatur setiap klaim atau sengketa melalui arbitrase atau
                jika anda akan mengajukan klaim dalam pengadilan. Hak-hak lain yang akan anda miliki jika anda pergi ke pengadilan, seperti hak untuk
                menerima pendapatan arbitrator, mungkin tidak tersedia dalam arbitrase atau mungkin lebih terbatas. Anda harus mengkonsultasikan kepala
                hukum untuk menentukan apa pun, arbitrase ini sesuai bagi anda.
            </p>
            <p>
                Anda mengerti dan menyetujui bahwa setiap sengketa akan diselesaikan oleh arbitrase yang mengikat.
                Arbitrase mengganti hak atas pergi ke pengadilan, termasuk hak untuk memiliki juri, untuk bergerak dalam penemuan
                (kecuali sebagaimana ditetapkan dalam aturan arbitrase), dan untuk berpartisipasi dalam tindakan kelas atau proses serupa.
                Dalam arbitrase, sengketa diselesaikan oleh arbitrator, bukan hukum atau juri. Prosedur arbitrasi sederhana dan lebih terbatas dari
                prosedur pengadilan. Anda juga setuju setiap arbitrase akan terbatas pada sengketan antara anda dan perusahaan tidak akan menjadi bagian
                dari proses kelas kelas atau arbitrasi.
            </p>
            <p>
                Tidak ada tindakan kelas. Bahkan jika hukum yang berlaku, atau arbitrator lainnya menyediakan tindakan kelas atau arah kelas,
                prosedur resolusi sangkal termasuk di sini berlaku dan anda melepaskan hak untuk menekan sengketa pada dasar klasida <strong>- yang ada - </strong>
                untuk mendapatkan gabungan dengan klaim apapun lainnya orang atau entitas, atau diterima klaim dalam kapasitas perwakilan atas nama
                orang lain dalam hukum, arbitrase atau proses lainnya.
            </p>
        </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
   <?php if(isset($errors['fromapi'])){?>
   <div class="alert alert-warning" role="alert">
<?php echo $errors['fromapi'];?>
</div>
<?php }?>
   <button class="btn btn-lg btn-primary btn-block" type="submit" name="submitRegister" id="btnRegister" disabled>Register</button>
  <p class="text-center">
    <small>OR</small>
  </p>
   <a href="/login" class="btn btn-block btn-success">Already Have Account?</a>
   <div class="form-errors">

   </div>
   <p class="mt-5 mb-3 text-muted text-center">Unicoin Mining &copy; 2017-2018</p>
 </form>
  <!-- End Form Login -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script type="text/javascript">
    var checkornot=$("#tos").prop("checked");
    $("#tos").change(function(){
      var tos=$(this).prop('checked');
      if(tos==true){
        $('#btnRegister').removeAttr('disabled');
      }else{
          $('#btnRegister').attr('disabled','disabled');
      }

    });
  </script>
</body>
</html>
