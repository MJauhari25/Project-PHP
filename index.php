<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.80.0">
        <title>Perpustakaan</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/carousel/">
        <link href="bootstrap.min.css" rel="stylesheet">
        

        <style>
            body {
            padding-top: 3rem;
            padding-bottom: 3rem;
            color: #5a5a5a;
            }

            .carousel {
            margin-bottom: 4rem;
            }

            .carousel-caption {
            bottom: 3rem;
            z-index: 10;
            }

            .carousel-item {
            height: 32rem;
            }


            .marketing .col-lg-4 {
            margin-bottom: 1.5rem;
            text-align: center;
            }
            .marketing h2 {
            font-weight: 400;
            }
            .marketing .col-lg-4 p {
            margin-right: .75rem;
            margin-left: .75rem;
            }

            .featurette-divider {
            margin: 5rem 0;
            }

            .featurette-heading {
            font-weight: 300;
            line-height: 1;
            letter-spacing: -.05rem;
            }

            @media (min-width: 40em) {
                .carousel-caption p {
                    margin-bottom: 10.25rem;
                    font-size: 1.25rem;
                    line-height: 1.4;
                }

                .featurette-heading {
                    font-size: 50px;
                }
            }

            @media (min-width: 62em) {
                .featurette-heading {
                    margin-top: 7rem;
                }
            }
            
            #marmut {
                display: none;
            }
            
            #lovestory {
                display: none;
            }

            #more {
                display: none;
            }

            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }
        </style>
        
    </head>
    <body>
    
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    
                <a class="navbar-brand" href="index.php">Home</a>
        
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarCollapse">
        
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="form_login.php">Pinjam Buku </a>
                        </li>
            
                        <li class="nav-item">
                            <a class="nav-link" href="pengembalian.php">Pengembalian Buku</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
  
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="perpustakaan.jpg" alt="perpus bung" width="100%" height="100%">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Perpustakaan Online</h1>
                            <p>Universitas Trunojoyo Madura</p>
                        </div>
                    </div>
                </div>
            </div>
  
        </div>
        <h2 align="center" >Buku Terpopuler</h2>
        <div class="container marketing">
            <div class="row">

                <div class="col-lg-4">
                    <img src="4.jpg" width="200px">
                    <h2>Marmut Merah Jambu</h2>
                    <p style="text-align:justify">
                        Marmut Merah Jambu ini berkisah tentang Dika yang menceritakan kisah cinta pertamanya ketika
                        masa SMA, dengan perempuan bernama Ina Mangunkusumo.
                        Selain itu dikisahkan pula saat Dika dan temannya Bertus yang
                        membentuk grup detektif untuk 
                        <span id="dots"></span><span id="marmut">memecahkan masalah teman-temannya,
                        juga persahabatannya dengan Cindy.
                        Suatu hari Dika bertemu dengan bapaknya Ina Mangunkusumo, 
                        cinta pertamanya di SMA. Dika menceritakan usahanya membuat 
                        grup detektif untuk menarik perhatian Ina. Grup itu dibuat bersama Bertus, 
                        temannya yang sama-sama anak terbuang di sekolah. Dika juga bercerita 
                        tentang persahabatannya dengan cewek unik bernama Cindy di SMA. 
                        Seiring dengan cerita Dika, dia sadar: 
                        ada kasus pada masa lalunya yang belum selesai hingga dia dewasa. 
                        Seiring dia berusaha memecahkannya, seiring itu pula dia bertanya, 
                        benarkah cinta pertama enggak ke mana-mana?
                        </span>
                    </p>
                    <button class="btn btn-secondary" type="button" id="marmut2" onclick="marmut2()">Baca Selengkapnya</button>

                    <script type="text/javascript">
                        var i=0
                        function marmut2() {
                            if(!i){
                                document.getElementById("marmut").style.
                                    display="inline";
                                document.getElementById("dots").style.
                                    display="none";
                                document.getElementById("marmut2").innerHTML="Lebih Sedikit";
                                i=1;    
                            }
                            else{
                                document.getElementById("marmut").style.
                                    display="none";
                                document.getElementById("dots").style.
                                    display="inline";
                                document.getElementById("marmut2").innerHTML="Baca Selengkapnya";
                                i=0;
                            }
                        }
                    </script>
                </div>

                <div class="col-lg-4">
                    <img src="3.jpg" width="215px">
                    <h2>Love Story</h2>
                    <p style="text-align:justify">
                        Novel klasik karya Erich Segal ini sudah lama sekali memikatku.
                        Pertama kali mendengar soal novel ini saat aku masih di bangku 
                        sekolah tapi walau sudah seringkali keluar masuk berbagai 
                        <span id="dots"></span><span id="lovestory">perpustakaan 
                        (karena dulu uang jajanku tak pernah cukup untuk membeli novel:D) 
                        tapi aku tak pernah berhasil mendapatkan novel ini. 
                        Aku jatuh cinta pada cerita klasik karya Erich Segal ini saat menonton 
                        film klasik berjudul sama dengan novel ini: Love Story. 
                        Film tersebut diperankan oleh Ryan O'Neal sebagai Oliver Baret IV. 
                        Entah apa yang membuatku terpaku pada kisah ini. 
                        Mungkin karena kalimat pembukanya yang amat menarik buatku. 
                        Atau mungkin juga karena kisah ini berakhir tragis sehingga 
                        membuat sel-sel kelabu-ku sulit menghapusnya dari kotak memoriku. 
                        Novel Love Story ini berkisah tentang cinta dua orang muda, 
                        Oliver Barrett IV dan Jennifer Cavilleri yang bertemu pertama 
                        kali di sebuah perpustakaan kampus. Meski latar belakang keduanya begitu 
                        berbeda tapi perasaan cinta mereka nyatanya mampu menghapus seluruh perbedaan itu. 
                        Melawan segala rintangan, mereka berhasil mengikat cinta mereka dalam sebuah pernikahan. 
                        Namun di saat semua rintangan sosial yang membelenggu jalinan cinta mereka selama 
                        ini telah berhasil mereka singkirkan, justru mereka harus menghadapi 
                        satu rintangan terbesar dan tersulit. 
                        Novel ini (seperti juga filmnya) diawali oleh kalimat yang walau mengandung 
                        pemberitahuan bahwa kisah ini berakhir tragis, tapi dirangkai dengan manisnya 
                        sehingga meski tragis tapi mengesankan keindahan dari kisah cinta itu sendiri. 
                        Apa yang dapat kita ceritakan mengenai gadis dua puluh lima tahun yang telah 
                        tiada? Bahwa ia cantik. Dan cemerlang. Bahwa ia mencintai Mozart dan Bach. Dan Beatles. Dan aku. 
                        Begitulah kutipan kalimat pembuka dari kisah cinta klasik ini. Adalah Oliver 
                        Barrett IV yang meski telah dua puluh lima tahun lamanya ditinggal mati istrinya, 
                        Jennifer Cavilleri mengenang kembali kisah cintanya. 
                        Oliver Barrett IV seorang mahasiswa hukum Harvard dari kalangan sosial kelas atas. 
                        Ayah Oliver yaitu Oliver Barrett III adalah seorang bankir terkemuka. 
                        Garis keturunan keluarga Barrett sebagai tokoh kelas ternyata membuat Oliver 
                        merasa terbebani. Ia merasa tertekan dalam bayang-bayang keluarga Barrett. 
                        Apapun prestasi yang ditorehkannya tak pernah bisa terasa istimewa karena ayahnya, 
                        Oliver Barrett III nyatanya memiliki prestasi yang amat gemilang. Selain prestasi 
                        akademik, Oliver Barrett III di masa mudanya merupakan atlet Olimpiade yang telah 
                        mengoleksi banyak penghargaan. Untuk itulah Oliver Barrett IV yang walaupun sangat 
                        cemerlang di lapangan hoki es namun ia tetap tak bisa berbangga diri menghadapi 
                        ayahnya yang pernah menjadi atlet olimpiade saat kuliah. Begitu pun dengan prestasi 
                        akademik. Betapapun Oliver berupaya keras tetap saja nama belakangnyalah yang akan 
                        lebih menarik bagi publik dibanding prestasi dan kerja kerasnya.
                        </span>
                    </p>
                    <button class="btn btn-secondary" type="button" id="lovestory2" onclick="lovestory2()">Baca Selengkapnya</button>

                    <script type="text/javascript">
                        var i=0
                        function lovestory2() {
                            if(!i){
                                document.getElementById("lovestory").style.
                                    display="inline";
                                document.getElementById("dots").style.
                                    display="none";
                                document.getElementById("lovestory2").innerHTML="Lebih Sedikit";
                                i=1;    
                            }
                            else{
                                document.getElementById("lovestory").style.
                                    display="none";
                                document.getElementById("dots").style.
                                    display="inline";
                                document.getElementById("lovestory2").innerHTML="Baca Selengkapnya";
                                i=0;
                            }
                        }
                    </script>
                </div>

                <div class="col-lg-4">
                    <img src="2.jpg" width="200px">
                    <h2>Janji</h2>
                    <p style="text-align:justify">
                        Ini kisah tentang JANJI.
                        Saat seseorang menunaikan janjinya dengan sungguh-sungguh.
                        Apapun harganya, meski menyakitkan, meski penih tantangan dan cobaan,
                        dia tetap berusaha menunaikan janjinya.
                        <span id="dots"></span><span id="more">
                        <br/>
                        <br/>
                        Review
                        <br/>
                        <br/>
                        Cerita diawali di sebuah sekolah agama. Tahun itu tahun politik. 
                        Seorang calon presiden berkunjung untuk “silaturahmi”. 
                        Dia disambut dengan baik oleh Buya (kiyai) pemilik dan juga para santri. 
                        Nggak lupa disuguhi pula teh dan kue.
                        Saat meminum teh, calon presiden dan stafnya keheranan. 
                        Yang mereka rasakan adalah asin. Hampir nggak bisa ditelan, tapi apa daya. 
                        Di hadapan calon presiden adalah kiyai. Banyak media yang meliput. 
                        Mau nggak mau harus menelannya dan mengatakan teh itu lezat.
                        Selesai acara, Buya memanggil Tiga Serangkai terbadung disekolah: 
                        Hasan, Baso dan Kahar. Sudah nggak terhitung kenakalannya. 
                        Dan Buya tahu bahwa mereka pelaku yang memasukkan garam ke teh calon presiden. 
                        Buya pun menghukum mereka. Bukan dengan cara dikeluarkan, karena dia nggak ingin menyerah seperti ayahnya. 
                        Ya, ayah Buya pernah mengeluarkan 1 murid sepanjang hidupnya.
                        Sebagai gantinya, Tiga Sekawan diminta untuk mencari sosok Bahar. Siapakah Bahar?
                        Bahar, puluhan tahun yang lalu merupakan murid dari ayah Buya. 
                        Pendiri sekolah agama tersebut. Sama dengan Tiga Serangkai, dia pun nakal. 
                        Anak yatim piatu, tidak tahu siapa orang tuanya, hanya diasuh neneknya hingga 
                        akhirnya dikirim ke sekolah agama. Kenakalannya memuncak hingga membangunkan orang 
                        sahur menggunakan meriam berbubuk mesiu. Celaka, sekolah agama itu terbakar. 
                        Seorang murid difabel ditemukan meninggal karena nggak bisa menyelamatkan diri.
                        </span>
                    </p>
                    <button class="btn btn-secondary" type="button" id="read" onclick="read()">Baca Selengkapnya</button>

                    <script type="text/javascript">
                        var i=0
                        function read() {
                            if(!i){
                                document.getElementById("more").style.
                                    display="inline";
                                document.getElementById("dots").style.
                                    display="none";
                                document.getElementById("read").innerHTML="Lebih Sedikit";
                                i=1;    
                            }
                            else{
                                document.getElementById("more").style.
                                    display="none";
                                document.getElementById("dots").style.
                                    display="inline";
                                document.getElementById("read").innerHTML="Baca Selengkapnya";
                                i=0;
                            }
                        }
                    </script>

                </div>
            </div>
        </div>

        <footer class="container py-5">
            <div class="row" align="center">
                
                <div class="col-2 col-md">
                    <h5>Peminjaman Buku</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="form_login.php">KLIK DISINI</a></li>
                    </ul>
                </div>

                <div class="col-2 col-md">
                    <h5>Pengembalian Buku</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="pengembalian.php">KLIK DISINI</a></li>
                    </ul>
                </div>

            </div>

            <div class="col-12 col-md" align="center" >
                <small class="d-block mb-3 text-muted">&copy; 2020-2021</small>
            </div>
        </footer>
  
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        
    </body>
</html>
