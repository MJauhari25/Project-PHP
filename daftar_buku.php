<html>
<head>
    <title>Daftar Buku</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css' 
	integrity='sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l' 
	crossorigin='anonymous'>
    <link rel='canonical' href='https://getbootstrap.com/docs/5.0/examples/album/'>

    <style>
    body{
        padding: 20px;
        letter-spacing:1px;
    }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
     @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      h2{
          padding-left: 95px;
      }
      form{padding-top:0px;
        padding-left:100px;}
    </style>
  </head>

<body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            
            <a class="navbar-brand" href="index.php">Home</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="form_login.php" >Pinjam Buku </a>
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
        <h2 style="text-align:center; padding:30px;">Daftar Buku </h2>
        <?php
        $no = 1;
            require "koneksi1.php";
            $ambildata = mysqli_query($koneksi, 'SELECT * FROM 02_tbl_buku ');
            while($tampil = mysqli_fetch_row($ambildata)){?>
        <main>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-5" style="padding:30px;">
        <h2 class="featurette-heading" ><?php echo$tampil[1];?></h2>
        <pre class="lead"> 
        Penulis  : <?php echo$tampil[3];?> <br>
        Penerbit : <?php echo$tampil[4];?> <br>
        Tersedia : <?php echo$tampil[2];?> Buku </pre>
      </div>
      <div class="col-md-4">
       <img src="<?php echo $no.".jpg" ; ?>" alt="gambar buku" width="250" height="300"> 
      </div>
    </div> 
    <form action="peminjaman.php"> 
      <div class="col-7">
        <button type="submit" class="btn btn-primary">Pinjam Buku</button>
    </div></form>
    <hr >
      </main>
        
      <?php
      $no++;
      }
      ?>
</body>
</html>